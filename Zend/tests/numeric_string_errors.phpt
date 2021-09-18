--TEST--
Invalid numeric string E_WARNINGs and E_NOTICEs
--FILE--
<?php

var_dump("2 Lorem" + "3 ipsum");
var_dump("dolor" + "sit");
echo "---", PHP_EOL;
var_dump("5 amet," - "7 consectetur");
var_dump("adipiscing" - "elit,");
echo "---", PHP_EOL;
var_dump("11 sed" * "13 do");
var_dump("eiusmod" * "tempor");
echo "---", PHP_EOL;
var_dump("17 incididunt" / "19 ut");
var_dump("labore" / "et");
echo "---", PHP_EOL;
var_dump("23 dolore" ** "29 magna");
var_dump("aliqua." ** "Ut");
echo "---", PHP_EOL;
var_dump("31 enim" % "37 ad");
echo "---", PHP_EOL;
var_dump("41 minim" << "43 veniam,");
var_dump("quis" << "nostrud");
echo "---", PHP_EOL;
var_dump("47 exercitation" >> "53 ullamco");
var_dump("laboris" >> "nisi");
echo "---", PHP_EOL;
var_dump("59 ut" | 61);
var_dump(67 | "71 aliquip");
var_dump("ex" | 73);
var_dump(79 | "ea");
echo "---", PHP_EOL;
var_dump("83 commodo" & 89);
var_dump(97 & "101 consequat.");
var_dump("Duis" & 103);
var_dump(107 & "aute");
echo "---", PHP_EOL;
var_dump("109 irure" ^ 113);
var_dump(127 ^ "131 dolor");
var_dump("in" ^ 137);
var_dump(139 ^ "reprehenderit");
echo "---", PHP_EOL;
var_dump(+"149 in");
var_dump(+"voluptate");
echo "---", PHP_EOL;
var_dump(-"151 velit");
var_dump(-"esse");
?>
--EXPECTF--
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
Division by zero
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
A non well formed numeric value encountered
A non-numeric value encountered
int(5)
int(0)
---
int(-2)
int(0)
---
int(143)
int(0)
---
float(0.89473684210526)
float(NAN)
---
float(3.0910586430935E+39)
int(1)
---
int(31)
---
int(%d)
int(0)
---
int(0)
int(0)
---
int(63)
int(71)
int(73)
int(79)
---
int(81)
int(97)
int(0)
int(0)
---
int(28)
int(252)
int(137)
int(139)
---
int(149)
int(0)
---
int(-151)
int(0)
