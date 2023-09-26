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
    for method with default value arguments, bpc not check arguments count. @see ext/fileinfo/tests/bug61173.phpt

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
    
    ```php
    <?php
        function test($a) {}
        $f = 'test';
        $f(array(0,1)[0]);
    ```
    pass literal array element as argument report error "update-value-generic: unexpected assignment lval"

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

12. no class_alias()

13. function name downcase!

14. debug_print_backtrace() print args same as stack trace

    php print full args value

15. not support get_defined_vars()

16. dynamic function call warning message

17. no __halt_compiler()

18. some functions moved to runtime

19. get_defined_functions() return encrypted function names

20. function alias preferred original name

    eg. count/sizeof: warning message start with count() not sizeof()

21. register_shutdown_function()

    php may throw exception if object/class method not callable, but warning if function not callable
    bpc always warning

    php seems validate callable again before run shutdown function
    bpc not
    @see ext/standard/tests/general_functions/bug32647.phpt

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

    bpc support `call_user_func(array($obj, 'parent/self::method'))` but not support `call_user_func(array('CLASS', 'parent/self::method'))`

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

13. not support class constant visibility

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

35. foreach on object

    @see Zend/tests/foreach_018.phpt
    keys looked like mangled properties not worked
    
    eq `foreach (get_object_vars($obj) as $k => $v) {}`

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

6. --bpc-php-exts

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

19. no ini magic_quotes_gpc

20. no ini register_argc_argv

21. ini access level INI_ALL or INI_SYSTEM

22. ini int value conversion same as (int) typecast

    php use strtol()
    @see ext/session/tests/session_cache_expire_error.phpt 12.3456789000E-10
    strtol('1.2xxxE-9') = 1
    
    (int)'1.2xxxE-9' = 0

23. ini on-modify warning message without function name

    @see ext/session/tests/session_ini_set.phpt

24. no ini from

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

    bpc not support static closure
    bpc closure has only one method: __invoke()
    var_dump closure got empty Closure object

7. not support Null Coalescing Operator ??

8. not support foreach as list()

9. global decl only support `$var`

    bpc not support `global $$varname`
    bpc not support `global ${...}`

10. zend.multibyte

    bpc not support multibyte

11. not support traits

12. bpc not support mix static var and non-static var

13. redeclare compile error

    Cannot redeclare function, class property/constant/method
    Cannot redeclare builtin and extension class

14. class const defines one at a time

    bpc not support `const c1 = 1, c2 = 2;`

15. parse error

16. not supported return reference from function/method

17. bpc support double quoted string array string index

    @see tests/lang/bug21820.phpt

18. not support foreach as reference

19. static-decl only support in function or method

20. not support nested list and `[]` list and keyed list

    bpc not support `list(list($x)) = `, parse error

21. not support short tags

22. Ternary Operator ?:

    leave out the middle part of the ternary operator `expr1 ?: expr2` will parse error

23. not support anonymous class

24. not support generators

25. not support multi-level break/continue

26. break/continue not in loop/switch compile-error

27. not support return type

28. not support bprefix strings

    @see https://wiki.php.net/rfc/binary_string_deprecation
    @see https://stackoverflow.com/questions/4749442/what-does-the-b-in-front-of-string-literals-do

29. support $arr['index'] in dqstring

    ```php
    <?php
        echo "$arr['index']";
    ```
    
    php parse error
    bpc ok

30. not support heredoc/nowdoc embed each other or in dqstring

31. not support iterable

32. not support indirect call with constants

    @see Zend/tests/indirect_call_from_constant.phpt

33. strict names

    php support ascii 0x80-0xff in variable/class/function... names
    bpc not support this
    @see https://www.php.net/manual/en/language.variables.basics.php
    @see ext/standard/tests/serialize/006.phpt

34. not support finally (try..catch..finally)

35. not support return type

36. optional params should always after required params

37. not support array to string conversion at compile time

    php notice
    bpc parse error

38. not support multi catch

39. not support literal string as class name

    `'A'::$prop` will parse error

40. Warning: truncate literal float '~a' to '~a', use string may avoid truncate

    @see ext/standard/tests/strings/bug47168.phpt

41. cannot reference assignment or unset superglobal, this will split *global-env* and $_XXX

    @see ext/session/tests/bug67694.phpt

