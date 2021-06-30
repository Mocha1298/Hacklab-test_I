<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "hacklab";


$koneksi = mysqli_connect($host, $user, $pass, $db);

$hasil = mysqli_query($koneksi, "select tb_mahasiswa.mhs_nama from tb_mahasiswa_nilai JOIN tb_matakuliah ON tb_matakuliah.mk_id=tb_mahasiswa_nilai.mk_id JOIN tb_mahasiswa ON tb_mahasiswa.mhs_id=tb_mahasiswa_nilai.mhs_id WHERE tb_matakuliah.mk_kode='MK303' ORDER BY tb_mahasiswa_nilai.nilai DESC LIMIT 1");

while ($hasil = mysqli_fetch_array($hasil)) {
    echo "Nama : " . $hasil["mhs_nama"];
}