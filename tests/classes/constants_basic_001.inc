<?php
/*

 这5行注释是为了让__LINE__不变

*/
class C
{
    const c0 = UNDEFINED;

    const c1 = 1; const c2 = 1.5;
    const c3 =  + 1; const c4 =  + 1.5;
    const c5 = -1; const c6 = -1.5;

    const c7 = __LINE__;
    const c8 = __FILE__;
    const c9 = __CLASS__;
    const c10 = __METHOD__;
    const c11 = __FUNCTION__;

    const c12 = DEFINED;
    const c13 = DEFINED_TO_VAR;
    const c14 = DEFINED_TO_UNDEF_VAR;

    const c15 = "hello1";
    const c16 = 'hello2';
    const c17 = C::c16;
    const c18 = self::c17;
}