42. arguments without default value must before arguments with default value

    @see Zend/tests/bug71428.2.phpt

43. not support CLASS::$static_property = &$var

**misc**

1. TODO

    will support in the future
    TODO `@"double quoted string"`

2. No Undefined variable

    bpc init all variables to NULL, so No Undefined variable
    `unset($var)` set `$var` to `NULL`
    extract() collision different with php

3. SKIP GC_FLAGS

4. debug_zval_dump is var_dump

    bpc not support debug_zval_dump, debug_zval_dump is an alias of var_dump

5. literal expr evaled compile time

    compile time +-*/% calculate, may report warning, if can be calc result when compile, the final exectable will only contain the result, so not warning again

6. no constant PHP_BINARY

7. no cli server

8. float precision -1 or 0

    bpc float to string (glibc snprintf) result may different with php when precision is -1 or 0

9. var_export whole string

    bpc output whole string
    php output concat string
    @see tests/classes/array_conversion_keys.phpt

10. Unbound variable -- *CLASS-XXX*

11. typehint TypeError message

    php: `Argument x passed to x must x, x given, called in x on line x`
    bpc: `Argument x passed to x must x, x given, called in x on line x and defined`

12. stack-trace

    php show user passed args
    bpc show declared args
    unset arg not affect stack trace, @see Zend/tests/bug70547.phpt

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

29. isset/empty preferred silent

    @see Zend/tests/isset_003.phpt

30. double quoted string may split into string-cats

    @see Zend/tests/instanceof_001-1.phpt

31. resource can be array key

    php: `array($fp => 'value')` Illegal offset type, `$arr[$fp] = 'value';` notice casting
    bpc: both notice casting

32. bpc error message binary safe

    php not. @see ext/standard/tests/file/fscanf_error.phpt

33. TO BE FIXED bigloo pipe problem

    tests/basic/timeout_variation_*.phpt sometimes got empty output
    ext/standard/tests/file/popen_pclose_basic.phpt sort output should not come first

34. resource id may different

35. STDIN/STDOUT/STDERR not equal to stdin/stdout/stderr

    @see ext/curl/tests/bug48203.phpt output order may different
    @see ext/curl/tests/curl_write_stdout.phpt

36. not support $HTTP_RAW_POST_DATA

37. Input variable nesting level exceeded warning displayed

    php not

38. headers always send at last

    bpc use (with-output-to-string) to buffer php scripts output, so no "Cannot XXX when headers already sent" warning

39. exception throw immediately

    @see ext/session/tests/session_module_name_variation3.phpt

40. var_dump(object) key always double quoted

    @see ext/simplexml/tests/007.phpt

## File uploading / multipart form / rfc1867

1. strict uploading array of files

    `<input>` name only accept `^([-_A-Za-z0-9]+)\\[([-_A-Za-z0-9]*)\\]$`

2. not support anonymous upload

    @see tests/basic/rfc1867_anonymous_upload.phpt

3. rfc1867: all warning/notice reported

    @see php rfc1867.c DEBUG_FILE_UPLOAD

## output buffering

1. chunk_size and buffer_used different

2. php error/warning/notice/... messages unbuffered

3. no ini url_rewriter

## ext/standard

**functions not implemented**

    - array_multisort
    - stream_is_local
    - stream_resolve_include_path
    - pfsockopen
    - getlastmod
    - getmyinode
    - assert_options
    - assert
    - mail
    - ignore_user_abort
    - connection_aborted
    - connection_status
    - php_ini_loaded_file
    - php_ini_scanned_files
    - phpcredits
    - zend_thread_id
    - get_browser

------------------------------------

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
    bpc: unset move iterator to NEXT, and array_walk() then call next(), so NEXT skipped.
    php: @see ext/standard/array.c::php_array_walk()
    @see ext/standard/tests/array/bug61730.phpt

    change array itself in callback function different with php
    bpc continue walk the old array
    php walk the new array
    @see ext/standard/tests/array/bug69068.phpt

11. "Warning: range(): Invalid range supplied: start=~a end=~a" start/end may different

