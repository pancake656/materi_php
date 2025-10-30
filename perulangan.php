<?php
   
    // Konsep perulangan atau looping (for, while, do while)
    // Di PHP ada perulangan foreach (khusus array)
   
    // FOR
    // 1. Inisialisasi, 2. Kondisi Terminasi, 3. Increment/Decrement
    echo "<h4>Perulangan FOR</h4>";


    for($i=0; $i<5; $i++){
        echo "Ini perulangan ke-$i <br>";
    }


    // WHILE
    // 1. Inisialisasi, 2. Kondisi Terminasi, 3. Increment/Decrement
    echo "<h4>Perulangan WHILE</h4>";


    $index=0;
    while($index < 5){
        echo "Hello World <br>";


        $index++;
    }


    // DO WHILE
    // 1. Inisialisasi, 2. Kondisi Terminasi, 3. Increment/Decrement
    echo "<h4>Perulangan DO WHILE</h4>";
   
    $index2=10;
    do{
        echo "Hello World <br>";
        $index2++;
    }while($index2 < 5);
?>


