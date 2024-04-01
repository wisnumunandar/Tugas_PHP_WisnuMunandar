<div style="height:680px">
    <!-- Halaman Depan -->

    <?php
    // Memeriksa apakah kunci 'hal' ada dalam array $_GET sebelum mencoba mengaksesnya
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    
    include_once 'webmenu.php';

    if(!empty($hal) && array_key_exists($hal, $menu_bawah)){
        include_once $menu_bawah[$hal];
    }
    else {
        include_once "home.php";
    }
    ?>
</div>
