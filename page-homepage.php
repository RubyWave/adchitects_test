<?php get_header(); ?>

    <?php get_template_part('template-parts/part', 'header'); ?>
    
    <main>
        <div class="container">
            <div class="hero-block">
                <?php

                $block_content = '<!-- wp:heading {"textAlign":"center","level":1} --> <h1 class="wp-block-heading has-text-align-center">Lorem Ipsum</h1> <!-- /wp:heading --> <!-- wp:paragraph {"textAlign":"center"} --> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <!-- /wp:paragraph -->';

                echo do_blocks($block_content);
                ?>
            </div>

            <?php //this element is to ensure page has some scroll, as was requested ?>
            <div class="hero-afterblock"></div>
            
            <?php the_content(); ?>
        </div>
    </main>

<?php get_footer();
