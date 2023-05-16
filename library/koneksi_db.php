<?php

$host = "localhost";
$user = "root";
$pass = "";
$nama_db = "my_personal_web";

$conn = mysqli_connect($host, $user, $pass, $nama_db);

// pengecekan 
if (mysqli_connect_errno()) {
    echo "Koneksi gagal " . mysqli_connect_error();
}
