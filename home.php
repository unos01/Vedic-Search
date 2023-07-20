<?php
    include 'db.php';
    include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div id="wrap">
        <div class="logo-div">
            <b>Vedic Search</b>
        </div>
        <div class="nav-div">
            <div class="box"><a href="home.php">Home</a></div>
            <div class="box"><a href="">Book</a></div>  
            
            <div class="box"><a href="">About</a></div>
            <div class="box"><a href="login.php">Admin</a></div>
        </div>
        
        <div class="main">
        
            <div class="sear">
                <form action="">
                    <input type="text" class="inp" name="keywords" placeholder="Enter the search" value=''>
                    <input type="submit" value="Search"  name="submit" class="click-search">
                    <!-- <button class="clicksearch"><a href="searchpage.php">Search</a></button> -->
                </form>
            </div>
            
            <?php
            if(isset($_POST['submit'])){
            // $x=$_POST['search'];
            // echo 'You typed this --> '.$x;
            $keywords=mysqli_real_escape_string($connection,htmlentities(trim($_POST['keywords'])));
            $errors=array();
            if(empty($keywords)){
                $errors[]="You did not enter any search term";
            }else{
            if(1==2){
                $errors[]="Your search did not return any results";
            }
            }
            if(empty($errors)){
                $results= search_result($keywords);
                $result_num=count($results);
                echo "<div id ='count'>Your search for <strong>". $keywords. "<strong> produced ".$result_num." result<br/></div>";
                foreach($results as $result){
                    echo "<div id='result'><h4>Shalok-> " .$result['title']. "</h4>
                    <h5>Meaning-> " .$result['description']. "</h5>
                    
                    </div>";
                    // <h3>" .$result['url']. "</h3>
                }
            }else{
                foreach($errors as $error){
                    echo $error. "<br>";
                }
            }

            }
            ?>
            <!-- <div class="link">
                <a href="#">BhagavatGeeta</a>
            </div> -->
        </div>
        <div class="footer">
            vedicsearchinfo@gmail.com
        </div>
    </div>
    
</body>

</html>
