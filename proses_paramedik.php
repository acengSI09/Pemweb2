<?php
// Memanggil file koneksi database
require 'dbkoneksi.php';

// Menangkap data yang dikirimkan melalui form
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_telpon = $_POST['telpon'];
$_alamat = $_POST['alamat'];
$_unit_kerja_id = $_POST['unit_kerja_id'];

// Menyiapkan query SQL untuk menyimpan data ke dalam tabel paramedik
$sql = "INSERT INTO paramedik (nama, tmp_lahir, tgl_lahir, gender, telpon, alamat, unit_kerja_id) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Mempersiapkan statement PDO untuk eksekusi query
$stmt = $dbh->prepare($sql);

// Mengeksekusi statement dengan menyertakan data yang telah ditangkap dari form
$stmt->execute([$_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_telpon, $_alamat, $_unit_kerja_id]);

header("Location: data_paramedik.php");
