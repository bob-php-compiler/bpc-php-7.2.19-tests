--TEST--
clearstatcache() optional parameters
--SKIPIF--
<?php
if (strncmp(PHP_OS, "WIN", 3) === 0) {
    die('skip not for Windows');
}
?>
--FILE--
<?php

@rmdir("clearstatcache_001_dir1");
@rmdir("clearstatcache_001_dir2");
@unlink("clearstatcache_001_link1");
@unlink("clearstatcache_001_link2");

mkdir("clearstatcache_001_dir1");
mkdir("clearstatcache_001_dir2");
symlink("clearstatcache_001_link1", "clearstatcache_001_link2");
symlink("clearstatcache_001_dir1", "clearstatcache_001_link1");

var_dump(realpath("clearstatcache_001_link2"));
passthru("rm -f " . escapeshellarg("clearstatcache_001_link1"));
var_dump(realpath("clearstatcache_001_link2"));
clearstatcache(false);
var_dump(realpath("clearstatcache_001_link2"));
clearstatcache(true, "/foo/bar");
var_dump(realpath("clearstatcache_001_link2"));
clearstatcache(true, "clearstatcache_001_link2");
clearstatcache(true, "clearstatcache_001_link1");
var_dump(realpath("clearstatcache_001_link2"));

@rmdir("clearstatcache_001_dir1");
@rmdir("clearstatcache_001_dir2");
@unlink("clearstatcache_001_link1");
@unlink("clearstatcache_001_link2");
?>
--EXPECTF--
string(%d) "%s_dir1"
bool(false)
bool(false)
bool(false)
bool(false)
