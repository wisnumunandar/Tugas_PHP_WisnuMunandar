<?php
// Variabel untuk menyimpan informasi kontak
$alamat = "123 Jalan PHP, NO 79";
$telepon = "+62 1234567890";
$email = "wisnumunandar59.@gmail.com";
$instagram = "@wisnumunandar";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 60%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 70px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .contact-info {
            display: block;
            justify-content: space-around;
            margin-top: 20px;
        }
        .contact-info div {
            text-align: center;
            flex: 1;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .contact-info div:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .contact-info i {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }
        .contact-info p {
            margin-top: 5px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kontak Saya</h1>
    <div class="contact-info">
        <div>
            <i class="fas fa-map-marker-alt"></i>
            <p><?php echo $alamat; ?></p>
        </div>
        <div>
            <i class="fas fa-phone"></i>
            <p><?php echo $telepon; ?></p>
        </div>
        <div>
            <i class="fas fa-envelope"></i>
            <p><?php echo $email; ?></p>
        </div>
        <div>
            <i class="fab fa-instagram"></i>
            <p><?php echo $instagram; ?></p>
        </div>
    </div>
</div>

</body>
</html>
