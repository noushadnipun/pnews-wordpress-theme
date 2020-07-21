<?php



add_action('after_setup_theme', 'mytheme_setup');

function mytheme_setup(){

$pageindex = get_page_by_title( 'most-viewed' );
    // Most Viewed
	if($pageindex==""){
		$my_post1 = array(
		'post_title'     => 'most-viewed',
		'page_template'  => 'template-most-viewed.php',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'post_author'    => 1,
		'post_category'  => '',
		'comment_status' => 'closed',
		'ping_status'    => 'closed'
		);
		$pageindex=wp_insert_post( $my_post1 );
	}
	$permalink = get_permalink( $pageindex);	
	$update_val = array('plink_dash' => $permalink);
	update_option('ln_options1', $update_val);
	
	// Most popular
	$pageindex = get_page_by_title( 'most-popular' );
	if($pageindex==""){
		$my_post1 = array(
		'post_title'     => 'most-popular',
		'page_template'  => 'template-most-popular.php',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'post_author'    => 1,
		'post_category'  => '',
		'comment_status' => 'closed',
		'ping_status'    => 'closed'
		);
		$pageindex=wp_insert_post( $my_post1 );
	}
	$permalink = get_permalink( $pageindex);	
	$update_val = array('plink_dash' => $permalink);
	update_option('ln_options1', $update_val);
	
	//archive
	$pageindex = get_page_by_title( 'Archives' );
	if($pageindex==""){
		$my_post1 = array(
		'post_title'     => 'Archives',
		'page_template'  => 'template-archives.php',
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'post_author'    => 1,
		'post_category'  => '',
		'comment_status' => 'closed',
		'ping_status'    => 'closed'
		);
		$pageindex=wp_insert_post( $my_post1 );
	}
	$permalink = get_permalink( $pageindex);	
	$update_val = array('plink_dash' => $permalink);
	update_option('ln_options1', $update_val);

}




