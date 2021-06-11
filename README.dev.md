对phpt的更改必须在以下白名单中:

## runtime

**arguments**

1. Too few arguments

    compile error (functions) or runtime error (functions) or ArgumentCountError (methods)
    ArgumentCountError stack trace different with php as bpc check argument number before call the method

2. Too many arguments

    compile error (functions) or runtime warning (functions/no default value methods)
    default value methods is fine

3. argument type error message

    int -> integer
    valid callback -> callable

4. Only variables can be passed by reference

    compile error or runtime error

**function**

1. function signatures before global code

    ```php
    <?php
    define('THE_CONST', 123);
    function f($a = array(THE_CONST => THE_CONST)) {}
    ```
    function f argument `$a` default value not as expected
    
    ```php
    <?php
    define('THE_CONST', 123);
    function g($a = THE_CONST) {}
    ```
    function g argument `$a` default value as expected

**object**

1. __destruct

    compile time warning and run as shutdown function
    compile error if not public

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

7. magic method visibility, static check

8. early ast class declares before global code

9. call_user_func not support "CLASS::STATIC_METHOD"

10. class name preferred defined name because of CLASS-xxx

11. literal class must exists when compile

12. class const decl should be ordered

    ```php
    class C {
        const CONST_2 = self::CONST_1;
        const CONST_1 = "hello";
    }
    ```
    will throw Exception Error: Undefined class constant 'CONST_1'
    
    ```php
    class C {
        const CONST_1 = "hello";
        const CONST_2 = self::CONST_1;
    }
    ```
    works fine

13. class constant visibility

    bpc not support class constant visibility

14. call parent private method error message

    bpc always report `Call to private method ~a::~a() from context '~a'`

15. assign non-visible static prop by reference throw one Error

    php throw two error

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

8. no ini variables_order

9. no ini disable_functions

10. no ini extension_dir, extension

11. config-ini-entry error

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

12. trait

    bpc not support trait

13. bpc not support mix static var and non-static var

14. redeclare compile error

    Cannot redeclare constant

15. class const defines one at a time

    bpc not support `const c1 = 1, c2 = 2;`

16. define constant always case-sensitive

    bpc only support `define(name, value)`, not support `define(name, value, case_insensitive)`

17. parse error

18. TODO `rval->`

    bpc currently not support `(new CLASS_NAME())->prop/method`

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

7. no constant PHP_BINARY

8. no cli server

9. float precision -1 or 0

    bpc float to string (glibc snprintf) result may different with php when precision is -1 or 0

10. no eval()

11. .= access lval twice

    @see tests/classes/array_access_009.phpt `$people[0]['name'] .= 'Baz';`
    @see `(generate-code node::assigning-string-cat)`

12. var_export whole string

    bpc output whole string
    php output concat string
    @see tests/classes/array_conversion_keys.phpt

13. problem running command 'bigloo'

    generate scheme code ok, compile scheme code error.
    
    ```php
    <?php
    class C
    {
        const c1 = D::hello;
    }
    ```
    ERR: Unbound variable -- *CLASS-d*

## ext/date

1. ini_set date.timezone warning message

    php's warning message "Invalid date.timezone value '%s', we selected the timezone 'UTC' for now." is incorrect.
    timezone not change.

## ext/mbstring

1. skip mbstring regex,kana,http,mail

2. mbstring not support function overload

3. mbstring can handle recursion

4. no ini mbstring.http_*, mbstring.encoding_translation
