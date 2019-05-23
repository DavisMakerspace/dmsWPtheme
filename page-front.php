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
      <div style="float:left;"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/dms-logo.png" alt="Kids at Davis Makerspace" style="width:100px;height:auto;margin-right:30px;"></div>
      <h1 class="display-4 text-center">Davis Makerspace</h1>
      <p style="height: 100px;" class="lead my-3 float-left text-center">a non-profit community workspace for makers and builders, designers and inventors.</p>
      <button class="btn mx-auto">DONATE</button>

    </div>
  </div>
</section>

<!-- Middle content section -->
<section class="container-fluid">
  <div class="row dms-yellow pb-4">
        <div class="col-md-6">
          <h4 class="dms-fp">Events</h4>
          <p class="card-text mb-auto"><?php echo do_shortcode("[ecs-list-events excerpt='true' eventdetails='true' ecs-list-events thumb='true' thumbwidth='250' thumbheight='250' contentorder='title, date, excerpt, venue, thumbnail']"); ?></p>

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
            <div class="row no-gutters">
              <div class="col d-flex order-1 order-sm-0">
                <div class="card-body d-flex flex-column align-items-start">
                  <h3 class="mb-0"><a class="text-dark" href="<?php the_permalink(); ?>"><?php echo mb_strimwidth( get_the_title(), 0, 30, '...' );  ?></a></h3>
                  <div class="entry">
                      <div class="mb-1 text-muted"><?php the_time('F jS, Y'); ?></div>
                      <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <?php the_post_thumbnail( 'dms-custom-img', array( 'class' => 'card-img-right')); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
  </div>
  <div class="row dms-blue dms">
    <div class="col-sm-4 ml-0 mr-0 pl-0 pr-0" style="z-index: 1;">
      <img class="dms-info-row" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/drawing_on_papers_dms.jpg" alt="visit our wiki image at Davis Makerspace">
    </div>
    <div class="col-sm-8 mr-0 ml-0 pr-0 pl-0">
      <div class="dms-section-title">
        <h4>The Wiki</h4>
      </div>
      <div class="dms-section-text">
        <p>What is a wiki? A wiki is a type of collabortively written website. Our wiki is our community page containing practical details about our space, the people who run the space, and some of the gadgets we've created and maintained over the years.</p>
        <p>Looking for open hours? Instructions on how to use one of our 3D printers?</p>
        <a href="https://wiki.davismakerspace.org/"><button class="btn mx-auto">VISIT DAVIS MAKERSPACE'S WIKI</button></a>
      </div>
    </div>
  </div>

  <div class="row dms-yellow dms">
    <div class="col-sm-8 mr-0 ml-0 pr-0 pl-0 text-right">
      <div class="dms-section-title">
        <h4>Kids</h4>
      </div>
      <div class="dms-section-text">
        <p>Kids are welcome at Davis Makerspace! For safety reasons, however, children need to be accompanied by an adult.</p>
        <p>For special events, arrangements can be made. Davis Makerspace is available for many events and workshops. If you have questions or would like to put on an event, write to us!</p>
        <button class="btn mx-auto">WRITE TO THE BOARD</button>
      </div>
    </div>
    <div class="col-sm-4 ml-0 mr-0 pl-0 pr-0">
      <img class="dms-info-row" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/DMS_fleamarket_6.jpg" alt="Kids at Davis Makerspace">
    </div>
  </div>

  <div class="row dms-blue dms">
    <div class="col-sm-4 ml-0 mr-0 pl-0 pr-0" style="z-index: 1;">
      <img class="dms-info-row" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/davismakerspace-membership.jpg" alt="Membership at Davis Makerspace">
    </div>
    <div class="col-sm-8 mr-0 ml-0 pr-0 pl-0">
      <div class="dms-section-title">
        <h4>Membership</h4>
      </div>
      <div class="dms-section-text">
        <p>Davis Makerspace is a one-room community space, with rotating volunteers hosting open hours. We are not a co-working space but we try to make our tools and spaces available for the general public to use whenever possible. </p>
        <p>As a member you can put on events, partake in our governance process, and possibly even host open hours. Our suggested monthly donation for members is $30 a month.</p>
        <button class="btn mx-auto">LEARN MORE</button>
      </div>
    </div>
  </div>

  <div class="row dms-yellow dms">
    <div class="col-sm-8 mr-0 ml-0 pr-0 pl-0 text-right">
      <div class="dms-section-title">
        <h4>Tool Lending Library</h4>
      </div>
      <div class="dms-section-text">
        <p>Need to borrow a hacksaw, a hammer, and VU meter for a short-term project at home? We are in the process of creating a tool library that will be available for everyone to use.</p>
        <p>We haven't built our lending system yet, but join our mailing list to get status updates on our lending library, events, and other happenings at Davis Makerspace.</p>
        <a href="https://lists.davismakerspace.org/listinfo/discuss?fbclid=IwAR3YB1LKumTPWi7_EA_qCGxjE14NwxvUZUoxc7pbKUokQzfsnkVc3w1ne_4"><button class="btn mx-auto">MAILING LIST</button></a>
      </div>
    </div>
    <div class="col-sm-4 ml-0 mr-0 pl-0 pr-0">
      <img class="dms-info-row" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tool-library.jpg" alt="tool library Davis Makerspace">
    </div>
  </div>

</section>


<?php get_footer(); ?>
