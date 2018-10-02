<?php
    $message = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Tugas 4 PHP</h1>
    </div>
    <div class="container">
        <form action="enter.php" method="post">
            <div class="form-group">
                Username:<br>
                <input type="text" class="form-control" name="username">
            </div>
            <br>

            <div class="form-group">
                Password:<br>
                <input type="password" class="form-control" name="password">
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">

            <?php
            if($_GET){
                if($_GET['message']){
                    $message = $_GET['message'];
                    echo $message;
                    echo "<br><i>try pwebd and pehape";
                }
            }
            ?>

        </form>
    </div>
</body>
</html>