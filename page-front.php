<?php
/* Template Name: Front */
     get_header();
 ?>
 <!-- Site banner -->
<section class="banner text-white rounded">
  <div class="row">
    <div class="col-md-6 px-0">

    </div>
    <div class="col-md-6 dms-b-right">

      <h1 class="display-4 font-italic">Welcome to Davis Makerspace</h1>
      <p class="lead my-3">a non-profit community workspace for makers and builders, designers and inventors.</p>
      
    </div>
  </div>
</section>

<!-- Middle content section -->
<section class="container-fluid">
  <div class="row mb-2">
        <div class="col-md-6">
          <h4 class="dms-fp">Events</h4>
          <p class="card-text mb-auto"><?php echo do_shortcode("[ecs-list-events excerpt='true' eventdetails='true' ecs-list-events thumb='true' thumbwidth='200' thumbheight='250' contentorder='title, date, excerpt, venue, thumbnail']"); ?></p>

        </div>

        <!-- Events -->
        <div class="col-md-6">
          <!-- Posts -->
          <h4 class="dms-fp">News & Stories</h4>
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
      <h4>The Wiki</h4>
      <p>What is a wiki? A wiki is a type of collabortively written website. Our wiki is our community page containing practical details about our space, the people who run the space, and some of the gadgets we've created and maintained over the years.</p>
      <p>Looking for open hours? Instructions on how to use one of our 3D printers?</p>
      <button class="btn btn-info">VISIT DAVIS MAKERSPACE'S WIKI</button>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-8 jumbotron text-right">
      <h4>Kids</h4>
      <p>Kids are welcome at Davis Makerspace! For safety reasons, however, children under the age of 18 need to be accompanied by an adult.</p>
      <p>For special events, arrangements can be made. Davis Makerspace is available for many events and workshops. If you have questions or would like to put on an event, write to us!</p>
      <button class="btn btn-info">WRITE TO THE BOARD</button>
    </div>
    <div class="col-md-4">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/DMS_fleamarket_6.jpg" alt="Kids at Davis Makerspace" height="400" width="400">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-4">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/davismakerspace-membership.jpg" alt="Membership at Davis Makerspace" height="400" width="400">
    </div>
    <div class="col-md-8 jumbotron">
      <h4>Membership</h4>
      <p>Davis Makerspace is a one-room community space, with rotating volunteers hosting open hours. We are not a co-working space but we try to make our tools and spaces available for the general public to use whenever possible. As a member you can put on events, partake in our governance process, and possibly host open hours. Our suggested monthly donation for members is $30 a month.</p>
      <button class="btn btn-info">LEARN MORE</button>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-8 jumbotron text-right">
      <h4>Tool Lending Library</h4>
      <p>Need to borrow a hacksaw, a hammer, and VU meter for a short-term project at home? We are in the process of creating a tool library that will be available for everyone to use. We haven't built our lending system yet, but join our mailing list to get status updates on our lending library, events, and other happenings at Davis Makerspace.</p>
      <a href="https://lists.davismakerspace.org/listinfo/discuss?fbclid=IwAR3YB1LKumTPWi7_EA_qCGxjE14NwxvUZUoxc7pbKUokQzfsnkVc3w1ne_4"><button class="btn btn-info">MAILING LIST</button></a>
    </div>
    <div class="col-md-4">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tool-library.jpg" alt="tool library Davis Makerspace" height="400" width="400">
    </div>
  </div>

</section>


<?php get_footer(); ?>
