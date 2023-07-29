--TEST--
Interface of the class mysqli
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--bpc-include-file ext/mysqli/tests/table.inc \
--bpc-include-file ext/mysqli/tests/clean_table.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	require('table.inc');

	function dump_properties($mysqli) {

		printf("\nClass variables:\n");
		$variables = array_keys(get_class_vars(get_class($mysqli)));
		sort($variables);
		foreach ($variables as $k => $var) {
			printf("%s = '%s'\n", $var, var_export(@$mysqli->$var, true));
		}

		printf("\nObject variables:\n");
		$variables = array_keys(@get_object_vars($mysqli));
		foreach ($variables as $k => $var) {
			printf("%s = '%s'\n", $var, var_export(@$mysqli->$var, true));
		}

		printf("\nMagic, magic properties:\n");

		if (@mysqli_affected_rows($mysqli) !== @$mysqli->affected_rows) {
		    printf("expect affected_rows equal\n");
		}
		printf("mysqli->affected_rows = '%s'/%s ('%s'/%s)\n",
			@$mysqli->affected_rows, gettype(@$mysqli->affected_rows),
			@mysqli_affected_rows($mysqli), gettype(@mysqli_affected_rows($mysqli)));

		if (@mysqli_get_client_info() !== @$mysqli->client_info) {
		    printf("expect client_info equal\n");
		}
		printf("mysqli->client_info = '%s'/%s ('%s'/%s)\n",
			@$mysqli->client_info, gettype(@$mysqli->client_info),
			@mysqli_get_client_info(), gettype(@mysqli_get_client_info()));

		if (@mysqli_get_client_version() !== @$mysqli->client_version) {
		    printf("expect client_version equal\n");
		}
		printf("mysqli->client_version =  '%s'/%s ('%s'/%s)\n",
			@$mysqli->client_version, gettype(@$mysqli->client_version),
			@mysqli_get_client_version(), gettype(@mysqli_get_client_version()));

		if (@mysqli_errno($mysqli) !== @$mysqli->errno) {
		    printf("expect errno equal\n");
		}
		printf("mysqli->errno = '%s'/%s ('%s'/%s)\n",
			@$mysqli->errno, gettype(@$mysqli->errno),

			@mysqli_errno($mysqli), gettype(@mysqli_errno($mysqli)));

		if (@mysqli_error($mysqli) !== @$mysqli->error) {
		    printf("expect error equal\n");
		}
		printf("mysqli->error = '%s'/%s ('%s'/%s)\n",
			@$mysqli->error, gettype(@$mysqli->error),
			@mysqli_error($mysqli), gettype(@mysqli_error($mysqli)));

		if (@mysqli_field_count($mysqli) !== @$mysqli->field_count) {
		    printf("expect field_count equal\n");
		}
		printf("mysqli->field_count = '%s'/%s ('%s'/%s)\n",
			@$mysqli->field_count, gettype(@$mysqli->field_count),
			@mysqli_field_count($mysqli), gettype(@mysqli_field_count($mysqli)));

		if (@mysqli_insert_id($mysqli) !== @$mysqli->insert_id) {
		    printf("expect insert_id equal\n");
		}
		printf("mysqli->insert_id = '%s'/%s ('%s'/%s)\n",
			@$mysqli->insert_id, gettype(@$mysqli->insert_id),
			@mysqli_insert_id($mysqli), gettype(@mysqli_insert_id($mysqli)));

		if (@mysqli_sqlstate($mysqli) !== @$mysqli->sqlstate) {
		    printf("expect sqlstate equal\n");
		}
		printf("mysqli->sqlstate = '%s'/%s ('%s'/%s)\n",
			@$mysqli->sqlstate, gettype(@$mysqli->sqlstate),
			@mysqli_sqlstate($mysqli), gettype(@mysqli_sqlstate($mysqli)));

		if (@mysqli_get_host_info($mysqli) !== @$mysqli->host_info) {
		    printf("expect host_info equal\n");
		}
		printf("mysqli->host_info = '%s'/%s ('%s'/%s)\n",
			@$mysqli->host_info, gettype(@$mysqli->host_info),
			@mysqli_get_host_info($mysqli), gettype(@mysqli_get_host_info($mysqli)));

		/* note that the data types are different */
		if (@mysqli_info($mysqli) != @$mysqli->info) {
		    printf("expect info equal\n");
		}
		printf("mysqli->info = '%s'/%s ('%s'/%s)\n",
			@$mysqli->info, gettype(@$mysqli->info),
			@mysqli_info($mysqli), gettype(@mysqli_info($mysqli)));

		if (@mysqli_thread_id($mysqli) !== @$mysqli->thread_id) {
		    printf("expect thread_id equal\n");
		}
		if (gettype(@$mysqli->thread_id) != gettype(@mysqli_thread_id($mysqli))) {
		    print("expect thread_id type equal\n");
		}
		printf("mysqli->thread_id = '%s'/%s ('%s'/%s)\n",
			@$mysqli->thread_id, gettype(@$mysqli->thread_id),
			@mysqli_thread_id($mysqli), gettype(@mysqli_thread_id($mysqli)));

		if (@mysqli_get_proto_info($mysqli) !== @$mysqli->protocol_version) {
		    printf("expect protocol_version equal\n");
		}
		printf("mysqli->protocol_version = '%s'/%s ('%s'/%s)\n",
			@$mysqli->protocol_version, gettype(@$mysqli->protocol_version),
			@mysqli_get_proto_info($mysqli), gettype(@mysqli_get_proto_info($mysqli)));

		if (@mysqli_get_server_info($mysqli) !== @$mysqli->server_info) {
		    printf("expect server_info equal\n");
		}
		printf("mysqli->server_info = '%s'/%s ('%s'/%s)\n",
			@$mysqli->server_info, gettype(@$mysqli->server_info),
			@mysqli_get_server_info($mysqli), gettype(@mysqli_get_server_info($mysqli)));

		if (@mysqli_get_server_version($mysqli) !== @$mysqli->server_version) {
		    printf("expect server_version equal\n");
		}
		printf("mysqli->server_version = '%s'/%s ('%s'/%s)\n",
			@$mysqli->server_version, gettype(@$mysqli->server_version),
			@mysqli_get_server_version($mysqli), gettype(@mysqli_get_server_version($mysqli)));

		if (@mysqli_warning_count($mysqli) !== @$mysqli->warning_count) {
		    printf("expect warning_count equal\n");
		}
		printf("mysqli->warning_count = '%s'/%s ('%s'/%s)\n",
			@$mysqli->warning_count, gettype(@$mysqli->warning_count),
			@mysqli_warning_count($mysqli), gettype(@mysqli_warning_count($mysqli)));

		printf("\nAccess to undefined properties:\n");
		printf("mysqli->unknown = '%s'\n", @$mysqli->unknown);

		@$mysqli->unknown = 13;
		printf("setting mysqli->unknown, @mysqli_unknown = '%s'\n", @$mysqli->unknown);

		$unknown = 'friday';
		@$mysqli->unknown = $unknown;
		printf("setting mysqli->unknown, @mysqli_unknown = '%s'\n", @$mysqli->unknown);

		printf("\nAccess hidden properties for MYSLQI_STATUS_INITIALIZED (TODO documentation):\n");
		if (@mysqli_connect_error() !== @$mysqli->connect_error) {
		    printf("expect connect_error equal\n");
		}
		printf("mysqli->connect_error = '%s'/%s ('%s'/%s)\n",
			@$mysqli->connect_error, gettype(@$mysqli->connect_error),
			@mysqli_connect_error(), gettype(@mysqli_connect_error()));

		if (@mysqli_connect_errno() !== @$mysqli->connect_errno) {
		    printf("expect connect_errno equal\n");
		}
		printf("mysqli->connect_errno = '%s'/%s ('%s'/%s)\n",
			@$mysqli->connect_errno, gettype(@$mysqli->connect_errno),
			@mysqli_connect_errno(), gettype(@mysqli_connect_errno()));
	}

	printf("Without RS\n");
	$mysqli = @new mysqli($host, $user, $passwd . "invalid", $db, $port, $socket);
	dump_properties($mysqli);

	printf("With RS\n");
	$mysqli = @new mysqli($host, $user, $passwd . "invalid", $db, $port, $socket);
	$res = @$mysqli->query("SELECT * FROM test");
	dump_properties($mysqli);

	print "done!";
