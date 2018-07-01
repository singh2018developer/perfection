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
 
    <div class="container">

            <div class="row">
               <div class="col-xs-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <?php
                            
                            wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'menu-class' => 'navbar-nav mr-auto'
                                        )
                                    );

                        ?>
                    
                    </div>
                  </div> 
                  <!-- /container-fluid -->
                </nav>
                    
               </div>
            </div>

 
 
 <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>