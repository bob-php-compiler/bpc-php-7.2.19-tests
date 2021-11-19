对phpt的更改必须在以下白名单中:

## runtime

**arguments**

1. Too few arguments

    compile error (functions) or ArgumentCountError (functions/methods)
    php warning on builtin functions, bpc always ArgumentCountError
    ArgumentCountError stack trace different with php as bpc check argument number before call the method

2. Too many arguments

    compile error (functions) or runtime warning (functions/builtin class methods)
    user defined class methods is fine.
    bpc continue to run the function while php return NULL if the function is builtin.

3. must take exactly arguments

    compile error
    __autoload() must take exactly 1 argument

4. argument type error message

    int -> integer
    valid callback -> callable

5. Only variables can be passed by reference

    compile error or runtime error

6. pass array element by reference different

    ```php
    <?php
    function test(&$a, &$b)
    {
        var_dump($a, $b);
        $b = 'b';
    }

    $arr = array(1);
    test($arr, $arr[0]);
    var_dump($arr);
    ```

7. typehint check compile-error

8. method call and dynamic function call arg always in container

    @see Zend/tests/bug34064.phpt
    pass `$arr[]` as argument may not be a good idea
    
    @see Zend/tests/bug72101.phpt
    method argument is_ref? not checked

9. typehint argument default value cannot be php-constant

10. argument default value evaled before function call

    @see Zend/tests/bug73163.phpt

11. user callback arg preferred pass by value

    if user callback arg is ref, warning "Parameter ~a to ~a() expected to be a reference, value given"

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

2. set_error_handler

    `set_error_handler` currently not support parameter 2 `$error_levels`

3. no eval()

    for test purpose, we can use bpc_eval()

4. no create_function()

5. skip function with many parameters

    @see tests/func/010.phpt

6. no zend_version()

7. get_defined_functions order different

8. as BPC_AUTO_RUN=TRUE, STDOUT is a pipe, stream_isatty(STDOUT) return false

9. static-decl initial value before function code

10. func_get_arg/func_get_args/func_num_args

    compile error when call in global scope
    unset arg not affect args, @see Zend/tests/bug70547.phpt

11. no highlight_file() highlight_string() php_strip_whitespace()

12. get_loaded_extensions() no zend_extensions parameter

13. no class_alias()

14. function name downcase!

15. debug_print_backtrace() print args same as stack trace

    php print full args value

16. not support get_defined_vars()

17. dynamic function call warning message

18. no __halt_compiler()

19. some functions moved to runtime

20. get_defined_functions() return encrypted function names

21. function alias preferred original name

    eg. count/sizeof: warning message start with count() not sizeof()

**object**

1. __destruct

    compile time warning and run as shutdown function
    compile error if not public
    always run even after fatal errors, @see Zend/tests/bug36268.phpt
    destructors are invoked in the order of objects constructed

2. unset static property

    compile error

3. Using $this when not in object context

    compile error

4. object id

    bpc's gc different with php's gc, so object ids may not equal

5. not support Reflection

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

16. callable abstract method throw one Error

    php throw two error, @see Zend/tests/exception_017.phpt

17. abstract check

    php check class before method
    bpc check method before class
    @see tests/classes/abstract_redeclare.phpt

18. interface implement itself error message

    php: cannot implement itself
    bpc: interface '%s' not found

19. methods order different

20. not support streamWrapper

21. Undefined class constant message

22. constructor cannot be static

    compile error

23. validate-property early

    property started with '\0'
    php validate after call __unset __set __get ...
    bpc validate before call __unset __set __get ...

24. Method name must be a string

    php Fatal error or Error
    bpc compile error or Error

25. compare objects support recursion

    php fatal error
    bpc ok
    @see Zend/tests/bug63882.phpt

26. incomplete class message has no current function/method info

    @see ext/standard/tests/serialize/incomplete_class.phpt

27. check object property type via write-property handler

28. not support __debugInfo()

29. cannot access private static property error message different

    @see Zend/tests/bug70873.phpt

30. cannot XXX when no class scope is active/when current class scope has no parent

31. __PHP_Incomplete_Class

    php: .= ++ -- += ... notice and return NULL, stmt abort
    bpc: incomplete property notice return NULL, stmt continue

32. Cannot create reference to $this

33. Class declarations may not be nested

    compile error

34. magic method cannot take arguments by reference

    compile error

**array**

1. array copy/separate different

    php add gc refcount first, separate on write
    bpc copy first, separate on write

**FILE and LINE**

1. FILE and LINE

