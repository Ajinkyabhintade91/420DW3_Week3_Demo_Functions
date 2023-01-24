<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Demo_Functions var_handling_functions.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-23
 * (c) Copyright 2023 Marc-Eric Boury 
 */

require_once "helpers/debug_functions.php";

echo "<h2>VARIABLE HANDLING FUNCTIONS</h2>";

// I'm defining a few variables here to use in the examples
$a_set_variable = 5;
$a_var_to_unset = 10;
$an_empty_variable = 0;
$a_null_variable = null;
$an_bool_variable = true;
$an_int_variable = 10;
$a_float_variable = 1.2345;
$a_string_variable = "hello";
$an_array_variable = [1, 2, "potato"];
$an_object_variable = new TestObject();
$a_settype_variable = 10;
echo <<<'NOWDOC'
<pre>
// I'm defining a few variables here to use in the examples
$a_set_variable = 5;
$a_var_to_unset = 10;
$an_empty_variable = 0;
$a_null_variable = null;
$an_bool_variable = true;
$an_int_variable = 10;
$a_float_variable = 1.2345;
$a_string_variable = "hello";
$an_array_variable = [1, 2, "potato"];
$an_object_variable = new TestObject();
$a_settype_variable = 10;</pre>
NOWDOC;

echo '<p>isset($a_set_variable); results in: '.debug(isset($a_set_variable), false).'</p>';
echo '<p>isset($a_null_variable); results in: '.debug(isset($a_null_variable), false).'</p>';
echo '<p>isset($undefined_variable); results in: '.debug(isset($undefined_variable), false).'</p>';
echo '<p>isset($a_var_to_unset); results in: '.debug(isset($a_var_to_unset), false).'</p>';
echo '<pre>unset($a_var_to_unset);</pre>';
unset($a_var_to_unset);
echo '<p> now isset($a_var_to_unset); results in: '.debug(isset($a_var_to_unset), false).'</p>';
echo '<p>empty($a_set_variable); results in: '.debug(empty($a_set_variable), false).'</p>';
echo '<p>empty($an_empty_variable); results in: '.debug(empty($an_empty_variable), false).'</p>';
echo '<p>var_dump($an_object_variable); results in: </p>';
var_dump($an_object_variable);
echo '<p>var_export($an_object_variable, true); results in: <br/>'.var_export($an_object_variable, true).'</p>';
echo '<p>gettype($a_null_variable); results in: '.debug(gettype($a_null_variable), false).'</p>';
echo '<p>gettype($an_bool_variable); results in: '.debug(gettype($an_bool_variable), false).'</p>';
echo '<p>gettype($an_int_variable); results in: '.debug(gettype($an_int_variable), false).'</p>';
echo '<p>gettype($a_float_variable); results in: '.debug(gettype($a_float_variable), false).'</p>';
echo '<p>gettype($a_string_variable); results in: '.debug(gettype($a_string_variable), false).'</p>';
echo '<p>gettype($an_array_variable); results in: '.debug(gettype($an_array_variable), false).'</p>';
echo '<p>gettype($an_object_variable); results in: '.debug(gettype($an_object_variable), false).'</p>';
echo '<p>gettype($a_settype_variable); results in: '.debug(gettype($a_settype_variable), false).'</p>';
echo '<pre>settype($a_settype_variable, "double");</pre>';
settype($a_settype_variable, "double");
echo '<p>gettype($a_settype_variable); results in: '.debug(gettype($a_settype_variable), false).'</p>';
echo '<p>is_a($an_object_variable, TestObject::class); results in: '.debug(is_a($an_object_variable, TestObject::class), false).'</p>';
echo '<p>is_a($an_object_variable, Throwable::class); results in: '.debug(is_a($an_object_variable, Throwable::class), false).'</p>';
