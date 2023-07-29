--TEST--
Interface of the class mysqli_driver
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--bpc-include-file ext/mysqli/tests/table.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	require('connect.inc');
	require('table.inc');

	$driver = new mysqli_driver();

	printf("Parent class:\n");
	var_dump(get_parent_class($driver));

	printf("\nMethods:\n");
	$methods = get_class_methods($driver);
	$expected_methods = array();

	if (!$IS_MYSQLND && (isset($methods['embedded_server_start']))) {
		/* libmysql only - needs extra compile flag, no way to check properly in the
		PHP user land if its compiled in or not */
		$expected_methods = array_merge($expected_methods, array(
				'embedded_server_start'         => true,
				'embedded_server_end'           => true,
		));
	}

	foreach ($methods as $k => $method) {
		if (isset($expected_methods[$method])) {
			unset($expected_methods[$method]);
			unset($methods[$k]);
		}
	}
	if (!empty($expected_methods)) {
		printf("Dumping list of missing methods.\n");
		var_dump($expected_methods);
	}
	if (!empty($methods)) {
		printf("Dumping list of unexpected methods.\n");
		var_dump($methods);
	}
	if (empty($expected_methods) && empty($methods))
		printf("ok\n");

	printf("\nClass variables:\n");
	$variables = array_keys(get_class_vars(get_class($driver)));
	sort($variables);
	foreach ($variables as $k => $var)
		printf("%s\n", $var);

	printf("\nObject variables:\n");
	$variables = array_keys(get_object_vars($driver));
	foreach ($variables as $k => $var)
		printf("%s\n", $var);

	printf("\nMagic, magic properties:\n");

	if (mysqli_get_client_info() !== $driver->client_info) {
	    printf("expect client_info equal\n");
	}
	printf("driver->client_info = '%s'\n", $driver->client_info);

	if (mysqli_get_client_version() !== $driver->client_version) {
	    printf("expect client_version equal\n");
	}
	printf("driver->client_version = '%s'\n", $driver->client_version);

	if ($driver->driver_version <= 0) {
	    printf("expect driver_version > 0\n");
	}
	printf("driver->driver_version = '%s'\n", $driver->driver_version);

	if (!in_array($driver->report_mode,
				array(
					MYSQLI_REPORT_ALL,
					MYSQLI_REPORT_STRICT,
					MYSQLI_REPORT_ERROR,
					MYSQLI_REPORT_INDEX,
					MYSQLI_REPORT_OFF
				)
	)) {
	    printf("expect report_mode in array\n");
	}

	printf("driver->report_mode = '%s'\n", $driver->report_mode);
	$driver->report_mode = MYSQLI_REPORT_STRICT;
	if ($driver->report_mode !== MYSQLI_REPORT_STRICT) {
	    printf("expect report_mode === MYSQLI_REPORT_STRICT");
	}

	if (!is_bool(!$driver->embedded)) {
	    printf("expected embedded is bool\n");
	}
	printf("driver->embedded = '%s'\n", $driver->embedded);

	printf("driver->reconnect = '%s'\n", $driver->reconnect);

	printf("\nAccess to undefined properties:\n");
	printf("driver->unknown = '%s'\n", @$driver->unknown);

	print "done!";
?>
--EXPECTF--
Parent class:
bool(false)

Methods:
ok

Class variables:
client_info
client_version
driver_version
embedded
reconnect
report_mode

Object variables:
client_info
client_version
driver_version
embedded
reconnect
report_mode

Magic, magic properties:
driver->client_info = '%s'
driver->client_version = '%d'
driver->driver_version = '%d'
driver->report_mode = '%d'
driver->embedded = ''
driver->reconnect = ''

Access to undefined properties:
driver->unknown = ''
done!
