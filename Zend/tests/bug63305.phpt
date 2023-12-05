--TEST--
Bug #63305 (zend_mm_heap corrupted with traits)
--FILE--
<?php

spl_autoload_register(function ($class) {
    switch ($class) {
    case "Attachment":
        class Attachment extends File {
        }
        break;
    case "File":
        class File {
            use TDatabaseObject {
                TDatabaseObject::__construct as private databaseObjectConstruct;
            }
            public function __construct() {
            }
        }
        break;
    case "TDatabaseObject":
        trait TDatabaseObject {
            public function __construct() {
            }
        }
    return TRUE;
    }
});

new Attachment();
echo "okey";
?>
--EXPECT--
okey
