<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insertpage.css">
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
                <div class="head">Insert Data into the Database</div>
                <form action="insertpage.php" method="post">
                    <!-- <p>Shalok Title Hindi</p>
                    <div class="user"><input type='text' name='user' class="username" placeholder="Enter Hindi Shalok"></div>
                    <p>Shalok Title English</p>
                    <div class="pass"><input type='text' name='pass' class="password" placeholder="Enter English Shalok"></div>
                    <p>Shalok Word Meaning</p>
                    <div class="pass"><input type='text' name='pass' class="password" placeholder="Enter Word Meaning of Shalok"></div>
                    <p>Shalok Hindi tatparya</p>
                    <div class="pass"><input type='text' name='pass' class="password" placeholder="Enter Hindi tatparya"></div>
                    <p>Shalok English tatparya</p>
                    <div class="pass"><input type='text' name='pass' class="password" placeholder="Enter English tatparya"></div>
                    <div class="btn"><input type='submit' name='login' class="submit" value="Submit"></div> -->
                    <p>Shalok Title Hindi</p>
                    <input type='text' name='titlehindi' placeholder='Enter' size="73"> 
                    <p>Shalok Title English</p>
                    <input type='text' name='titleenglish' placeholder='Enter' size="73">
                    <p>Shalok Word Meaning</p>
                    <textarea type='text' name='wordmeaning' cols="75" rows="5" placeholder=''></textarea>
                    <p>Shalok Tatparya Hindi</p>
                    <textarea type='text' name='hinditatparya' cols="75" rows="5" placeholder=''></textarea>
                    <p>Shalok Tatparya English</p>
                    <textarea type='text' name='englishtatparya' cols="75" rows="5" placeholder=''></textarea>
                    <br>
                    <button name='submit'>Submit</button>
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
        $a=$_POST['titlehindi'];
        $b=$_POST['titleenglish'];
        $c=$_POST['wordmeaning'];
        $d=$_POST['hinditatparya'];
        $e=$_POST['englishtatparya'];
        // echo "1". $x;
        // echo "2". $y;
        // echo "3". $z;
        // echo "3". $a;
        $query ="INSERT INTO `Shalok`(`hindishalok`,`englishshalok`,`meaningofshalok`,`hinditatparya`,`englishtatparya`) VALUES('{$a}','{$b}','{$c}','{$d}','{$e}')";
        $result = mysqli_query($connection,$query);
        if($result==true){
            ?>
            <script>
                alert('Record stored successful');
                </script>
            <?php
        }else{
            die("Databse Query Failed" . mysqli_error($connection));
        }
    }

