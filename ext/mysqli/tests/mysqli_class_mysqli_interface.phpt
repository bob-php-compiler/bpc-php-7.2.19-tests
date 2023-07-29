--TEST--
Interface of the class mysqli
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	require('connect.inc');

	$mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	printf("Parent class:\n");
	var_dump(get_parent_class($mysqli));

	printf("\nMethods:\n");
	$methods = get_class_methods($mysqli);
	$expected_methods = array(
		'__construct'			=> true,
		'autocommit'			=> true,
		'begin_transaction'		=> true,
		'change_user'			=> true,
		'character_set_name'	=> true,
		'close'					=> true,
		'commit'				=> true,
		'connect'				=> true,
		'dump_debug_info'		=> true,
		'escape_string'			=> true,
		'get_charset'			=> true,
		'get_client_info'		=> true,
		'get_server_info'		=> true,
		'get_warnings'			=> true,
		'init'					=> true,
		'kill'					=> true,
		'more_results'			=> true,
		'multi_query'			=> true,
		'next_result'			=> true,
		'options'				=> true,
		'ping'					=> true,
		'prepare'				=> true,
		'query'					=> true,
		'real_connect'			=> true,
		'real_escape_string'	=> true,
		'real_query'			=> true,
		'refresh'				=> true,
		'rollback'				=> true,
		'release_savepoint'		=> true,
		'savepoint'				=> true,
		'select_db'				=> true,
		'set_charset'			=> true,
		'set_opt'				=> true,
		'ssl_set'				=> true,
		'stat'					=> true,
		'stmt_init'				=> true,
		'store_result'			=> true,
		'thread_safe'			=> true,
		'use_result'			=> true,
	);

	if ($IS_MYSQLND) {
		// mysqlnd only
		/* $expected_methods['get_client_stats']	= true; */
		$expected_methods['get_connection_stats']	= true;
		$expected_methods['reap_async_query']	= true;
		$expected_methods['poll'] = true;
	}

	/* we should add ruled when to expect them */
	if (function_exists('mysqli_debug'))
		$expected_methods['debug']		= true;
	if (function_exists('ssl_set'))
		$expected_methods['ssl_set']		= true;

	foreach ($methods as $k => $method) {
		if (isset($expected_methods[$method])) {
			unset($methods[$k]);
			unset($expected_methods[$method]);
		}
	}
	if (!empty($methods)) {
		printf("Dumping list of unexpected methods.\n");
		var_dump($methods);
	}
	if (!empty($expected_methods)) {
		printf("Dumping list of missing methods.\n");
		var_dump($expected_methods);
	}
	if (empty($methods) && empty($expected_methods))
		printf("ok\n");

	printf("\nClass variables:\n");

	$expected_class_variables = $expected_object_variables = array(
		"affected_rows" 	=> true,
		"client_info"		=> true,
		"client_version"	=> true,
		"connect_errno"		=> true,
		"connect_error"		=> true,
		"errno"				=> true,
		"error"				=> true,
		"field_count"		=> true,
		"host_info"			=> true,
		"info"				=> true,
		"insert_id"			=> true,
		"protocol_version"	=> true,
		"server_info"		=> true,
		"server_version"	=> true,
		"sqlstate"			=> true,
		"stat"				=> true,
		"thread_id"			=> true,
		"warning_count"		=> true,
	);

	$expected_class_variables["error_list"] = true;
	$expected_object_variables["error_list"] = true;

	$variables = get_class_vars(get_class($mysqli));
	foreach ($variables as $var => $v) {
		if (isset($expected_class_variables[$var])) {
			unset($expected_class_variables[$var]);
			unset($variables[$var]);
		}
	}

	if (!empty($expected_class_variables)) {
	  printf("Dumping list of missing class variables\n");
	  var_dump($expected_class_variables);
	}
	if (!empty($variables)) {
	  printf("Dumping list of unexpected class variables\n");
	  var_dump($variables);
	}
	echo "ok\n";

	printf("\nObject variables:\n");
	$variables = get_object_vars($mysqli);
	get_object_vars($link); // bpc get_object_vars() call mysql_XXX functions, later call mysql_affected_rows(handle) return -1
	foreach ($variables as $var => $v) {
		if (isset($expected_object_variables[$var])) {
			unset($expected_object_variables[$var]);
			unset($variables[$var]);
		}
	}

	if (!empty($expected_object_variables)) {
	  printf("Dumping list of missing object variables\n");
	  var_dump($expected_object_variables);
	}
	if (!empty($variables)) {
	  printf("Dumping list of unexpected object variables\n");
	  var_dump($variables);
	}
	echo "ok\n";


	printf("\nMagic, magic properties:\n");

	if (mysqli_affected_rows($link) !== $mysqli->affected_rows) {
	    printf("expect affected_rows equal\n");
	}
	printf("mysqli->affected_rows = '%s'/%s ('%s'/%s)\n",
		$mysqli->affected_rows, gettype($mysqli->affected_rows),
		mysqli_affected_rows($link), gettype(mysqli_affected_rows($link)));

	if (mysqli_get_client_info() !== $mysqli->client_info) {
	    printf("expect client_info equal\n");
	}
	printf("mysqli->client_info = '%s'/%s ('%s'/%s)\n",
		$mysqli->client_info, gettype($mysqli->client_info),
		mysqli_get_client_info(), gettype(mysqli_get_client_info()));

	if (mysqli_get_client_version() !== $mysqli->client_version) {
	    printf("expect client_version equal\n");
	}
	printf("mysqli->client_version =  '%s'/%s ('%s'/%s)\n",
		$mysqli->client_version, gettype($mysqli->client_version),
		mysqli_get_client_version(), gettype(mysqli_get_client_version()));

	if (mysqli_errno($link) !== $mysqli->errno) {
	    printf("expect errno equal\n");
	}
	printf("mysqli->errno = '%s'/%s ('%s'/%s)\n",
		$mysqli->errno, gettype($mysqli->errno),
		mysqli_errno($link), gettype(mysqli_errno($link)));

	if (mysqli_error($link) !== $mysqli->error) {
	    printf("expect error equal\n");
	}
	printf("mysqli->error = '%s'/%s ('%s'/%s)\n",
		$mysqli->error, gettype($mysqli->error),
		mysqli_error($link), gettype(mysqli_error($link)));

	if (mysqli_error_list($link) !== $mysqli->error_list) {
	    printf("expect error_list equal\n");
	}
	if (!is_array($mysqli->error_list)) {
	    printf("expect error_list is array\n");
	}

	if (mysqli_field_count($link) !== $mysqli->field_count) {
	    printf("expect field_count equal\n");
	}
	printf("mysqli->field_count = '%s'/%s ('%s'/%s)\n",
		$mysqli->field_count, gettype($mysqli->field_count),
		mysqli_field_count($link), gettype(mysqli_field_count($link)));

	if (mysqli_insert_id($link) !== $mysqli->insert_id)  {
	    printf("expect insert_id equal\n");
	}
	printf("mysqli->insert_id = '%s'/%s ('%s'/%s)\n",
		$mysqli->insert_id, gettype($mysqli->insert_id),
		mysqli_insert_id($link), gettype(mysqli_insert_id($link)));

	if (mysqli_sqlstate($link) !== $mysqli->sqlstate)  {
	    printf("expect sqlstate equal\n");
	}
	printf("mysqli->sqlstate = '%s'/%s ('%s'/%s)\n",
		$mysqli->sqlstate, gettype($mysqli->sqlstate),
		mysqli_sqlstate($link), gettype(mysqli_sqlstate($link)));

	if (soundex(mysqli_stat($link)) != soundex($mysqli->stat)) {
	    printf("expect soundex(stat) equal\n");
	}
	printf("mysqli->stat = '%s'/%s ('%s'/%s)\n",
		$mysqli->stat, gettype($mysqli->stat),
		mysqli_stat($link), gettype(mysqli_stat($link)));

	if (mysqli_get_host_info($link) !== $mysqli->host_info)  {
	    printf("expect host_info equal\n");
	}
	printf("mysqli->host_info = '%s'/%s ('%s'/%s)\n",
		$mysqli->host_info, gettype($mysqli->host_info),
		mysqli_get_host_info($link), gettype(mysqli_get_host_info($link)));

	/* note that the data types are different */
	if (mysqli_info($link) != $mysqli->info) {
	    printf("expect info equal\n");
	}
	printf("mysqli->info = '%s'/%s ('%s'/%s)\n",
		$mysqli->info, gettype($mysqli->info),
		mysqli_info($link), gettype(mysqli_info($link)));

	if (mysqli_thread_id($link) <= $mysqli->thread_id) {
	    printf("expect link thread_id > mysqli thread_id");
	}
	if (gettype($mysqli->thread_id) != gettype(mysqli_thread_id($link))) {
	    printf("expect thread_id type same\n");
	}
	printf("mysqli->thread_id = '%s'/%s ('%s'/%s)\n",
		$mysqli->thread_id, gettype($mysqli->thread_id),
		mysqli_thread_id($link), gettype(mysqli_thread_id($link)));

	if (mysqli_get_proto_info($link) !== $mysqli->protocol_version) {
	    printf("expect protocol_version equal\n");
	}
	printf("mysqli->protocol_version = '%s'/%s ('%s'/%s)\n",
		$mysqli->protocol_version, gettype($mysqli->protocol_version),
		mysqli_get_proto_info($link), gettype(mysqli_get_proto_info($link)));

	if (mysqli_get_server_info($link) !== $mysqli->server_info) {
	    printf("expect server_info equal\n");
	}
	printf("mysqli->server_info = '%s'/%s ('%s'/%s)\n",
		$mysqli->server_info, gettype($mysqli->server_info),
		mysqli_get_server_info($link), gettype(mysqli_get_server_info($link)));

	if (mysqli_get_server_version($link) !== $mysqli->server_version) {
	    printf("expect server_version equal\n");
	}
	printf("mysqli->server_version = '%s'/%s ('%s'/%s)\n",
		$mysqli->server_version, gettype($mysqli->server_version),
		mysqli_get_server_version($link), gettype(mysqli_get_server_version($link)));

	if (mysqli_warning_count($link) !== $mysqli->warning_count) {
	    printf("expect warning_count equal\n");
	}
	printf("mysqli->warning_count = '%s'/%s ('%s'/%s)\n",
		$mysqli->warning_count, gettype($mysqli->warning_count),
		mysqli_warning_count($link), gettype(mysqli_warning_count($link)));

	printf("\nAccess to undefined properties:\n");
	printf("mysqli->unknown = '%s'\n", @$mysqli->unknown);

	@$mysqli->unknown = 13;
	printf("setting mysqli->unknown, mysqli_unknown = '%s'\n", @$mysqli->unknown);

	$unknown = 'friday';
	@$mysqli->unknown = $unknown;
	printf("setting mysqli->unknown, mysqli_unknown = '%s'\n", @$mysqli->unknown);

	$mysqli = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
	printf("\nAccess hidden properties for MYSLQI_STATUS_INITIALIZED (TODO documentation):\n");
	if (mysqli_connect_error() !== $mysqli->connect_error) {
	    printf("expect connect_error equal\n");
	}
	printf("mysqli->connect_error = '%s'/%s ('%s'/%s)\n",
		$mysqli->connect_error, gettype($mysqli->connect_error),
		mysqli_connect_error(), gettype(mysqli_connect_error()));

	if (mysqli_connect_errno() !== $mysqli->connect_errno) {
	    printf("expect connect_errno equal\n");
	}
	printf("mysqli->connect_errno = '%s'/%s ('%s'/%s)\n",
		$mysqli->connect_errno, gettype($mysqli->connect_errno),
		mysqli_connect_errno(), gettype(mysqli_connect_errno()));

	print "done!";
