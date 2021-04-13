--TEST--
DateTime::diff() days -- massive
--CREDITS--
Daniel Convissor <danielc@php.net>
--ARGS--
--bpc-include-file ext/date/tests/examine_diff.inc --bpc-include-file ext/date/tests/DateTime_data-massive.inc
--FILE--
<?php

require 'examine_diff.inc';
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_DAYS);
require 'DateTime_data-massive.inc';

?>
--EXPECT--
test_massive_positive: DAYS: **243494757**
test_massive_negative: DAYS: **243494757**
