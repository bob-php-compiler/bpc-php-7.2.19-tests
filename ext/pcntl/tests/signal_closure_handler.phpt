--TEST--
Closures as a signal handler
--FILE--
<?php
pcntl_signal(SIGTERM, function ($signo, $siginfo) { echo "Signal handler called!\n"; });

echo "Start!\n";
posix_kill(posix_getpid(), SIGTERM);
pcntl_signal_dispatch();
$i = 0; // dummy
echo "Done!\n";

?>
--EXPECTF--
Start!
Signal handler called!
Done!
