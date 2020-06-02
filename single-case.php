<?php 

// Template Name: Case Single

?>

<?php get_header(); ?>

    <div class="container">
        <h2 class="case-single-h2"><?php the_title(); ?></h2>
        <h5>
                Please Nesto:
        </h5>
            <p><?php the_field("case_description"); ?></p>
    </div>

<?php get_footer(); ?>