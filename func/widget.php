<?php

// Register Widgets
function hr_widgets_init() {



	// Single Right Widget Area
	register_sidebar( array (
		'name' => __( 'Right Sidebar - Single/Page', 'hiresponsive' ),
		'id' => 'right-sidebar-single-page',
		'description' => __( 'Right sidebar widgets on single posts and pages', 'hiresponsive' ),
		'before_widget' => '<div id="lastest-post" class="">',
		'after_widget' => "</div>",
		'before_title' => '<div class="widget-title"><span>',
		'after_title' => '</span><div class="clearfix"></div></div>',
	) );
	// Archive Right Widget Area
	register_sidebar( array (
		'name' => __( 'Archive - Widget', 'hiresponsive' ),
		'id' => 'archive-sidebar',
		'description' => __( 'Right sidebar widgets on single posts and pages', 'hiresponsive' ),
		'before_widget' => '<div id="lastest-post" class="">',
		'after_widget' => "</div>",
		'before_title' => '<div class="widget-title"><span>',
		'after_title' => '</span><div class="clearfix"></div></div>',
	) );
	
}
add_action( 'init', 'hr_widgets_init' );

?>