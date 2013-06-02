<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?>: <?php wp_title(); ?></title>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<!--[if lte IE 6]>
<script type="text/javascript" src="/scripts/drop_down.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/menu.css" type="text/css" media="screen" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/ie7minus_styles.css" type="text/css" meia="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/ie_menu.css" type="text/css" media="screen" />
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript" src="/js/various.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1.2.6")</script>
<script type="text/javascript" src="/js/jcorner.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#frontpageContainer').corner("5px");
  $('#svcsMenu').corner("5px");
  $('#mission').corner("5px");
  $('#right').corner("5px");
  $('.pageContent').corner("5px");
  $('.pageContent h1').corner("top 5px");
});
</script>
</head>
<body>
<div id="topcontentwrap">
<div id="topcontent">
<div id="logobox_wrapper">
<div id="logobox" onclick="MM_goToURL('parent','/');return document.MM_returnValue">
<div class="access-only">ALN: Alaska Library Network</div>
</div>
</div>
<?php wp_nav_menu( array('theme_location' => 'primary-menu', 'container_id' => 'infoMenu', 'menu_id'=>'site-about')); ?>
<?php wp_nav_menu( array('theme_location' => 'secondary-menu', 'container_id' => 'svcsMenu', 'menu_id'=>'nav')); ?>
</div>
</div>
