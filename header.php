<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( "charset" ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title><?php bloginfo("name"); ?></title>
  <?php wp_head(); ?>
</head>

<body>

<!--Our Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top " role="navigation">
    <div class="container-fluid">

      <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
        <img src="<?php bloginfo("template_directory"); ?>/img/logo1.png" alt="" class="logo">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

        <?php 
                wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'nav navbar-nav',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) ); 
    
    ?>

        </ul>

        <form class="form-inline my-2 my-lg-0" method="<?php echo esc_url(home_url("/")); ?>">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
    </div>
    <!--Container Ends Here-->
  </nav>
  <!--Our Navigation Ends-->



 <!-- Modal -->

    <!-- <a href="" data-toggle="modal" data-target="exampleModalLong"></a> -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-body">

          <section class="contact" id="contact">
            <h3 class="">Contact us for a free Consultation</h3>
            <p>Send us your contact info and we will get back to you soon as possible</p>
            <div class="conrow">
            <?php echo do_shortcode('[contact-form-7 id="80" title="My Form"]'); ?>
            </div>
          </section>
        </div>

      </div>
    </div>
  </div>
  <!--Modal Ends-->