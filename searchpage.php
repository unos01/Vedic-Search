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
    <title>Search Page</title>
    <link rel="stylesheet" href="searchpage.css">
</head>
<body>
    <div class="box">
    <h1>Vedic Search Data</h1>
    <form action="searchpage.php" method="POST">
        <input type='text' name='keywords' paceholder='Enter the query' size='50' id="search">
        <!-- <button name='clicktosearch'>Search</button> -->
        <input type='submit' value='Search' name='submit' id="btn">
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
                echo "Your search for <strong>". $keywords. "<strong> produced ".$result_num." result";
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
</body>
</html>