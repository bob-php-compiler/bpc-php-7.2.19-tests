--TEST--
Test vprintf() function : usage variations - string formats with strings
--FILE--
<?php
/* Prototype  : int vfprintf  ( resource $handle  , string $format , array $args  )
 * Description: Write a formatted string to a stream
 * Source code: ext/standard/formatted_print.c
*/

/*
 * Test vfprintf() when different string formats and string values are passed to
 * the '$format' and '$args' arguments of the function
*/

echo "*** Testing vfprintf() : string formats with strings ***\n";


// defining different heredoc strings
$heredoc_string = <<<EOT
This is string defined
using heredoc.
EOT;

/* heredoc string with only numerics */
$heredoc_numeric_string = <<<EOT
123456 3993
4849 string
EOT;

/* empty heardoc string */
$heredoc_empty_string = <<<EOT
EOT;

// defining array of string formats
$formats = array(
  "%s",
  "%+s %-s %S",
  "%ls %Ls, %4s %-4s",
  "%10.4s %-10.4s %04s %04.4s",
  "%'#2s %'2s %'$2s %'_2s",
  "%% %%s %10 s%",
  '%3$s %4$s %1$s %2$s'
);

// Arrays of string values for the format defined in $format.
// Each sub array contains string values which correspond to each format string in $format
$args_array = array(
  array(" "),
  array("hello\0world", "hello\0", "\0hello"),
  array("@#$%&*", "@#$%&*", "\x55F", "\001"),
  array("sunday", 'monday', "tuesday", 'wednesday'),
  array($heredoc_string, "abcdef", $heredoc_numeric_string, $heredoc_empty_string),
  array("one", "two", 'three', 'four'),
  array("three", 'four', 'one', "two")

);

/* creating dumping file */
$data_file = 'vfprintf_variation7.txt';
if (!($fp = fopen($data_file, 'wt')))
   return;

// looping to test vfprintf() with different string formats from the above $format array
// and with string from the above $args_array array
$counter = 1;
foreach($formats as $format) {
  fprintf($fp, "\n-- Iteration %d --\n",$counter);
  vfprintf($fp, $format, $args_array[$counter-1]);
  $counter++;
}

fclose($fp);
print_r(file_get_contents($data_file));
echo "\n";

unlink($data_file);

?>
===DONE===
--EXPECT--
*** Testing vfprintf() : string formats with strings ***

-- Iteration 1 --
 
-- Iteration 2 --
hello world hello  
-- Iteration 3 --
@#$%&* s,   UF    
-- Iteration 4 --
      sund mond       tuesday wedn
-- Iteration 5 --
This is string defined
using heredoc. abcdef 123456 3993
4849 string __
-- Iteration 6 --
% %s s
-- Iteration 7 --
one two three four
===DONE===
