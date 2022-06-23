<?php

$serverUri = "https://127.0.0.1:64321/";
$clientCtx = stream_context_create(array('ssl' => array(
    'cafile' => 'bug65538_001-ca.pem.tmp',
    'verify_peer_name' => false,
)));

phpt_wait();
$html = file_get_contents($serverUri, false, $clientCtx);

var_dump($html);
