<?php
   
    // Array 1 dimensi
    echo "<h4>Array 1 Dimensi</h4>";


    $mahasiswa =
    [
        "Muhammad Fatin",
        "Aldilah",
        "Amelia",
        "Nazwa Rizki",
        "Ibrahim",
    ];


    echo "<pre>";
    var_dump($mahasiswa);
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    print_r($mahasiswa);
    echo "</pre>";
    echo "<hr>";


    // Array 2 dimensi
    // Array di dalam array
    echo "<h4>Array 2 Dimensi (Array di dalam Array)</h4>";


    $dosen = [
        ["Rizki Hikmawan", "1122334455", "rizki@upi.edu", "PSTI"],
        ["2233445566", "Jaka Septiadi", "jaka@gmail.com", "MKB"] //
    ];


    echo "<pre>";
    var_dump($dosen);
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    print_r($dosen);
    echo "</pre>";


    echo "<br>";
    echo "Masih ada permasalahan pada bagian array pada index ke-1, yaitu dosen atas nama Jaka Septiadi";


    // Kita butuh sebuah cara untuk ngasih tau PHP bahwa :
    // index ke-0 adalah nama
    // index ke-1 adalah nip
    // index ke-2 adalah email
    // index ke-3 adalah jurusan


    // PHP hanya peduli elemen ke-1 index nya adalah 0, elemen ke-2 index nya 1, dst.
    // Tidak peduli apakah index ke-0 itu sebuah nama, nip, atau yg lainnya.
    // Kenapa? Karena array yang kita buat adalah array numerik.
    // Yang mana array numerik adalah yang index nya angka.


    // Sekarang kita akan membuat index di dalam array sesuai dengan keinginan kita nama index nya


    // // Associative Array
    // Definisinya sama dengan array numerik, namun index nya bukan lagi angka
    // berubah menjadi "Key" nya adalah string yang kita buat sendiri
    echo "<h4>Associative Array)</h4>";


    $staf = [
        "nama" => "Galuh Brawijaya",
        "kode_pegawai" => 21422,
        "email" => "galuh@gmail.com",
        "posisi" => "staf"
    ];


    echo "<pre>";
    print_r($staf);
    echo "</pre>";


    echo $staf["nama"] . "<br>";
   
    // print semua data
    // lebih jelas untuk mencetak isi data dalam array staf , apabila menggunakan array numerik, kemungkinan tertukar data nya tinggi
    echo "Nama : " . $staf["nama"] . "<br>";
    echo "Kode : " . $staf["kode_pegawai"] . "<br>";
    echo "Email : " . $staf["email"] . "<br>";
    echo "posisi : " . $staf["posisi"] . "<br>";
    echo "<br>";


    // // Bagaimana kalau kita ingin menampilkan lebih dari 1 staf?
    // // Jawab : Tambahkan array di dalam array staf
    $staf2 = [
        [
            "nama" => "Galuh Brawijaya",
            "kode_pegawai" => 21422,
            "email" => "galuh@gmail.com",
            "posisi" => "staf"
        ],
        [
            "nama" => "Guntur Jojo Asbun",
            "kode_pegawai" => 31233,
            "email" => "guntur@gmail.com",
            "posisi" => "staf"
        ],
        [
            "nama" => "Aliya Amelia",
            "kode_pegawai" => 113322,
            "email" => "lia@gmail.com",
            "posisi" => "staf"
        ]
    ];


    echo "<pre>";
    print_r($staf2);
    echo "</pre>";


    // kita akan tampilkan hanya email nya dari Aliya, maka gunakan konsep 2 dimensi
    echo "<br>";
    echo $staf2[2]["email"];


   


?>

