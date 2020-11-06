<?php
include "database.php";


$ad = $_GET['ad'];

$query = "SELECT * FROM $ad";

$veritabanı = new veritabanı();


$results = $veritabanı->select($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="ürünler.css" />
</head>

<body>

<nav class="nav">
        <ul class="nav-main-list">
            <li class="nav-main-list-item nav-item"><a href="indexA.php">Ana Sayfa</a></li>
            <li class="nav-main-list-item nav-item"><a>Hakkımızda</a></li>
            <li class="nav-main-list-item third nav-item"><a>İletişim</a></li>
            <li class="nav-main-list-item nav-item"><a>Ürünler</a>
                <ul class=nav-sub-list>
                    <li class="nav-sub-list-item nav-item border-top"><a href="ürünler.php?ad=kalem">Kalem</a></li>
                    <li class="nav-sub-list-item nav-item"><a href="ürünler.php?ad=kitap">Kitap</a></li>
                    <li class="nav-sub-list-item nav-item"><a href="ürünler.php?ad=dersnotu">Ders Notları</a></li>
                    <li class="nav-sub-list-item nav-item"><a>Defter</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php while ($row = mysqli_fetch_assoc($results)) { ?>
        <div class="container-ürün">
            <h1 class="ürünliste-heading"><?php echo $row['isim'] ?></h1>
            <h2 class="fiyat"> Sadece <b><?php echo $row['fiyat']  ?></b> Lira</h2> 
            <div class="ürünliste-header">
                <p class="açıklama">   
                <?php echo $row['açıklama'] ?> </p>
                <?php echo '<img class="res" src="data:image/jpeg;base64,' . base64_encode($row['resim']) . '"/>'; ?>
        
            </div>

        </div>
    <?php } ?>






    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>

</html>