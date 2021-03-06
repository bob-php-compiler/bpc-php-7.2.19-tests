--TEST--
PDO::ATTR_SERVER_INFO
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
$db = MySQLPDOTest::factory();
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();

	if (('' != $db->errorCode()) && ('00000' != $db->errorCode())) {
	    die('expect no error');
	}

	$info = $db->getAttribute(PDO::ATTR_SERVER_INFO);
	if ('' == $info)
		printf("[001] Server info must not be empty\n");

	// Read-only?
	if (false !== $db->setAttribute(PDO::ATTR_SERVER_INFO, 'new uptime: 0s'))
		printf("[002] Wonderful, I can change the client version!\n");

	$new_info = $db->getAttribute(PDO::ATTR_SERVER_INFO);
	if (soundex($new_info) != soundex($info))
		printf("[003] Did we change it from '%s' to '%s'?\n", $info, $info);

	// lets hope we always run this in the same second as we did run the server info request...
	if (!$stmt = $db->query("SHOW STATUS LIKE '%uptime%'"))
		printf("[004] Cannot run SHOW STATUS, [%s]\n", $db->errorCode());
	else {
		if (!$row = $stmt->fetch(PDO::FETCH_NUM))
			printf("[005] Unable to fetch uptime, [%s]\n", $db->errorCode());
		else
			$uptime = $row[1];
		$stmt->closeCursor();
	}

	if (!preg_match('/Uptime/i', $info))
		printf("[006] Can't find uptime in server info '%s'\n", $info);

	if (isset($uptime) && !preg_match(sprintf('/Uptime: %d/i', $uptime), $info))
		printf("[007] SHOW STATUS and server info have reported a different uptime, please check. Server info: '%s', SHOW STATUS: '%s'\n", $info, $uptime);

	print "done!";
--EXPECTF--
done!
