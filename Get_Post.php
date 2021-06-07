<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST Method</title>
    <style>
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="Get_Post.php" method="GET">
        User Name: <input type="text" name="name" placeholder="Enter your name"><br>
        User Email: <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php

if(isset($_GET['submit'])) {
echo $name = $_GET['name'];
echo $email = $_GET['email'];
}

?>