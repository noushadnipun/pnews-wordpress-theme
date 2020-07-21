<?php
 



                            /*---------------------------------
									  First Intro & ticker
							----------------------------------*/

function post_first_intro(array $metahostingpricelist){
	
	
	$metahostingpricelist[] = array(
	   'id' => 'meta-post-first-intro',
	   'title' =>'Ticker & Intro Section',
	   'object_types' => array('post'),
	   'fields' => array(	  
                
				//ticker
				
			 array(
		      'name' => 'Ticker Apply',
			  'type' => 'radio_inline',
			  'id'   => $prefix.'ticker-apply',
			  'options' => array(
			     'off' => 'Hide',
				 'on' => 'Show'
			  ),
			  'default' => 'off'
		   ),
		   array(
		      'name' => 'Artcile Ticker',
			  'type' => 'textarea_small',
			  'id'   => $prefix.'article-ticker'
		   ),		
				
				
            //Intro Content
			
             array(
		      'name' => 'First Intro',
			  'type' => 'wysiwyg',
			  'id'   => $prefix.'first-intro'
		    ),	
           		  
		   
		)   
	);
	
	//
	
	return $metahostingpricelist;
}


add_filter('cmb2_meta_boxes', 'post_first_intro');
							
							
							
							


?>