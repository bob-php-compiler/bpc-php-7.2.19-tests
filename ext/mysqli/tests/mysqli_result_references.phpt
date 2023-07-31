--TEST--
References to result sets
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
	require_once('connect.inc');
	require_once('table.inc');

	$references = array();

	if (!(mysqli_real_query($link, "SELECT id, label FROM test ORDER BY id ASC LIMIT 2")) ||
			!($res = mysqli_store_result($link)))
		printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	$idx = 0;
	while ($row = mysqli_fetch_assoc($res)) {
		/* mysqlnd: force separation - create copies */
		$references[$idx] = array(
			'id' 		=> &$row['id'],
			'label'	=> $row['label'] . '');
		$references[$idx++]['id'] += 0;
	}

	mysqli_close($link);

	mysqli_data_seek($res, 0);
	while ($row = mysqli_fetch_assoc($res)) {
		/* mysqlnd: force separation - create copies */
		$references[$idx] = array(
			'id' 		=> &$row['id'],
			'label'	=> $row['label'] . '');
		$references[$idx++]['id'] += 0;
	}

	mysqli_free_result($res);

	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
		printf("[002] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
			$host, $user, $db, $port, $socket);

	if (!(mysqli_real_query($link, "SELECT id, label FROM test ORDER BY id ASC LIMIT 2")) ||
			!($res = mysqli_use_result($link)))
		printf("[003] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	while ($row = mysqli_fetch_assoc($res)) {
		/* mysqlnd: force separation - create copies*/
		$references[$idx] = array(
			'id' 		=> &$row['id'],
			'label'	=> $row['label'] . '');
		$references[$idx]['id2'] = &$references[$idx]['id'];
		$references[$idx]['id'] += 1;
		$references[$idx++]['id2'] += 1;
	}

	$references[$idx++] = &$res;
	mysqli_free_result($res);
	@debug_zval_dump($references);

	if (!(mysqli_real_query($link, "SELECT id, label FROM test ORDER BY id ASC LIMIT 1")) ||
			!($res = mysqli_use_result($link)))
		printf("[004] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	$tmp = array();
	while ($row = mysqli_fetch_assoc($res)) {
		$tmp[] = $row;
	}
	$tmp = unserialize(serialize($tmp));
	debug_zval_dump($tmp);
	mysqli_free_result($res);

	mysqli_close($link);
	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
array(7) {
  [0]=>
  array(2) {
    ["id"]=>
    &int(1)
    ["label"]=>
    string(1) "a"
  }
  [1]=>
  array(2) {
    ["id"]=>
    &int(2)
    ["label"]=>
    string(1) "b"
  }
  [2]=>
  array(2) {
    ["id"]=>
    &int(1)
    ["label"]=>
    string(1) "a"
  }
  [3]=>
  array(2) {
    ["id"]=>
    &int(2)
    ["label"]=>
    string(1) "b"
  }
  [4]=>
  array(3) {
    ["id"]=>
    &int(3)
    ["label"]=>
    string(1) "a"
    ["id2"]=>
    &int(3)
  }
  [5]=>
  array(3) {
    ["id"]=>
    &int(4)
    ["label"]=>
    string(1) "b"
    ["id2"]=>
    &int(4)
  }
  [6]=>
  &object(mysqli_result)#%d (5) {
    ["current_field"]=>
    NULL
    ["field_count"]=>
    NULL
    ["lengths"]=>
    NULL
    ["num_rows"]=>
    NULL
    ["type"]=>
    NULL
  }
}
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(1) "a"
  }
}
done!
