<?php
//----------------//

  global $firstblackbgleftcatname;
      
 $firstblackbgleftcatname = get_the_category_by_id($spidysoft['1st-black-bg-section-left-cat']);

 global $firstblackbgrightcatname;
      
 $firstblackbgrightcatname = get_the_category_by_id($spidysoft['1st-black-bg-section-right-cat']);
 

/* use catslug function*/
 
  global $firstblackbgleftcatslug;
 $firstblackbgleftcatslug =  get_cat_slug( $spidysoft['1st-black-bg-section-left-cat'] );

 global $firstblackbgrightcatslug;
 $firstblackbgrightcatslug =  get_cat_slug( $spidysoft['1st-black-bg-section-right-cat'] );

?>

<div class="container-fluid sports-news-container">
   <div class="container">
      <div class="row">
         <!--div class="left-content-area"-->
             
             <div>
            <div class="col-sm-12 pr-12">
               <div class="row">
                  <div class="col-sm-12 pl-0 pr-12">
                     <div class="sports-news-heading-container">
                        <a href="<?php echo get_category_link( $spidysoft['1st-black-bg-section-left-cat'] ); ?>" class="no-style">
                           <div class="main-heading"><?php echo $firstblackbgleftcatname ;?></div>
                        </a>
                        <div class="sub-heading">
                           <!-- Nav tabs -->                          
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-sm-12 p0">
                     <!-- Tab panes -->
                     <div class="xtab-content">
                        <div role="xtabpanel" class="xtab-pane active fade in" id="xall-sports-news">
                           <div class="col-sm-4 sports-highlight">
                              <div class="row sports-highlight-heading">                               
                              </div>
							  <?php  
							  $firstblackbgleftcatpost = new WP_Query(array(
							  'post_type' => 'post',
							  'posts_per_page' => 1,
							  'category_name'  => $firstblackbgleftcatslug
							  ));   
							  while($firstblackbgleftcatpost->have_posts()) :  $firstblackbgleftcatpost->the_post(); ?>
                              <a href="<?php the_permalink(); ?>" class="sports-highlight-link">
                                 <div class="row sports-highlight-content">
                                    <div class="col-sm-12" style="max-height: 332px;">                                 
                                    <style>
                                        .home-1st-black-bg-section-left-medium-1-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
    width: 224px;
    height: 162px !important;
}

                                    </style>
                                    
                                    
                                    
                                    
                                    
                                    
									   <?php the_post_thumbnail('slide-thumb', array('class' => 'home-1st-black-bg-section-left-medium-1-thumbnail-query img-responsive',itemprop=>'image'));  ?>
                                       <h2><?php the_title(); ?></h2>
                                       <p><?php hr_content_limit(525)?></p>
                                    </div>
                                 </div>
                              </a>
							 <?php endwhile; ?>
                           </div>
                           <div class="col-sm-8 p0">
						   <?php  
							  $firstblackbgleftcatpost = new WP_Query(array(
							  'post_type' => 'post',
							  'posts_per_page' => 1,
							  'offset' => 1,
							  'category_name'  => $firstblackbgleftcatslug
							  ));   
							  while($firstblackbgleftcatpost->have_posts()) :  $firstblackbgleftcatpost->the_post(); ?>
                              <a href="<?php the_permalink(); ?>">
                                 <div class="cat-lead-news">
                                    <?php the_post_thumbnail('slide-thumb', array('class' => 'home-1st-black-bg-section-left-big-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                    <div>
                                       <h2><?php the_title(); ?></h2>
                                    </div>
                                 </div>
                              </a>
							  <?php endwhile; ?>
                           </div>
						   <?php  
							  $firstblackbgleftcatpost = new WP_Query(array(
							  'post_type' => 'post',
							  'posts_per_page' => 3,
							  'offset' => 2,
							  'category_name'  => $firstblackbgleftcatslug
							  ));   
							  while($firstblackbgleftcatpost->have_posts()) :  $firstblackbgleftcatpost->the_post(); ?>
                           <div class="col-sm-4 content-box">
                              <a href="<?php the_permalink(); ?>">
                                 <div>
                                    <?php the_post_thumbnail('slide-thumb', array('class' => 'home-1st-black-bg-section-left-medium-1-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                    <h2><?php the_title(); ?></h2>
                                 </div>
                              </a>
                           </div>                        
                           <?php endwhile; ?>
                        </div>
						
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!--div class="right-content-area">
            <aside class="col-sm-12 sports-aside">
               <div class="row">
                  <div class="col-sm-12">
                     <?php echo $spidysoft['1st-black-bg-section-right-ad']; ?>
                  </div>
               </div>
               
               <div class="row mt24">
                  <div class="col-sm-12">
                     <a href="<?php echo get_category_link( $spidysoft['1st-black-bg-section-right-cat'] ); ?>" style="color:#fff;">
                        <div class="players-bio-heading"><?php echo $firstblackbgrightcatname ;?></div>
                     </a>
					 <?php  
					  $firstblackbgleftcatpost = new WP_Query(array(
					  'post_type' => 'post',
					  'posts_per_page' => 3,					  
					  'category_name'  => $firstblackbgleftcatslug
					  ));   
					  while($firstblackbgleftcatpost->have_posts()) :  $firstblackbgleftcatpost->the_post(); ?>
                     <div class="row mt11">
                        <div class="col-sm-12">
                           <a href="<?php the_permalink(); ?>">
                              <div class="player-bio-box">
                                 <div class="player-bio-img">                                 
									<?php the_post_thumbnail('slide-thumb', array('class' => 'home-1st-black-bg-section-right-small-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                 </div>
                                 <div class="player-bio-title">
                                    <h2><?php the_title(); ?></h2>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            </aside>
         </div-->
         
         
         
      </div>
   </div>
</div>


<style>

.home-1st-black-bg-section-left-medium-1-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 224px;
	height: 134px;
}

.home-1st-black-bg-section-left-big-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 463px;
	height: 256px;
}

.home-1st-black-bg-section-right-small-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 100px;
	height: 60px;
}

</style>