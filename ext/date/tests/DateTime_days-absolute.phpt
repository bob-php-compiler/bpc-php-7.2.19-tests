--TEST--
DateTime::diff() days -- absolute
--CREDITS--
Daniel Convissor <danielc@php.net>
--ARGS--
--bpc-include-file ext/date/tests/examine_diff.inc --bpc-include-file ext/date/tests/DateTime_data-absolute.inc
--FILE--
<?php

require 'examine_diff.inc';
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_DAYS);
require 'DateTime_data-absolute.inc';

?>
--EXPECT--
test_absolute_7: DAYS: **7**
test_absolute_negative_7: DAYS: **7**