2. output length

    bpc encrypted php script filename and function name, so exception/error output length not match

3. __FILE__ not exists

    bpc encrypted php script filename and compile php scripts to one final binary, so __FILE__ not exists

4. --bpc-include-file

    include file need pass via --bpc-include-file

5. __DIR__ relative to compile dir

    @see Zend/tests/constants/dir-constant-includes.phpt

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

12. no ini hard_timeout

13. no ini open_basedir

14. no ini auto_prepend_file

15. display_errors

    php: value can be bool or stderr ...
    bpc: 1/on is #t, others #f

16. no ini arg_separator

17. no ini disable_classes

18. no ini zend.enable_gc

**syntax**

1. not support GOTO

2. array declare

    bpc only support array(), not support []

3. namespace

    bpc does not support namespace

4. not support declare()

5. define constant

    bpc not support const CONSTANT
    constant always case-sensitive, bpc only support `define(name, value)`, not support `define(name, value, case_insensitive)`
    Class constants cannot be defined or redefined, parse error and runtime warning

6. closure

    bpc closure not support use syntax
    bpc closure just a simple anonymous function, can only access argument vars and global vars, it's not a lambda.
    bpc closure arguments not support default value
    bpc closure arguments not support reference
    bpc closure has only one method: __invoke()

7. not support Null Coalescing Operator ??

8. not support foreach as list()

9. global decl only support `$var`

    bpc not support `global $$varname`
    bpc not support `global ${...}`

10. no use global decl var

    compile error

11. zend.multibyte

    bpc not support multibyte

12. not support traits

13. bpc not support mix static var and non-static var

14. redeclare compile error

    Cannot redeclare function, class property/constant/method
    Cannot redeclare builtin and extension class

15. class const defines one at a time

    bpc not support `const c1 = 1, c2 = 2;`

16. parse error

17. not supported return reference from function/method

18. bpc support double quoted string array string index

    @see tests/lang/bug21820.phpt

19. not support foreach as reference

20. static-decl/global-decl only support in function or method

21. not support nested list and `[]` list and keyed list

    bpc not support `list(list($x)) = `, parse error

22. not support short tags

23. Ternary Operator ?:

    leave out the middle part of the ternary operator `expr1 ?: expr2` will parse error

24. not support anonymous class

25. not support ... operator

26. not support generators

27. not support multi-level break/continue

28. break/continue not in loop/switch compile-error

29. not support return type

30. not support late static bindings

31. not support bprefix strings

    @see https://wiki.php.net/rfc/binary_string_deprecation
    @see https://stackoverflow.com/questions/4749442/what-does-the-b-in-front-of-string-literals-do

32. support $arr['index'] in dqstring

    ```php
    <?php
        echo "$arr['index']";
    ```
    
    php parse error
    bpc ok

33. not support heredoc/nowdoc embed each other or in dqstring

34. not support nullable types

35. not support indirect call with constants

    @see Zend/tests/indirect_call_from_constant.phpt

36. strict names

    php support ascii 0x80-0xff in variable/class/function... names
    bpc not support this
    @see https://www.php.net/manual/en/language.variables.basics.php
    @see ext/standard/tests/serialize/006.phpt

37. not support finally (try..catch..finally)

38. not support return type

39. optional params should always after required params

40. not support array to string conversion at compile time

    php notice
    bpc parse error

41. not support multi catch

42. not support literal string as class name

    `'A'::$prop` will parse error

43. Warning: truncate literal float '~a' to '~a', use string may avoid truncate

    @see ext/standard/tests/strings/bug47168.phpt

**misc**

1. TODO

    will support in the future
    TODO php://memory php://temp file://
    TODO `@"double quoted string"`

2. No Undefined variable

    bpc init all variables to NULL, so No Undefined variable
    `unset($var)` set `$var` to `NULL`
    extract() collision different with php

3. SKIP GC_FLAGS

4. debug_zval_dump is var_dump

    bpc not support debug_zval_dump, debug_zval_dump is an alias of var_dump

5. compile time +-*/% calculate

6. no constant PHP_BINARY

7. no cli server

8. float precision -1 or 0

    bpc float to string (glibc snprintf) result may different with php when precision is -1 or 0

9. var_export whole string

    bpc output whole string
    php output concat string
    @see tests/classes/array_conversion_keys.phpt

10. problem running command 'bigloo'

    generate scheme code ok, compile scheme code error.
    
    ```php
    <?php
    class C
    {
        const c1 = D::hello;
    }
    ```
    ERR: Unbound variable -- *CLASS-d*

