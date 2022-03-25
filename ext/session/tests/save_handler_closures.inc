<?php

require_once 'save_handler.inc';

$open_closure    = function () { return call_user_func_array ("open",    func_get_args ()); };
$close_closure   = function () { return call_user_func_array ("close",   func_get_args ()); };
$read_closure    = function () { return call_user_func_array ("read",    func_get_args ()); };
$write_closure   = function () { return call_user_func_array ("write",   func_get_args ()); };
$destroy_closure = function () { return call_user_func_array ("destroy", func_get_args ()); };
$gc_closure      = function () { return call_user_func_array ("gc",      func_get_args ()); };

?>
