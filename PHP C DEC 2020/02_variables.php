<?php

// What is a variable


// Variable types..String Integer Float Boolean Null Array Object Resource
//$name = "George";
//$age = 23;
// Declare variables
$name = "George";
$age = 23;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';

// Print the whole variable
var_dump($name, $age, $salary, $height) . '<br><br>';

// Change the value of the variable
echo "<br>";
$name = false;
// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string(name);
is_bool($isMale);

// Check if variable is defined
isset($name); ///true
isset($address); //false


// Constants
define('PI', 3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC .'<br>';
echo PHP_INT_MAX . '<br>';
