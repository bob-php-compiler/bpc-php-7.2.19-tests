--TEST--
phpt EXTENSIONS directive with nonexistent shared module
--SKIPIF--
skip no ini extension
--EXTENSIONS--
nonexistentsharedmodule
--FILE--
<?php
--EXPECTF--
PHP Warning:  PHP Startup: Unable to load dynamic library '%snonexistentsharedmodule.%s' %A
