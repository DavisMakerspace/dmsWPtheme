<?php
/* Main template file. */

  get_header();
 ?>

 <div class="main-content-width-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-sm-9 main-content">
         <h1><?php echo get_the_title() ?></h1>

         <main class="main-content">
           <?php
             // Start the loop
             if (have_posts()) :
               while (have_posts()) :
                 the_post();
                  the_content();
               endwhile;
             endif;

            ?>
         </main>
      </div>
    </div>
   </div>
 </div>

 <?php get_footer(); ?>
