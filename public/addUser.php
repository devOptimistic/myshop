<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
if (isset($_POST['submit'])){
        
    // A. validation
    // B. Insert in DB
    $db = new DB();
    $parameters=$_POST;
    unset( $parameters['submit'] );
    User::add( $parameters );
    $alerts=alerts();
    echo $alerts;
    
}
include "../includes/views/addUser.php";

?>

