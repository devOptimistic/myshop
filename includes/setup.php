<?php
include 'settings.php';
include 'functions.php';

$db = new DB( false );
if( $softSetup ) {
	$sql = "DROP DATABASE IF EXISTS {$dbname}";
	$db->execute($sql);
	alerts("دیتابیس {$dbname} و جداول آن حذف شد", 'success');
} // در غیر اینصورت دیتابیس فعلی را حفظ کن و جداول جدید را بیافزا

$sql = "CREATE DATABASE IF NOT EXISTS {$dbname}
		CHARSET {$charset}
		COLLATE {$collate}";
$result = $db -> execute( $sql );
if( $result )
	alerts('دیتابیس {$dbname} با موفقیت ایجاد شد', 'success');

unset( $db );
$db = new DB(); // همراه با انتخاب دیتابیس

$sql = "CREATE TABLE IF NOT EXISTS contact(
		id INT AUTO_INCREMENT NOT NULL,
		name VARCHAR(255),
		phone VARCHAR(255),
        email VARCHAR(255),
		body TEXT,
		status VARCHAR(20),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alerts('جدول پیام با موفقیت ایجاد شد', 'success');


    $sql = "CREATE TABLE IF NOT EXISTS user(
		id INT AUTO_INCREMENT NOT NULL,
		firstname VARCHAR(255),
		lastname VARCHAR(255),
        email VARCHAR(255),
		phone VARCHAR(11),
		password VARCHAR(255),
        state VARCHAR(50),
        city VARCHAR(50),
		address VARCHAR(400),
        role VARCHAR(255),
		imgSrc VARCHAR(255),
		status VARCHAR(20),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alerts('جدول کاربران با موفقیت ایجاد شد', 'success');


$sql = "CREATE TABLE IF NOT EXISTS product(
		id INT AUTO_INCREMENT NOT NULL,
		title VARCHAR(30),
		price INT,
		imgSrc VARCHAR(255),
		description TEXT,
		status VARCHAR(20),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alerts('جدول محصول با موفقیت ایجاد شد', 'success');


$alerts = alerts();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نصب</title>
    <link rel="stylesheet" href="../public/assets/bs/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../public/assets/css/Font/font.css">
    <link rel="stylesheet" href="../public/assets/css/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>
    <main class="container">
        <?php
            if( isset($alerts) )
                echo $alerts;
        ?>
    </main>

    <script src="../public/assets/js/jquery.js"></script>
    <script src="../public/assets/bs/bootstrap.min.js"></script>
    <script src="../public/assets/js/script.js"></script>
</body>
</html>