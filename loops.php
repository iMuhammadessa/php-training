<?php

/* Loops are used to repeat value again and again
- Mostly used loops in php
- for - loop
- while - loop
- foreach - loop
- do while - loop */


// While loop is used
$number = 1;
echo "// While loop is used <br>";
while ($number<=10) {
    echo $number++ ."<br>";
}

// If & else loop is used

$country = "Pakistan";

if($country="Pakistan") {
    echo "<br> <br>// If & else is used <br>";
    echo "<script>document.write('<br> Condition matched!')</script>";
}
else {
    echo "error | 404";
}

?>