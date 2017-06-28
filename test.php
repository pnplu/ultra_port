<?php

require_once __DIR__."/app/autoload.php";

use Ultraline\Math;

$use_c = new Math();

$ans = $use_c->sum_m(4, 12);

echo $ans;

 ?>
