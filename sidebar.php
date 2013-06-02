<?php echo"</div><!-- close #left -->\n"; ?>
  <div id="right">
  <div id="rightcontent">
   <?php 	/* Widgetized sidebar, if you have the plugin installed. */
   if (  !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
   <?php endif; ?>
  </div>
  </div>
</div>
