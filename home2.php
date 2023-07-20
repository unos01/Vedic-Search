<?php
    include 'dbcon.php';
    // include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home2.css">
    
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
        
         <!-- <div class="sear">
                <form action="">
                    <input type="text" class="inp" name="keywords" placeholder="Enter the search" value=''>
                    <input type="submit" value="Search"  name="submit" class="click-search">
                     <button class="clicksearch"><a href="searchpage.php">Search</a></button> 
                </form>
            </div> -->
            <div class='center'>
         <form action="" method="POST">
            <input type='text' name='keywords' class='textinp' placeholder='Enter the query' size='50' id="search">
            <!-- <button name='clicktosearch'>Search</button> -->
             <input type='submit' value='Search' name='submit' id="btn">
         </form>
          </div>
          <div id="scroll">
         <?php
            include 'dbcon.php';
            mysqli_select_db($connection,'pagination');
            $result_per_page=1;
            if(isset($_POST['submit'])){
            // $x=$_POST['search'];
            // echo 'You typed this --> '.$x;
            
            $str=mysqli_real_escape_string($connection,$_POST['keywords']);
            
            // $sql="SELECT * FROM `shalok` WHERE englishshalok LIKE '%$str%' or englishtatparya like '%$str%'";
            // $res=mysqli_query($connection,$sql);
        
                $sql="SELECT * FROM `shalok` WHERE englishshalok LIKE '%$str%' or englishtatparya like '%$str%' or hinditatparya like '%$str%' or hindishalok like '%$str%' or id like '%$str%'";
            $res=mysqli_query($connection,$sql);
            $numperpage=2;
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<div id='result'><h4 id='h4'>श्लोक:<br><hr> ".$row['hindishalok']."</h4>
                    <h4 id='h4'>Shalok:<br><hr> ".$row['englishshalok']."</h4>
                    <h4 id='h4'>Words: <br><hr>".$row['meaningofshalok']."</h4>
                    <h4 id='h4'>तत्पराय:<br> <hr>".$row['hinditatparya']."</h4>
                    <h4 id='h4'>Tatparya:<br><hr> ".$row['englishtatparya']."</h4></div>";
                }
                
            }else{
                echo "<div id='results'> No Data Found</div>";
            }
       
        }
        
    
        ?>
        </div>
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
