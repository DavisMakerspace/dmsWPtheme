<?php
/* Main template file. */

  get_header();
 ?>


   <div class="container">
     <div class="row">
       <div class="col-sm-9">

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


 <?php get_footer(); ?>
