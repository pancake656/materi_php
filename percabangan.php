<?php


    // Percabangan dalam PHP adalah cara untuk membuat program mengambil keputusan berdasarkan kondisi tertentu,
    // yang memungkinkan alur eksekusi kode bercabang.
    // Jenis Percabangan dalam PHP ada dua :
    // IF
    // SWITCH




    // IF
    // Statement IF untuk mengevaluasi kondisi logika atau perbandingan --> (<, >, ==, &&, dll.)
    // Kapan digunakan? Ketika kondisi melibatkan perbandingan logis atau rentang nilai
    echo "<h4>Percabangan IF (Conditional Statement)</h4>";


    $nilai = 82;


    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 80) {
        echo "Grade: B";
    } elseif ($nilai >= 70) {
        echo "Grade: C";
    } elseif ($nilai >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }


    // SWITCH
    // Statement Switch Case untuk mengevaluasi satu variabel atau ekspresi tunggal terhadap banyak kemungkinan nilai
    // Kapan digunakan? Ketika kondisi melibatkan pemilihan berdasarkan satu nilai pasti
    // Break --> Statement break; digunakan untuk menghentikan eksekusi dan keluar dari struktur switch setelah case yang cocok ditemukan.
    // Jika break tidak ada, PHP akan terus mengeksekusi case berikutnya (disebut fall-through).
    // Default --> Blok default akan dieksekusi jika tidak ada case yang cocok dengan nilai variabel.


    echo "<h4>Percabangan Switch (Conditional Statement)</h4>";


    $hari = 3;


    switch ($hari) {
        case 1:
            echo "Senin";
            break;
        case 2:
            echo "Selasa";
            break;
        case 3:
            echo "Rabu";
            break;
        case 4:
            echo "Kamis";
            break;
        case 5:
            echo "Jumat";
            break;
        case 6:
            echo "Sabtu";
            break;
        case 7:
            echo "Minggu";
            break;
        default:
            echo "Angka hari tidak valid!";


        // $hari = "Jumat";
        // case "Senin":
        //     echo "Hari ini Senin.";
        //     break;
        // case "Selasa":
        //     echo "Hari ini Selasa.";
        //     break;
        // case "Rabu":
        //     echo "Hari ini Rabu.";
        //     break;
        // default:
        //     echo "Hari ini bukan Senin, Selasa, ataupun Rabu.";
    }


?>
<?php


    // Percabangan dalam PHP adalah cara untuk membuat program mengambil keputusan berdasarkan kondisi tertentu,
    // yang memungkinkan alur eksekusi kode bercabang.
    // Jenis Percabangan dalam PHP ada dua :
    // IF
    // SWITCH




    // IF
    // Statement IF untuk mengevaluasi kondisi logika atau perbandingan --> (<, >, ==, &&, dll.)
    // Kapan digunakan? Ketika kondisi melibatkan perbandingan logis atau rentang nilai
    echo "<h4>Percabangan IF (Conditional Statement)</h4>";


    $nilai = 82;


    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 80) {
        echo "Grade: B";
    } elseif ($nilai >= 70) {
        echo "Grade: C";
    } elseif ($nilai >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }


    // SWITCH
    // Statement Switch Case untuk mengevaluasi satu variabel atau ekspresi tunggal terhadap banyak kemungkinan nilai
    // Kapan digunakan? Ketika kondisi melibatkan pemilihan berdasarkan satu nilai pasti
    // Break --> Statement break; digunakan untuk menghentikan eksekusi dan keluar dari struktur switch setelah case yang cocok ditemukan.
    // Jika break tidak ada, PHP akan terus mengeksekusi case berikutnya (disebut fall-through).
    // Default --> Blok default akan dieksekusi jika tidak ada case yang cocok dengan nilai variabel.


    echo "<h4>Percabangan Switch (Conditional Statement)</h4>";


    $hari = 3;


    switch ($hari) {
        case 1:
            echo "Senin";
            break;
        case 2:
            echo "Selasa";
            break;
        case 3:
            echo "Rabu";
            break;
        case 4:
            echo "Kamis";
            break;
        case 5:
            echo "Jumat";
            break;
        case 6:
            echo "Sabtu";
            break;
        case 7:
            echo "Minggu";
            break;
        default:
            echo "Angka hari tidak valid!";


        // $hari = "Jumat";
        // case "Senin":
        //     echo "Hari ini Senin.";
        //     break;
        // case "Selasa":
        //     echo "Hari ini Selasa.";
        //     break;
        // case "Rabu":
        //     echo "Hari ini Rabu.";
        //     break;
        // default:
        //     echo "Hari ini bukan Senin, Selasa, ataupun Rabu.";
    }


?>

