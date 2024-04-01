<?php
$images = [
    "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/09/18/1560447541.jpg",
    "https://ashisheditz.com/wp-content/uploads/2023/10/shinchan-wallpaper.jpg",
    "https://wallpapers.com/images/featured/crayon-shin-chan-wgwthaxe7fb8qc7k.jpg",
    "https://wallpapers.com/images/hd/doraemon-flying-with-friends-1qjwumjwjhd222v4.jpg",
    "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/09/18/1560447541.jpg",
    "https://ashisheditz.com/wp-content/uploads/2023/10/shinchan-wallpaper.jpg",
    "https://wallpapers.com/images/featured/crayon-shin-chan-wgwthaxe7fb8qc7k.jpg",
    "https://wallpapers.com/images/hd/doraemon-flying-with-friends-1qjwumjwjhd222v4.jpg"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gallery</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;
        }

        fieldset {
            border: 1px solid white !important;
            padding-left: 700px;
            padding-right: 700px;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .image-container img {
            width: 250px;
            height: 250px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="image-container">
        <fieldset>
            <h1>My Gallery</h1>
        </fieldset>
        <?php
        foreach ($images as $index => $image) {
            echo "<img src='$image' alt='Image " . ($index + 1) . "'>";
        }
        ?>
    </div>
</body>
</html>
