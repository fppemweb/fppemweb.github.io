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
    <link rel="stylesheet" href="book.css" />
    <link rel="Icon" href="asset/mynotelg.png" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
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
      <div class="main-container">
      <!-- Place Here -->

      <div class="container">
      <!-- <div class="welcome"> -->
            <div class="keterangan">
              <p>Status pembelian anda</p>
            </div>
            <div align="center" class="table">
              <?php
              $host = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'final_project';
              
              $connection = new mysqli($host, $username, $password, $database);
              if ($connection->connect_error) {
                  die('Koneksi gagal: ' . $connection->connect_error);
              }
        $sql = "SELECT idpembeli, Nama, alamat, Barang_dibeli, Jumlah_dibeli, Harga, Status FROM data_pembeli INNER JOIN stock
        ON Nama_Barang = Barang_dibeli";

        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Id Pembeli</th><th>Nama</th><th>Nama Barang</th><th>alamat</th><th>Jumlah</th><th>Total</th><th>Status</th></tr>";// Ganti kolom sesuai dengan tabel Anda
        $no = 1;
            // Menampilkan data dalam tabel
            while($row = $result->fetch_assoc()) {
              $id1=$row["idpembeli"];
                echo "<tr><td>".$row["idpembeli"]."</td><td>".$row["Nama"]."</td><td>".$row["Barang_dibeli"]."</td>
                <td>".$row["alamat"]."</td><td>".$row["Jumlah_dibeli"]."</td><td>".$row["Harga"]*$row["Jumlah_dibeli"]."</td>
                <td>".$row["Status"]."</td></tr>";
                   // Ganti kolom sesuai dengan tabel Anda"
                   $no++;
            }
        
            echo "</table>";
        } else {
            echo "Tidak ada data dalam tabel.";
        }
        // Menutup koneksi ke database
        $connection->close();
        ?>
        <form action='koneksi2.php' method='POST'>
                <div class='inp-data'>
                  <label for='name'>Edit Status Pesanan</label><br>
                  <input type='text' id='Jumlah' name='Jumlah' placeholder='Id Pesanan' required><br>
                    
                </div>
                <div>
                <h1><input type='radio' name='stts' value='Telah diverivikasi' >Verifikasi</h1>
              </div>
              <div>
                <h1><input type='radio' name='stts' value='Sedang Dikirim' >Kirim</h1>
              </div>
              <div>
                <h1><input type='radio' name='stts' value='Terkirim' >Terkirim</h1>
              </div>
                <div class='btn'>
                  <button type='input'></button>
                </div>
              </form>

            </div>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
  </body>
</html>