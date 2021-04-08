<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
if (isset($_POST['submit'])){
        
    // A. validation
    $imgSrc = 'assets/images/pic.jpg';
    unset( $_POST['submit'] ); // این پارامتر درج نشود
    $_POST['imgSrc'] = $imgSrc; // تصویر محصول به پارامترها اضافه شود

    // B. Insert in DB
    $db = new DB();
    Product::add( $_POST );
    unset( $db );
    $alerts = alerts();
}

?>







<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت محصول</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/css/Font/font.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="container">
        <?php echo $alerts ?>
    </main>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/bs/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
