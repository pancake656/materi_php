<?php
    $mahasiswa = [
        ["Gusti Badag Pisan", "25001", "Pendidikan Sistem dan Teknologi Informasi", "gusti@upi.edu"],
        ["Ihya Ahlul Qodir", "25002", "Sistem Telekomunikasi", "ihya@yahoo.com"],
        ["Rizki Muhammad Eko", "25003", "Mekatronika dan Kecerdasan Buatan", "kiki@gmail.com"]
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 2</title>
</head>
<body>
    <!-- Kita akan menampilkan Array mahasiswa menggunakan foreach-->
    <!-- 1. Tampilkan Array Mahasiswa tanpa foreach (manual) -->
    <!-- 2. Tampilkan Array Mahasiswa menggunakan foreach -->
    <!-- 3. Pertanyaan nya adalah, bagaimana kalo data mahasiswa nya lebih dari 1? Ini adalah array 2 dimensi -->


    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0] ?></li>
            <li>NIM :<?= $mhs[1] ?></li>
            <li>Jurusan :<?= $mhs[2] ?></li>
            <li>Email :<?= $mhs[3] ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>








