<?php
$data = $_POST['frm'];
$dbc = new mysqli('localhost', 'root', '', 'mydb'); // mysqli_connect
$sql="INSERT INTO tbl_contact(name,phone,email,text) VALUES ('$data[name]','$data[phone]','$data[email]','$data[text]')";
$result=$dbc -> query($sql);
$dbc -> close();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارتباط با ما</title>
    <link rel="stylesheet" href="bs/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/Font/font.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>پیام سرور : </strong> پیام شما با موفقیت ثبت شد!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</main>

<script src="js/jquery.js"></script>
<script src="bs/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
