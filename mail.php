<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail in PHP</title>
    <style>
    form {
        text-align: center;
    }
    </style>
</head>
<body>
    <form action="mail.php" method="POST">
        To:<input type="text" name="To"> <br><br>
        Subject:<input type="text" name="subject"> <br><br>
        Message: <textarea col="20" rows="15" name="message"></textarea><br>
        <input type="submit" name="submit" value="SEND">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])) {
    echo $To = $_POST['To'];
    echo $subject = $_POST['subject'];
    echo $message = $_POST['message'];
    mail($To, $subject, $message, 'from: admin@muhammadessa.com');
    echo "<script>alert('Email successfully sent, Thanks for your feedback!')</script>";
}

?>