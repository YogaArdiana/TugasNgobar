<?php
require_once "Function/perhitungan.php";
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Ngobar</title>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <?php
        $perhitungan = new Perhitungan();
        $luasPersegiPanjang = $perhitungan->luasPersegiPanjang(20, 40);
        $kelilingPersegiPanjang = $perhitungan->kelilingPersegiPanjang(20, 40);
        $luasKelilingPersegi = $perhitungan->luasKelilingPersegi(20);
        $luasSegitiga = $perhitungan->luasSegitiga(20, 30);
        $luasLingkaran = $perhitungan->luasLingkaran(20);
        $kelilingLingkaran = $perhitungan->kelilingLingkaran(20);
        echo $luasPersegiPanjang;
        echo "<br>";
        echo $kelilingPersegiPanjang;
        echo "<br>";
        echo $luasKelilingPersegi;
        echo "<br>";
        echo $luasSegitiga;
        echo "<br>";
        echo $luasLingkaran;
        echo "<br>";
        echo $kelilingLingkaran;
    ?>


</body>
</html>