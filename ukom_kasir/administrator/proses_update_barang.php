<?php
include '../koneksi.php';

//menangkap data
$produk_id = $_POST['produk_id'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

//update data ke database
mysqli_query($koneksi,"update produk set nama_produk='$nama_produk',harga='$harga',
stok='$stok' where produk_id='$produk_id'");

//mengalihkan halaman kembali ke data_barang.php
header("location:data_barang.php?pesan=update");

?>