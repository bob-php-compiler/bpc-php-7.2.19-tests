--TEST--
custom save handler, multiple session_start()s, complex data structure test.
--INI--
session.use_cookies=0
session.use_strict_mode=0
session.cache_limiter=
session.name=PHPSESSID
session.serialize_handler=php
--FILE--
<?php
error_reporting(E_ALL);
ob_start();

class handler {
	public $data = 'baz|O:3:"foo":2:{s:3:"bar";s:2:"ok";s:3:"yes";i:1;}arr|a:1:{i:3;O:3:"foo":2:{s:3:"bar";s:2:"ok";s:3:"yes";i:1;}}';
    function open($save_path, $session_name)
    {
        print "OPEN: $session_name\n";
        return true;
    }
    function close()
    {
		print "CLOSE\n";
        return true;
    }
    function read($key)
    {
        print "READ: $key\n";
        return $GLOBALS["hnd"]->data;
    }

    function write($key, $val)
    {
        print "WRITE: $key, $val\n";
		$GLOBALS["hnd"]->data = $val;
        return true;
    }

    function destroy($key)
    {
        print "DESTROY: $key\n";
        return true;
    }

    function gc() { return true; }
}

$hnd = new handler;

class foo {
    public $bar = "ok";
    function method() { $this->yes++; }
}

session_set_save_handler(array($hnd, "open"), array($hnd, "close"), array($hnd, "read"), array($hnd, "write"), array($hnd, "destroy"), array($hnd, "gc"));

session_id("abtest");
session_start();
session_decode($hnd->data);

$_SESSION["baz"]->method();
$_SESSION["arr"][3]->method();

var_dump($_SESSION["baz"]);
var_dump($_SESSION["arr"]);

session_write_close();

session_set_save_handler(array($hnd, "open"), array($hnd, "close"), array($hnd, "read"), array($hnd, "write"), array($hnd, "destroy"), array($hnd, "gc"));
session_start();
$_SESSION["baz"]->method();
$_SESSION["arr"][3]->method();


$_SESSION["c"] = 123;
var_dump($_SESSION["baz"]);
var_dump($_SESSION["arr"]);
var_dump($_SESSION["c"]);

session_write_close();

session_set_save_handler(array($hnd, "open"), array($hnd, "close"), array($hnd, "read"), array($hnd, "write"), array($hnd, "destroy"), array($hnd, "gc"));
session_start();
var_dump($_SESSION["baz"]);
var_dump($_SESSION["arr"]);
var_dump($_SESSION["c"]);

session_destroy();
?>
--EXPECTF--
OPEN: PHPSESSID
READ: abtest
object(foo)#%d (2) {
  ["bar"]=>
  string(2) "ok"
  ["yes"]=>
  int(2)
}
array(1) {
  [3]=>
  object(foo)#%d (2) {
    ["bar"]=>
    string(2) "ok"
    ["yes"]=>
    int(2)
  }
}
WRITE: abtest, baz|O:3:"foo":2:{s:3:"bar";s:2:"ok";s:3:"yes";i:2;}arr|a:1:{i:3;O:3:"foo":2:{s:3:"bar";s:2:"ok";s:3:"yes";i:2;}}
CLOSE
OPEN: PHPSESSID
READ: abtest
object(foo)#%d (2) {
  ["bar"]=>
  string(2) "ok"
  ["yes"]=>
  int(3)
}
array(1) {
  [3]=>
  object(foo)#%d (2) {
    ["bar"]=>
    string(2) "ok"
    ["yes"]=>
    int(3)
  }
}
int(123)
WRITE: abtest, baz|O:3:"foo":2:{s:3:"bar";s:2:"ok";s:3:"yes";i:3;}arr|a:1:{i:3;O:3:"foo":2:{s:3:"bar";s:2:"ok";s:3:"yes";i:3;}}c|i:123;
CLOSE
OPEN: PHPSESSID
READ: abtest
object(foo)#%d (2) {
  ["bar"]=>
  string(2) "ok"
  ["yes"]=>
  int(3)
}
array(1) {
  [3]=>
  object(foo)#%d (2) {
    ["bar"]=>
    string(2) "ok"
    ["yes"]=>
    int(3)
  }
}
int(123)
DESTROY: abtest
CLOSE
