<!DOCTYPE html>
<html lang="fa">
<head>
    <title>
        <?php if(isset($page_title))  echo $page_title;?>
    </title>
    <?php get_template_part("head");?>
    
</head>
<body>
    <?php
        get_header();
    ?>
   
    <main class="container">
    <?php
        if( isset($alerts) )
            echo $alerts;
       if( function_exists('main') )
            main();
       
    ?>
    </main>

    <?php get_footer();?>
    <?php get_template_part("scripts");?>
    
</body>
</html>
