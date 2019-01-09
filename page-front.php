<?php
/* Template Name: Front */
     get_header();
 ?>
 <!-- Site banner -->
<section class="banner jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Welcome to Davis Makerspace</h1>
      <p class="lead my-3">a non-profit community workspace for makers and builders, designers and inventors.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</section>

<!-- Middle content section -->
<section class="container-fluid">
  <div class="row mb-2">
        <div class="col-md-6">
          <strong class="d-inline-block mb-2 text-success">Events</strong>
          <p class="card-text mb-auto"><?php echo do_shortcode("[ecs-list-events excerpt='true' eventdetails='true' ecs-list-events thumb='true' thumbwidth='200' thumbheight='250' contentorder='title, date, excerpt, venue, thumbnail']"); ?></p>

        </div>

        <!-- Events -->
        <div class="col-md-6">
          <!-- Posts -->
          <strong class="d-inline-block mb-2 text-primary">Projects</strong>
          <?php
          $postslist = get_posts('orderby=menu_order&sort_order=asc');
          foreach ($postslist as $post) :
              setup_postdata($post);
              ?>
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0"><a class="text-dark" href="<?php the_permalink(); ?>"><?php echo mb_strimwidth( get_the_title(), 0, 30, '...' );  ?></a></h3>
              <div class="entry">
                  <div class="mb-1 text-muted"><?php the_time('F jS, Y'); ?></div>
                  <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
              </div>
            </div>
            <?php the_post_thumbnail( 'dms-custom-img', array( 'class' => 'card-img-right')); ?>
          </div>
          <?php endforeach; ?>

        </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-4">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/analysis-blackboard.jpg" alt="visit our wiki image at Davis Makerspace" height="400" width="400">
    </div>
    <div class="col-md-8 jumbotron">
      <h4>Learn more:</h4>
      <h2>Visit the Davis Makerspace Wiki</h2>
      <p>What is a wiki? A wiki is a type of collabortively written website. Ours is our community page containing practical details about our space, the people who run the space, and some of the gadgets we've created and maintained over the years.</p>
      <p>Looking for open hours? Instructions on how to use one of our 3D printers?</p>
      <button class="btn btn-info">Visit Davis Makerspace's Wiki</button>
    </div>
  </div>
</section>


<?php get_footer(); ?>
