<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Demo_Functions math_functions.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-23
 * (c) Copyright 2023 Marc-Eric Boury 
 */

require_once "helpers/debug_functions.php";

echo "<h2>MATH FUNCTIONS</h2>";


// I'm defining a few variables here to use in the examples
$integer_array = [23, 76, 11, 345, 87];
echo <<<'NOWDOC'
<pre>
// I'm defining a few variables here to use in the examples
$integer_array = [23, 76, 11, 345, 87];</pre>
NOWDOC;


echo '<p>min(32, 15, 45, 123, 12); results in: '.debug(min(32, 15, 45, 123, 12), false).'</p>';
echo '<p>max(32, 15, 45, 123, 12); results in: '.debug(max(32, 15, 45, 123, 12), false).'</p>';
echo '<p>min($integer_array); results in: '.debug(min($integer_array), false).'</p>';
echo '<p>max($integer_array); results in: '.debug(max($integer_array), false).'</p>';
echo '<p>abs(12); results in: '.debug(abs(12), false).'</p>';
echo '<p>abs(-55); results in: '.debug(abs(-55), false).'</p>';
echo '<p>round(12.785, 2, PHP_ROUND_HALF_UP); results in: '.debug(round(12.785, 2, PHP_ROUND_HALF_UP), false).'</p>';
echo '<p>round(12.785, 2, PHP_ROUND_HALF_DOWN); results in: '.debug(round(12.785, 2, PHP_ROUND_HALF_DOWN), false).'</p>';
echo '<p>round(12.785, 2, PHP_ROUND_HALF_EVEN); results in: '.debug(round(12.785, 2, PHP_ROUND_HALF_EVEN), false).'</p>';
echo '<p>round(12.784, 2, PHP_ROUND_HALF_EVEN); results in: '.debug(round(12.784, 2, PHP_ROUND_HALF_EVEN), false).'</p>';
echo '<p>ceil(12.5); results in: '.debug(ceil(12.5), false).'</p>';
echo '<p>floor(12.5); results in: '.debug(floor(12.5), false).'</p>';
echo '<p>pow(2, 5); results in: '.debug(pow(2, 5), false).'</p>';

echo '<h4>Random numbers:</h4>';

echo '<p>rand(); results in: '.debug(rand(), false).'</p>';
echo '<p>rand(); results in: '.debug(rand(), false).'</p>';
echo '<p>rand(); results in: '.debug(rand(), false).'</p>';
echo '<p>rand(0, 10); results in: '.debug(rand(0, 10), false).'</p>';
echo '<p>rand(0, 10); results in: '.debug(rand(0, 10), false).'</p>';
echo '<p>rand(0, 10); results in: '.debug(rand(0, 10), false).'</p>';
try {
    echo '<p>random_int(0, 10); results in: '.debug(random_int(0, 10), false).'</p>';
    echo '<p>random_int(0, 10); results in: '.debug(random_int(0, 10), false).'</p>';
    echo '<p>random_int(0, 10); results in: '.debug(random_int(0, 10), false).'</p>';
} catch (Exception $excep) {
    echo '<span style="color: red;">'.$excep->getTraceAsString().'</span>';
}