--TEST--
pcntl_signal() context of realtime signal
--SKIPIF--
skip currently not support realtime signal
--FILE--
<?php

pcntl_signal(SIGRTMIN, function ($signo, $siginfo) {
    printf("got realtime signal from %s, ruid:%s\n", isset($siginfo['pid']) ? $siginfo['pid'] : '', isset($siginfo['uid']) ? $siginfo['uid'] : '');
});
posix_kill(posix_getpid(), SIGRTMIN);
pcntl_signal_dispatch();

echo "ok\n";
?>
--EXPECTF--
%rgot realtime signal from \d+, ruid:\d+%r
ok
