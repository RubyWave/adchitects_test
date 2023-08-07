<?php get_header(); ?>

    <?php get_template_part('template-parts/part', 'header'); ?>
    <main>
        <?php
        if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();
            }
        }
        ?>
    </main>

<?php get_footer();
