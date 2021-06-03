<?php

// Arithmetic Operator
$x = 20;
$y = 10;
$z = $x + $y;
echo "The sum of x & y = ". $z . "<br>";

// Increments Operator
$incNumber = 1;
$incNumber++;
echo "Increment = ". $incNumber. "<br>";

// Decrements Operator
$decNumber = 1;
$decNumber--;
echo "Decrement = ". $decNumber. "<br>";

// Comparison Operators 
$value1 = 10;
$value2 = 10;
if($value1==$value2) {
    echo "Numbers are equal!";
}
else {
    echo "Numbers aren't equal! <br>";
}

// Logical Operators
$logicalNumber1 = 100;
$logicalNumber2 = 200;
if($logicalNumber1 >= $logicalNumber2 AND $logicalNumber1 != $logicalNumber2) {
    echo "<br> Numbers are equal!";
}
else {
    echo "<br> Numbers are not equal!";
}

?>