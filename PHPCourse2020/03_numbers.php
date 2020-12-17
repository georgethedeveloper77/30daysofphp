<header>
    <center>
        <h1 style="color: red">Numbers</h1>
        <hr>
    </center>
</header>
<?php

// 1. Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// 2. Arithmetic operations
echo "<h2>2. Arithmetic operations</h2>";
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; // 3. Several arithmetic operations - (* $c + 6)
echo $a / $b . '<br>'; //moduls => remainder
echo $a % $b . '<br> <br>';

// 4. Assignment with math operators
echo "<h2> 4. Assignment with math operators </h2>";
//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// 5. Increment operator ++ increase value
echo "<h2>5. Increment operator ++ increase value</h2>";
echo $a++ . '<br>'; //prints a=5 then its increased
echo ++$a . '<br>';

// 6. Decrement operator
echo "<h2>5. Decrement operator ++ decrease value</h2>";
echo $a-- . '<br>';
echo --$a . '<br>';

// 7. Number checking functions
echo "<h2>7. Number checking functions</h2>";
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // true

// 8. Conversion
echo "<h2>8. Conversion</h2>";
$strNumber = '12.34';
$number = (float)$strNumber; // 8. Use floatval(), (int), intval()
var_dump($number);
echo '<br>';

// 9. Number functions
echo "<h2>9. Number functions</h2>";

echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// 10. Formatting numbers
echo "<h2>10. Formatting numbers</h2>";

$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br><br>';

echo "<a href='https://www.php.net/manual/en/ref.math.php'>https://www.php.net/manual/en/ref.math.php</a>";