?>
--EXPECTF--
Parent class:
bool(false)

Methods:
ok

Class variables:
ok

Object variables:
ok

Magic, magic properties:
mysqli->affected_rows = '%s'/integer ('%s'/integer)
mysqli->client_info = '%s'/string ('%s'/string)
mysqli->client_version =  '%d'/integer ('%d'/integer)
mysqli->errno = '0'/integer ('0'/integer)
mysqli->error = ''/string (''/string)
mysqli->field_count = '0'/integer ('0'/integer)
mysqli->insert_id = '0'/integer ('0'/integer)
mysqli->sqlstate = '00000'/string ('00000'/string)
mysqli->stat = 'Uptime: %d  Threads: %d  Questions: %d  Slow queries: %d  Opens: %d  Flush tables: %d  Open tables: %d  Queries per second avg: %d.%d'/string ('Uptime: %d  Threads: %d  Questions: %d  Slow queries: %d  Opens: %d  Flush tables: %d  Open tables: %d  Queries per second avg: %d.%d'/string)
mysqli->host_info = '%s'/string ('%s'/string)
mysqli->info = ''/NULL (''/NULL)
mysqli->thread_id = '%d'/integer ('%d'/integer)
mysqli->protocol_version = '%d'/integer ('%d'/integer)
mysqli->server_info = '%s'/string ('%s'/string)
mysqli->server_version = '%d'/integer ('%d'/integer)
mysqli->warning_count = '0'/integer ('0'/integer)

Access to undefined properties:
mysqli->unknown = ''
setting mysqli->unknown, mysqli_unknown = '13'
setting mysqli->unknown, mysqli_unknown = 'friday'

Access hidden properties for MYSLQI_STATUS_INITIALIZED (TODO documentation):
mysqli->connect_error = ''/NULL (''/NULL)
mysqli->connect_errno = '0'/integer ('0'/integer)
done!
