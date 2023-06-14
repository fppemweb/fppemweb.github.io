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
    <title>MyNote</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="asset/123.png">
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
    <div class="home_content">
      <!-- Place Here -->
      <div class="welcome">

        <!-- <ul>
                <li>
                    <img src="asset/waving.svg" alt="Hai">
                    <p>Welcome To MyNote!</p>
                </li>
            </ul> -->
        <p><img src="asset/waving.svg" alt="Waving Hand" />Welcome to UD DORANG</p>
        <div class="sub-heading">
          <h3>UD DORANG merupakan toko <br>
        Jual Beli Bahan Pokok Berkualitas <br>
        (Hanya melayani bayar ditempat)
      </h3>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
  </body>
</html>
