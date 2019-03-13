<?php
include 'koneksi.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$usia = $_POST['usia'];
   $nim = $_POST['nim'];
   $jurusan = $_POST['jurusan'];
   $biografi = $_POST['biografi'];
   $gender = $_POST['gender'];
   $website = $_POST['website'];
   $email = $_POST['email'];
   $level=$_POST['level'];


$result=mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password','$usia','$nim','$jurusan','$biografi','$gender','$website','$email','$level')");


if(!$username || !$password ||!$usia || !$nim ||!$jurusan || !$biografi || !$gender || !$website || !$email || !$level) {
	echo "<h1>maaf kamu belum beruntung silakan coba lagi</h1>";
	echo "<a href='formregister.php'>       <h2> -regis kembali</h2></a>";
       } else if($result){
	echo "regis berhasilllllllllllllllllllllll";
	echo "<a href='register.php'>     <h2>   -login kembali</h2></a>";
}
?>
<body  style="background:url(4.gif)">
