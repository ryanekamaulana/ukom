<?php
// koneksi database
include '../koneksi.php';

// mernangkap data id yang di kirim dari url
$produk_id = $_POST['produk_id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from produk where produk_id='$produk_id'");

// mengalihkan halaman kembali ke data_barang.php
header("location:data_barang.php?pesan=hapus");
