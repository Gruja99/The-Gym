<?php
session_start();
include("baza.php");
$edit = false;

if(isset($_POST['potvrda']))
{
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $pozicija = $_POST['pozicija'];

    $query = "INSERT INTO radnici(ime, prezime, email, pozicija) VALUES ('$ime', ' $prezime', '$email', ' $pozicija') ";
    mysqli_query($conn, $query);
    header('location: korisnickastranica.php');    
}
 
if(isset($_POST['izmena']))
{
    $id =$_POST['id'];
    $ime =$_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $pozicija = $_POST['pozicija'];

    $query = "UPDATE  radnici SET ime='$ime', prezime= '$prezime',email ='$email',pozicija = '$pozicija'  WHERE id = '$id'";
    mysqli_query($conn, $query);
    header('location: korisnickastranica.php');    
}
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM radnici WHERE id=$id");

	header('location: korisnickastranica.php');
}
?>