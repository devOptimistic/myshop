<?php
include_once '../includes/functions.php';
if (isset($_POST['submit'])){
    include_once '../includes/settings.php';
    $data = $_POST['frm'];
    $sql="INSERT INTO tbl_products(title,price,chid,status,text,img) VALUES ('$data[title]','$data[price]','$data[procat]','$data[status]','$data[text]','image')";
    $db = new DB();
    $db ->execute($sql);
    unset($db);
    $alert=alertTmp(" محصول شما با موفقیت ثبت شد!",'success');
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
        <?php echo $alert;?>
    </main>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/bs/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
