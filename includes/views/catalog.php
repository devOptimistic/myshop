<?php

$page_title = "محصولات";
if( ! function_exists('main') ){
    function main(){
        global $table;
        echo "<h1 class=\"text-center\">محصولات</h1>";
        echo "<section class=\"row\">";
            foreach ($table as $row) {
                get_template_part("productCard",null,$row);
            }
        echo "</section>";
    }
}
include "templates/master.php";
?>

