<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin footer -->
</div>

<div style="width:100%;text-align:center;background:#f8de00;">
  <div class="setwidth_container">
  		
        
        
        <div class="footer-section" style="width:150px;">
            <img src="../../../../imgs/footer_stivo.gif" width="116" height="61" alt="stivo/" class="footer-img"/>
            <h3><a href="#">Work</a></h3>
            <h3><a href="#">About</a></h3>
            <h3><a href="#">Contact</a></h3>
            <h3><a href="#">Blog</a></h3>
     	 </div>
     	 <div class="footer-section" style="width:690px;">
            <div>
            <img src="../../../../imgs/footer_blog.gif" width="63" height="61" alt="stivo/" class="footer-img"/>
            </div>
            
            <div class="footer-subsection">
             	 <h3><a href="#">Categories</a></h3>
                 <?php wp_list_categories('title_li='); ?>
         	</div>
            <div class="footer-subsection">
            	<h3><a href="#">Other info</a></h3>
                <?php wp_register('<li class="cat-item">' ); ?>
				<li class="cat-item"><?php wp_loginout(); ?></li>
            	<li class="cat-item"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                <li class="cat-item"><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>

            
            </div>
            <div class="footer-subsection">
            	<h3><a href="#">Archives</a></h3>
                <select class="footer-form" name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select>
            </div>
            <div class="footer-subsection">
            	<h3><a href="#">Search</a></h3>
                <form id="searchform" class="footer-form" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" name="s" id="s" size="25" /><input type="image" src="../../../../imgs/footer_search.gif" align="absmiddle" value="<?php esc_attr_e('Search'); ?>" />
				</form>
            </div>
            
            <div style="clear:both;"></div>
    	 </div>
         <div style="clear:both;"></div>
    
    
  </div>
</div>

</div>





</body>
</html>