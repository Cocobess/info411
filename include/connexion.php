<?php
$conn = mysqli_connect (hostname: "localhost" , username: "root" , password: "", "info411");

if(!$conn){
    echo("something wrong!!!") ; 
}


mysqli_set_charset($conn, "utf8");
?>