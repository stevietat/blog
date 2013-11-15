<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 <script src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/js/jquery.jpanelmenu.min.js"></script>
	<div id="logowrapper" class="logosingle">
	 	<div id="logo">
	 		<a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/stivo.png" alt="Stivo"></a>
	 	</div>
	</div>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		
	<?php $next_post = get_next_post();
		if (!empty( $next_post )): ?>
		
		<div id="nextpost" class="nextnav">
  		<a  href="<?php echo get_permalink( $next_post->ID ); ?>">
  			<img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/nextarrow.png" alt="Stivo">
		</a>
		<a  href="<?php echo get_permalink( $next_post->ID ); ?>">
  			<span><?php echo $next_post->post_title; ?></span>
		</a>
		</div>
	<?php endif; ?>
	<?php $previous_post = get_previous_post();
		if (!empty( $previous_post )): ?>
		
		<div id="prevpost" class="nextnav">
  		<a  href="<?php echo get_permalink( $previous_post->ID ); ?>">
  			<span><?php echo $previous_post->post_title; ?></span>
		</a>
  		<a  href="<?php echo get_permalink( $previous_post->ID ); ?>">
  			<img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/prevarrow.png" alt="Stivo">
		</a>
		</div>
	<?php endif; ?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
			<div id="topportion" class="single" style="background-image: url('<?php echo get_post_meta( get_the_ID(), 'Post_Background', true ) ?>'); ">
				<h1><?php the_title(); ?></h1>
			</div>
			<div id="wrapper">
				<div id="details">
					<span class="getdate"><?php echo get_the_date(); ?></span>
					<span class="mood">Today's Mood</span>
					<span class="moodimage" style="background-image: url('<?php echo get_post_meta( get_the_ID(), 'Mood', true ) ?>');"></span>
					<span class="thetags"> <?php the_tags('', ' ', ''); ?> </span>
				</div>
				<div class="entry-content">
				
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
					
				

				
					

				</div>
			</div>
			
			<?php edit_post_link(__('Edit this entry'),'','.'); ?>
			
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>
	
<?php get_sidebar(); ?>
<a href="#sidebar" class="sidebar_toggle">
<img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/menuarrow.png" alt="Menu">

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

<?php get_footer(); ?>