<?php get_header(); ?>
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <?php

        if( function_exists('wpp_get_mostpopular' )  && get_theme_mod( 'seriozn_show_header_popular_posts_widget' ) ){
	        get_template_part( 'partials/misc/popular-posts' );
        }

        ?>

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <!-- Posts
                ============================================= -->
                <div id="posts">
                    <?php

                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();

                            get_template_part( 'partials/page/content-excerpt' );
                        }
                    }

                    ?>
                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                <ul class="pager nomargin">
                    <li class="previous"><?php previous_posts_link('&larr; Older' );?></li>
                    <li class="next"><?php next_posts_link( 'Newer &rarr;' ); ?></li>
                </ul><!-- .pager end -->

            </div><!-- .postcontent end -->

            <?php get_sidebar(); ?>
        </div>

    </div>
</section><!-- #content end -->

<?php get_footer(); ?>