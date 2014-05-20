<section id="menuJour" class="container">
    <?php if (have_posts()) : ?>

        <div class="daily-specials row">
            <h1>
                <img src="<?php bloginfo('template_url'); ?>/images/Frise-G.png" alt="Frise-D"/>
                <span>MENU DU JOUR</span>
                <img src="<?php bloginfo('template_url'); ?>/images/Frise-D.png" alt="Frise-D"/>
            </h1>
        </div>
        <?php while (have_posts()) : the_post(); ?>
            <div class="jour row">
                <?php the_date(); ?>

            </div>
            <div class="daily-specials row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="daily-specials-item">
                        <div class="border-out">
                            <div class="border-in">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--
            <div class="post">
                <h3 class="post-title">
                    <a href="<?php /*the_permalink(); */?>"><?php /*the_title(); */?></a>
                </h3>
                <p class="post-info">
                    Posté le <?php /*the_date(); */?> dans <?php /*the_category(', '); */?> par <?php /*the_author(); */?>.
                </p>
                <div class="post-content">
                    <?php /*the_content(); */?>
                </div>
            </div>
-->
        <?php endwhile; ?>

    <?php else : ?>
        <div class="no-daily-special row">
            <h1>
                <img src="<?php bloginfo('template_url'); ?>/images/Frise-G-Dark.png" alt="Frise-D"/>
                <span style="text-decoration: line-through">MENU DU JOUR</span>
                <img src="<?php bloginfo('template_url'); ?>/images/Frise-D-Dark.png" alt="Frise-D"/>
            </h1>
            <p class="lead">Pas de menu aujourd'hui.</p>
            <p class="lead">Consultez notre carte.</p>
        </div>
    <?php endif; ?>

    <div class="daily-specials row">
        <!-- Bouton RSS -->
        <a class="rss-tooltip" href="<?php bloginfo('rss2_url'); ?>"
           data-toggle="tooltip" data-placement="right">
            <img src="<?php bloginfo('template_url'); ?>/images/rss-panneau-64.png" alt="RSS"/>
        </a>
    </div>

    <div class="daily-specials">
        <img src="<?php bloginfo('template_url'); ?>/images/Frise-Double.png" alt="RSS"/>
    </div>

</section>

