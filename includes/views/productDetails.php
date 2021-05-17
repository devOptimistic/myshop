<?php

$page_title = "جزئیات محصول";
if( ! function_exists('main') ){
    function main(){
        global $row;
        echo "
            <div class=\"card mb-3\">
                <img src=\"assets/images/pic.jpg\" class=\"card-img-top\" alt=\"...\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$row['title']}</h5>
                    <p class=\"card-text\">{$row['description']}</p>
                    <p class=\"card-text\">قیمت : {$row['price']}</small></p>
                </div>
            </div>
        ";
    }
}
include "templates/master.php";
?>

