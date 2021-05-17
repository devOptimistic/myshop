<?php
include "__php__.php";


if (isset($_GET['id'])){
    $db = new DB();
    if (isset($_POST['submit'])){
        // A. validation
        // B. Insert in DB
        $db = new DB();
        $parameters=$_POST;
        unset( $parameters['submit'] );
        User::update($_GET['id'],$parameters );
    }
    $selectedRow=User::find("id={$_GET['id']}");
    $row=$selectedRow[0];


}
else{
    $alerts = Alert::alerts("شناسه کاربر نا معتبر است");

}
echo $alerts;
include "../includes/views/editUser.php";


?>

