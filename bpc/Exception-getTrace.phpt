--TEST--
Exception: getTrace() should return a trace copy
--FILE--
<?php

class PHPUnit_Framework_Exception extends RuntimeException
{
    protected $serializableTrace;

    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->serializableTrace = $this->getTrace();
        foreach ($this->serializableTrace as $i => $call) {
            unset($this->serializableTrace[$i]['args']);
        }
    }

    public function __toString()
    {
        return $this->getTraceAsString();
    }
}

function test($msg)
{
    $e = new PHPUnit_Framework_Exception($msg);
    echo $e->__toString();
}

test("getTrace() should return a trace copy");

?>
--EXPECTF--
#0 %s(%d): test('getTrace() shou...')
#1 {main}
