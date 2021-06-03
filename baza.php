<?php
    $url='localhost';
    $username='root';
    $password='';
    $name = "thegym";

    $conn=mysqli_connect($url,$username,$password,$name);
    if(!$conn){
        die('Nije se moguce konektovati:'.mysqli_error());
    };
?>