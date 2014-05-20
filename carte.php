<?php
/*
Template Name: Carte
*/
?>
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content container" role="main">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <?php get_template_part('page-title'); ?>
                        <div class="post-content">
                            <?php the_content(); ?>
                            <?php get_template_part('carte-entrees'); ?>
                            <?php get_template_part('carte-salades-composees'); ?>
                            <?php get_template_part('carte-planches'); ?>
                            <?php get_template_part('carte-snacks'); ?>
                            <?php get_template_part('carte-plats'); ?>
                            <?php get_template_part('carte-fromages'); ?>
                            <?php get_template_part('carte-desserts'); ?>
                            <?php get_template_part('carte-glaces'); ?>
                            <?php get_template_part('carte-legale'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->




<?php //get_sidebar(); ?>
<?php get_footer(); ?>