<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?
echo "<div id=\"contentwrap\" >\n";
echo "<div id=\"left\">\n";
?>
<div id="mission">
<p>Strengthening Alaska's libraries to provide the best service possible to the people of Alaska.</p>
</div>
<div id="frontpageContainer">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="pageText">
<div style="float:right;font-size: 16px; font-weight: bold;"><?php wp_link_pages(); ?></div>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php wp_link_pages(); ?>
<?php if(wp_list_pages("child_of=".$post->ID."&echo=0")) { ?>
  <ul class="child-pages" style="padding-top:4px; margin-top:0px;color:#444">
  <? wp_list_pages("title_li=&child_of=$id&sort_column=post_title");?>
  </ul>
<? } ?>
<p align="right"><em>Updated: <?php the_modified_date('F jS, Y') ?></em></p>
</div>
<?php endwhile; ?>
<?php else : ?>
<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
