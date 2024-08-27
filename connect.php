<?php
//Masukkan data host, username, password, dan nama database
$host = 'localhost:3306';
$username = 'root';
$password = '';
$db_name = 'testcase';
// 
$connect = mysqli_connect($host, $username, $password, $db_name);
//Tambahkan var $conn untuk koneksi ke database


if ($connect->connect_error) {
    die("gagal koneksi: " . $connect->connect_error);
}
