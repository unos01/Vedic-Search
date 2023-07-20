<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="createacc.css">
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
        <div class="form">
                <div class="head">Create Account</div>
                <form action='createacc.php' method="post">
                    <div class="user"><input type='text' name='username' class="username" placeholder="Enter Username" required></div>
                    <div class="email"><input type='text' name='email' class="emailid" placeholder="Enter Email Id" required></div>
                    <div class="pass"><input type='text' name='password' class="password" placeholder="Enter Password" required></div>
                    <div class="btn"><input type='submit' name='submit' class="submit" value="Submit"></div>
                </form>
            </div>
        </div>
        <div class="footer">
            vedicsearchinfo@gmail.com
        </div>
    </div>
    
</body>

</html>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        // $title=$_POST['title'];
        // $description=$_POST['description'];
        // $url=$_POST['url'];
        // $keywords=$_POST['keywords'];
        // echo 'hooo';
        // echo $title. " " .$description. " " .$url. " " .$keywords;
        $x=$_POST['username'];
        $y=$_POST['email'];
        $z=$_POST['password'];
        echo "1". $x;
        echo "2". $y;
        echo "3". $z;
        $query ="INSERT INTO `admin`(`username`,`email`,`password`) VALUES('{$x}','{$y}','{$z}')";
        $result = mysqli_query($connection,$query);
        if($result==true){
            echo "Record Saved Successfully";
        }else{
            die("Databse Query Failed" . mysqli_error($connection));
        }
    }
