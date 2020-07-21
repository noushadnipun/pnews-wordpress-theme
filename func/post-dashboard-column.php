<?php



// ------ for Ticker Visibile----

//add_image_size( 'admin-list-thumb', 50, 50, true );
add_filter('manage_posts_columns', 'ticker_visibility_title', 10);
//add_filter('manage_pages_columns', 'tcb_add_post_thumbnail_column', 5);

// Add the column
function ticker_visibility_title($tickervisibilitytitle){
$tickervisibilitytitle['tcb_post_thumb'] = __('Ticker');
return $tickervisibilitytitle;
}




//content

// Hook into the posts an pages column managing. Sharing function callback again.
add_action('manage_posts_custom_column', 'ticker_visibility_content', 10, 2);
//add_action('manage_pages_custom_column', 'tcb_display_post_thumbnail_column', 5, 2);

// Grab featured-thumbnail size post thumbnail and display it.


function ticker_visibility_content($tickervisibilitycontent, $tickervisibilitycontentid){
switch($tickervisibilitycontent){
case 'tcb_post_thumb':
$tickervisible = get_post_meta(get_the_ID(), $prefix.'ticker-apply', true); 
$tickerarticle = get_post_meta(get_the_ID(), $prefix.'article-ticker', true);

if( function_exists('the_post_thumbnail') )
	
echo '<span style="color: #fff; background: green; font-weight: bold; padding: 2px; text-transform: uppercase;">' . $tickervisible .'</span><br/>'. $tickerarticle;

else
echo 'Not supported in theme';
break;
}
}
