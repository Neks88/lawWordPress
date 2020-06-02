
<?php get_header(); ?>

<div class="container">
    
            <?php 
            
                if(have_posts()):
                while(have_posts()): the_post(); ?>


                    <div class="search-title">
                        <h3><a class="perma" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3
                    ></div>


                    <div class="search-meta">
                                  <div>Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author(); ?></a>  | on <?php the_time('F j, Y g:i a'); ?> | Posted In <div class="meta-cat"><?php the_category(); ?></div></div>
                </div>


              


             

          

            <?php endwhile; ?>
                <?php else: ?>

                    <?php echo "<h2 class='search-h2'>Nothing Found! Please try again</h2>"; ?>
                <?php endif; ?>
        </div>
     






<?php get_footer(); ?>