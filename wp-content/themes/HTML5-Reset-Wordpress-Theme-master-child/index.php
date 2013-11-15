<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<script src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/js/jquery.jpanelmenu.min.js"></script>



 	<div id="logowrapper" class="logoindex">
	 	<div id="logo">

	 		<a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/stivo.png" alt="Stivo"></a>
	 		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php single_cat_title(); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php single_tag_title(); ?></h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 ><?php the_time('Y'); ?></h2>

	
			<?php } ?>
	 	</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >

			<div id="topportion" class="index" style="background-image: url('<?php echo get_post_meta( get_the_ID(), 'Post_Background', true ) ?>'); ">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			</div>

			<div id="wrapper">
				<div id="details">
					<span class="getdate"><?php echo get_the_date(); ?></span>
					<span class="mood">Today's Mood</span>
					<span class="moodimage" style="background-image: url('<?php echo get_post_meta( get_the_ID(), 'Mood', true ) ?>');"></span>
					<span class="thetags"> <?php the_tags('', ' ', ''); ?> </span>
				</div>
				<div class="entry">
						<?php the_content('Continue...'); ?>
				<footer class="postmetadata">
					
				<!-- 	<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> -->
					<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
				</footer>
				</div>
			</div>

		</article>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>




<?php get_footer(); ?>

<?php get_sidebar(); ?>
<a href="#sidebar" class="sidebar_toggle">
<img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/menuarrow-index.png" alt="Menu" class="indexmenu-black">
<img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/menuarrow.png" alt="Menu" class="indexmenu-white">
</a>
<script type="text/javascript">
	var jPM = $.jPanelMenu({
	    menu: '#sidebar',
	    trigger: '.sidebar_toggle',
	    direction : 'right',
	    openPosition : '250px'
	});
	jPM.on();
</script>	
