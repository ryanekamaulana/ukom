<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$total_harga = $_POST['total_harga'];
$penjualan_id = $_POST['penjualan_id'];
$pelanggan_id = $_POST['pelanggan_id'];

// menginput data ke database

mysqli_query($koneksi,"UPDATE penjualan SET total_harga='$total_harga' WHERE penjualan_id='$penjualan_id'");

// mengalihkan halaman kembali ke detail_pembelian.php
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");
?>
