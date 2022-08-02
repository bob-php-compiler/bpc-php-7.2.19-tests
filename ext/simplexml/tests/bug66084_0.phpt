--TEST--
Bug #66084 simplexml_load_string() mangles empty node name, var_dump variant
--FILE--
<?php
echo var_dump(simplexml_load_string('<a><b/><c><x/></c></a>')), "\n";
echo var_dump(simplexml_load_string('<a><b/><d/><c><x/></c></a>')), "\n";
echo var_dump(simplexml_load_string('<a><b/><c><d/><x/></c></a>')), "\n";
echo var_dump(simplexml_load_string('<a><b/><c><d><x/></d></c></a>')), "\n";
?>
--EXPECTF--
object(SimpleXMLElement)#%d (2) {
  ["b"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["c"]=>
  object(SimpleXMLElement)#%d (1) {
    ["x"]=>
    object(SimpleXMLElement)#%d (0) {
    }
  }
}

object(SimpleXMLElement)#%d (3) {
  ["b"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["d"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["c"]=>
  object(SimpleXMLElement)#%d (1) {
    ["x"]=>
    object(SimpleXMLElement)#%d (0) {
    }
  }
}

object(SimpleXMLElement)#%d (2) {
  ["b"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["c"]=>
  object(SimpleXMLElement)#%d (2) {
    ["d"]=>
    object(SimpleXMLElement)#%d (0) {
    }
    ["x"]=>
    object(SimpleXMLElement)#%d (0) {
    }
  }
}

object(SimpleXMLElement)#%d (2) {
  ["b"]=>
  object(SimpleXMLElement)#%d (0) {
  }
  ["c"]=>
  object(SimpleXMLElement)#%d (1) {
    ["d"]=>
    object(SimpleXMLElement)#%d (1) {
      ["x"]=>
      object(SimpleXMLElement)#%d (0) {
      }
    }
  }
}
