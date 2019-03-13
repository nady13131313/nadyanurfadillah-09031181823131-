<?php 
	require 'koneksi.php';


	session_start();
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$judul','$isi',null)");

		if ($tambah>0) {
			echo "data berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
		echo " bray";

		}
	

 ?>