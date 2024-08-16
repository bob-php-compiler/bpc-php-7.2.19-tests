<?php

class C1 { public $var = null ?? A[1]['undefined']['index'] ?? 1; }
class C2 { public $var = null ?? A['undefined']['index'] ?? 2; }
class C3 { public $var = null ?? A[1][0][2] ?? 3; }
class C4 { public $var = A[1][0][2] ?? 4; }
