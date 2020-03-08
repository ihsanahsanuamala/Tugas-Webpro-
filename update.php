<?php
session_start();

 
include_once('koneksi.php') ;

 
$name = $_GET['name'];

$website = $_GET['website'];
$bio = $_GET['bio'];
$email = $_GET['email'];
$phoneNumber =$_GET['phoneNumber'];
$gender = $_GET['gender'];
$username = $_GET['username'];
      

        $data = mysqli_query($koneksi,"UPDATE profile SET name='$name',website='$website',bio='$bio',email='$email',
        phoneNumber='$phoneNumber',gender = '$gender' WHERE username='$username'");
        header("location:profile.php");

        
        $query = mysqli_query($koneksi,"SELECT * FROM profile where username ='$username'");
        $row_query = $query->fetch_assoc();

        $koneksi->close();
?>