<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'hello am zura' . '<br>';
}
hello();

// Function with argument
function world($name)
{
    echo 'hello i am $name' . '<br>';
}
world('george') . '<br>';

// Create sum of two functions
//function sum($a, $b){
//    return $a + $b;
//}
//echo sum( 4, 5);

// Create function to sum all numbers using ...$nums
function sum(...$nums){
    $sum = 0;
    foreach ($nums as $n){
        $sum += $n;
    }
    return $sum;

}
echo sum(1,2,5,6,10,);

// Arrow functions
function sum2(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => carry + $n);
}
echo sum2(1, 2, 3, 4, 6);