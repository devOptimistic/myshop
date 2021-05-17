<?php
include "../settings.php";
include "../functions.php";
$db=new DB();
$table=User::find();
unset($db);
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کاربران </title>
    <link rel="stylesheet" href="../../public/assets/bs/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../../public/assets/css/Font/font.css">
    <link rel="stylesheet" href="../../public/assets/css/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <main class="container">
        <section class="row">
            <?php
                foreach ($table as $row) {
                    include __DIR__."/templates/userCard.php";
                }
            ?>
        </section>
    </main>
    <script src="../../public/assets/js/jquery.js"></script>
    <script src="../../public/assets/bs/bootstrap.min.js"></script>
    <script src="../../public/assets/js/script.js"></script>
</body>
</html>
