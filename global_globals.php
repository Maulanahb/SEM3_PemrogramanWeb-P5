<?php
$x = 75;
$y = 25;

function addition() {
    // global $x, $y; // use the global variables
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>