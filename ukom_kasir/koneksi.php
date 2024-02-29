<?php
$koneksi = mysqli_connect("localhost","root","","kasir_eka");

// cek koneksi
if (mysqli_connect_errno()){
    echo "Koneksi data base gagal : " . mysqli_connect_error();
}

?>