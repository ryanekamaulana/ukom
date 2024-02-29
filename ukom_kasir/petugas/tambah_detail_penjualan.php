<?php
// koneksi data base
include '../koneksi.php';

// menangkap data yang dikirim dari form
$pelanggan_id = $_POST['pelanggan_id'];
$penjualan_id = $_POST['penjualan_id'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO detailpenjualan (penjualan_id, produk_id, jumlah_produk, subtotal) values('$penjualan_id', NULL,0,0)");
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");
?>