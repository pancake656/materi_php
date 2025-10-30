php
<?
    // Variabel
    // Variabel tidak boleh diawali dengan angka
    // Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
    echo "<h4>Variabel</h4>";


    $nama = "Achmad Assidiq Bintang";
    echo $nama;


    echo "<br><hr>";


    // Tipe Data
    // String, Integer, Float, Boolean
    echo "<h4>Tipe Data</h4>";


    $nama = "Roni Al-Gufron"; // String
    $umur = 21;               // Integer
    $tinggi = 1.75;           // Float
    $benar = true;            // Boolean
    $salah = false;           // Boolean
    $kosong = NULL;           // Null


    // Cetak setiap variabel
    echo $nama . "<br>";
    echo $umur . "<br>";
    echo $tinggi . "<br>";
    echo $benar . "<br>";
    echo $salah;            // False ketika dicetak tidak akan menampilkan apapun


    echo "<br><hr>";


    // var_dump untuk menampilkan informasi detail tentang satu atau lebih variabel, yang sangat berguna untuk keperluan debugging.
    // Fungsi ini akan menunjukkan tipe data dan nilainya, termasuk struktur rekursif untuk tipe data kompleks seperti array dan objek.
    echo "<h4>Var Dump</h4>";
   
    var_dump($nama, $umur, $tinggi, $benar, $salah, $kosong);


    echo "<br><hr>";


    // penggabung string / concatenation / concat
    // .
    echo "<h4>Penggabungan String</h4>";


    $nama_depan = "Roni";
    $nama_belakang = "Al-Gufron";
    echo $nama_depan . " " . $nama_belakang;


    echo "<br><hr>";


    // Operator
    // Operator aritmatika (+, -, *, /, %)
    // Operator perbandingan (==, !=, >, <, >=, <=)
    // Operator logika (&&, ||, !)
    // Operator penugasan (+=, -=, .=)
    echo "<h3>Operator</h3>";


    echo "<h4>Operator aritmatika</h4>";
    $a = 10;
    $b = 3;


    echo "Penjumlahan: " . ($a + $b) . "<br>";
    echo "Pengurangan: " . ($a - $b) . "<br>";
    echo "Perkalian: " . ($a * $b) . "<br>";
    echo "Pembagian: " . ($a / $b) . "<br>";
    echo "Modulus: " . ($a % $b) . "<br>";


   
    echo "<h4>Operator Perbandingan</h4>";


    $x = 5;
    $y = 8;


    var_dump($x == $y);   // false
    echo "<br>";
    var_dump($x < $y);    // true
    echo "<br>";
    var_dump($x !== $y);  // true
    echo "<br>";
    var_dump($x >= 5);    // true




    echo "<h4>Operator Logika</h4>";


    $nilai = 80;
    $kehadiran = 90;


    if ($nilai >= 75 && $kehadiran >= 80) {
        echo "Lulus";
    } else {
        echo "Tidak Lulus";
    }


   
    // Operator Penugasan digunakan untuk menetapkan nilai ke variabel, bisa digabung dengan operasi lain.
    echo "<h4>Operator Penugasan</h4>";


    $z = 10;
    $z += 5;     // sekarang 15
    $z *= 2;     // sekarang 30
    $z -= 10;    // sekarang 20


    $name = "Roni";
    $name .= " Al-Gufron";  // gabungkan string


    echo "Nama Lengkap: $name <br>";
    echo "Nilai Akhir: $z";
   
