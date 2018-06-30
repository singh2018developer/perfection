<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prefection Theme</title>
    <?php wp_head(); ?>
</head>
    <?php

        if( is_front_page() ):
            $prefection_classes = array('prefection-class','my-class');
        else:
            $prefection_classes = array('no-my-class');
        endif;
?>

<body <?php body_class($prefection_classes);?>>
 
 <?php wp_nav_menu(array('theme_location' => 'primary'));  ?>
 
 <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>