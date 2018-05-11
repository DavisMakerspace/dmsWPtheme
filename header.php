<?php
/* Header template */

 ?>
 <html lang="en">
 <head>
     <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Favicons -->
 <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>images/icons/favicon.ico" type="image/x-icon">

   <!-- Meta tags -->
  <meta property="og:title" content="<?php bloginfo('name') ?>">
  <meta property="og:description" content="<?php bloginfo('description') ?>">
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/parallel-banner-graphic.1.png">
  <meta property="og:url" content="<?php bloginfo('wpurl') ?>">
  <meta name="twitter:card" content="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/parallel-banner-graphic.1.png">


     <!--[if gte IE 9]>
   <style type="text/css">
     .gradient {
        filter: none;
     }
   </style>
 <![endif]-->
 <script type="text/javascript">

 </script>
 <?php wp_head(); ?>
 </head>
 <body>
 <!-- Site header and navigation -->
     <header class="top" role="header">
         <div class="container">
           <div class="row">
             <div class="col-xs-3">
                 <?php get_template_part( 'logo'); ?>

             </div>
             <div class="col-xs-9">
              <div class="dropdown">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="glyphicon glyphicon-align-justify"></span>
               </button>
               <div class="navbar-collapse collapse" role="navigation">

                   <?php

                   wp_nav_menu( array(
                     'menu'              => 'primary',
                      'theme_location'    => 'primary',
                      'container'         => 'div',
                      'menu_class'        => 'nav navbar-nav',
                    ));

                    ?>

               </div>
              </div>
              </div>
            </div> <!-- end row -->
         </div>
     </header>
