<?php
/**
 * The template for displaying all single posts and attachments
 * @Simple-Bootstrap-Theme
 */

get_header(); ?>


 <div class="container">
   <div class="row">
     <div class="col-sm-9">
         <div class="jumbotron">
          <h1><?php echo get_the_title(); ?></h1>
          <small class="text-muted"><span class="dashicons dashicons-clock"></span>&nbsp;<?php echo get_the_date( 'Y-m-d' ); ?></small>
          <hr>
         <?php
         // Start the loop
             if (have_posts())  :
                 while (have_posts()):
                   the_post();

                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                          the_post_thumbnail( 'medium' );
                          }

                       the_content();
                 endwhile;
             endif;
         ?>
         <hr>
         <small class="text-muted">
           <?php $args = array(
            	'prev_text'          => 'Previous: %title',
            	'next_text'          => 'Next: %title',
            	'screen_reader_text' => 'Continue Reading'
            );
            the_post_navigation($args); ?>
         </small>
       </div>
     </div>
     <div class="col-sm-3">

         <?php get_sidebar("main-sidebar"); ?>

     </div>
   </div>
</div>




<?php get_footer(); ?>
