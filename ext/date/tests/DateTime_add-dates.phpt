--TEST--
DateTime::add() -- dates
--CREDITS--
Daniel Convissor <danielc@php.net>
--ARGS--
--bpc-include-file ext/date/tests/examine_diff.inc --bpc-include-file ext/date/tests/DateTime_data-dates.inc
--FILE--
<?php

require 'examine_diff.inc';
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
require 'DateTime_data-dates.inc';

?>
--EXPECT--
test__7: ADD: 2009-01-07 00:00:00 EST + P+0Y0M7DT0H0M0S = **2009-01-14 00:00:00 EST**
test_years_positive__7_by_0_day: ADD: 2000-02-07 00:00:00 EST + P+7Y0M0DT0H0M0S = **2007-02-07 00:00:00 EST**
test_years_positive__7_by_1_day: ADD: 2000-02-07 00:00:00 EST + P+7Y0M1DT0H0M0S = **2007-02-08 00:00:00 EST**
test_years_positive__6_shy_1_day: ADD: 2000-02-07 00:00:00 EST + P+6Y11M30DT0H0M0S = **2007-02-06 00:00:00 EST**
test_years_positive__7_by_1_month: ADD: 2000-02-07 00:00:00 EST + P+7Y1M0DT0H0M0S = **2007-03-07 00:00:00 EST**
test_years_positive__6_shy_1_month: ADD: 2000-02-07 00:00:00 EST + P+6Y11M0DT0H0M0S = **2007-01-07 00:00:00 EST**
test_years_positive__7_by_1_month_split_newyear: ADD: 1999-12-07 00:00:00 EST + P+7Y1M0DT0H0M0S = **2007-01-07 00:00:00 EST**
test_years_positive__6_shy_1_month_split_newyear: ADD: 2000-01-07 00:00:00 EST + P+6Y11M0DT0H0M0S = **2006-12-07 00:00:00 EST**
test_negative__7: ADD: 2009-01-14 00:00:00 EST + P-0Y0M7DT0H0M0S = **2009-01-07 00:00:00 EST**
test_years_negative__7_by_0_day: ADD: 2007-02-07 00:00:00 EST + P-7Y0M0DT0H0M0S = **2000-02-07 00:00:00 EST**
test_years_negative__7_by_1_day: ADD: 2007-02-08 00:00:00 EST + P-7Y0M1DT0H0M0S = **2000-02-07 00:00:00 EST**
test_years_negative__6_shy_1_day: ADD: 2007-02-06 00:00:00 EST + P-6Y11M28DT0H0M0S = **2000-02-07 00:00:00 EST**
test_years_negative__7_by_1_month: ADD: 2007-03-07 00:00:00 EST + P-7Y1M0DT0H0M0S = **2000-02-07 00:00:00 EST**
test_years_negative__6_shy_1_month: ADD: 2007-01-07 00:00:00 EST + P-6Y11M0DT0H0M0S = **2000-02-07 00:00:00 EST**
test_years_negative__7_by_1_month_split_newyear: ADD: 2007-01-07 00:00:00 EST + P-7Y1M0DT0H0M0S = **1999-12-07 00:00:00 EST**
test_years_negative__6_shy_1_month_split_newyear: ADD: 2006-12-07 00:00:00 EST + P-6Y11M0DT0H0M0S = **2000-01-07 00:00:00 EST**
