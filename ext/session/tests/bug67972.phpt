--TEST--
Bug #67972: SessionHandler Invalid memory read create_sid()
--FILE--
<?php

(new SessionHandler)->create_sid();
--EXPECTF--
Warning: SessionHandler::create_sid(): Session is not active in %s on line %d
