对phpt的更改仅限于以下几种情况:

1. Too few arguments

    compile error

2. Too many arguments

    compile error or runtime warning

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
