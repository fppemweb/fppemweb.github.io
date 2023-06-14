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
    <title>UD Dorang</title>
    <link rel="stylesheet" href="Schedule.css" />
    <link rel="Icon" href="asset/mynotelg.png" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
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
    <!-- <div class="home-content"> -->
      <!-- Place Here -->
      <div class='home-content'>      <i class='bx bx-menu' ></i></div>
      <div class="main-container">
        <section class="course-schedule">
          <div class="container">
            <div class="schedule">
              <div class="heading">
                <h1>Stock Barang Tersedia</h1>
                <!-- <a class="add-btn" href="#"></i>Add Schedule</a> -->
          </div>
              <?php
              $host = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'final_project';
              
              $connection = new mysqli($host, $username, $password, $database);
              if ($connection->connect_error) {
                  die('Koneksi gagal: ' . $connection->connect_error);
              }
        $sql = "SELECT * FROM stock"; // Ganti "nama_tabel" dengan nama tabel yang ingin Anda tampilkan

        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>NO</th><th>Nama Barang</th><th>Kode Barang</th><th>Jumlah</th></tr>"; // Ganti kolom sesuai dengan tabel Anda
        $no = 1;
            // Menampilkan data dalam tabel
            while($row = $result->fetch_assoc()) {
              $d=$no;
                echo "<tr><td>".$no++."</td><td>".$row["Nama_Barang"]."</td><td>".$row["Kode_Barang"]."</td><td>".$row["Jumlah"]."</td>
                </tr>";

            }
            
        
            echo "</table>";
           
        } else {
            echo "Tidak ada data dalam tabel.";
        }
        
        // Menutup koneksi ke database
        $connection->close();
        ?>
        
        <a href='beli1.php' class='bx add-btn'></i>edit</a>
        <a href='belii.php' class='bx add-btn'></i>Tambah</a>
      </div>
    <!-- </div> -->
  </section>

  <script src="script.js"></script>
  </body>
</html>
