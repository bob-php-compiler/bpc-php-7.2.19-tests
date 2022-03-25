--TEST--
Bug #60634 (Segmentation fault when trying to die() in SessionHandler::write()) - exception in write after exec
--INI--
session.save_path=
session.name=PHPSESSID
session.save_handler=files
--FILE--
<?php

ob_start();

function open($save_path, $session_name) {
    return true;
}

function close() {
	echo "close: goodbye cruel world\n";
	exit;
}

function read($id) {
	return '';
}

function write($id, $session_data) {
	echo "write: goodbye cruel world\n";
	throw new Exception;
}

function destroy($id) {
    return true;
}

function gc($maxlifetime) {
    return true;
}

session_set_save_handler('open', 'close', 'read', 'write', 'destroy', 'gc');
session_start();

?>
--EXPECTF--
*** ERROR:php-exit:
exiting -- 0
write: goodbye cruel world
close: goodbye cruel world
