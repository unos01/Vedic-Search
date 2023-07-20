<?php
$connection = mysqli_connect('localhost','root','','dbsearch');
if($connection){
    // echo 'Connected';
}else{
    echo 'Not Connected';
}
?>