--TEST--
Bug #63741 (Crash when autoloading from spl)
--FILE--
<?php
if (isset($autoloading))
{
    class ClassToLoad
    {
        static function func ()
        {
            print "OK!\n";
        }
    }
    return;
}
else
{
    class autoloader
    {
        static function autoload($classname)
        {
            print "autoloading...\n";
            $autoloading = true;
            include __FILE__;
        }
    }

    spl_autoload_register(array("autoloader", "autoload"));

    function start()
    {
        ClassToLoad::func();
    }

    start();
}
?>
--EXPECT--
autoloading...
OK!
