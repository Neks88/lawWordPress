<!--Footer-->
<footer class="ftr">
    <div class="container">

      <div class="row">

        <div class="col-sm-4 animated wow slideInUp" data-wow-delay="0.2s">
          <img src="<?php bloginfo("template_directory") ?>/img/logo1.png" alt="">
          <p><?php the_field("footer_box1"); ?></p>
        </div>

        <div class="col-sm-4 animated wow slideInUp" data-wow-delay="0.2s">
          <h5>Office Hours</h5>
          <ul>
          <?php the_field("footer_box2"); ?>
          </ul>
        </div>

        <div class="col-sm-4 animated wow slideInUp" data-wow-delay="0.2s">
          <h5>Contact us</h5>
          <ul>
          <?php the_field("footer_box3"); ?>
        </div>
      </div>
      <!--Row-->
    </div>

    <div class="container copyright">
      <p>Copyright &copy; <?php echo date("Y"); ?> Brighton Associates | All rights Reserved</p>
    </div>




  </footer>
  <!--Footer Ends-->

<a href="" class="" id="scroll-to-top"></a>
  <!--Local-->
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.smoothscroll.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/illbeback.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<?php wp_footer(); ?>

</body>

</html>