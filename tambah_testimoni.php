<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];

$query=mysqli_query($koneksi, "INSERT INTO testimoni(nama,komentar) VALUES ('$nama', '$komentar')" );
if ($query) {
 header ("Location: index.php#testimoni");
} else {
    echo "gagal";
}
?>