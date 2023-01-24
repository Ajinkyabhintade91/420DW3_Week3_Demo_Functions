<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Demo_Functions array_functions.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-23
 * (c) Copyright 2023 Marc-Eric Boury 
 */

require_once "helpers/debug_functions.php";

echo "<h2>ARRAY FUNCTIONS</h2>";


// I'm defining a few variables here to use in the examples
$integer_array = [23, 76, 11, 345, 87];
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
$not_an_array = new TestObject();
echo <<<'NOWDOC'
<pre>
// I'm defining a few variables here to use in the examples
$integer_array = [23, 76, 11, 345, 87];
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
$not_an_array = new TestObject();</pre>
NOWDOC;


echo '<p>count($integer_array); results in: '.debug(count($integer_array), false).'</p>';
echo '<p>array_key_exists("second", $associative_array); results in: '.debug(array_key_exists("second", $associative_array), false).'</p>';
echo '<p>array_key_exists(2, $integer_array); results in: '.debug(array_key_exists(2, $integer_array), false).'</p>';
echo '<p>array_keys($associative_array); results in: '.debug(array_keys($associative_array), false).'</p>';
echo '<p>array_search(345, $integer_array); results in: '.debug(array_search(345, $integer_array), false).'</p>';
echo '<p>array_search(18, $integer_array); results in: '.debug(array_search(18, $integer_array), false).'</p>';
echo '<p>is_array($integer_array); results in: '.debug(is_array($integer_array), false).'</p>';
echo '<p>is_array($not_an_array); results in: '.debug(is_array($not_an_array), false).'</p>';
echo '<p>implode(";", $integer_array); results in: '.debug(implode(";", $integer_array), false).'</p>';
echo '<p>implode(" and ", $associative_array); results in: '.debug(implode(" and ", $associative_array), false).'</p>';
echo '<p>explode(";", "11;potato;34.5;x-tended"); results in: '.debug(explode(";", "11;potato;34.5;x-tended"), false).'</p>';
echo '<p>explode("-", "1-2-3-4-5-6"); results in: '.debug(explode("-", "1-2-3-4-5-6"), false).'</p>';

echo '<h4>Array cursor functions:</h4>';

echo '<p>current($associative_array); results in: '.debug(current($associative_array), false).'</p>';
echo '<p>next($associative_array); results in: '.debug(next($associative_array), false).'</p>';
echo '<p>next($associative_array); results in: '.debug(next($associative_array), false).'</p>';
echo '<p>next($associative_array); results in: '.debug(next($associative_array), false).'</p>';
echo '<p>prev($associative_array); results in: '.debug(prev($associative_array), false).'</p>';
echo '<p>end($associative_array); results in: '.debug(end($associative_array), false).'</p>';
echo '<p>reset($associative_array); results in: '.debug(reset($associative_array), false).'</p>';
echo <<<'NOWDOC'
<pre>
$value = current($associative_array);
do {
    if ($value !== false) {
        debug($value);
    }
} while ($value = next($associative_array));
Results in :</pre>
NOWDOC;
$value = current($associative_array);
do {
    if ($value !== false) {
        debug($value);
    }
} while ($value = next($associative_array));


echo '<h4>Array sorting functions (NOTE: I reset the array between each function use):</h4>';
$integer_array = [23, 76, 11, 345, 87];
sort($integer_array);
echo '<p>sort($integer_array); modifies the array into:'.debug($integer_array, false).'</p>';
$integer_array = [23, 76, 11, 345, 87];
rsort($integer_array);
echo '<p>rsort($integer_array); modifies the array into:'.debug($integer_array, false).'</p>';
$integer_array = [23, 76, 11, 345, 87];
asort($integer_array);
echo '<p>asort($integer_array); modifies the array into:'.debug($integer_array, false).'</p>';
$integer_array = [23, 76, 11, 345, 87];
arsort($integer_array);
echo '<p>arsort($integer_array); modifies the array into:'.debug($integer_array, false).'</p>';
$integer_array = [23, 76, 11, 345, 87];
ksort($integer_array);
echo '<p>ksort($integer_array); modifies the array into:'.debug($integer_array, false).'</p>';
$integer_array = [23, 76, 11, 345, 87];
krsort($integer_array);
echo '<p>krsort($integer_array); modifies the array into:'.debug($integer_array, false).'</p>';

$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
sort($associative_array);
echo '<p>sort($associative_array); modifies the array into:'.debug($associative_array, false).'</p>';
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
rsort($associative_array);
echo '<p>rsort($associative_array); modifies the array into:'.debug($associative_array, false).'</p>';
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
asort($associative_array);
echo '<p>asort($associative_array); modifies the array into:'.debug($associative_array, false).'</p>';
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
arsort($associative_array);
echo '<p>arsort($associative_array); modifies the array into:'.debug($associative_array, false).'</p>';
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
ksort($associative_array);
echo '<p>ksort($associative_array); modifies the array into:'.debug($associative_array, false).'</p>';
$associative_array = [
    "first" => "1st",
    "second" => "2nd",
    "third" => "3rd",
    "fourth" => "4th"
];
krsort($associative_array);
echo '<p>krsort($associative_array); modifies the array into:'.debug($associative_array, false).'</p>';
echo <<<'NOWDOC'
<pre>
// Defining an array and a custom callable function that sorts by value
// string length (and checks if both elements are stings)

$varying_key_length_array = [
    "aaa",
    "a",
    "aaaaa",
    "aa",
    "aaaa"
];

$callable = function(mixed $elem1, mixed $elem2) : int {
    if (!is_string($elem1) || !is_string($elem2)) {
        throw new Error("Array elements are not strings.");
    }
    return strlen($elem1) <=> strlen($elem2);
};</pre>
NOWDOC;
$varying_key_length_array = [
    "aaa",
    "a",
    "aaaaa",
    "aa",
    "aaaa"
];

$callable = function(mixed $elem1, mixed $elem2) : int {
    if (!is_string($elem1) || !is_string($elem2)) {
        throw new Error("Array elements are not strings.");
    }
    return strlen($elem1) <=> strlen($elem2);
};
echo '<p>Initial array:'.debug($varying_key_length_array, false).'</p>';
usort($varying_key_length_array, $callable);
echo '<p>usort($varying_key_length_array, $callable); modifies the array into:'.debug($varying_key_length_array, false).'</p>';