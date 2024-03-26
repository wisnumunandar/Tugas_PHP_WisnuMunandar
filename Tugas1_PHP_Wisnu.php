<?php

$nama = "Wisnu Munandar";
$kota = "Garut";
$umur = 21;
$sd = "SDN 1 Ciwangi";
$smp = "SMPN 1 Bl.Limbangan";
$sma = "SMKN 6 Garut";
$universitas = "Universitas Amikom Purwokerto";
$prodi = "Informatika";
$semester = 6;
$ttl = '17 September 2021';
$hobi = array("Olahraga", "Tidur");
$keterampilan = array("Bermain Voly", "Makan Yang Banyak");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #F5F5DC; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-size: 36px; color: #6495ED;">My Biodata</h1>
        <div style="text-align: center;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZhX5ZEOQwIIhJ4CDIeEeJfjxlGA8dhm4UiQ&usqp=CAU" alt="" style="width: 20%;">
        </div>
        <p style="text-align: justify;">
            Hallo,,Saya <?php echo $nama;?> mahasiswa <?php echo $universitas;?> semester <?php echo $semester;?> jurusan <?php echo $prodi;?>. Saya berasal <?php echo $kota;?>, saat ini 
        saya berumur <?php echo $umur;?> tahun. Saya lahir pada tanggal <?php echo $ttl;?> tempat lahir <?php echo $kota;?>. Berikut beberapa hal mengenai tentang biodata saya :  </p>

        <h2>Pendidikan</h2>
        <ul style="list-style-type: none; padding-left: 0;">
            <li><?php echo $sd;?></li>
            <li><?php echo $smp;?></li>
            <li><?php echo $sma;?></li>
            <li><?php echo $universitas;?></li>
        </ul>
        <h3>Hobi</h3>
        <ul style="list-style-type: none; padding: 0;">
        <?php
        foreach ($hobi as $item) {
            echo "<li style='margin-bottom: 0px;'>";
            echo $item;
            echo "</li>";
        }
        ?>
        </ul>
        <h4>Keterampilan</h4>
        <ul style="list-style-type: none; padding: 0;">
        <?php
        foreach ($keterampilan as $item) {
            echo "<li style='margin-bottom: 0px;'>";
            echo $item;
            echo "</li>";
        }
        ?>
        </ul>
    </div>
</body>
</html>
