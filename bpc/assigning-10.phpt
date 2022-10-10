--TEST--
assigning tests
--FILE--
<?php

class A
{
    public function __construct($prop, $value)
    {
        $this->$prop = $value;
    }
}

$arr = array(
    'true'             => true,
    'int'              => 1,
    'float'            => 1.1,
    'non_empty_string' => 'string',
    'array'            => array(),
    'resource'         => fopen('/proc/self/comm', 'r')
);

foreach ($arr as $k => $v) {
    echo "==postcrement==\n";

    $a = new A($k, $v);
    var_dump($a->$k->q[0]++);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0]--);
    var_dump($a);

    echo "==precrement==\n";

    $a = new A($k, $v);
    var_dump(++$a->$k->q[0]);
    var_dump($a);

    $a = new A($k, $v);
    var_dump(--$a->$k->q[0]);
    var_dump($a);

    echo "==assigning-string-cat==\n";

    $a = new A($k, $v);
    var_dump($a->$k->q[0] .= 'A');
    var_dump($a);

    echo "==assigning-arithmetic-op==\n";

    $a = new A($k, $v);
    var_dump($a->$k->q[0] += 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] -= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] *= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] /= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] %= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] **= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] <<= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] |= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] ^= 2);
    var_dump($a);

    $a = new A($k, $v);
    var_dump($a->$k->q[0] &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 24
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 28
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}
==precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 34
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 38
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}
==assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 44
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}
==assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 50
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 58
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 62
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 66
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 70
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 74
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 78
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 82
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 86
NULL
object(A)#%d (1) {
  ["true"]=>
  bool(true)
}
==postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 24
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 28
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}
==precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 34
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 38
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}
==assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 44
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}
==assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 50
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 58
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 62
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 66
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 70
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 74
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 78
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 82
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 86
NULL
object(A)#%d (1) {
  ["int"]=>
  int(1)
}
==postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 24
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 28
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}
==precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 34
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 38
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}
==assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 44
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}
==assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 50
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 58
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 62
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 66
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 70
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 74
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 78
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 82
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 86
NULL
object(A)#%d (1) {
  ["float"]=>
  float(1.1)
}
==postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 24
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 28
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}
==precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 34
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 38
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}
==assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 44
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}
==assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 50
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 58
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 62
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 66
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 70
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 74
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 78
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 82
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}

Warning: Attempt to modify property 'q' of non-object in %s on line 86
NULL
object(A)#%d (1) {
  ["non_empty_string"]=>
  string(6) "string"
}
==postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 24
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 28
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}
==precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 34
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 38
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}
==assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 44
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}
==assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 50
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 58
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 62
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 66
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 70
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 74
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 78
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 82
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}

Warning: Attempt to modify property 'q' of non-object in %s on line 86
NULL
object(A)#%d (1) {
  ["array"]=>
  array(0) {
  }
}
==postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 24
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 28
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}
==precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 34
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 38
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}
==assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 44
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}
==assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 50
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 58
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 62
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 66
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 70
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 74
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 78
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 82
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}

Warning: Attempt to modify property 'q' of non-object in %s on line 86
NULL
object(A)#%d (1) {
  ["resource"]=>
  resource(%d) of type (stream)
}
