--TEST--
Try finally (call sequence test)
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
function foo () {
   try {
      echo "1";
      try {
        echo "2";
        throw new Exception("ex");
      } finally {
        echo "3";
      }
   } finally {
      echo "4";
   }
}

foo();
?>
--EXPECTF--
1234
Fatal error: Uncaught Exception: ex %s
Stack trace:
#0 %stry_finally_003.php(%d): foo()
#1 {main}
  thrown in %stry_finally_003.php on line %d
