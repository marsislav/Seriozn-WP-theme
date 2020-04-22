<div class="entry clearfix">
	<?php

    if( get_post_format() == 'gallery' ){
        $gallery                =   get_post_gallery( get_the_ID(), false );

	    ?>
        <div class="entry-image">
            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <?php
                        foreach( $gallery['src'] as $src ){
                            ?>
                            <div class="slide">
                                <a href="<?php echo $src; ?>">
                                    <img class="image_fade" src="<?php echo $src; ?>">
                                </a>
                            </div>
	                        <?php
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
	    <?php
    }else if( get_post_format() == 'video' ){
        $content                =   apply_filters( 'the_content', get_the_content() );
        $video                  =   false;

        if( !strpos( $content, 'wp-playlist-script' )) {
            $video              =   get_media_embedded_in_content(
                $content,
                array( 'video', 'object', 'embed', 'iframe' )
            );
        }

        if( $video ){
	        echo '<div class="entry-video">';
	        echo $video[0];
	        echo '</div>';
        }
    }else if( get_post_format() == 'audio' ){
	    $content                =   apply_filters( 'the_content', get_the_content() );
	    $audio                  =   false;

	    if( !strpos( $content, 'wp-playlist-script' )) {
		    $audio              =   get_media_embedded_in_content(
			    $content,
			    array( 'audio', 'iframe' )
		    );
	    }

	    if( $audio ){
		    echo $audio[0];
	    }
    }else if( has_post_thumbnail() ){
		?>
		<div class="entry-image">
				<?php the_post_thumbnail( 'full', array( 'class' => 'image_fade' ) ); ?>
		</div>
		<?php
	}

	?>
	<div class="entry-title">
		<h2><?php the_title(); ?></h2>
	</div>
	<ul class="entry-meta clearfix">
		<li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
		
		<li><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php comments_number('0' ); ?><?php _e(' Comments', 'seriozn');?></a></li>
	</ul>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</div>