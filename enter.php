<?php
    $username = "pwebd";
    $password = "pehape";

    session_start();

    if(isset($_SESSION['username'])){
        echo "<a href='logout.php'>
        <input type=button value=logout name=logout></a>";
    }else{
        if($_POST['username']==$username && $_POST['password']==$password){
            $_SESSION['username']=$username;
            echo "<script>location.href='enter.php'</script>";
        }else{
            header("location:login.php?message=username or password is incorrect");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Welcome</title>
</head>
<body>
    <?php
        $time = date("h");
        $ampm = date("sa");
        if(strpos($ampm, "am")==2){
            if($time < 11){
                echo "Good Morning";
            }else{
                echo "Good Afternon";
            }
        }else{
            if($time < 6){
                echo "Good Afternoon";
            }else{
                echo "Good Evening";
            }
        }
    ?>
    <p>Welcome Home</p>
    
</body>
</html>