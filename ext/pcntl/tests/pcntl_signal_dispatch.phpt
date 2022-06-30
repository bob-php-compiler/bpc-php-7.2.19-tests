--TEST--
pcnt_signal_dispatch()
--FILE--
<?php

pcntl_signal(SIGTERM, function ($signo, $siginfo) { echo "Signal handler called!\n"; });

echo "Start!\n";
posix_kill(posix_getpid(), SIGTERM);
$i = 0; // dummy
pcntl_signal_dispatch();
echo "Done!\n";

?>
--EXPECTF--
Start!
Signal handler called!
Done!
