<?php

class CertificateGenerator
{
    const CONFIG = 'openssl.cnf';

    /** @var resource */
    private $ca;

    /** @var resource */
    private $caKey;

    /** @var resource|null */
    private $lastCert;

    /** @var resource|null */
    private $lastKey;

    public function __construct()
    {
        if (!extension_loaded('openssl')) {
            throw new RuntimeException(
                'openssl extension must be loaded to generate certificates'
            );
        }
        $this->generateCa();
    }

    /**
     * @param int|null $keyLength
     * @return resource
     */
    private static function generateKey($keyLength = null)
    {
        if (null === $keyLength) {
            $keyLength = 2048;
        }

        return openssl_pkey_new(array(
            'private_key_bits' => $keyLength,
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
            'encrypt_key' => false,
        ));
    }

    private function generateCa()
    {
        $this->caKey = self::generateKey();
        $dn = array(
            'countryName' => 'GB',
            'stateOrProvinceName' => 'Berkshire',
            'localityName' => 'Newbury',
            'organizationName' => 'Example Certificate Authority',
            'commonName' => 'CA for PHP Tests'
        );

        $this->ca = openssl_csr_sign(
            openssl_csr_new(
                $dn,
                $this->caKey,
                array(
                    'x509_extensions' => 'v3_ca',
                    'config' => self::CONFIG,
                )
            ),
            null,
            $this->caKey,
            2,
            array(
                'config' => self::CONFIG,
            )
        );
    }

    public function getCaCert()
    {
        $output = '';
        openssl_x509_export($this->ca, $output);

        return $output;
    }

    public function saveCaCert($file)
    {
        openssl_x509_export_to_file($this->ca, $file);
    }

    private function generateCertAndKey(
        $commonNameForCert, $file, $keyLength = null, $subjectAltName = null
    ) {
        $dn = array(
            'countryName' => 'BY',
            'stateOrProvinceName' => 'Minsk',
            'localityName' => 'Minsk',
            'organizationName' => 'Example Org',
        );
        if ($commonNameForCert !== null) {
            $dn['commonName'] = $commonNameForCert;
        }

        $subjectAltNameConfig =
            $subjectAltName ? "subjectAltName = $subjectAltName" : "";
        $configCode = <<<CONFIG
[ req ]
distinguished_name = req_distinguished_name
default_md = sha256
default_bits = 1024

[ req_distinguished_name ]

[ v3_req ]
basicConstraints = CA:FALSE
keyUsage = nonRepudiation, digitalSignature, keyEncipherment
$subjectAltNameConfig

[ usr_cert ]
basicConstraints = CA:FALSE
$subjectAltNameConfig
CONFIG;
        $configFile = $file . '.cnf';
        file_put_contents($configFile, $configCode);

        $config = array(
            'config' => $configFile,
            'req_extensions' => 'v3_req',
            'x509_extensions' => 'usr_cert',
        );

        $this->lastKey = self::generateKey($keyLength);
        $csr = openssl_csr_new($dn, $this->lastKey, $config);
        $this->lastCert = openssl_csr_sign(
            $csr,
            $this->ca,
            $this->caKey,
            /* days */ 2,
            $config,
        );

        return $config;
    }

    public function saveNewCertAsFileWithKey(
        $commonNameForCert, $file, $keyLength = null, $subjectAltName = null
    ) {
        $config = $this->generateCertAndKey($commonNameForCert, $file, $keyLength, $subjectAltName);

        $certText = '';
        openssl_x509_export($this->lastCert, $certText);

        $keyText = '';
        openssl_pkey_export($this->lastKey, $keyText, null, $config);

        file_put_contents($file, $certText . PHP_EOL . $keyText);

        unlink($config['config']);
    }

    public function saveNewCertAndKey(
        $commonNameForCert, $certFile, $keyFile, $keyLength = null, $subjectAltName = null
    ) {
        $config = $this->generateCertAndKey($commonNameForCert, $certFile, $keyLength, $subjectAltName);

        openssl_x509_export_to_file($this->lastCert, $certFile);
        openssl_pkey_export_to_file($this->lastKey, $keyFile, null, $config);

        unlink($config['config']);
    }

    public function getCertDigest($algo)
    {
        return openssl_x509_fingerprint($this->lastCert, $algo);
    }
}
