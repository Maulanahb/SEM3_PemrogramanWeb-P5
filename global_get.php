<?php
$nama = @$_GET['nama'];  // ambil nilai 'nama' dari query string
$usia = @$_GET['usia'];  // ambil nilai 'usia' dari query string

echo "Halo $nama! Apakah benar anda berusia {$usia} tahun?";
?>
