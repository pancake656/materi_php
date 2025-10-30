<?php
    // variabel
    $nama = "Roni Al-Gufron";

    // array
    $hari = array("Senin", "Selasa", "Rabu");
    $bulan = ["Januari", "Februari", "Maret"];
    $kelompok1 = ["Anggita", "Sherlin", "Pocut", "Ibrahim", "Amirul", "Dava"];
    $arr1 = [123, "tulisan", false];

    echo "<h4>Menampilkan Variabel</h4>";
    echo $nama;

    echo "<h4>Menampilkan Array</h4>";
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";

    echo $arr1[0];
    echo "<br>";
    echo $bulan[2];

    // Menambahkan elemen baru pada array
    echo "<h4>Menambahkan Array</h4>";
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);
?>
