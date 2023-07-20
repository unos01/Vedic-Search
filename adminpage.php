<?php
session_start();
    if($_SESSION['uid']){
        // echo $_SESSION['uid'];
    }else{
        header('loaction:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminpage.css">
</head>

<body>
    <div id="wrap">
        <div class="logo-div">
            <b>Vedic Search</b>
        </div>
        <div class="nav-div">
            <div class="box"><a href="home2.php">Home</a></div>
            <div class="box"><a href="book.php">History</a></div>  
            <div class="box"><a href="first.php">Quick Read</a></div> 
            <div class="box"><a href="about.php">About</a></div>
            <div class="box"><a href="login.php">Admin</a></div>
        </div>
        
        <div class="main">
            <div class="heading">
                <div class="admin">Admin Dash Board</div>
                <div class="data">
                <div class="insert"><a href='insertpage.php'>Insert Data</a></div>
                </div>
            </div>
        </div>
        <div class="footer">
            vedicsearchinfo@gmail.com
        </div>
    </div>
    
</body>

</html>
