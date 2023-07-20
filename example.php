
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="first.css">
</head>

<body>
    <div id="wrap">
        <div class="logo-div">
            <b>Vedic Search</b>
        </div>
        <div class="nav-div">
            <div class="box"><a href="home2.php">Home</a></div>
            <div class="box"><a href="book.php">Book</a></div>  
            <div class="box"><a href="first.php">Quick Read</a></div> 
            <div class="box"><a href="">About</a></div>
            <div class="box"><a href="login.php">Admin</a></div>
        </div>
        
        <div class="main">
        <?php
            include 'dbcon.php';
            if(isset($_POST['next'])){
            // $x=$_POST['search'];
            // echo 'You typed this --> '.$x;
            ?>
            <script>
             plus=document.querySelector(".next");
             minus=document.querySelector(".pre");
            let a=1;
            plus.addEventListener("click",()=>{
                a++;
                //console.log(a++);
            });
            minus.addEventListener("click",()=>{
                if(a>0){
                    a--;
                    // console.log(a--);
                }
            });
            </script>
            <?php
            $str=mysqli_real_escape_string($connection,$_POST['keywords']);
            $errors=array();
            if(empty($keywords)){
                $errors[]="You did not enter any search term";
            }
            // $sql="SELECT * FROM `shalok` WHERE englishshalok LIKE '%$str%' or englishtatparya like '%$str%'";
            // $res=mysqli_query($connection,$sql);
        
                $sql="SELECT * FROM `shalok` WHERE id=a";
            $res=mysqli_query($connection,$sql);
            
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    // echo "<div id='result'><h4 id='h4'>".$row['hindishalok']."</h4>
                    // <h4 id='h4'>".$row['englishshalok']."</h4>
                    // <h4 id='h4'>".$row['meaningofshalok']."</h4>
                    // <h4 id='h4'>".$row['hinditatparya']."</h4>
                    // <h4 id='h4'>".$row['englishtatparya']."</h4></div>";
                    echo "<div class='shalokhead'>शाकोल" .row['id']."</div>
                    <div class='shalok'>" .$row['hindishalok']."</div>
                    <div class='meaning'>".$row['englishshalok']. "</div>
                    <div class='tatparyahin'><br>" .$row['hinditatparya'].  "<br><br>"    .$row['englishtatparya'].    "</div>";
                }
                
            }else{
                echo "<div id='result'> No Data Found</div>";
            }
       
        }
        
    
        ?>
            
            
            <div class="nextpre">
                <div class="pre"><input type='submit' class="pre1" value='pre' name='pre'></div>
                <div class="next"><input type='submit' class="next1" value='next' name='next'></div>
                
            </div>
        </div>
        <div class="footer">
            vedicsearchinfo@gmail.com
        </div>
    </div>
    <script>
             plus=document.querySelector(".next1");
             minus=document.querySelector(".pre1");
            let a=1;
            plus.addEventListener("click",()=>{
                console.log(a++);
            });
            minus.addEventListener("click",()=>{
                if(a>0){
                    console.log(a--);
                }
            });
            </script>
    
</body>

</html>
