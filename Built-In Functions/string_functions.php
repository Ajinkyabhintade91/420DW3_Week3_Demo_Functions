<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Demo_Functions string_functions.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-23
 * (c) Copyright 2023 Marc-Eric Boury 
 */

require_once "helpers/debug_functions.php";

echo "<h2>STRING FUNCTIONS</h2>";


// I'm defining a few variables here to use in the examples
$a_string = "hello world!";
$mixed_case_string = "HeLlO wOrLd!";
$formatable_string = "the price is %.2f %s";
$trimmable_string = "   trimming time    ";
$numeric_string = "12.55";
echo <<<'NOWDOC'
<pre>
// I'm defining a few variables here to use in the examples
$a_string = "hello world!";
$mixed_case_string = "HeLlO wOrLd!";
$formatable_string = "the price is %.2f %s";
$trimmable_string = "   trimming time    ";
$numeric_string = "12.55";</pre>
NOWDOC;



echo '<p>strlen($a_string); results in: '.debug(strlen($a_string), false).'</p>';
echo '<p>strpos($a_string, "world"); results in: '.debug(strpos($a_string, "world"), false).'</p>';
echo '<p>strpos($a_string, "o"); results in: '.debug(strpos($a_string, "o"), false).'</p>';
echo '<p>strpos($a_string, "o", 5); results in: '.debug(strpos($a_string, "o", 5), false).'</p>';
echo '<p>strtolower($mixed_case_string); results in: '.debug(strtolower($mixed_case_string), false).'</p>';
echo '<p>strtoupper($mixed_case_string); results in: '.debug(strtoupper($mixed_case_string), false).'</p>';
echo '<p>str_contains($a_string, "world"); results in: '.debug(str_contains($a_string, "world"), false).'</p>';
echo '<p>str_contains($a_string, "potato"); results in: '.debug(str_contains($a_string, "potato"), false).'</p>';
echo '<p>str_replace("world", "potato", $a_string); results in: '.debug(str_replace("world", "potato", $a_string), false).'</p>';
echo '<p>sprintf($formatable_string, 19.9950, \'$CAD\'); results in: '.debug(sprintf($formatable_string, 19.9950, '$CAD'), false).'</p>';
echo '<p>sprintf($formatable_string, 1.25, \'USD$\'); results in: '.debug(sprintf($formatable_string, 1.25, 'USD$'), false).'</p>';
echo '<p>rtrim($trimmable_string); results in: '.debug(rtrim($trimmable_string), false).'</p>';
echo '<p>ltrim($trimmable_string); results in: '.debug(ltrim($trimmable_string), false).'</p>';
echo '<p>trim($trimmable_string); results in: '.debug(trim($trimmable_string), false).'</p>';
echo '<p>is_numeric($a_string); results in: '.debug(is_numeric($a_string), false).'</p>';
echo '<p>is_numeric($numeric_string); results in: '.debug(is_numeric($numeric_string), false).'</p>';


