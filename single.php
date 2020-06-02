
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php 
            
                if(have_posts()):
                while(have_posts()): the_post(); ?>

<div class="blog-body-single">
                    <div class="title">
                        <h3><?php the_title(); ?></h3
                    ></div>


                    <div class="meta">
                                  <p>Posted by <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?></p>
                    </div>


                    <div class="blog-img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                    </div>


                    <div class="content">
                        <p><?php the_content(  ); ?></p>
               </div>


                  

             </div>

            <?php endwhile; ?>
            <?php endif ?>
        </div>
        
    </div>
</div>





<?php get_footer(); ?>