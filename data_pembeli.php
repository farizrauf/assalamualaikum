<?php 
require "connection.php";
$sql = "SELECT * FROM pembeli";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&family=Raleway:wght@100;200;300;400;500;600;800;900&family=Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style1.css">
    <title>Warteg Aja</title>
</head>
<body>
    <!---header section--->
    <header>
        <a href="#" class="logo">Warteg<span>Aja</span></a>

        <ul class="navbar">
                <li><a href="index_menu.php">Home</a></li>
                <li><a href="data_menu.php">Data Menu</a><li>
                <li><a href="data_pembeli.php">Data Pembeli</a></li>
                <li><a href="data_transaksi_catering.php">Data Transaksi</a></li>
        </ul>
        
<div class="h-icons">
        <a href="#"><i class='bx bx-search'></i></a>
        <a href="#"><i class='bx bx-cart'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
</div>
</header>
<center>
<div class="judul_beli">
<h1>Data Pembeli</h1>
</div>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID Pembeli</th>
        <th>Nama Pembeli</th>
        <th>Alamat</th>
        <th>Email</th>
    </tr>
    <?php while($row=mysqli_fetch_assoc($result)):?>
    <tr>
            <td><?=$row['id_pembeli']?></td>
            <td><?=$row['nama_pembeli']?></td>
            <td><?=$row['alamat']?></td>
            <td><?=$row['email']?></td>
    </tr>
    

 
    <?php endwhile ?>
    </table>
</body>
</html>