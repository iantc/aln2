<?php
/*
Template Name: ListenAlaska Template
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Get Help :: Digital Pipeline :: Alaska Library Network</title>
<meta name="Keywords" content="databases,research, articles, Alaska Library Network,library, information, library, resources, historical, book, periodical, genealogy, reference, SLED, history, magazine, newspaper" />
<meta name="Description" content="Alaska Library Network" />

<?php wp_head(); ?>
<link rel="stylesheet" href="http://dp.lib20.net/styles/site2.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://alaskalibrarynetwork.org/wp-content/themes/aln2/forms.css" type="text/css" media="screen" />
<!--[if lte IE 7]>
<style type="text/css">
.findArticlesText[class] {padding:4px 0px 0px 40px; }
#headlinks[id] a:active,#headlinks[id] a:hover,#headlinks[id] a:link, #headlinks[id] a:visited { padding-top: 13px;}
</style>
<![endif]-->
<style type="text/css">
#logos-space{height:20px;padding:25px 0 15px}
#aln-logo-space {width: 100px;height: 110px;overflow: hidden;position: absolute;top: 80px;right:12px;z-index: 1000;}
#FSContact2{width:99%!important}
h1 {
color: #333;
margin-left: 30px;
font-weight: normal;}
.cform{
background: #fff;
padding: 20px;}
</style>
</head>
<body id="alpha-page">
<a name="Top" id="Top"></a>
<div id="wrapper">
<div id="inner_wrapper">
<div id="logos-space"><h1><?php the_title(); ?></h1>
<div id="aln-logo-space">

<a href="http://alaskalibrarynetwork.org/" onclick="javascript:urchinTracker('/ALN/logolink');"></a></div>
</div>
<!--End Page title -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php wp_link_pages(); ?>
<br clear="all" />
<p style="text-align:right;margin-right:20px"><em>Updated: <?php the_modified_date('F jS, Y') ?></em></p>
<br clear="all" />
<?php endwhile; ?>
<?php else : ?>
<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

</div><!-- close #content -->
</div><!-- close #inner_wrapper -->
</div><!-- close #wrapper -->
<br clear="all" />

<div id="footer_wrapper">
<div id="footer_inner_wrapper">
<div id="footer-content">
<div id="footerlinks">
</div>

</div>
</div>
</div>
<? wp_footer(); ?>
</body>
</html>