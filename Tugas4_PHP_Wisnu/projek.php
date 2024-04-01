<?php
    // Deklarasi variabel deskripsi projek
    $project1_title = "Website Warungku";
    $project1_description = "Website untuk memudahkan pengelolaan warung dengan fitur manajemen stok, penjualan, dan laporan keuangan.";

    $project2_title = "Website Laundry";
    $project2_description = "Website untuk layanan pencucian pakaian dengan sistem pemesanan online, pelacakan status pesanan, dan integrasi pembayaran.";

    $project3_title = "Website Sekolah";
    $project3_description = "Website resmi sekolah dengan informasi mengenai jadwal pelajaran, kegiatan ekstrakurikuler, pengumuman, dan profil sekolah.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 55%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .project {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .project h3 {
            color: #333;
            margin-top: 0;
        }
        .project p {
            color: #666;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<h1>My Projek</h1>
    <div class="container">
       
        <div class="project">
            <h3><?php echo $project1_title; ?></h3>
            <p><?php echo $project1_description; ?></p>
        </div>
        <div class="project">
            <h3><?php echo $project2_title; ?></h3>
            <p><?php echo $project2_description; ?></p>
        </div>
        <div class="project">
            <h3><?php echo $project3_title; ?></h3>
            <p><?php echo $project3_description; ?></p>
        </div>
    </div>
</body>
</html>
