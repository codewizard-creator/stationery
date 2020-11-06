<?php

include 'database.php';

$db = new veritabanı();

$ürünadı = $_POST['ürünad'];

$kategorino = $_POST['kategorino'];

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

    <?php
if(!empty($kategorino)) {
foreach ($kategorino as $value) {
    $query = "SELECT * FROM $ürünadı WHERE çeşit = '$value'";
    $result = $db->select($query);




?>
    
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
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
    <?php } ?>
    <?php } ?>