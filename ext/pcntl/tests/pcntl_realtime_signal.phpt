--TEST--
pcntl_signal() context of realtime signal
--SKIPIF--
skip currently not support realtime signal
--FILE--
<?php

pcntl_signal(SIGRTMIN, function ($signo, $siginfo) {
    printf("got realtime signal from %s, ruid:%s\n", $siginfo['pid'] ?? '', $siginfo['uid'] ?? '');
});
posix_kill(posix_getpid(), SIGRTMIN);
pcntl_signal_dispatch();

echo "ok\n";
?>
--EXPECTF--
%rgot realtime signal from \d+, ruid:\d+%r
ok
