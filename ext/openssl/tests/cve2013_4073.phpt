--TEST--
CVE 2013-4073: Null-byte certificate handling
--FILE--
<?php
$cert = file_get_contents('cve2013_4073.pem');
$info = openssl_x509_parse($cert);
var_export($info['extensions']);
?>
--EXPECTF--
array (
  'basicConstraints' => 'CA:FALSE',
  'subjectKeyIdentifier' => '88:5A:55:C0:52:FF:61:CD:52:A3:35:0F:EA:5A:9C:24:38:22:F7:5C',
  'keyUsage' => 'Digital Signature, Non Repudiation, Key Encipherment',
  'subjectAltName' => 'DNS:altnull.python.org example.com, email:null@python.org user@example.org, URI:http://null.python.org http://example.org, IP Address:192.0.2.1, IP Address:2001:DB8:0:0:0:0:0:1%A',
)
