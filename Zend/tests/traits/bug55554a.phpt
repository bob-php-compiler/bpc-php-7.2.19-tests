--TEST--
Bug #55137 (Legacy constructor not registered for class)
--FILE--
<?php

// All constructors should be registered as such

trait TConstructor {
    public function constructor() {
        echo "ctor executed\n";
    }
}

class NewConstructor {
	use TConstructor {
	    constructor as __construct;
	}
}

class LegacyConstructor {
    use TConstructor {
        constructor as LegacyConstructor;
    }
}

echo "New constructor: ";
$o = new NewConstructor;

echo "Legacy constructor: ";
$o = new LegacyConstructor;
--EXPECTF--
Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; LegacyConstructor has a deprecated constructor in %s on line %d
New constructor: ctor executed
Legacy constructor: ctor executed
