<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<center>
  <br>
    <h2>ARTIKEL</h2>
  <br><br>
   <table class="table-striped"  cellpadding="10" cellspacing="0" width="50%">
  <tr>
   
    <th>no</th>
    <th>judul </th>
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
    
        <td><a href="register.php"><img src="image/btn_delete.png"></a>&nbsp;&nbsp;<a href="register.php"><img src="image/btn_edit.png"></a></td>

   

    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<a href="logout.php">Logout>></a>
</center>
  </body>
</html>
