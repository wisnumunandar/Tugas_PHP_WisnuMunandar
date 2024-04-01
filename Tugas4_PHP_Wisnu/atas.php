<?php
include_once 'webmenu.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <h1 align="center">My Website</h1>

    <div style="text-align:center; background-color:khaki; color:blue">
        <!-- Home | Produk | Pesan | Gesbuk -->

        <?php
            foreach ($menu_atas as $key => $value){
                echo "<a href ='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>