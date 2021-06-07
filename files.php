<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES Array</title>
    <style>
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="files.php" method="POST" enctype="multipart/form-data">
        Upload Image:<input type="file" name="image"><br><br>
        <input type="submit" name="upload" value="Upload now">
    </form>
</body>
</html>

<?php

// Files in PHP

if(isset($_POST['upload'])) {
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file("$image_tmp", "$image_name");
    echo "<center><br> Your picture has been uploaded!<br><br></center>";
    echo "<center><img src='$image_name'></center>";

}

?>