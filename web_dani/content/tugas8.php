<h1>Tugas Pertemuan 8 - Cek Kategori Usia Mahasiswa</h1>
<h2>Cek Kategori Usia Mahasiswa</h2>

<?php 
// Variabel dan kondisi 
date_default_timezone_set('Asia/Jakarta');  

$time = date('H:i'); 
$jam = date('H'); 
$nama = "Mahasiswa";  
if ($jam < 12) 
{     
    $salam = "Selamat pagi"; 
} elseif ($jam < 15) {     
    $salam = "Selamat siang"; 
} elseif ($jam < 18) {     
    $salam = "Selamat sore"; 
} else {     
    $salam = "Selamat malam"; 
}  echo "<p>$salam, $nama! Sekarang jam 
$time.</p>"; 
?>  

<h4> Silakan masukkan nama dan umur Anda untuk mengetahui kategori usia Anda.</h4>

<form method="POST">
    Nama :
    <input type="text" name="nama" placeholder="Masukkan nama" required>
    <br><br>

    Umur :
    <input type="number" name="umur" placeholder="Masukkan umur" required>
    <br><br>

    <button type="submit" name="submit">Cek Kategori</button>
</form>

<hr>

<?php
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $umur = (int) $_POST['umur'];

    if ($umur < 13) {
        $kategori = "Anak-anak";
    } elseif ($umur >= 13 && $umur <= 17) {
        $kategori = "Remaja";
    } elseif ($umur >= 18 && $umur <= 59) {
        $kategori = "Dewasa";
    } else {
        $kategori = "Lansia";
    }

    // Output
    echo "<h3>Hasil</h3>";
    echo "<p>Nama Mahasiswa : <b>$nama</b></p>";
    echo "<p>Umur : <b>$umur tahun</b></p>";
    echo "<p>Kategori Usia : <b>$kategori</b></p>";
}
?>