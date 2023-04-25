--TEST--
Check for event configuration features
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == "WIN") die('skip Not for Windows');
?>
--FILE--
<?php
$eventConfigClass = EVENT_NS . '\\EventConfig';
$eventBaseClass = EVENT_NS . '\\EventBase';

$cfg = new $eventConfigClass();

if ($cfg->requireFeatures($eventConfigClass::FEATURE_FDS)) {
	$base = new $eventBaseClass($cfg);

	if ($base->getFeatures() & $eventConfigClass::FEATURE_FDS) {
		echo "FDS\n";
	}
}

if ($cfg->requireFeatures($eventConfigClass::FEATURE_ET)) {
	$base = new $eventBaseClass($cfg);

	if ($base->getFeatures() & $eventConfigClass::FEATURE_ET) {
		echo "ET\n";
	}
}

if ($cfg->requireFeatures($eventConfigClass::FEATURE_O1)) {
	$base = new $eventBaseClass($cfg);

	if ($base->getFeatures() & $eventConfigClass::FEATURE_O1) {
		echo "O1\n";
	}
}
?>
--EXPECT--
FDS
ET
O1
