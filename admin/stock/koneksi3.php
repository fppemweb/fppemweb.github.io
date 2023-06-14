<?php
include "koneksi1.php";

// Mendapatkan data dari form

$Jumlah = $_POST['Jumlah'];

$Barang = $_POST['Kode_Barang'];


// Mengeksekusi query untuk menyimpan data ke tabel biodata
$query = "INSERT INTO masuk (Jumlah, Kode_Barang) VALUES ('$Jumlah', '$Barang')";
if ($connection->query($query) === TRUE) {
    echo "<script>
    document.location='index.php'
    </script>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
$connection->close();
?>