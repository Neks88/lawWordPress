<?php 
/*
* Template Name: Home Page
*/



?>
<?php get_header(); ?>



  

  <!--Carousel-->
  <div id="demo" class="carousel slide" data-ride="carousel">

    <a href="#secOne" i> <i class="ion-ios-arrow-thin-down  bounce"></i> </a>


    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php bloginfo("template_directory"); ?>/img/img1.jpg"  alt="Attourneys" class="img-fluid">

        <h3 class="carousel-caption carousel_h3 animated bounceInLeft"><?php the_field("slider_title1"); ?></h3>

        <p class="carousel-caption carousel_p animated bounceInRight"><?php the_field("slider_title1_sub"); ?></p>

      </div>


      <div class="carousel-item">
        <img src="<?php bloginfo("template_directory"); ?>/img/img2.jpg"   alt="Lawyers" class="img-fluid">

        <h3 class="carousel-caption carousel_h3"><?php the_field("slider_title2"); ?>
          </h3>

        <p class="carousel-caption carousel_p "><?php the_field("slider_title2_sub"); ?>
          </p>

      </div>


      <div class="carousel-item">
        <img src="<?php bloginfo("template_directory"); ?>/img/img3.jpg"   alt="New York" class="img-fluid">
        <h3 class="carousel-caption carousel_h3"><?php the_field("slider_title3"); ?></h3>
        <p class="carousel-caption carousel_p"><?php the_field("slider_title3_sub"); ?></p>

      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
    <span id="secOne"></span>
  </div>
  <!--Carousel Ends-->


  <!--Welcome-->
  <section class="welcome">

    <div class="container animated wow slideInUp" data-wow-delay="0.3s">

      <h1 class=""><?php the_field("wel_title"); ?></h1>
      <p class=""><?php the_field("wel_description"); ?></p>

      <img src="<?php bloginfo("template_directory"); ?>/img/underline.png" alt="" class="fluidCon" id="">

    </div>

  </section>
  <!--Welcome Ends-->


  <!--Practice-->
  <section class="practice animated wow slideInUp" data-wow-delay="0.2s">

    <h3 class=""><?php the_field("prac_title"); ?></h3>
    <p class="container pracp"><?php the_field("prac_desc"); ?></p>
    <img src="<?php bloginfo("template_directory"); ?>/img/underline.png" alt="" class="fluidSec">

    <div class="container">
      <div class="row">
        <div class="col-sm-6 prac">
          <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field("area1"); ?></h4>
          <p class=""><?php the_field("area1_desc"); ?></p>
        </div>
        <div class="col-sm-6 prac">
          <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field("area2"); ?></h4>
          <p class=""><?php the_field("area2_desc"); ?></p>
        </div>
      </div>
      <!--Row-->
    </div>
    <!--Container-->


    <div class="container">
      <div class="row">
        <div class="col-sm-6 prac">
          <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field("area3"); ?></h4>
          <p class=""><?php the_field("area3_desc"); ?> </p>
        </div>
        <div class="col-sm-6 prac">
          <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field("area4"); ?></h4>
          <p class=""><?php the_field("area4_desc"); ?></p>
        </div>
      </div>
      <!--Row-->
    </div>
    <!--Container-->

    <div class="container">
      <div class="row">
        <div class="col-sm-6 prac">
          <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field("area5"); ?></h4>
          <p class=""><?php the_field("area5_desc"); ?></p>
        </div>
        <div class="col-sm-6 prac">
          <h4 class=""> <i class="ion-ios-briefcase"></i><?php the_field("area6"); ?></h4>
          <p class=""><?php the_field("area6_desc"); ?></p>
        </div>
      </div>
      <!--Row-->
    </div>
    <!--Container-->
  </section>
  <!--Practice Ends-->


  <!--Team-->
  <section class="team">

    <h3 class=""><?php the_field("team_title"); ?></h3>
    <p class="container teamp"><?php the_field("team_description"); ?></p>



    <div class="container teammar">
      <div class="row">
        <div class="col-sm-7 ">
          <p class="animated wow slideInLeft" data-wow-delay="0.2s"><?php the_field("member1_desc"); ?></p>

        </div>

        <div class="col-sm-5 animated wow slideInRight" data-wow-delay="0.2s"> 
        
        <?php 
            $image = get_field("member1_image");
        if(!empty($image)) :
        ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

        <?php endif; ?>
         </div>
      </div>
    </div>


    <div class="container teammar">
      <div class="row">
        <div class="col-sm-5 animated wow slideInLeft" data-wow-delay="0.2s">

        <?php 
            $image = get_field("member2_image");
        if(!empty($image)) :
        ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

        <?php endif; ?>


        </div>

        <div class="col-sm-7">
          <p class="animated wow slideInRight" data-wow-delay="0.2s"><?php the_field("member2_desc"); ?></p>
        </div>
      </div>
    </div>

    <div class="container teammar">
      <div class="row">
        <div class="col-sm-7 ">
          <p class="animated wow slideInLeft" data-wow-delay="0.1s"><?php the_field("member3_desc"); ?></p>

        </div>

        <div class="col-sm-5 animated wow slideInRight" data-wow-delay="0.1s"> 

        <?php 
            $image = get_field("member3_image");
        if(!empty($image)) :
        ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

        <?php endif; ?> 
        </div>

      </div>
    </div>

  </section>
  <!--Team Ends-->

  <!--Testimonial-->
  <section class="testimonial animated wow slideInUp" data-wow-delay="0.1s">
    <h3 class="">Our Testimonials</h3>
    <div class="container">
      <div class="row">
     <?php echo do_shortcode('[testimonial_rotator id=81]'); ?>
      </div>
    </div>

  </section>
  <!--Testimonial Ends-->


  <!--Counter-->
  <section class="counter animated wow slideInUp" data-wow-delay="0.3s">

    <div class="container">

      <div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8"><?php echo do_shortcode('[tf_numbers name="87"]'); ?></div>
<div class="col-sm-2"></div>
      
      </div>

    </div>

  </section>
  <!--Counter Ends-->


  <!--Contact-->
  <section class="contact animated wow slideInUp" data-wow-delay="0.4s" id="contact">

    <h3 class="">Contact us for a free Consultation</h3>
    <p>Send us your contact info and we will get back to you soon as possible</p>

    <div class="conrow">
    <?php echo do_shortcode('[contact-form-7 id="80" title="My Form"]'); ?>
    </div>
  </section>
  <!--Contact Ends-->


  
   




  <?php get_footer(); ?>