<?php
//----------------//

  global $mobileleadcatname1;
      
 $mobileleadcatname1 = get_the_category_by_id($spidysoft['mobile-lead-news-1']);

  global $mobileleadcatname2;
      
 $mobileleadcatname2 = get_the_category_by_id($spidysoft['mobile-lead-news-2']);

  global $mobileleadcatname3;
      
 $mobileleadcatname3 = get_the_category_by_id($spidysoft['mobile-lead-news-3']);
 

/* use catslug function*/
 
  global $mobileleadcatslug1;
 $mobileleadcatslug1 =  get_term_slug( $spidysoft['mobile-lead-news-1'] );

  global $mobileleadcatslug2;
 $mobileleadcatslug2 =  get_term_slug( $spidysoft['mobile-lead-news-2'] );
 
  global $mobileleadcatslug3;
 $mobileleadcatslug3 =  get_term_slug( $spidysoft['mobile-lead-news-3'] );

?>


<!-- L E A D - 1 -->
<!--div class="">
   <?php     
	 $mobileleadcategorypost1 = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 2,
		'taxonomy' => 'topics',
		'term' => $mobileleadcatslug1,
	 ));    
	while($mobileleadcategorypost1->have_posts()) :  $mobileleadcategorypost1->the_post(); ?>
   <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="img_holder_lead_medium">
         <a href="<?php the_permalink(); ?>">
         <?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive',itemprop=>'image')); ?></a>
      </div>
      <div class="title_holder">
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
   </div>   
   <?php endwhile; ?> 

</div-->
<!-- L E A D - 1 - BIG -->
<div id="div_75731" class="">
   <div class="inner">
      <div id="wrapper_75741" class="wrapper special_35_65 palo_60_40 container_all_fixed_height_column container_fixed_height container_top_padding " style="padding-top: 10px !important;">
         <div class="inner">
            <div id="div_75746" class="p_d_d     _col">
               <div class="inner">
                  <div id="widget_76001" class="widget_color_ widget_wrap">
                     <div class="col-md-12 contents_listing  widget">
                        <div class="contents  summery_view 
                           ">
                           <div class="">
                              <div class="col col1">
							    <?php     
								 $mobileleadcategorypost1 = new WP_Query(array(
									'post_type' => 'post',
									'posts_per_page' => 1,
									'offset' => 0,
									'taxonomy' => 'topics',
									'term' => $mobileleadcatslug1,
								 ));    
								while($mobileleadcategorypost1->have_posts()) :  $mobileleadcategorypost1->the_post(); ?>							  
                                 <div class="each col_in has_image image_featured content_capability_blog content_type_article responsive_image_hide_m_show_image_as_top special_item">
                                    <!--overlay anchor-->
                                    <a class="link_overlay" href="<?php the_permalink(); ?>"></a>
                                    <!--image-->
                                    <div class="image">
                                       <?php the_post_thumbnail('slide-thumb', array('class' => 'mobile-slider',itemprop=>'image')); ?>
                                       <span class="content_type"></span>
                                    </div>
                                    <div class="info ">
                                       <h2 class="title_holder">
                                          <span class="title"><?php the_title(); ?></span>
                                       </h2>
                                       <div class="additional">
                                          <!--category/page-->
                                          <!--author-->
                                          <!--time-->
                                          <!--comment count-->
                                          <!--like count-->
                                       </div>
                                    </div>
                                 </div>
								 <?php endwhile; ?> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   
			   <!-- L E A D - 2 -->
			   
			   <?php   
               $mobileleadcategorypost2 = new WP_Query(array(
               'post_type' => 'post',
               'posts_per_page' => 2,
               'taxonomy' => 'topics',
               'term' => $mobileleadcatslug2
               ));   
               while($mobileleadcategorypost2->have_posts()) :  $mobileleadcategorypost2->the_post(); ?>
			   
               <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="img_holder_lead_medium">
                     <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive',itemprop=>'image')); ?></a>
                  </div>
                  <div class="title_holder">
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  </div>
               </div>			   
			   
			   <?php endwhile; ?> 
			   
               <div class="spacebar"></div>
            </div>
            <div id="div_75751" class="p_d_c     _col">
               <div class="inner">
                  <div id="widget_75766" class="widget_color_ widget_wrap">
                     <div class="contents_listing  widget">
                        <div class="contents  
                           shaded_bg 
                           ">
                           <div class="">
                              <div class="col col1">
                                 <div class="col_in">
                                    <div class="listing">
                                       <div class="">
									    <!-- L E A D - 2 -->
										<?php   
										   $mobileleadcategorypost2 = new WP_Query(array(
										   'post_type' => 'post',
										   'posts_per_page' => 2,
										   'offset'  => 2,
										   'taxonomy' => 'topics',
										   'term' => $mobileleadcatslug2
										   ));   
										   while($mobileleadcategorypost2->have_posts()) :  $mobileleadcategorypost2->the_post(); ?>
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <div class="img_holder_lead_medium">
                                                <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive',itemprop=>'image')); ?></a>
                                             </div>
                                             <div class="title_holder">
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                             </div>
                                          </div>
										  
										  <?php endwhile; ?> 
										                                           
                                          <div class="spacebar"></div>
										  
										  <!-- L E A D - 3 -->
										  
										  <?php 
										   $mobileleadcategorypost3 = new WP_Query(array(
										   'post_type' => 'post',
										   'posts_per_page' => 2,
										   'taxonomy' => 'topics',
										   'term' => $mobileleadcatslug3
										   ));  
										   while($mobileleadcategorypost3->have_posts()) :  $mobileleadcategorypost3->the_post(); ?>									  
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <div class="img_holder_lead_medium">
                                                <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive',itemprop=>'image')); ?></a>
                                             </div>
                                             <div class="title_holder">
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                             </div>
                                          </div>
                                          <?php endwhile; ?>
										  
                                          <div class="spacebar"></div>
										  
										  <?php 
										   $mobileleadcategorypost3 = new WP_Query(array(
										   'post_type' => 'post',
										   'posts_per_page' => 2,
										   'offset'  => 2,
										   'taxonomy' => 'topics',
										   'term' => $mobileleadcatslug3
										   ));  
										   while($mobileleadcategorypost3->have_posts()) :  $mobileleadcategorypost3->the_post(); ?>
										   
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <div class="img_holder_lead_medium">
                                                <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive',itemprop=>'image')); ?></a>
                                             </div>
                                             <div class="title_holder">
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                             </div>
                                          </div>										  
										  <?php endwhile; ?>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
   .img_holder_lead_medium {margin-bottom: 5px;}
   .img_holder_lead_medium img {width: 100%; height: 100px}
</style>