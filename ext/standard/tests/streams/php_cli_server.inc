<?php
define ("PHP_CLI_SERVER_HOSTNAME", "localhost");
define ("PHP_CLI_SERVER_PORT", 8964);
define ("PHP_CLI_SERVER_ADDRESS", PHP_CLI_SERVER_HOSTNAME.":".PHP_CLI_SERVER_PORT);

function php_cli_server_start($code = 'echo "Hello world";', $router = 'index.php', $cmd_args = null) {
	$doc_root = getcwd();

	if ($code) {
		file_put_contents($doc_root . '/' . ($router ?: 'index.php'), '<?php ' . $code . ' ?>');
	}

	$descriptorspec = array(
		0 => STDIN,
		1 => STDOUT,
		2 => STDERR,
	);

	$cmd = "exec php -t {$doc_root} -n {$cmd_args} -S " . PHP_CLI_SERVER_ADDRESS;
	if (!is_null($router)) {
		$cmd .= " {$router}";
	}
	$cmd .= " 2>/dev/null";

	$handle = proc_open($cmd, $descriptorspec, $pipes, $doc_root);

    // note: even when server prints 'Listening on localhost:8964...Press Ctrl-C to quit.'
    //       it might not be listening yet...need to wait until fsockopen() call returns
    $error = "Unable to connect to server\n";
    for ($i=0; $i < 60; $i++) {
        usleep(50000); // 50ms per try
        $status = proc_get_status($handle);
        $fp = @fsockopen(PHP_CLI_SERVER_HOSTNAME, PHP_CLI_SERVER_PORT);
        // Failure, the server is no longer running
        if (!($status && $status['running'])) {
            $error = "Server is not running\n";
            break;
        }
        // Success, Connected to servers
        if ($fp) {
            $error = '';
            break;
        }
    }

    if ($fp) {
        fclose($fp);
    }

    if ($error) {
        echo $error;
        proc_terminate($handle);
        exit(1);
    }

    register_shutdown_function('proc_terminate', $handle);
    register_shutdown_function('unlink', $router);

    return $handle;
}

function php_cli_server_stop($handle) {
    $success = FALSE;
    if ($handle) {
        proc_terminate($handle);
        /* Wait for server to shutdown */
        for ($i = 0; $i < 60; $i++) {
            $status = proc_get_status($handle);
            if (!($status && $status['running'])) {
                $success = TRUE;
                break;
            }
            usleep(50000);
        }
    }
    return $success;
}
?>
