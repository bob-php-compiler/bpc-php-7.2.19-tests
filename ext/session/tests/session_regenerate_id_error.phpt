--TEST--
Test session_regenerate_id() function : error functionality
--FILE--
<?php

/*
 * Prototype : bool session_regenerate_id([bool $delete_old_session])
 * Description : Update the current session id with a newly generated one
 * Source code : ext/session/session.c
 */

echo "*** Testing session_regenerate_id() : error functionality ***\n";

// Get an unset variable
$unset_var = 10;
unset($unset_var);

class classA
{
    public function __toString() {
        return "Hello World!";
    }
}

$heredoc = <<<EOT
Hello World!
EOT;

$fp = fopen('/proc/self/comm', "r");

// Unexpected values to be passed as arguments
$inputs = array(

       // Integer data
/*1*/  0,
       1,
       12345,
       -2345,

       // Float data
/*5*/  10.5,
       -10.5,
       12.3456789000e10,
       12.3456789000E-10,
       .5,

       // Null data
/*10*/ NULL,
       null,

       // Boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // Empty strings
/*16*/ "",
       '',

       // Invalid string data
/*18*/ "Nothing",
       'Nothing',
       $heredoc,

       // Object data
/*21*/ new classA(),

       // Undefined data
/*22*/ @$undefined_var,

       // Unset data
/*23*/ @$unset_var,

       // Resource variable
/*24*/ $fp
);


$iterator = 1;
foreach($inputs as $input) {
    echo "\n-- Iteration $iterator --\n";
    var_dump(session_regenerate_id($input));
    $iterator++;
};

fclose($fp);
echo "Done";
?>
--EXPECTF--
*** Testing session_regenerate_id() : error functionality ***

-- Iteration 1 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 2 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 3 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 4 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 5 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 6 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 7 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 8 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 9 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 10 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 11 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 12 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 13 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 14 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 15 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 16 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 17 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 18 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 19 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 20 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 21 --

Warning: session_regenerate_id() expects parameter 1 to be boolean, object given in %s on line %d
NULL

-- Iteration 22 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 23 --

Warning: session_regenerate_id(): Cannot regenerate session id - session is not active in %s on line %d
bool(false)

-- Iteration 24 --

Warning: session_regenerate_id() expects parameter 1 to be boolean, resource given in %s on line %d
NULL
Done
