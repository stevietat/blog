<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
 <div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <!-- <?php get_search_form(); ?> -->
    
    <!-- 	<ul>
    		<?php wp_list_pages('title_li=<h2>'.__('Pages','html5reset').'</h2>' ); ?>
    	</ul>
     -->
        <div id="portrait">
        </div>
        <p id="bio">Interactive designer, living in Toronto, dreaming sharks and working on <a href="http://www.athena.co" title="Athena">projects like this.</a></p>
    	<div id="contact_icons">
            <a href="http://www.twitter.com/stevietat" target="_blank" title="Follow me on Twitter"><img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/contact_twitter.png" alt="Stivo" /></a>
            <a href="http://ca.linkedin.com/pub/stephen-taubman/a/a9/b5" target="_blank" title="LinkedIn"><img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/contact_linkedin.png" alt="Stivo" /></a>
            <a href="mailto:stephen@staubman.com" title="Drop me a note"><img src="<?php echo site_url(); ?>/wp-content/themes/HTML5-Reset-Wordpress-Theme-master-child/images/contact_mail.png" alt="Stivo" /></a>
        </div>
        <h2></h2> 
        <h2><?php _e('Categories','html5reset'); ?></h2>
        <ul>
           <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        

        <h2><?php _e('Past Issues...','html5reset'); ?></h2>
    	<ul>
    		<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 6 ) ); ?>
    	</ul>
       
    <!-- 	<ul>
    		<?php wp_list_bookmarks(); ?>
    	</ul> -->
    
    	<!-- <h2><?php _e('Meta','html5reset'); ?></h2> -->
    	<!-- <ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.','html5reset'); ?>"><?php _e('WordPress','html5reset'); ?></a></li>
    		<?php wp_meta(); ?>
    	</ul> -->
    	
       <!--  <h2><?php _e('Subscribe','html5reset'); ?></h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','html5reset'); ?></a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','html5reset'); ?></a></li>
    	</ul> -->
	
	<?php endif; ?>

</div>