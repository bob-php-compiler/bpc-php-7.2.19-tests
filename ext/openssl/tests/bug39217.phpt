--TEST--
Bug #39217 (Large serial number return -1)
--FILE--
<?php
$certs = array('bug39217cert2.txt', 'bug39217cert1.txt');
foreach($certs as $cert) {
    $res = openssl_x509_parse(file_get_contents($cert));
    print_r($res['serialNumber']);
    echo "\n";
}
?>
--EXPECTF--
163040343498260435477161879008842183802
15
