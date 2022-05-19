--TEST--
Bug #60104 (Segmentation Fault in pdo_sqlite when using sqliteCreateFunction())
--FILE--
<?php
function setUp()
{
    $handler = new PDO( "sqlite::memory:" );
    $handler->sqliteCreateFunction( "md5", "md5", 1 );
    unset( $handler );
}

setUp();
setUp();
echo "done";
?>
--EXPECTF--
done
