--TEST--
Bug #61000 (Exceeding max nesting level doesn't delete numerical vars)
--INI--
max_input_nesting_level=2
--POST--
1[a][]=foo&1[a][b][c]=bar
--GET--
a[a][]=foo&a[a][b][c]=bar
--FILE--
<?php
print_r($_GET);
print_r($_POST);
--EXPECTF--
Warning: Input variable nesting level exceeded 2. To increase the limit change max_input_nesting_level in bpc.ini. in Unknown on line 0

Warning: Input variable nesting level exceeded 2. To increase the limit change max_input_nesting_level in bpc.ini. in Unknown on line 0
Array
(
)
Array
(
)
