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

3. argument type error message

    int -> integer
    valid callback -> callable

4. Only variables can be passed by reference

    compile error or runtime error

5. pass array element by reference different

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

6. typehint check compile-error

7. method call and dynamic function call arg always in container

    @see Zend/tests/bug34064.phpt
    pass `$arr[]` as argument may not be a good idea

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

11. no highlight_file() highlight_string()

12. get_loaded_extensions() no zend_extensions parameter

13. no class_alias()

14. function name downcase!

15. debug_print_backtrace() print args same as stack trace

    php print full args value

16. get_defined_vars()

    php return variables before the function call
    bpc return all variables of the current scope

17. dynamic function call warning message

18. no __halt_compiler()

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

22. Cannot use string offset as an object

    @see Zend/tests/bug41813.phpt
    @see Zend/tests/bug41919.phpt

23. constructor cannot be static

    compile error

24. validate-property early

    property started with '\0'
    php validate after call __unset __set __get ...
    bpc validate before call __unset __set __get ...

25. Method name must be a string

    php Fatal error or Error
    bpc compile error or Error

26. compare objects support recursion

    php fatal error
    bpc ok
    @see Zend/tests/bug63882.phpt

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

12. no ini hard_timeout

13. no ini open_basedir

14. no ini auto_prepend_file

15. display_errors

    php: value can be bool or stderr ...
    bpc: 1/on is #t, others #f

16. no ini arg_separator

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
    constant always case-sensitive, bpc only support `define(name, value)`, not support `define(name, value, case_insensitive)`
    Class constants cannot be defined or redefined, parse error and runtime warning

6. closure

    bpc closure not support use syntax
    bpc closure just a simple anonymous function, can only access argument vars and global vars, it's not a lambda.
    bpc closure arguments not support default value
    bpc closure arguments not support reference
    bpc closure has only one method: __invoke()

7. Null Coalescing Operator ??

    bpc not support Null Coalescing Operator

8. foreach as list()

    bpc not support `foreach array as list($k, $v)`

9. global $$

    bpc not support `global $$varname`

10. no use global decl var

    compile error

11. zend.multibyte

    bpc not support multibyte

12. not support traits

13. bpc not support mix static var and non-static var

14. redeclare compile error

    Cannot redeclare constant
    Cannot redeclare builtin and extension class

15. class const defines one at a time

    bpc not support `const c1 = 1, c2 = 2;`

16. parse error

17. TODO `rval->`

    bpc currently not support `(new CLASS_NAME())->prop/method`

18. unsupported return reference from function/method

19. bpc support double quoted string array string index

    @see tests/lang/bug21820.phpt

20. not support foreach as reference

21. static-decl/global-decl only support in function or method

22. not support list in list

    bpc not support `list(list($x)) = `, parse error

23. not support short tags

24. Ternary Operator ?:

    leave out the middle part of the ternary operator `expr1 ?: expr2` will parse error

25. not support anonymous class

26. not support ... operator

27. not support generators

28. not support multi-level break/continue

29. break/continue not in loop/switch compile-error

30. not support return type

31. not support late static bindings

32. not support bprefix strings

    @see https://wiki.php.net/rfc/binary_string_deprecation
    @see https://stackoverflow.com/questions/4749442/what-does-the-b-in-front-of-string-literals-do

33. support $arr['index'] in dqstring

    ```php
    <?php
        echo "$arr['index']";
    ```
    
    php parse error
    bpc ok

34. not support heredoc/nowdoc embed each other or in dqstring

35. not support nullable types

36. not support indirect call with constants

    @see Zend/tests/indirect_call_from_constant.phpt

**misc**

1. TODO

    will support in the future
    TODO php://memory php://temp

2. No Undefined variable

    bpc init all variables to NULL, so No Undefined variable

3. SKIP GC_FLAGS

4. debug_zval_dump is var_dump

    bpc not support debug_zval_dump, debug_zval_dump is an alias of var_dump

5. compile time +-*/% calculate

6. no constant PHP_BINARY

7. no cli server

8. float precision -1 or 0

    bpc float to string (glibc snprintf) result may different with php when precision is -1 or 0

9. assigning-arithmetic-op access lval twice

    @see tests/classes/array_access_009.phpt `$people[0]['name'] .= 'Baz';`
    @see `(generate-code node::assigning-string-cat)`

10. var_export whole string

    bpc output whole string
    php output concat string
    @see tests/classes/array_conversion_keys.phpt

11. problem running command 'bigloo'

    generate scheme code ok, compile scheme code error.
    
    ```php
    <?php
    class C
    {
        const c1 = D::hello;
    }
    ```
    ERR: Unbound variable -- *CLASS-d*

12. typehint TypeError message

    php: `Argument x passed to x must x, x given, called in x on line x`
    bpc: `Argument x passed to x must x, x given, called in x on line x and defined`

13. stack-trace args

    php only show user passed args
    bpc show all args

14. invalid test

15. include()/require()/*_once() wrong error message different

    php require: warning and fatal error
    bpc require: fatal error

16. out of memory

    php Fatal error, run shutdown function, and ???(FIXME), exit
    bpc Fatal error, run shutdown function, flush, exit

17. error_handler not support deprecated argument $errcontext

18. Cannot use [] for reading

    php: Fatal error
    bpc: compile error

19. once refed, always refed

    @see Zend/tests/bug33282.phpt

20. dynamic funcall blacklist

    php check arguments
    bpc not check arguments

21. gc different

22. compiler always warning: Division by zero

23. maybe php bug

    @see Zend/tests/bug54265.phpt

## output buffering

1. chunk_size and buffer_used different

2. php error/warning/notice/... messages unbuffered

## ext/standard

1. no ini unserialize_callback_func

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
