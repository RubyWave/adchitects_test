<?php get_header(); ?>

    <?php get_template_part('template-parts/part', 'header'); ?>
    
    <main>
        <div class="container">
            <?php the_content(); ?>
        </div>
    </main>

<?php get_footer();
