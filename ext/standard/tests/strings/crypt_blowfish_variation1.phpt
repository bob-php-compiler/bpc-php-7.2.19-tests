--TEST--
Test Blowfish crypt() with invalid rounds
--SKIPIF--
<?php
if (!function_exists('crypt') || !defined("CRYPT_BLOWFISH")) {
    die("SKIP crypt()-blowfish is not available");
}
?>
--FILE--
<?php

$salts = array('32' => '$2a$32$CCCCCCCCCCCCCCCCCCCCCC$',
               '33' => '$2a$33$CCCCCCCCCCCCCCCCCCCCCC$',
               '34' => '$2a$34$CCCCCCCCCCCCCCCCCCCCCC$',
               '35' => '$2a$35$CCCCCCCCCCCCCCCCCCCCCC$',
               '36' => '$2a$36$CCCCCCCCCCCCCCCCCCCCCC$',
               '37' => '$2a$37$CCCCCCCCCCCCCCCCCCCCCC$',
               '38' => '$2a$38$CCCCCCCCCCCCCCCCCCCCCC$',);

foreach($salts as $i=>$salt) {
  $crypt = crypt('U*U', $salt);
  if ($crypt === '*0' || $crypt === '*1') {
    echo "$i. OK\n";
  } else {
    echo "$i. Not OK\n";
  }
}

?>
--EXPECTF--
Warning: crypt(): salt '$2a$32$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
32. OK

Warning: crypt(): salt '$2a$33$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
33. OK

Warning: crypt(): salt '$2a$34$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
34. OK

Warning: crypt(): salt '$2a$35$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
35. OK

Warning: crypt(): salt '$2a$36$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
36. OK

Warning: crypt(): salt '$2a$37$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
37. OK

Warning: crypt(): salt '$2a$38$CCCCCCCCCCCCCCCCCCCCCC$' has the wrong format in %s on line %d
38. OK