?>
--CLEAN--
<?php require_once("clean_table.inc"); ?>
--EXPECTF--
Without RS

Class variables:
affected_rows = 'NULL'
client_info = 'NULL'
client_version = '%s'
connect_errno = '%s'
connect_error = ''%s'
errno = 'NULL'
error = 'NULL'
error_list = 'NULL'
field_count = 'NULL'
host_info = 'NULL'
info = 'NULL'
insert_id = 'NULL'
protocol_version = 'NULL'
server_info = 'NULL'
server_version = 'NULL'
sqlstate = 'NULL'
stat = 'NULL'
thread_id = 'NULL'
warning_count = 'NULL'

Object variables:
affected_rows = 'NULL'
client_info = 'NULL'
client_version = '%s'
connect_errno = '%s'
connect_error = '%s'
errno = 'NULL'
error = 'NULL'
error_list = 'NULL'
field_count = 'NULL'
host_info = 'NULL'
info = 'NULL'
insert_id = 'NULL'
server_info = 'NULL'
server_version = 'NULL'
stat = 'NULL'
sqlstate = 'NULL'
protocol_version = 'NULL'
thread_id = 'NULL'
warning_count = 'NULL'

Magic, magic properties:
mysqli->affected_rows = ''/NULL (''/NULL)
expect client_info equal
mysqli->client_info = ''/NULL ('%s'/%s)
mysqli->client_version =  '%s'/integer ('%s'/integer)
mysqli->errno = ''/NULL (''/NULL)
mysqli->error = ''/NULL (''/NULL)
mysqli->field_count = ''/NULL (''/NULL)
mysqli->insert_id = ''/NULL (''/NULL)
mysqli->sqlstate = ''/NULL (''/NULL)
mysqli->host_info = ''/NULL (''/NULL)
mysqli->info = ''/NULL (''/NULL)
mysqli->thread_id = ''/NULL (''/NULL)
mysqli->protocol_version = ''/NULL (''/NULL)
mysqli->server_info = ''/NULL (''/NULL)
mysqli->server_version = ''/NULL (''/NULL)
mysqli->warning_count = ''/NULL (''/NULL)

