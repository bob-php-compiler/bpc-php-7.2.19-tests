对phpt的更改仅限于以下几种情况:

## runtime

1. Too few arguments

    compile error (functions) or runtime error (functions/methods)

2. Too many arguments

    compile error (functions) or runtime warning (functions/no default value methods)
    default value methods is fine

3. SKIP GOTO

    bpc does not support GOTO

4. __destruct

    compile time warning and run as shutdown function

5. FILE and LINE

    

6. unset static property

    compile error

7. TODO

    will support in the future

8. Using $this when not in object context

    compile error

9. No Undefined variable

    bpc init all variables to NULL, so No Undefined variable

10. output length

    bpc encrypted php script filename and function name, so exception/error output length not match

11. argument type error message

12. __FILE__ not exists

    bpc encrypted php script filename and compile php scripts to one final binary, so __FILE__ not exists

13. SKIP Reflection

    bpc does not support Reflection

14. --bpc-include-file

    include file need pass via --bpc-include-file

15. object id

    bpc's gc different with php's gc, so object ids may not equal

16. ini extra semicolon

17. array declare

    bpc only support array(), not support []

18. namespace

    bpc does not support namespace

19. declare

    bpc does not support declare

20. ini not support constant

21. define constant

    bpc not support const CONSTANT

22. SKIP GC_FLAGS

23. closure no use

    bpc not support use syntax

24. Null Coalescing Operator

    bpc not support Null Coalescing Operator

25. Only variables can be passed by reference

    compile error or runtime error

26. php-7.2.19 object to string error

    php-7.4.16 throw exception

27. debug_zval_dump is var_dump

    bpc not support debug_zval_dump, debug_zval_dump is an alias of var_dump

28. php-7.4.16 var_dump recursion different with php-7.2.19

## ext/date

1. ini_set date.timezone warning message

    php's warning message "Invalid date.timezone value '%s', we selected the timezone 'UTC' for now." is incorrect.
    timezone not change.

## ext/mbstring

1. skip mbstring regex,kana,http,mail

2. mbstring not support function overload

3. mbstring can handle recursion
