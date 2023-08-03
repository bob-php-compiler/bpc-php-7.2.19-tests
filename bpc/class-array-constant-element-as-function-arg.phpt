--TEST--
class array constant element as function argument
--ARGS--
--bpc-include-file bpc/f.inc \
--FILE--
<?php

include __DIR__ . '/f.inc';

function my_dump($var)
{
    var_dump($var);
}

class WP_Theme_JSON
{
    const PROTECTED_PROPERTIES = array('a' => true);

    public static function compute_style_properties()
    {
        var_dump(static::PROTECTED_PROPERTIES['a']);
        my_dump(static::PROTECTED_PROPERTIES['a']);
        f(static::PROTECTED_PROPERTIES['a']);
    }
}

WP_Theme_JSON::compute_style_properties();

?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
