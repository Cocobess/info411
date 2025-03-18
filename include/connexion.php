<?php
$conn = mysqli_connect ("localhost" , "root" , "" , "info411");

if(!$conn){
    echo("something wrong!!!") ; 
}


mysqli_set_charset($conn, "utf8");
?>