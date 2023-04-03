<?php
require "connection.php";
$sql = "SELECT 
            transaksi.id_transaksi, 
            pembeli.nama_pembeli, 
            menu.nama_menu, 
            transaksi.harga, 
            transaksi.kuantitas, 
            transaksi.total_pembayaran 
            FROM menu
            INNER JOIN transaksi ON menu.id_menu = transaksi.id_menu 
            INNER JOIN pembeli ON pembeli.id_pembeli = transaksi.id_pembeli";
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
<h1>Data Transaksi Berdasarkan Nama Menu</h1>
</div>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID Transaksi</th><br>
        <th>Nama Pembeli</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Total Pembayaran</th>
    </tr>
    <?php while($row=mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?=$row['id_transaksi']?></td>
        <td><?=$row['nama_pembeli']?></td>
        <td><?=$row['nama_menu']?></td>
        <td><?=$row['harga']?></td>
        <td><?=$row['kuantitas']?></td>
        <td><?=$row['total_pembayaran']?></td>
</tr>
    <?php endwhile ?>
    </table>
</center>
</body>
</html>