<?php
//----------------//

  global $aftersecondblackbgleftcatname;
      
 $aftersecondblackbgleftcatname = get_the_category_by_id($spidysoft['after-2nd-black-bg-section-left-cat']);

 global $aftersecondblackbgrightcatname;
      
 $aftersecondblackbgrightcatname = get_the_category_by_id($spidysoft['after-2nd-black-bg-section-right-cat']);
 

/* use catslug function*/
 
  global $aftersecondblackbgleftcatslug;
 $aftersecondblackbgleftcatslug =  get_cat_slug( $spidysoft['after-2nd-black-bg-section-left-cat'] );

 global $aftersecondblackbgrightcatslug;
 $aftersecondblackbgrightcatslug =  get_cat_slug( $spidysoft['after-2nd-black-bg-section-right-cat'] );

?>

<div class="container-fluid lifestyle-news-container">
   <div class="container">
      <div class="row">
         <div class="left-content-area">
            <div class="col-sm-12 pr-12">
               <div class="row">
                  <div class="col-sm-12 pl-0 pr-12">
                     <div class="lifestyle-news-heading-container">
                        <a href="<?php echo get_category_link( $spidysoft['after-2nd-black-bg-section-left-cat'] ); ?>" class="no-style">
                           <div class="main-heading"><?php echo $aftersecondblackbgleftcatname; ?></div>
                        </a>
                        <div class="sub-heading">
                           <!-- Nav tabs -->
                           
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-sm-12 p0">
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="all-lifestyle-news">
                           <div class="col-sm-7 p0">
						      <?php  
							  $aftersecondblackbgleftcatpost = new WP_Query(array(
							  'post_type' => 'post',
							  'posts_per_page' => 1,
							  'category_name'  => $aftersecondblackbgleftcatslug
							  ));   
							  while($aftersecondblackbgleftcatpost->have_posts()) :  $aftersecondblackbgleftcatpost->the_post();?>							  
                              <a href="<?php the_permalink(); ?>">
                                 <div class="cat-lead-news">                               
									<?php the_post_thumbnail('slide-thumb', array('class' => 'home-after-2nd-black-bg-section-big-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                    <div>
                                       <h2><?php the_title(); ?></h2>                                    							   
                                    </div>
                                 </div>
                              </a>
							  <?php endwhile; ?>
                           </div>
                           <div class="col-sm-5 cat-list-news">
                              <div class="row mr-0">
								  <?php  
								  $aftersecondblackbgleftcatpost = new WP_Query(array(
								  'post_type' => 'post',
								  'posts_per_page' => 4,
								  'offset' => 1,
								  'category_name'  => $aftersecondblackbgleftcatslug
								  ));   
								  while($aftersecondblackbgleftcatpost->have_posts()) :  $aftersecondblackbgleftcatpost->the_post(); ?>
                                 <a href="<?php the_permalink(); ?>">
                                    <div class="col-sm-12">
                                       <div class="img-container">                                     
										  <?php the_post_thumbnail('slide-thumb', array('class' => 'home-after-lead-left-small-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                       </div>
                                       <div class="heading-container">
                                          <h2><?php the_title(); ?></h2>
                                       </div>
                                    </div>
                                 </a>
                                 <?php endwhile; ?>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="right-content-area">
            <aside class="col-sm-12 opinion-section">
               <div class="opinion-heading">
                  <a href="<?php echo get_category_link( $spidysoft['after-2nd-black-bg-section-right-cat'] ); ?>"> <?php echo $aftersecondblackbgrightcatname; ?></a>
                  <div class="clearfix"></div>
               </div>
               <div class="row">
			      <?php  
				  $aftersecondblackbgrightcatpost = new WP_Query(array(
				  'post_type' => 'post',
				  'posts_per_page' => 4,
				  'category_name'  => $aftersecondblackbgrightcatslug
				  ));   
				  while($aftersecondblackbgrightcatpost->have_posts()) :  $aftersecondblackbgrightcatpost->the_post(); ?>
                  <div class="col-sm-12" style="margin-bottom:5px;">
                     <div class="opinion-img-container">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-thumb', array('class' => 'home-after-lead-right-small-thumbnail-query img-responsive',itemprop=>'image')); ?></a>
                     </div>
                     <div class="opinion-content-heading">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     </div>
                  </div>
				  <?php endwhile; ?>
               </div>            
            </aside>
         </div>
		 <div class="row" align="center">
                  <?php echo $spidysoft['after-2nd-black-bg-ad']; ?>
         </div>
      </div>
   </div>
</div>

<style>
.home-after-2nd-black-bg-section-big-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 400px;
	height: 240px;
}
</style>