<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("<H1><font color=red><U>LOGIIIN LAGIII</U> !!!!!</font></H1>");//jika belum login jangan lanjut

}
//cek level user
if($_SESSION['level']!="manager"){
  header('location:admin.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<body style="background color:grey">

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <title>index</title>
<div align='center'>
  <font color=black>
  <h1 style="text-align: center; font-family: sans-serif; color: white;"><font color= black>Selamat Datang</font> <?php echo $level;?> <b><?php echo $username;?></b> <a href="logout.php"><b><font color=black>Logout</font></b></a>
  </font>
</div></h1> 
<!-- <?php
// echo "<h2>Your Input:</h2>";
// echo "Nama : ";
// echo $password;
// echo "<br>";
// echo "Nim : ";
// echo $nim;
// echo "<br>";
// echo "E-mail : ";
// echo $email;
// echo "<br>";
// echo "jurusan : ";
// echo $jurusan;
// echo "<br>";
// echo "Gender : ";
// echo $gender;
// echo "<br>";
// echo "Usia : ";
// echo $usia;
// echo "<br>";
// echo "Website : ";
// echo $website;
// echo "<br>";
// echo "Biografi : ";
// echo $biografi;
// echo "<br>";
// echo $tgl = date("d/m/Y h:i:sa");
// echo "<br>";
?>

<?php
// $result=mysqli_query($connect,'SELECT * FROM user');
// $row=mysqli_fetch_row($result);
// echo "$row[0] $row[1] $row[2] $row[3]";
?> -->




<body style="background:url(b.jpg)">

<center>
  <br>
    <h2>ARTIKEL</h2>
  <br><br>
     <link rel="stylesheet" type="text/css" href="style1.css">
<a href="creat.php"><h2><font color=black>tambah artikel>></font></h2></a>
  <br>
  <br>
   <table class="table-striped"  cellpadding="10" cellspacing="0" width="70%">
  <tr>
   
    <th>no</th>
    <th>judul</th>
    <th>isi</th>
    <th>terkhir di update</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["judul"] ?></td>
    <td><?= $x["isi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
        <td>&nbsp;<a href="ubah.php?id=<?php echo $data['id']?>"><img src="image/btn_edit.png"></a></td>

   

    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


  <body style="background:url(b.jpg)">

</center>