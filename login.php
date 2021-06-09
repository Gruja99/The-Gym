<?php
session_start();
include("baza.php");
$prijava = $_POST['prijaviSE'];
$email = $_POST['email'];
$password = $_POST['password'];

if (preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email)) {
    $e_mail = $email;
    
    }
    else
    {
      echo "$email nije validan mejl.";
    }
   
     if (preg_match( "/^(?=.*\d)(?=.*[a-ž])(?=.*[A-Ž]).{7,}/", $password)) {
        $password1 = $password;
       
        }
        else
        {
          echo "$password1 nije validana sifra.";
        }
if(isset($prijava))
{
    $query = "SELECT * FROM korisnik WHERE email='$e_mail' AND password='$password1'";
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