11. typehint TypeError message

    php: `Argument x passed to x must x, x given, called in x on line x`
    bpc: `Argument x passed to x must x, x given, called in x on line x and defined`

12. stack-trace

    php show user passed args
    bpc show declared args
    unset arg not affect stack trace, @see Zend/tests/bug70547.phpt
    bpc push call_user_func() in stack trace, php not

13. invalid test

14. include()/require()/*_once() wrong error message different

    php require: warning and fatal error
    bpc require: fatal error

15. out of memory

    php Fatal error, run shutdown function, and ???(FIXME), exit
    bpc Fatal error, run shutdown function, flush, exit

16. error_handler not support deprecated argument $errcontext

17. Cannot use [] for reading/unsetting

    php: Fatal error
    bpc: compile error

18. once refed, always refed

    @see Zend/tests/bug33282.phpt

19. dynamic funcall blacklist

    php check arguments
    bpc not check arguments

20. gc different

    gc_collect_cycles() always return 0
    gc_* functions only gc_collect_cycles() may do some work, others do nothing

21. compiler always warning: Division by zero

    if can be calc result when compile, the final exectable will only contain the result, so not warning again

22. maybe php bug

    @see Zend/tests/bug54265.phpt

23. Use After Free

    to be confirmed

24. nested error handler result silent

    @see Zend/tests/bug64960.phpt

25. Modulo by zero compile error

26. Bit shift by negative number compile error

27. bpc `$GLOBALS += array();` may not worked as expected because of variables declared early

28. Cannot use string offset as an array

    @see Zend/tests/offset_assign.phpt
    php eval offset first, then throw Error
    bpc throw Error

29. literal expr evaled compile time

30. isset/empty preferred silent

    @see Zend/tests/isset_003.phpt

31. double quoted string may split into string-cats

    @see Zend/tests/instanceof_001-1.phpt

32. resource can be array key

    php: `array($fp => 'value')` Illegal offset type, `$arr[$fp] = 'value';` notice casting
    bpc: both notice casting

33. bpc error message binary safe

    php not. @see ext/standard/tests/file/fscanf_error.phpt

## output buffering

1. chunk_size and buffer_used different

2. php error/warning/notice/... messages unbuffered

## ext/standard

1. no ini unserialize_callback_func

2. unserialize() not support "r:array"

3. unserialize() "Insufficient data for unserializing" different

4. error_reporting($error_level)

    php zval_get_string($error_level) first, then convert to long
    bpc simply mkelong

5. fopen() TODO support use_include_path and context

6. bpc not support array_splice($GLOBALS...)

7. warning "Cannot add element to the array as the next element is already occupied" without function name

8. bpc not support array_pop/shift($GLOBALS)

9. bpc not support array_unique($GLOBALS...)

10. array_walk/array_walk_recursive

    unset array elements in callback function different with php
    bpc still walk all elements, include unset elements
    php walk only left elements
    @see ext/standard/tests/array/bug61730.phpt

    change array itself in callback function different with php
    bpc continue walk the old array
    php walk the new array
    @see ext/standard/tests/array/bug69068.phpt

11. "Warning: range(): Invalid range supplied: start=~a end=~a" start/end may different

12. crypt()

    bpc simply use the C function `crypt()`, so not support CRYPT_EXT_DES and CRYPT_BLOWFISH
    bpc warning if C `crypt()` return NULL

13. php8 levenshtein()

    Prior to 8.0.0, levenshtein() had to be called with either two or five arguments.

14. md5_file() mmap file failed warning

15. sha1_file() mmap file failed warning

16. sprintf()

    bpc strict argnum, @see ext/standard/tests/file/fscanf_variation14.phpt

17. get_defined_constants() order different

18. no statcache

    clearstatcache() simply return NULL, do nothing
    realpath_cache_get() return an empty array
    realpath_cache_size() return 0

19. limited context parameter support

    only the following functions support context parameter:

20. ftell of append-only streams same as C

    @see ext/standard/tests/file/fwrite_variation3.phpt

21. TODO support use_include_path

## ext/date

1. ini_set date.timezone warning message

    php's warning message "Invalid date.timezone value '%s', we selected the timezone 'UTC' for now." is incorrect.
    timezone not change.

## ext/mbstring

1. skip mbstring regex,kana,http,mail

2. mbstring not support function overload

3. mbstring can handle recursion

4. no ini mbstring.http_*, mbstring.encoding_translation

5. mb_convert_variables() corrupts reference of array element
