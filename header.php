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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="#"><?php get_template_part( 'logo'); ?></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">

             <?php

             wp_nav_menu( array(
               'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
              ));

              ?>

           </div>
         </nav>
     </header>