12. crypt()

    bpc simply use the C function `crypt()` + crypt_blowfish(https://www.openwall.com/crypt/), so not support CRYPT_EXT_DES
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

        file_get_contents("https?://xxx")
        stream_socket_client()
        stream_socket_server()
    
    Socket context options:

        tcp_nodelay
        backlog

    SSL context options

        tls_validation_flags @see GTlsCertificateFlags
        peer_name
        cafile
        capture_peer_cert
        local_cert
        local_pk

20. ftell()

    ftell of append-only FILE stream same as C
    @see ext/standard/tests/file/fwrite_variation3.phpt
    
    ftell of string(rfc2397) stream same as bigloo (input-string-port)
    bigloo: 
        if fseek failed, pos not change
        fseek to end, pos is string length - 1
    php:
        if fseek failed, ftell return false, fgetc return false
        fseek to end, pos is string length
    @see ext/standard/tests/file/stream_rfc2397_007.phpt

21. TODO support use_include_path

22. Directory::close/read/rewind accepts none arguments

    php accepts at most one argument

23. not support stream filter

24. not support fseek() on a directory stream

    @see ext/standard/tests/file/fseek_dir_basic.phpt

25. php://fd mode not ignored

    @see ext/standard/tests/file/php_fd_wrapper_02.phpt
    php does ignore the mode parameter for php://fd

26. getlastmod/getmyinode() always return false

27. parse_ini_file/parse_ini_string()
    
    - not support include path searching
    - INI_SCANNER_RAW handle quoted value same as INI_SCANNER_NORMAL/TYPED

        @see ext/standard/tests/file/bug51094.phpt not support half quoted value
        @see ext/standard/tests/file/bug63512.phpt not support quoted value with non-quoted suffix

    - warning message different and return array

        php: syntax error ... return false
        bpc: parse ini error on line ... return array
    
    - non-quoted value always trimmed
    
        @see ext/standard/tests/strings/bug51899.phpt
    
    - not support $variable
    - not support mixed quoted values and constants, or multi constants
    
        @see ext/standard/tests/general_functions/parse_ini_basic.phpt

    - allow = in value
    
        @see ext/standard/tests/general_functions/parse_ini_file.phpt
    
    - not support arithmetical operation
    
        @see ext/standard/tests/general_functions/parse_ini_string_bug76068.phpt

28. server socket

    server socket only valid for the following functions:
    
        fclose()
        stream_socket_accept()
        stream_socket_recvfrom()    // udp/udg only
        stream_socket_sendto()      // udp/udg only
        stream_socket_get_name()
        stream_set_blocking()
        stream_set_timeout()
        stream_select()
    
    server socket metadata mode always "r", php is "r+", FIXME: server socket can be write???

29. stream_socket_client()
    
    not support STREAM_CLIENT_ASYNC_CONNECT

30. stream_socket_* errno different

    as bpc use Gio, errno is g_io_error_from_errno ()

31. stream_socket_sendto/stream_socket_recvfrom()

    error message different
    TODO STREAM_OOB STREAM_PEEK
    recvfrom only set address when success

32. stream_select() return value remove dup streams

33. stream_get_meta_data()

    rfc2397 stream:
        bpc: return eof/unread_bytes status
        php: no eof and unread_bytes always 0

    bpc: only rfc2397 stream and socket/socket-server stream support metadata, dir and file always return false
    php: return metadata array

34. not support file://

35. not support stream context params

36. opendir only support local directory

37. php://memory php://temp

    php://memory is a tmpfile in /run/shm
    php://temp   is a tmpfile in sys_temp_dir
    both of them open mode fixed to "w+"

38. stream_context_get_options/stream_context_set_option() only accept stream-context resource

39. not support glob://

40. no default stream context

41. not support ftp:// or ftps://

42. get_loaded_extensions() no zend_extensions parameter

43. getopt() always use $_SERVER['argv']

44. phpinfo()

    - not support INFO_CREDITS INFO_LICENSE
    - details info may different

45. Stream Socket Transports currently only support tcp, udp, unix, udg, ssl, tls

46. stream_socket_enable_crypto()

    parameter 4 different:
    php: resouce session_stream = null
    bpc: array options = null
    
    parameter 3 crypto_method currently only support:
    STREAM_CRYPTO_METHOD_TLS_CLIENT
    STREAM_CRYPTO_METHOD_TLS_SERVER

47. file_get_contents()

    bpc implements file_get_contents("https?://") by curl extension
    currently not support $http_reponse_header

48. not support php://filter

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

## ext/fileinfo

1. finfo_open()

    bpc not try to open magic_database before call magic_load()
    bpc not capture libmagic warning

2. finfo::__construct()

    php finfo::finfo()

3. finfo_file()

    bpc check filename is path as argument
    php check filename is string as argument, then check is valid path
    
    bpc call magic_file()
    php call magic_stream()

4. mime_content_type()

    for file, bpc call magic_file(), php call magic_stream()

## ext/session

1. session serialize_handler: limited reference support

    php/php_binary support reference in one value
    @see ext/session/tests/session_encode_variation4.phpt
    @see ext/session/tests/session_encode_variation5.phpt
    
    php_serialize support reference in normal case
    @see ext/standard/tests/serialize/bug70219_1.phpt

2. session.save_hanlder session.serialize_handler always have a valid value

    php can set a invalid value and session_start will failed
    bpc ensure valid default value, and ignore invalid settings
    @see ext/session/tests/session_decode_variation3.phpt

3. $_SESSION always exists

    @see ext/session/tests/session_encode_variation1.phpt

4. no ini session.use_trans_sid

5. session save_handler warning message without function name

    @see ext/session/tests/session_save_path_variation2.phpt

6. no ini session.upload_progress.*

7. no $HTTP_SESSION_VARS

## ext/spl

1. ArrayObject iteratorClass should be ArrayIterator

    php allow iterator, but fatal error "Internal compiler error, Class is not child of ArrayObject or ArrayIterator"

2. ArrayObject/ArrayIterator nested array assignment may report undefined index notice

    @see ext/spl/tests/array_026.phpt `$test['d1']['d2'] = 'hello';`
    1) offsetGet('d1') report notice and return NULL
    2) offsetSet('d1', (make-php-hash))
    3) (php-hash-insert! d1-empty-hash "d2" "hello")