Access to undefined properties:
mysqli->unknown = ''
setting mysqli->unknown, @mysqli_unknown = '13'
setting mysqli->unknown, @mysqli_unknown = 'friday'

Access hidden properties for MYSLQI_STATUS_INITIALIZED (TODO documentation):
mysqli->connect_error = '%s'/%s)
mysqli->connect_errno = '%s'/integer ('%s'/integer)
With RS

Class variables:
affected_rows = 'NULL'
client_info = 'NULL'
client_version = '%s'
connect_errno = '%s'
connect_error = '%s'
errno = 'NULL'
error = 'NULL'
error_list = 'NULL'
field_count = 'NULL'
host_info = 'NULL'
info = 'NULL'
insert_id = 'NULL'
protocol_version = 'NULL'
server_info = 'NULL'
server_version = 'NULL'
sqlstate = 'NULL'
stat = 'NULL'
thread_id = 'NULL'
warning_count = 'NULL'

Object variables:
affected_rows = 'NULL'
client_info = 'NULL'
client_version = '%s'
connect_errno = '%s'
connect_error = '%s'
errno = 'NULL'
error = 'NULL'
error_list = 'NULL'
field_count = 'NULL'
host_info = 'NULL'
info = 'NULL'
insert_id = 'NULL'
server_info = 'NULL'
server_version = 'NULL'
stat = 'NULL'
sqlstate = 'NULL'
protocol_version = 'NULL'
thread_id = 'NULL'
warning_count = 'NULL'

Magic, magic properties:
mysqli->affected_rows = ''/NULL (''/NULL)
expect client_info equal
mysqli->client_info = ''/NULL ('%s'/%s)
mysqli->client_version =  '%s'/integer ('%s'/integer)
mysqli->errno = ''/NULL (''/NULL)
mysqli->error = ''/NULL (''/NULL)
mysqli->field_count = ''/NULL (''/NULL)
mysqli->insert_id = ''/NULL (''/NULL)
mysqli->sqlstate = ''/NULL (''/NULL)
mysqli->host_info = ''/NULL (''/NULL)
mysqli->info = ''/NULL (''/NULL)
mysqli->thread_id = ''/NULL (''/NULL)
mysqli->protocol_version = ''/NULL (''/NULL)
mysqli->server_info = ''/NULL (''/NULL)
mysqli->server_version = ''/NULL (''/NULL)
mysqli->warning_count = ''/NULL (''/NULL)

Access to undefined properties:
mysqli->unknown = ''
setting mysqli->unknown, @mysqli_unknown = '13'
setting mysqli->unknown, @mysqli_unknown = 'friday'

Access hidden properties for MYSLQI_STATUS_INITIALIZED (TODO documentation):
mysqli->connect_error = '%s'/%s)
mysqli->connect_errno = '%s'/integer ('%s'/integer)
done!
