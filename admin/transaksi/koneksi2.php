<?php
include "koneksi1.php";

// Mendapatkan data dari form

$Jumlah = $_POST['Jumlah'];

$Barang = $_POST['stts'];


// Mengeksekusi query untuk menyimpan data ke tabel biodata
$query = "UPDATE `data_pembeli` SET `status` = '$Barang' WHERE `data_pembeli`.`idpembeli` = '$Jumlah';";
if ($connection->query($query) === TRUE) {
    echo "<script>
    document.location='index.php'
    </script>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
$connection->close();
?>