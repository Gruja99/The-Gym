<?php
session_start();
include("baza.php");
$prijava = $_POST['prijaviSE'];
$email = $_POST['email'];
$password = $_POST['password'];
if(isset($prijava))
{
    $query = "SELECT * FROM korisinik WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    if(is_array($row))
    {
        $_SESSION['ime'] = $row['ime'];
        header("location: korisnickastranica.php");
    }
    else{
        header("location:prijava.html");
    }
}
else
{
    echo "not";
}
?>