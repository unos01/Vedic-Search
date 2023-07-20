<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
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
                <div class="head">Login</div>
                <form action="login.php" method="post">
                    <div class="user"><input type='text' name='user' class="username" placeholder="Enter Username or Email id" required></div>
                    <div class="pass"><input type='text' name='pass' class="password" placeholder="Enter Password" required></div>
                    <div class="btn"><input type='submit' name='login' class="submit" value="Login"></div>
                    <div class="message"><p>Don't have account?<a href="createacc.php">Create Account</a></p></div>
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
    if(isset($_POST['login'])){
        // $title=$_POST['title'];
        // $description=$_POST['description'];
        // $url=$_POST['url'];
        // $keywords=$_POST['keywords'];
        // echo 'hooo';
        // echo $title. " " .$description. " " .$url. " " .$keywords;
        $x=$_POST['user'];
        $y=$_POST['pass'];
        // echo "1". $x;
        // echo "2". $y;
        // $query ="INSERT INTO `admin`(`username`,`email`,`password`) VALUES('{$x}','{$y}','{$z}')";
        $query="SELECT * FROM `admin` WHERE `username`='$x' AND `password`='$y'";
        $result = mysqli_query($connection,$query);
        $row=mysqli_num_rows($result);
        if($row<1){
            ?>
            <script>
                alert('Username or Password not match!!');
                window.open('login.php','_self');
                </script>
             <?php   
        }else{
            $data=mysqli_fetch_assoc($result);
            $id=$data['id'];
            // echo 'id= '.$id;
            session_start();
            $_SESSION['uid']=$id;
            header('location:adminpage.php');
        }
    }

