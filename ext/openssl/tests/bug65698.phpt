--TEST--
Bug #65689 (GeneralizedTime format parsing)
--FILE--
<?php
$crt = 'bug65698.crt';
$info = openssl_x509_parse("file://$crt");
var_dump($info["validFrom"], $info["validFrom_time_t"], $info["validTo"], $info["validTo_time_t"]);
?>
Done
--EXPECTF--
string(15) "20090303125318Z"
int(12360%d)
string(15) "20240303125318Z"
int(17094%d)
Done
