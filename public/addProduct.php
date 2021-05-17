<?php
include "__php__.php";
if (isset($_POST['submit'])){
        
    // A. validation
    // B. Insert in DB
    $db = new DB();
    $parameters=$_POST;
    unset( $parameters['submit'] );
    Product::add( $parameters );
    $alerts = Alert::alerts();
    echo $alerts;
}
include "../includes/views/addProduct.php";

?>

