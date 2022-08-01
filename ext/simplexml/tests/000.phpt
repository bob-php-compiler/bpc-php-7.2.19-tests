--TEST--
SimpleXML: var_dump()
--SKIPIF--
<?php if (!extension_loaded("simplexml")) print "skip"; ?>
--FILE--
<?php

$sxe = simplexml_load_file('000.xml');

// test('sxe')
echo "===sxe\n";
var_dump(isset($sxe));
var_dump((bool)$sxe);
if (isset($sxe)) var_dump(count($sxe));
var_dump($sxe);
//test('sxe->elem1');
echo "===sxe->elem1\n";
var_dump(isset($sxe->elem1));
var_dump((bool)$sxe->elem1);
if (isset($sxe->elem1)) var_dump(count($sxe->elem1));
var_dump($sxe->elem1);
//test('sxe->elem1[0]');
echo "===sxe->elem1[0]\n";
var_dump(isset($sxe->elem1[0]));
var_dump((bool)$sxe->elem1[0]);
if (isset($sxe->elem1[0])) var_dump(count($sxe->elem1[0]));
var_dump($sxe->elem1[0]);
//test('sxe->elem1[0]->elem2');
echo "===sxe->elem1[0]->elem2\n";
var_dump(isset($sxe->elem1[0]->elem2));
var_dump((bool)$sxe->elem1[0]->elem2);
if (isset($sxe->elem1[0]->elem2)) var_dump(count($sxe->elem1[0]->elem2));
var_dump($sxe->elem1[0]->elem2);
//test('sxe->elem1[0]->elem2->bla');
echo "===sxe->elem1[0]->elem2->bla\n";
var_dump(isset($sxe->elem1[0]->elem2->bla));
var_dump((bool)$sxe->elem1[0]->elem2->bla);
if (isset($sxe->elem1[0]->elem2->bla)) var_dump(count($sxe->elem1[0]->elem2->bla));
var_dump($sxe->elem1[0]->elem2->bla);
//if (!ini_get("unicode_semantics")) test('sxe->elem1[0]["attr1"]');
echo "===sxe->elem1[0][\"attr1\"]\n";
var_dump(isset($sxe->elem1[0]["attr1"]));
var_dump((bool)$sxe->elem1[0]["attr1"]);
if (isset($sxe->elem1[0]["attr1"])) var_dump(count($sxe->elem1[0]["attr1"]));
var_dump($sxe->elem1[0]["attr1"]);
//test('sxe->elem1[0]->attr1');
echo "===sxe->elem1[0]->attr1\n";
var_dump(isset($sxe->elem1[0]->attr1));
var_dump((bool)$sxe->elem1[0]->attr1);
if (isset($sxe->elem1[0]->attr1)) var_dump(count($sxe->elem1[0]->attr1));
var_dump($sxe->elem1[0]->attr1);
//test('sxe->elem1[1]');
echo "===sxe->elem1[1]\n";
var_dump(isset($sxe->elem1[1]));
var_dump((bool)$sxe->elem1[1]);
if (isset($sxe->elem1[1])) var_dump(count($sxe->elem1[1]));
var_dump($sxe->elem1[1]);
//test('sxe->elem1[2]');
echo "===sxe->elem1[2]\n";
var_dump(isset($sxe->elem1[2]));
var_dump((bool)$sxe->elem1[2]);
if (isset($sxe->elem1[2])) var_dump(count($sxe->elem1[2]));
var_dump($sxe->elem1[2]);
//test('sxe->elem11');
echo "===sxe->elem11\n";
var_dump(isset($sxe->elem11));
var_dump((bool)$sxe->elem11);
if (isset($sxe->elem11)) var_dump(count($sxe->elem11));
var_dump($sxe->elem11);
//test('sxe->elem11->elem111');
echo "===sxe->elem11->elem111\n";
var_dump(isset($sxe->elem11->elem111));
var_dump((bool)$sxe->elem11->elem111);
if (isset($sxe->elem11->elem111)) var_dump(count($sxe->elem11->elem111));
var_dump($sxe->elem11->elem111);
//test('sxe->elem11->elem111->elem1111');
echo "===sxe->elem11->elem111->elem1111\n";
var_dump(isset($sxe->elem11->elem111->elem1111));
var_dump((bool)$sxe->elem11->elem111->elem1111);
if (isset($sxe->elem11->elem111->elem1111)) var_dump(count($sxe->elem11->elem111->elem1111));
var_dump($sxe->elem11->elem111->elem1111);
//test('sxe->elem22');
echo "===sxe->elem22\n";
var_dump(isset($sxe->elem22));
var_dump((bool)$sxe->elem22);
if (isset($sxe->elem22)) var_dump(count($sxe->elem22));
var_dump($sxe->elem22);
//test('sxe->elem22->elem222');
echo "===sxe->elem22->elem222\n";
var_dump(isset($sxe->elem22->elem222));
var_dump((bool)$sxe->elem22->elem222);
if (isset($sxe->elem22->elem222)) var_dump(count($sxe->elem22->elem222));
var_dump($sxe->elem22->elem222);
//test('sxe->elem22->attr22');
echo "===sxe->elem22->attr22\n";
var_dump(isset($sxe->elem22->attr22));
var_dump((bool)$sxe->elem22->attr22);
if (isset($sxe->elem22->attr22)) var_dump(count($sxe->elem22->attr22));
var_dump($sxe->elem22->attr22);
//test('sxe->elem22["attr22"]');
echo "===sxe->elem22[\"attr22\"]\n";
var_dump(isset($sxe->elem22["attr22"]));
var_dump((bool)$sxe->elem22["attr22"]);
if (isset($sxe->elem22["attr22"])) var_dump(count($sxe->elem22["attr22"]));
var_dump($sxe->elem22["attr22"]);

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
===sxe
bool(true)
bool(true)
int(3)
object(SimpleXMLElement)#%d (3) {
  ["@attributes"]=>
  array(1) {
    ["id"]=>
    string(3) "123"
  }
  ["elem1"]=>
  array(2) {
    [0]=>
    string(36) "There is some text.Here is some more"
    [1]=>
    object(SimpleXMLElement)#%d (1) {
      ["@attributes"]=>
      array(2) {
        ["attr1"]=>
        string(2) "11"
        ["attr2"]=>
        string(2) "12"
      }
    }
  }
  ["elem11"]=>
  object(SimpleXMLElement)#%d (1) {
    ["elem111"]=>
    object(SimpleXMLElement)#%d (1) {
      ["elem1111"]=>
      object(SimpleXMLElement)#%d (0) {
      }
    }
  }
}
===sxe->elem1
bool(true)
bool(true)
int(2)
object(SimpleXMLElement)#%d (3) {
  ["@attributes"]=>
  array(2) {
    ["attr1"]=>
    string(5) "first"
    ["attr2"]=>
    string(6) "second"
  }
  ["comment"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["elem2"]=>
  object(SimpleXMLElement)#%d (2) {
    ["@attributes"]=>
    array(2) {
      ["att25"]=>
      string(2) "25"
      ["att42"]=>
      string(2) "42"
    }
    ["elem3"]=>
    object(SimpleXMLElement)#%d (1) {
      ["elem4"]=>
      object(SimpleXMLElement)#%d (1) {
        ["test"]=>
        object(SimpleXMLElement)#%d (0) {
        }
      }
    }
  }
}
===sxe->elem1[0]
bool(true)
bool(true)
int(1)
object(SimpleXMLElement)#%d (3) {
  ["@attributes"]=>
  array(2) {
    ["attr1"]=>
    string(5) "first"
    ["attr2"]=>
    string(6) "second"
  }
  ["comment"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["elem2"]=>
  object(SimpleXMLElement)#%d (2) {
    ["@attributes"]=>
    array(2) {
      ["att25"]=>
      string(2) "25"
      ["att42"]=>
      string(2) "42"
    }
    ["elem3"]=>
    object(SimpleXMLElement)#%d (1) {
      ["elem4"]=>
      object(SimpleXMLElement)#%d (1) {
        ["test"]=>
        object(SimpleXMLElement)#%d (0) {
        }
      }
    }
  }
}
===sxe->elem1[0]->elem2
bool(true)
bool(true)
int(1)
object(SimpleXMLElement)#%d (2) {
  ["@attributes"]=>
  array(2) {
    ["att25"]=>
    string(2) "25"
    ["att42"]=>
    string(2) "42"
  }
  ["elem3"]=>
  object(SimpleXMLElement)#%d (1) {
    ["elem4"]=>
    object(SimpleXMLElement)#%d (1) {
      ["test"]=>
      object(SimpleXMLElement)#%d (0) {
      }
    }
  }
}
===sxe->elem1[0]->elem2->bla
bool(false)
bool(false)
object(SimpleXMLElement)#%d (0) {
}
===sxe->elem1[0]["attr1"]
bool(true)
bool(true)
int(0)
object(SimpleXMLElement)#%d (1) {
  ["0"]=>
  string(5) "first"
}
===sxe->elem1[0]->attr1
bool(false)
bool(false)
object(SimpleXMLElement)#%d (0) {
}
===sxe->elem1[1]
bool(true)
bool(true)
int(0)
object(SimpleXMLElement)#%d (1) {
  ["@attributes"]=>
  array(2) {
    ["attr1"]=>
    string(2) "11"
    ["attr2"]=>
    string(2) "12"
  }
}
===sxe->elem1[2]
bool(false)
bool(false)
NULL
===sxe->elem11
bool(true)
bool(true)
int(1)
object(SimpleXMLElement)#%d (1) {
  ["elem111"]=>
  object(SimpleXMLElement)#%d (1) {
    ["elem1111"]=>
    object(SimpleXMLElement)#%d (0) {
    }
  }
}
===sxe->elem11->elem111
bool(true)
bool(true)
int(1)
object(SimpleXMLElement)#%d (1) {
  ["elem1111"]=>
  object(SimpleXMLElement)#%d (0) {
  }
}
===sxe->elem11->elem111->elem1111
bool(true)
bool(true)
int(1)
object(SimpleXMLElement)#%d (0) {
}
===sxe->elem22
bool(false)
bool(false)
object(SimpleXMLElement)#%d (0) {
}
===sxe->elem22->elem222
bool(false)
bool(false)
NULL
===sxe->elem22->attr22
bool(false)
bool(false)
NULL
===sxe->elem22["attr22"]
bool(false)
bool(false)
NULL
===DONE===
