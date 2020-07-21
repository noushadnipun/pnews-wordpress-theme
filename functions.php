<?php

//Load theme function
function spidysoft_theme_function() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');	
}
add_action( 'after_setup_theme', 'spidysoft_theme_function');

//Load Nav Menu
include 'func/menu.php'; 

//Load Widget 
include 'func/widget.php'; 

//Load Custom Taxonomy
require_once ("func/custom-post-taxonomy for-lead.php");

// dashboard post column
require_once ("func/post-dashboard-column.php");

// Load framework

require_once ("assets/framework/ReduxCore/framework.php");
require_once ("assets/framework/sample/config.php");
require_once ("assets/framework/permission.php");

//Load Metabox
include 'assets/metabox/init.php';
include 'assets/metabox/functions.php';

//$catslug function

function get_cat_slug($cat_id) {
	$cat_id = (int)$cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}

//custom taxonomy slug function
function get_term_slug($term_id) {
	$term_id = (int) $term_id;
	$term = &get_term($term_id);
	return $term->slug;
}

// Filter to new excerpt length
function excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'excerpt_length' );

// Filter to new excerpt more text
function hr_excerpt_more($post) {
	return '... <a class="meta-more" href="'. get_permalink($post->ID) . '">'.__('more <span class="meta-nav">&raquo;</span>','hiresponsive').'</a>';
}
add_filter('excerpt_more', 'hr_excerpt_more');

// Get limit excerpt
function hr_content_limit($max_char, $more_link_text = '', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "";
      echo $content;
      echo "...";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "";
        echo $content;
        echo "...";
   }
   else {
      echo "";
      echo $content;
   }
}


//Load Latest Tab
//require_once ("assets/lib/latest-tabs/index.php");

//Load Post views 
require_once ("assets/lib/wp-postviews/wp-postviews.php");

//Load Prayer time plug
require_once ("assets/lib/muslim-prayer-time-bd/muslim-prayer-time.php");
require_once ("assets/lib/muslim-prayer-time-bd/admin-settings.php");

//Load Pagenavi
require_once ("assets/lib/wp-pagenavi/wp-pagenavi.php");

//Load ajax archive 
require_once ("assets/lib/ajax-archive-calendar/ajax-archive-calendar.php");

// After Theme Setup
require_once ("func/after-theme-setup.php");