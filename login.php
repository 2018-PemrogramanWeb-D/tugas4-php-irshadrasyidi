<?php
    $message = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <style>

    </style>
</head>
<body>
    <form action="enter.php" method="post">
        Username:<br>
        <input type="text" name="username">
        <span></span>
        <br>

        Password:<br>
        <input type="password" name="password">

        <br>
        <input type="submit" name="submit" value="submit">

        <?php

        if($_GET){
            if($_GET['message']){
                $message = $_GET['message'];
                echo $message;
            }
        }
            
            
            
        ?>

    </form>
</body>
</html>