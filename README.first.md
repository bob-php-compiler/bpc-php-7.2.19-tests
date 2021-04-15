对phpt的更改仅限于以下几种情况:

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
