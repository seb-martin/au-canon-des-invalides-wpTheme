<?php
get_header();
?>
<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <?php
        get_template_part('jumbotron');
        get_template_part('happy');
        get_template_part('hr');


        wp_reset_postdata();
        query_posts('posts_per_page=1&post_type=menu-jour');
        get_template_part('menu-jour');
        wp_reset_postdata();
        ?>

    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
<?php
get_footer();
?>