对phpt的更改必须在以下白名单中:

## runtime

**arguments**

1. Too few arguments

    compile error (functions) or runtime error (functions/methods)

2. Too many arguments

    compile error (functions) or runtime warning (functions/no default value methods)
    default value methods is fine

3. argument type error message

4. Only variables can be passed by reference

    compile error or runtime error

**object**

1. __destruct

    compile time warning and run as shutdown function

2. unset static property

    compile error

3. Using $this when not in object context

    compile error

4. object id

    bpc's gc different with php's gc, so object ids may not equal

5. SKIP Reflection

    bpc does not support Reflection

6. php-7.2.19 object to string error

    php-7.4.16 throw exception

**FILE and LINE**

1. FILE and LINE

2. output length

    bpc encrypted php script filename and function name, so exception/error output length not match

3. __FILE__ not exists

    bpc encrypted php script filename and compile php scripts to one final binary, so __FILE__ not exists

4. --bpc-include-file

    include file need pass via --bpc-include-file

**ini**

1. ini extra semicolon

2. ini extra string double quotes

3. ini not support constant

4. no ini input_encoding, output_encoding, internal_encoding

5. no ini extension

6. no ini track_errors

7. ini bool string only "1" "on"(case insensitive) is true, others false

**syntax**

1. SKIP GOTO

    bpc does not support GOTO

2. array declare

    bpc only support array(), not support []

3. namespace

    bpc does not support namespace

4. declare

    bpc does not support declare

5. define constant

    bpc not support const CONSTANT

6. closure no use

    bpc not support use syntax

7. Null Coalescing Operator

    bpc not support Null Coalescing Operator

8. foreach as list()

    bpc not support `foreach array as list($k, $v)`

9. global $$

    bpc not support `global $$varname`

10. no use global decl var

    compile error

11. zend.multibyte

    bpc not support multibyte

**misc**

1. TODO

    will support in the future

2. No Undefined variable

    bpc init all variables to NULL, so No Undefined variable

3. SKIP GC_FLAGS

4. debug_zval_dump is var_dump

    bpc not support debug_zval_dump, debug_zval_dump is an alias of var_dump

5. php-7.4.16 var_dump recursion different with php-7.2.19

6. compile time +-*/% calculate

## ext/date

1. ini_set date.timezone warning message

    php's warning message "Invalid date.timezone value '%s', we selected the timezone 'UTC' for now." is incorrect.
    timezone not change.

## ext/mbstring

1. skip mbstring regex,kana,http,mail

2. mbstring not support function overload

3. mbstring can handle recursion

4. no ini mbstring.http_*, mbstring.encoding_translation
