--TEST--
Test tinycdb functions
--FILE--
<?php
    $handle = cdb_make_start('test.cdb');
    var_dump($handle);
    echo "add\n";
    var_dump(cdb_make_add($handle, 'key1', 'val1'));
    var_dump(cdb_make_add($handle, 'key2', 'val2'));
    var_dump(cdb_make_add($handle, 'key2', 'val222'));
    echo "put - CDB_PUT_ADD\n";
    var_dump(cdb_make_put($handle, 'key3', 'val3', CDB_PUT_ADD));
    var_dump(cdb_make_put($handle, 'key4', 'val4', CDB_PUT_ADD));
    var_dump(cdb_make_put($handle, 'key4', 'val444', CDB_PUT_ADD));
    echo "put - CDB_PUT_REPLACE\n";
    var_dump(cdb_make_put($handle, 'key5', 'val5', CDB_PUT_REPLACE));
    var_dump(cdb_make_put($handle, 'key6', 'val6', CDB_PUT_REPLACE));
    var_dump(cdb_make_put($handle, 'key6', 'val666', CDB_PUT_REPLACE));
    echo "put - CDB_PUT_INSERT\n";
    var_dump(cdb_make_put($handle, 'key7', 'val7', CDB_PUT_INSERT));
    var_dump(cdb_make_put($handle, 'key8', 'val8', CDB_PUT_INSERT));
    var_dump(cdb_make_put($handle, 'key8', 'val888', CDB_PUT_INSERT));
    echo "exists\n";
    var_dump(cdb_make_exists($handle, 'key1'));
    var_dump(cdb_make_exists($handle, 'key9'));
    echo "finish\n";
    var_dump(cdb_make_finish($handle));
    echo "error\n";
    var_dump(cdb_make_exists($handle, 'key1'));

    echo "open\n";
    $handle = cdb_open('test.cdb');
    var_dump($handle);
    echo "fetch\n";
    for ($i = 1; $i <= 9; $i++) {
        var_dump(cdb_fetch($handle, 'key' . $i));
        var_dump(cdb_fetch($handle, 'key' . $i, true));
    }
    echo "foreach\n";
    cdb_foreach($handle, function ($k, $v) {
        echo $k, '->', $v, "\n";
    });
    echo "foreach callback return false\n";
    cdb_foreach($handle, function ($k, $v) {
        echo $k, '->', $v, "\n";
        if ($k == 'key3') {
            return false;
        }
    });
    echo "close\n";
    var_dump(cdb_close($handle));
    echo "error\n";
    var_dump(cdb_fetch($handle, 'key1'));
?>
--CLEAN--
<?php
    @unlink('test.cdb');
?>
--EXPECTF--
resource(%d) of type (cdbm)
add
bool(true)
bool(true)
bool(true)
put - CDB_PUT_ADD
bool(true)
bool(true)
bool(true)
put - CDB_PUT_REPLACE
bool(true)
bool(true)
int(1)
put - CDB_PUT_INSERT
bool(true)
bool(true)
int(1)
exists
bool(true)
bool(false)
finish
bool(true)
error

Warning: cdb_make_exists(): supplied resource is not a valid cdbm resource in %s on line %d
bool(false)
open
resource(%d) of type (cdb)
fetch
string(4) "val1"
array(1) {
  [0]=>
  string(4) "val1"
}
string(4) "val2"
array(2) {
  [0]=>
  string(4) "val2"
  [1]=>
  string(6) "val222"
}
string(4) "val3"
array(1) {
  [0]=>
  string(4) "val3"
}
string(4) "val4"
array(2) {
  [0]=>
  string(4) "val4"
  [1]=>
  string(6) "val444"
}
string(4) "val5"
array(1) {
  [0]=>
  string(4) "val5"
}
string(6) "val666"
array(1) {
  [0]=>
  string(6) "val666"
}
string(4) "val7"
array(1) {
  [0]=>
  string(4) "val7"
}
string(4) "val8"
array(1) {
  [0]=>
  string(4) "val8"
}
bool(false)
bool(false)
foreach
key1->val1
key2->val2
key2->val222
key3->val3
key4->val4
key4->val444
key5->val5
key6->val666
key7->val7
key8->val8
foreach callback return false
key1->val1
key2->val2
key2->val222
key3->val3
close
bool(true)
error

Warning: cdb_fetch(): supplied resource is not a valid cdb resource in %s on line %d
bool(false)
