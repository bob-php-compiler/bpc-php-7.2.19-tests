--TEST--
The same rules are applied for properties that are defined in the class hierarchy. Thus, if the properties are compatible, a notice is issued, if not a fatal error occures.
--FILE--
<?php
error_reporting(E_ALL | E_STRICT);

class Base {
  private $hello;
}

trait THello1 {
  private $hello;
}

echo "PRE-CLASS-GUARD\n";
class Notice extends Base {
    use THello1;
    private $hello;
}
echo "POST-CLASS-GUARD\n";

?>
--EXPECTF--
PRE-CLASS-GUARD
POST-CLASS-GUARD
