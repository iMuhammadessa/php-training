<?php

include("arrays.php");



$number = 10;
if($number==10) {
    echo "<script>alert('Welcome to the site!')</script>";
}
else {
    header("location: http://www.google.com");
}

?>