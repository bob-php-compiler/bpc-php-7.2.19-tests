--TEST--
Verifies the correct conversion of objects to arrays
--FILE--
<?php
class foo
{
	private $private = 'private';
	protected $protected = 'protected';
	public $public = 'public';
}
var_export((array) new foo);
?>
--EXPECTF--
array (
  ' foo private' => 'private',
  ' * protected' => 'protected',
  'public' => 'public',
)
