<?php

/**

 * @package WordPress

 * @subpackage Classic_Theme

 */

get_header();

?>

<div id='main_container'>

<div class="setwidth_container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    	   







<div id="blogpost">

    <div id="date"><div id="blackline"></div><div class="month"><?php the_date('F\<\/\d\i\v\>\<\d\i\v\ \c\l\a\s\s\=\"\d\a\y\"\>j','',''); ?></div><div class="meta">Filed under: <br /><?php the_category('<br />') ?> <br /><?php edit_post_link(__('Edit This')); ?>

       		</div><br /><div class="meta">Tagged with: <br /><?php the_tags('','<br />','') ?>

       		</div></div>

    <div id="postbody"><div id="yellowline"></div>

        <h3><a href="<?php the_permalink() ?>" rel="bookmark">

        <?php the_title(); ?>

        </a></h3>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

       		

        	<div><?php the_content(__('(more...)')); ?>

        	</div>

        	<h4><?php wp_link_pages(); ?><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>

        	</h4>

   		</div>

    </div>

    <div style="clear:both;"></div>

</div>

 

    















<?php comments_template(); // Get wp-comments.php template ?>



<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<div class="blog_nav"><?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?></div>

</div>

</div>





<?php get_footer(); ?>

