<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">  
	  <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />
<title>
    <?php
			global $query_string;

			if ( is_home() )
				bloginfo( 'name' );

			if ( get_search_query() )
				echo 'Results for: "' . get_search_query() .'"';

			if ( is_month() )
				the_time('F Y');

			if ( is_category() )
				single_cat_title();

			if ( is_single() )
				the_title();

			if ( is_page() )
				the_title();

			if ( is_tag() )
				single_tag_title();

			if ( is_404() )
				echo 'Page Not Found!';
			if ( is_author() )
				bloginfo( 'name' );
		?>
  
  
  </title>
  
  <style>
      
      .img_holder_lead_medium img {
    width: 100%;
    height: 70px !important;
}

.home-tab-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
    width: 100px;
    height: 56px !important;
    margin-left: 0px !important;
}
  </style>
  
  
  
	  <?php 
	  include 'assets/css/allcss.php';
      include 'assets/js/alljs.php';
	  global $spidysoft;
	  ?>
	  <link rel="shortcut icon" href="<?php echo $spidysoft['favicon-logo']['url']; ?>" />
	  <?php wp_head(); ?>
   </head>
   <body>
      <?php include 'inc/layout-header.php';?>	  
      
   