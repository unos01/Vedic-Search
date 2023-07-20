

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="box">
        <h2>Insert data into the database</h2>
    <form action="form.php" method="POST">
         <p>Articles Title</p>
        <input type='text' name='title' placeholder='Enter' size="80"> 
        
        <p>Description</p>
        <textarea type='text' name='description' cols="75" rows="5"></textarea>
        <p>URL</p>
        <input type='text' name='url' placeholder='Enter' size="80">
        
        <p>Keywords</p>
        <input type="text" name="keywords" size="80">
        <br><br>
        <button name='submit'>Submit</button>

    </form>
    </div>
</body>
</html>
<?php
    include 'db.php';
    if(isset($_POST['submit'])){
        // $title=$_POST['title'];
        // $description=$_POST['description'];
        // $url=$_POST['url'];
        // $keywords=$_POST['keywords'];
        // echo 'hooo';
        // echo $title. " " .$description. " " .$url. " " .$keywords;
        $x=$_POST['title'];
        $y=$_POST['description'];
        $z=$_POST['url'];
        $a=$_POST['keywords'];
        // echo "1". $x;
        // echo "2". $y;
        // echo "3". $z;
        // echo "3". $a;
        $query ="INSERT INTO `articles`(`title`,`description`,`url`,`keywords`) VALUES('{$x}','{$y}','{$z}','{$a}')";
        $result = mysqli_query($connection,$query);
        if($result==true){
            echo "Record Saved Successfully";
        }else{
            die("Databse Query Failed" . mysqli_error($connection));
        }
    }
//     $str = "GeeksforGeeks";
  
// // Check value of variable is set or not
// if(isset($str)) {
//     echo "Value of variable is set";
// }
// else {
//     echo "Value of variable is not set";
// }
  
// $arr = array();
  
// // Check value of variable is set or not
// if( !isset($arr[0]) ) {
//     echo "\nArray is Empty";
// }
// else {
//     echo "\nArray is not empty";
// }
?>
