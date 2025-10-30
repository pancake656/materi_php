<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
       
    <!-- Kita akan menampilkan array angka menggunakan FOR dan FOREACH -->
	<?php $angka = [3,2,15,20,11,88,1, 10, 99]; ?>
    <!-- Kita akan menampilkan array angka menggunakan FOR dan FOREACH -->
    <?php for($i=0; $i<count($angka); $i++){ ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>


    <div class="clear"></div>


    <!-- Kita akan menampilkan array menggunan FOREACH -->
     <?php foreach($angka as $data){ ?>
        <div class="kotak"><?php echo $data; ?></div>
     <?php } ?>


     <div class="clear"></div>


     <?php foreach($angka as $data) : ?>
        <div class="kotak"><?= $data ?></div>
     <?php endforeach; ?>


</body>
</html>
<?php
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,88,1,45];
?>







