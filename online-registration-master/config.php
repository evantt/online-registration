<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username,$password);

$db = $conn->select_db("pemrogweb2");

// var_dump($db);

// var_dump($conn);

// if($conn)
//     echo "Sukses Koneksi Database";
// else
//     die("Tidak dapat terkoneksi ke database");

if(!$conn)
    die("Tidak dapat terkoneksi ke database");

?>