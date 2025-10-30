<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array PHP</title>
</head>
<body>
    <h2>Halaman 10 (Latihan Soal)</h2>

    <!-- Soal 1 -->
    <h3>Soal 1. Implementasi Array 1 Dimensi</h3>
    <?php
    // Array 1 Dimensi
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

    echo "Daftar Buah:<br>";
    for ($i = 0; $i < count($buah); $i++) {
        echo ($i + 1) . ". " . $buah[$i] . "<br>";
    }
    ?>

    <hr>

    <!-- Soal 2 -->
    <h3>Soal 2. Implementasi Array 2 Dimensi</h3>
    <?php
    // Array 2 Dimensi
    $mahasiswa = [
        ["Jaka", "22001", "Informatika"],
        ["Sinta", "22002", "Sistem Informasi"],
        ["Budi", "22003", "Teknik Komputer"]
    ];

    echo "<h4>Data Mahasiswa</h4>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th></tr>";

    for ($i = 0; $i < count($mahasiswa); $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $mahasiswa[$i][0] . "</td>";
        echo "<td>" . $mahasiswa[$i][1] . "</td>";
        echo "<td>" . $mahasiswa[$i][2] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <hr>

    <!-- Soal 3 -->
    <h3>Soal 3. Implementasi Array 2 Dimensi + Associative Array</h3>
    <?php
    // Array 2 Dimensi + Associative
    $nilai = [
        ["nama" => "Jaka", "tugas" => 80, "uts" => 75, "uas" => 85],
        ["nama" => "Sinta", "tugas" => 90, "uts" => 88, "uas" => 92],
        ["nama" => "Budi", "tugas" => 70, "uts" => 65, "uas" => 78]
    ];

    foreach ($nilai as $data) {
        echo "Nama: " . $data["nama"] . "<br>";
        echo "Nilai Tugas: " . $data["tugas"] . "<br>";
        echo "Nilai UTS: " . $data["uts"] . "<br>";
        echo "Nilai UAS: " . $data["uas"] . "<br>";
        echo "-------------------------<br>";
    }
    ?>
</body>
</html>
