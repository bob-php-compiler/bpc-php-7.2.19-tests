--TEST--
pcntl_signal()
--FILE--
<?php
pcntl_signal(SIGTERM, function($signo, $siginfo){
	echo "signal dispatched\n";
});
posix_kill(posix_getpid(), SIGTERM);
pcntl_signal_dispatch();

pcntl_signal(SIGUSR1, function($signo, $siginfo){
	printf("got signal from %s\n", isset($siginfo['pid']) ? $siginfo['pid'] : 'nobody');
});
posix_kill(posix_getpid(), SIGUSR1);
pcntl_signal_dispatch();

var_dump(pcntl_signal(SIGALRM, SIG_IGN));
var_dump(pcntl_signal(-1, -1));
var_dump(pcntl_signal(-1, function(){}));
var_dump(pcntl_signal(SIGALRM, "not callable"));


/* test freeing queue in RSHUTDOWN */
posix_kill(posix_getpid(), SIGTERM);
echo "ok\n";
?>
--EXPECTF--
signal dispatched
got signal from %r\d+|nobody%r
bool(true)

Warning: pcntl_signal(): Invalid signal %s
bool(false)

Warning: pcntl_signal(): Invalid signal %s
bool(false)

Warning: pcntl_signal(): not callable is not a callable function name error in %s
bool(false)
ok
