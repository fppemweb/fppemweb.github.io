<?php
  session_start();
  require_once('../connection.php');
  // check session
  if(!isset($_SESSION["logged"]) || !$_SESSION["logged"]){
    header("location: ../login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="todolist.css" />
    <title>UD Dorang</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="asset/mynotelg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
<div class="sidebar close">
    <ul class="nav-links">
      <li>
        <a href="../dashboard/">
          <i class='bx bxs-dashboard'></i>
          <span class="link_name">Beranda</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Beranda</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="../stock/">
            <i class="bx bxs-box"></i>
            <span class="link_name">stock</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
        <li><a class="link_name" href="#">stock</a></li>
        </ul>
      </li>

      <li>
        <a href="../transaksi/">
          <i class="bx bx-book-open"></i>
          <span class="link_name">Transaksi</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Transaksi</a></li>
        </ul>
      </li>
      <li>
        <a href="../logout.php">
          <i class='bx bx-power-off'></i>
          <span class="link_name">Log Out</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Log Out</a></li>
        </ul>
      </li>
  </li>
</ul>
  </div>
    <section class="home-section">
    <div class='home-content'>      <i class='bx bx-menu' ></i></div>
      <!-- Place Here -->
      <div class="main-container">
        <section class="add-list">
          <div class="container">
            <div class="add">
              <div>
                <h1>Tambah Stock</h1>
              </div>
              

              <form action="koneksi3.php" method="POST">
                <div class="inp-data">
                  <label for='name'>Masukkan Jumlah Barang</label><br>
                  <input type="text" id='Jumlah' name='Jumlah' placeholder="Masukkan Jumlah Barang yang ingin diinput" required><br>
                    
                </div>
                <div>
                <h1><input type="radio" name="Kode_Barang" value="1" >Beras</h1>
              </div>
              <div>
                <h1><input type="radio" name="Kode_Barang" value="2" >Gula</h1>
              </div>
                <div class="btn">
                  <button type="input"></button>
                </div>
              </form>
            </div>
          </div>
        </section>

  <script src="script.js"></script>
  </body>
</html>
