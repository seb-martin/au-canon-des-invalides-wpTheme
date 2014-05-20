<?php
/*
Template Name: A Propos
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
                <div class="row">

                    <div class="col-md-4">
                        <div class="border-left-out ">
                            <div class="border-left-in ">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="border-left-out ">
                                    <div class="border-left-in ">
                                        <address>
                                            Au Canon des Invalides <br>
                                            54 rue Sainte-Dominique <br>
                                            75007 PARIS
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border-left-out">
                                    <div class="border-left-in">
                                        <address>
                                            <span class="glyphicon glyphicon-phone-alt"></span> 01 47 05 48 68<br>
                                            <span class="glyphicon glyphicon-envelope"></span>
                                            <a href="mailto:info@au-canon-des-invalides.fr">info@au-canon-des-invalides.fr</a> <br>
                                            75007 PARIS
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="border-left-out">
                                    <div class="border-left-in">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9096104241935!2d2.3098299999999985!3d48.85993399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fd9c8f8d1d5%3A0x881f727a6c225ce4!2sAu+Canon+des+Invalides!5e0!3m2!1sfr!2sfr!4v1396476082196"
                                            width="650" height="450" frameborder="0" style="border:0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>