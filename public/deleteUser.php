<?php
include "__php__.php";


if(isset($_GET['id']))
    $db=new DB();
    User::delete($_GET['id']);
    
    $alerts = Alert::alerts();
    echo $alerts;
?>