--TEST--
openssl_pkcs12_read() tests
--FILE--
<?php

$cert = file_get_contents("public.crt");
$priv = file_get_contents("private.crt");
$extracert = file_get_contents("cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => $extracert));

var_dump(openssl_pkcs12_read("", $certs, ""));
var_dump(openssl_pkcs12_read($p12, $certs, ""));
var_dump(openssl_pkcs12_read($p12, $certs, $pass));
var_dump($certs);
?>
--EXPECT--
bool(false)
bool(false)
bool(true)
array(3) {
  ["cert"]=>
  string(1111) "-----BEGIN CERTIFICATE-----
MIIDBjCCAe4CCQCS/had1ITjDjANBgkqhkiG9w0BAQsFADBFMQswCQYDVQQGEwJQ
TDETMBEGA1UECAwKU29tZS1TdGF0ZTEhMB8GA1UECgwYSW50ZXJuZXQgV2lkZ2l0
cyBQdHkgTHRkMB4XDTE1MDYxMDEyMTI0N1oXDTE2MDYwOTEyMTI0N1owRTELMAkG
A1UEBhMCUEwxEzARBgNVBAgMClNvbWUtU3RhdGUxITAfBgNVBAoMGEludGVybmV0
IFdpZGdpdHMgUHR5IEx0ZDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEB
ANHezJRoGMbtDzSwK7WPjj6+Yhj7R9LJyR7TjvxH01ZVA+sHUrcXs3tDXukIQcH1
rsnf4WbBjGbQT3jlLicsll6gMOh8oaCdi6863cvw1XRUmlezpAs2V5MZOEgqkWvU
8OKHqjt8o9F07T3n1zYeeBjiUsr6UWqX4+Znwa25UF0Fid1R4BxmX7GpDoq0Weuv
WQafbM9qs3Qrd7Ea3Lqz9pGkWx1BmOv49XorAhQadxCT32GbUdhmhxgrDgyW5M7m
ECz4DngZLhZvLC8Juf/Q6R5SjhN5/f/TBq//QpKaCjBAamhZDJtWMv80IDKJO7Ir
fQMnPEq4vCnHdKvG7N6ZjsECAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAHGAiEN0o
tOV2tbK0Qm/mWlyuRKtxqnP3y/2Q5SFMmRpkOS54hFf9YBNgT7nWK3Z5fPKor17t
rGthXPSZU8hxY5iHFhELurp23qGmJftdcYL2mF7IyoGOiZ1Q6Vt9LnRTDtgrHh/f
ZziI+gaPpmAfEAh48xQrlviHqaR9F63d0UN1jz9cF1kIj1H21PAGC0tmAIxxb4ee
hjipL+JLH0iRoBQE83cF2BOQCfRzRekotnDYon6v7mTjYu7kwl8paRIEMNrBckby
IL3CJOZFesaFO7suK7oP7r6BIATpVcg2m0V25mVMVFRm4F/JOvSkB381Pte/Ccuv
dxPWHER13ptIVg==
-----END CERTIFICATE-----
"
  ["pkey"]=>
  string(1704) "-----BEGIN PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDR3syUaBjG7Q80
sCu1j44+vmIY+0fSycke0478R9NWVQPrB1K3F7N7Q17pCEHB9a7J3+FmwYxm0E94
5S4nLJZeoDDofKGgnYuvOt3L8NV0VJpXs6QLNleTGThIKpFr1PDih6o7fKPRdO09
59c2HngY4lLK+lFql+PmZ8GtuVBdBYndUeAcZl+xqQ6KtFnrr1kGn2zParN0K3ex
Gty6s/aRpFsdQZjr+PV6KwIUGncQk99hm1HYZocYKw4MluTO5hAs+A54GS4Wbywv
Cbn/0OkeUo4Tef3/0wav/0KSmgowQGpoWQybVjL/NCAyiTuyK30DJzxKuLwpx3Sr
xuzemY7BAgMBAAECggEAbdYX5ZexV/LbYWzOA2CVRnsnJgHkrgnTS2HXVGtWzLkD
qu6TOKWb1mgE9RrQJ22oQ5j7A2dKTsi4vwHarL/mFrHpxtLrV/78CwJY8BIj9JUO
jdXDheaz4JVzYjl9EB1K0JPF4QozRjzWqO58MKOzoPpZ8EcfcxT5Pi2RLJVu3K9F
DR3cUNa9h66j84sDJARzvxMfgR6VysHVmgN1aR78Mye0dFVYeL7wCXFJmJXa2AYw
TQR5FcFRa0h8t40EOJdXcoWu63TUd7rvDgebHXJeKax8W2pGREHZfeEw5wWpFQn8
j+znHSISe7eM9wmW6ombab7zcJsCwXDYgtY/6OqRAQKBgQD6EXKfXThfnrN/od/Y
jF8mfKdJ67HOc8WVPlB9vHDsduFyX914ahJHeCVQPkV1a2nx+bv3PviWbrKreEKl
b7aAAAkbxy/FakcxE9b0wC5JsSW9vByXQiRn0iDqDNl9iwzX/LLW6wE7SruCPp+z
mzCHArp6mvJmRFooR8e3IXiA0QKBgQDW2T9xXFBpumSOBRpn7Zc9SGiQ9qZTSKKb
boVSDd2cod8O1aow3gnQNid/cNnt54Yh5Z3KlYfFWkmrV+0/yQZ/SThZ1uHAaZVy
OnWKVELykpYLnKGlHoQpOYTCfdYan5xOfkw55em3TTeQq5tETYWMdhS/9VVxeLKZ
k2xr+CYq8QKBgQCzHpJK4nwByexq7KkpNIrnR3yQb1oiNjz9xO/k0HjWd+TOhypd
GSVUuhOIIcKg87qkj6x60kk/f7VNK0wZsiY4E05y7j8imhi6Z6qeD5ZYRKJzAG4+
TitDjnjzDRcwXMxrXV9AoH52WPZsuays+ulMm8C1F42vgSBPH/NHEpt9MQKBgAIw
nLDvG/K376Zy7t34Uf5R6p7vpKpcpyumaL15XrTmAXwJOX7eBIOWybhG0jHWlktq
J72U4JlmXjHc55Iq3mIVwPlJc2uep+NOLTyHt1b5n4Xmxs8EDJzO9Ud2OOR0lAdI
ykYczdEMfHCBD0gW8jGIUpXSTlilvkxKcGR5VwpBAoGBANdAWL3lw+/P43x6Rxth
GJN8QzWe5vRFJYS5mkeaa/6jrFrsvk176WudopropFGtRc/44E1IDOZULJM80Xgb
JTeUFyb+ZjYLrHUp1yir+oZIm5DBZDZjYclanrPPHg9YwVxcHtunPeCFy3iC+W+F
MK80GEnRQIkB7uZVk+r0HusK
-----END PRIVATE KEY-----
"
  ["extracerts"]=>
  array(1) {
    [0]=>
    string(1249) "-----BEGIN CERTIFICATE-----
MIIDbDCCAtWgAwIBAgIJAK7FVsxyN1CiMA0GCSqGSIb3DQEBBQUAMIGBMQswCQYD
VQQGEwJCUjEaMBgGA1UECBMRUmlvIEdyYW5kZSBkbyBTdWwxFTATBgNVBAcTDFBv
cnRvIEFsZWdyZTEeMBwGA1UEAxMVSGVucmlxdWUgZG8gTi4gQW5nZWxvMR8wHQYJ
KoZIhvcNAQkBFhBobmFuZ2Vsb0BwaHAubmV0MB4XDTA4MDYzMDEwMjg0M1oXDTA4
MDczMDEwMjg0M1owgYExCzAJBgNVBAYTAkJSMRowGAYDVQQIExFSaW8gR3JhbmRl
IGRvIFN1bDEVMBMGA1UEBxMMUG9ydG8gQWxlZ3JlMR4wHAYDVQQDExVIZW5yaXF1
ZSBkbyBOLiBBbmdlbG8xHzAdBgkqhkiG9w0BCQEWEGhuYW5nZWxvQHBocC5uZXQw
gZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMteno+QK1ulX4/WDAVBYfoTPRTz
e4SZLwgael4jwWTytj+8c5nNllrFELD6WjJzfjaoIMhCF4w4I2bkWR6/PTqrvnv+
iiiItHfKvJgYqIobUhkiKmWa2wL3mgqvNRIqTrTC4jWZuCkxQ/ksqL9O/F6zk+aR
S1d+KbPaqCR5Rw+lAgMBAAGjgekwgeYwHQYDVR0OBBYEFNt+QHK9XDWF7CkpgRLo
Ymhqtz99MIG2BgNVHSMEga4wgauAFNt+QHK9XDWF7CkpgRLoYmhqtz99oYGHpIGE
MIGBMQswCQYDVQQGEwJCUjEaMBgGA1UECBMRUmlvIEdyYW5kZSBkbyBTdWwxFTAT
BgNVBAcTDFBvcnRvIEFsZWdyZTEeMBwGA1UEAxMVSGVucmlxdWUgZG8gTi4gQW5n
ZWxvMR8wHQYJKoZIhvcNAQkBFhBobmFuZ2Vsb0BwaHAubmV0ggkArsVWzHI3UKIw
DAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCP1GUnStC0TBqngr3Kx+zS
UW8KutKO0ORc5R8aV/x9LlaJrzPyQJgiPpu5hXogLSKRIHxQS3X2+Y0VvIpW72LW
PVKPhYlNtO3oKnfoJGKin0eEhXRZMjfEW/kznY+ZZmNifV2r8s+KhNAqI4PbClvn
4vh8xF/9+eVEj+hM+0OflA==
-----END CERTIFICATE-----
"
  }
}
