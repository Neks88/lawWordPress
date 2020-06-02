
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 page">
            <?php 
            
                if(have_posts()):
                while(have_posts()): the_post(); ?>


                     <div class="title">
                        <h3><?php the_field('page_info'); ?></h3>
                        </div>


                    <!-- <div class="meta">
                                  <div>Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author(); ?></a>  | on <?php the_time('F j, Y g:i a'); ?> | Posted In <div class="meta-cat"><?php the_category(); ?></div></div>
                    </div> -->


                    <div class="blog-img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                    </div>


                    <div class="content">
                        <p><?php the_content(); ?></p>
               </div>


                    <!-- <div class="permalink">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Read More...</a>
                    </div> -->


            <?php endwhile; ?>
            <?php endif ?>
        </div>
        <div class="col-sm-3">
        <?php if(is_active_sidebar("sidebar1")): ?>
        <?php dynamic_sidebar("sidebar1") ?>

        <?php endif; ?>
        </div>
    </div>
</div>





<?php get_footer(); ?>