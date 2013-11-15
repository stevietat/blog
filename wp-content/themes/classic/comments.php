<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

if ( post_password_required() ) : ?>



<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>
<div id="commentcontainer">
<div id="comment-divider"></div>


<?php if ( have_comments() ) : ?>
<h2 id="comments">Comments</h2>
<div id="commentlist">

<?php foreach ($comments as $comment) : ?>
	<div id="commentpost">
    
    
    <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	
	<div id="c-date"><div class="c-month"><?php comment_date('F\<\/\d\i\v\>\<\d\i\v\ \c\l\a\s\s\=\"\c\-\d\a\y\"\>j','','') ?></div><div class="c-time"><?php comment_time() ?></div></div>
    <div id="commentbody">
    <cite><?php comment_author_link() ?> <?php comment_type(_x('wrote:', 'noun'), __('Trackback'), __('Pingback')); ?>  <a href="#comment-<?php comment_ID() ?>">		</a></cite>
    <div class="meta" style="float:right;"><?php edit_comment_link(__("Edit your post"), ''); ?></div>
    <div id="comment-copy"><?php comment_text() ?></div>
    
    </div>
    </div>
	<div class="clear"></div>
	
	
	
	</div>

<?php endforeach; ?>

</div>

<?php else : // If there are no comments yet ?>
	<h2><i><?php _e('Hmm...kinda quiet in here'); ?></i></h2>
<?php endif; ?>

<p>
<?php if ( pings_open() ) : ?>
<?php endif; ?>
</p>
<div id="postcomment-container">
<p>
<?php if ( comments_open() ) : ?>
<?php _e('Why not leave a comment? '); ?>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out'); ?></a></p>

<?php else : ?>

<p><input class="comment-form" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input class="comment-form" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input class="comment-form" type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="image" src="../../../../imgs/submit_btn.gif"  id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>
</div>
</div>