3. RecursiveTreeIterator::getEntry not convert recoverable fatal error to UnexpectedValueException

    @see ext/spl/tests/recursive_tree_iterator_007.phpt

4. SPL classes: bpc not check parent constructor if called for subclass methods, but bpc does %parent-construct-guard

    @see ext/spl/tests/bug41828.phpt

5. ArrayObject/ArrayIterator ArrayAccess behavior

    php: if subclass override ArrayAccess method offsetExists, isset() simply call offsetExists(), otherwise not call offsetExists, but check key exists and not null, same as array
    bpc: always call offsetExists
    @see ext/spl/tests/bug61347.phpt

6. iterator current method return false when beyond the end (same as array current function)

    @see ext/spl/tests/bug61527.phpt

7. CallbackFilterIterator callback not support reference

    @see ext/spl/tests/bug72051.phpt
    
## ext/pdo

1. pdo-handle-error pdo-raise-impl-error warning message not include method name

    @see ext/pdo/tests/pdo_034.phpt

2. PDORow

    `new PDORow;` compile error
    `$classname = 'PDORow'; new $classname;` same as php
    @see ext/pdo/tests/pdorow.phpt

3. PDO dsn not support uri:

4. PDO::closeConnection()

    php: `$pdo = null;`
    bpc: `$pdo->closeConnection();`

5. PDOStatement::destroy()

    php: free stmt object when refcount = 0
    bpc: need free manually (call PDOStatement::destroy) or free at page end

## ext/pdo_mysql

1. PDO::getAttribute() not support MYSQL_ATTR_LOCAL_INFILE

2. BIT field will keep raw value, not convert to int string

    @see ext/pdo_mysql/tests/bug75177.phpt

## ext/filter

1. no ini filter.default filter.default_flags

## ext/pcntl

1. not support pcntl_async_signals()

2. currently not support realtime signal

    try bigloo `signal` procedure

## ext/simplexml

1. TODO property/dim write/unset

2. TODO error handler

## ext/iconv

1. not support ob_iconv_handler()

2. no ini iconv.input_encoding iconv.output_encoding

## ext/zip

1. not support ZipArchive::getStream()

2. not support zip_entry_open()

## ext/event

1. throw exception in callback same as failed to invoke callback

## ext/mysqli

1. not support mysqlnd

2. not support mysqli embeded server

3. property handler / result iterator warning message not include context function/method name

4. bpc get_object_vars() call mysql_XXX functions, later call mysql_affected_rows(handle) return -1

    @see ext/mysqli/tests/mysqli_class_mysqli_interface.phpt

5. mysqli_commit/mysqli_rollback name arg ignored
