<?php get_header ();?>
    <!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">


			<div class="container clearfix">

				<!-- Post Content
                ============================================= -->
				<div class="postcontent nobottommargin clearfix">
<?php if (have_posts()){
	while(have_posts ()){
		the_post();
		$author_ID=get_the_author_meta('ID');
		$author_url=get_author_posts_url($author_ID);
		
		?>
						<div id="post-<?php the_ID(); ?>" <?php post_class('single-post nobottommargin'); ?>>

<!--Single Post
============================================= -->
<div class="entry clearfix">

	<!-- Entry Title
	============================================= -->
	<div class="entry-title">
		<h2><?php the_title();?></h2>
	</div><!-- .entry-title end -->

	<!-- Entry Meta
	============================================= -->
	<ul class="entry-meta clearfix">
		<li><i class="icon-calendar3"></i> <?php echo get_the_date();?></li>
		<li><a href="<?php echo $author_url;?>"><i class="icon-user"></i> <?php the_author();?></a></li>
		<li><i class="icon-folder-open"></i> <a href="#"><?php the_category(' ');?></a>, <a href="#">Media</a></li>
		<li><a href="#"><i class="icon-comments"></i> <?php comments_number('0');?> <?php _e(' Comments','seriozn');?></a></li>
	</ul><!-- .entry-meta end -->

	<!-- Entry Image
	============================================= -->
	<?php if (has_post_thumbnail()){?>
                                	<div class="entry-image">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full');?>
                                </a>
                                </div>
                           <?php }?><!-- .entry-image end -->

	<!-- Entry Content
	============================================= -->
	<div class="entry-content notopmargin">

		<?php the_content();
		wp_link_pages(array(
			'before' =>'<p class="text-center">'.__('Pages', 'seriozn'),
			'after' =>'</p>'
		));
		?>
		<!-- Post Single - Content End -->

		<!-- Tag Cloud
		============================================= -->
		<div class="tagcloud clearfix bottommargin">
			<?php the_tags('', ' ');?>
		</div><!-- .tagcloud end -->

		<div class="clear"></div>

	</div>
</div><!-- .entry end -->

<!-- Post Navigation
============================================= -->
<div class="post-navigation clearfix">

	<div class="col_half nobottommargin">
		<?php previous_post_link();?>
	</div>

	<div class="col_half col_last tright nobottommargin">
	<?php next_post_link();?>
	</div>

</div><!-- .post-navigation end -->

<div class="line"></div>

<!-- Post Author Info
============================================= -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php _e('Posted by', 'seriozn');?> <span><a href="<?php echo $author_url;?>"><?php the_author ();?> </a></span></h3>
	</div>
	<div class="panel-body">
		<div class="author-image">
		<?php echo get_avatar($author_ID, 90, '', false, array('class'=>'img-circle'));?>
		</div>
		<?php echo  get_the_author_meta('description');?>
	</div>
</div><!-- Post Single - Author End -->

<div class="line"></div>

<div class="related-posts clearfix">

<h4><?php __('Related Posts:', 'seriozn');?></h4>

<?php
$categories=get_the_category();
$recent_posts = new WP_Query (array (
	'posts_per_page'=>2,
	'post__not_in' =>array ($post->ID),
	'cat'=>$categories[0]->term_id
));
if ($recent_posts->have_posts()){
while($recent_posts->have_posts()){
	$recent_posts->the_post();
	?>
	<div class="mpost clearfix">
	<?php if (has_post_thumbnail()){ ?>
		<div class="entry-image">
		<a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('thumbnail'); ?>
		</a>
		</div>
	 
<?php
	}
	?>
		
		<div class="entry-c">
			<div class="entry-title">
				<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> <?php echo get_the_date();?></li>
				<li><a href="#"><i class="icon-comments"></i> <?php comments_number('0');?></a></li>
			</ul>
			<div class="entry-content"><?php the_excerpt(); ?></div>
		</div>
	</div>

	<?php
}
wp_reset_postdata();
}

?>
</div>
<?php
if (comments_open() || get_comments_number())
comments_template ();?>

</div>
				
		<?php
	}
}
?>
	
				</div><!-- .postcontent end -->

				<!-- Sidebar
                ============================================= -->
                <?php get_sidebar();?>
				<!-- .sidebar end -->


		</div>

	</section><!-- #content end -->
    <?php get_footer ();?>