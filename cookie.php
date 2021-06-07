<?php

$month = 60 * 60 * 24 * 30 + time();
setcookie('user_visit', date("d/m/y"), $month);

?>

<?php
if(isset($_COOKIE['user_visit'])) {
    $Last_visit = $_COOKIE['user_visit'];
    echo "Your last visit to this site was on : $Last_visit";
}

?>