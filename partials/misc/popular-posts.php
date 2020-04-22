<?php
wpp_get_mostpopular(array(
                'wpp_start'         =>  '
                    <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                        <div>
                            <div class="container clearfix">
                                <span class="label label-danger bnews-title">' . get_theme_mod( 'seriozn_show_header_popular_posts_widget_title' ) . ':</span>
                                <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">',
                'wpp_end'           =>  '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>',
                'post_html'         =>  '<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>'
            ));