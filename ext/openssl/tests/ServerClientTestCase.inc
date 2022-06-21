<?php

/**
使用方法:

<?php
    define('__SELF_BINARY__', './TEST-BINARY'); // @see spawnWorkerProcess

    include 'ServerClientTestCase-constants.inc'; // function signatures before global code
    include 'ServerClientTestCase.inc';

    if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
        ServerClientTestCase::getInstance(true)->runWorker();
    } else {
        ServerClientTestCase::getInstance()->run('master.inc', 'worker.inc');
    }
?>

运行逻辑:

    1. 运行 ./TEST-BINARY, 由于没有 $argv[1], 所以 run('master.inc', 'worker.inc')
    2. run() 调用 spawnWorkerProcess() 运行 ./TEST-BINARY WORKER_ARGV_VALUE, 并传递 worker.inc
    3. ./TEST-BINARY WORKER_ARGV_VALUE 得到 ./TEST-BINARY 传递的 worker.inc, include运行
    4. run() 接着 include master.inc 运行
    5. 到此 worker.inc 和 master.inc 都运行起来了,两者如果需要通信,可以使用 phpt_notify(), 如果需要同步,可以使用 phpt_wait()
*/

function phpt_notify($worker = WORKER_DEFAULT_NAME)
{
    ServerClientTestCase::getInstance()->notify($worker);
}

function phpt_wait($worker = WORKER_DEFAULT_NAME, $timeout = null)
{
    ServerClientTestCase::getInstance()->wait($worker, $timeout);
}

/**
 * This is a singleton to let the wait/notify functions work
 * I know it's horrible, but it's a means to an end
 */
class ServerClientTestCase
{
    private $isWorker = false;

    private $workerHandle = array();

    private $workerStdIn = array();

    private $workerStdOut = array();

    private static $instance;

    public static function getInstance($isWorker = false)
    {
        if (!isset(self::$instance)) {
            self::$instance = new self($isWorker);
        }

        return self::$instance;
    }

    public function __construct($isWorker = false)
    {
        if (!isset(self::$instance)) {
            self::$instance = $this;
        }

        $this->isWorker = $isWorker;
    }

    private function spawnWorkerProcess($worker, $inc)
    {
        $this->workerHandle[$worker] = proc_open(
            __SELF_BINARY__ . " " . WORKER_ARGV_VALUE,
            array(
                array('pipe', 'r'),
                array('pipe', 'w'),
                STDERR
            ),
            $pipes
        );
        $this->workerStdIn[$worker] = $pipes[0];
        $this->workerStdOut[$worker] = $pipes[1];

        fwrite($this->workerStdIn[$worker], $inc . "\n");
    }

    private function cleanupWorkerProcess($worker)
    {
        fclose($this->workerStdIn[$worker]);
        fclose($this->workerStdOut[$worker]);
        proc_close($this->workerHandle[$worker]);
    }

    public function runWorker()
    {
        $inc = trim(fgets(STDIN));
        include $inc;
    }

    public function run($masterInc, $workerInc)
    {
        if (!is_array($workerInc)) {
            $workerInc = array(WORKER_DEFAULT_NAME => $workerInc);
        }
        foreach ($workerInc as $worker => $inc) {
            $this->spawnWorkerProcess($worker, $inc);
        }
        include $masterInc;
        foreach ($workerInc as $worker => $inc) {
            $this->cleanupWorkerProcess($worker);
        }
    }

    public function wait($worker, $timeout = null)
    {
        $handle = $this->isWorker ? STDIN : $this->workerStdOut[$worker];
        if ($timeout === null) {
            fgets($handle);
            return true;
        }

        stream_set_blocking($handle, false);
        $read = array($handle);
        $result = stream_select($read, $write, $except, $timeout);
        if (!$result) {
            return false;
        }

        fgets($handle);
        stream_set_blocking($handle, true);
        return true;
    }

    public function notify($worker)
    {
        $fp = $this->isWorker ? STDOUT : $this->workerStdIn[$worker];
        fwrite($fp, "\n");
        fflush($fp);
    }
}
