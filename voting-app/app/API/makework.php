<?php

$bigN = 1000000;
$x = 0.0001;

for($i = 0; $i < $bigN; $i++){
    $x += sqrt($x);
}

echo "OK!";