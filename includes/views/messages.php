<?php
$page_title = "پیام ها";
if( ! function_exists('main') ){
    function main(){
        global $table;
        echo "<h1 class=\"text-center\">پیام ها</h1>";
        echo "<section class=\"row\">";
            foreach ($table as $row) {
                get_template_part("messageCard",null,$row);
            }
        echo "</section>";
    }
}
include "templates/master.php";
?>