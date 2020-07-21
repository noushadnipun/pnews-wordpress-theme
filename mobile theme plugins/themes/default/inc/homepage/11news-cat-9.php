<?php
//----------------//

 global $mobilenewscatname9;
      
 $mobilenewscatname9 = get_the_category_by_id($spidysoft['mobile-news-cat-9']);
 
/* use catslug function*/
 
 global $mobilenewscatslug9;
 $mobilenewscatslug9 =  get_cat_slug( $spidysoft['mobile-news-cat-9'] );

?>



<div id="div_75731" class="col-md-12">
   <div class="inner">
      <div class="news-cat-title">
         <h2><a href="<?php echo get_category_link( $spidysoft['mobile-news-cat-9'] ); ?>"><?php echo $mobilenewscatname9; ?></a></h2>
      </div>
      <div id="wrapper_75741" class="wrapper special_35_65 palo_60_40 container_all_fixed_height_column container_fixed_height container_top_padding " style="">
         <div class="inner">
            <div id="div_75746" class="p_d_d     _col">
               <div class="inner">
                  <div id="widget_76001" class="widget_color_ widget_wrap">
                     <div class="contents_listing  widget">
                        <div class="contents  summery_view 
                           ">
                           <div class="">
                              <div class="col col1">
							    <?php  
								  $mobilenewscatpostnine = new WP_Query(array(
								  'post_type' => 'post',
								  'posts_per_page' => 1,
								  'category_name'  => $mobilenewscatslug9
								  ));   
								  while($mobilenewscatpostnine->have_posts()) :  $mobilenewscatpostnine->the_post(); ?>
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
									<?php  
									  $mobilenewscatpostnine = new WP_Query(array(
									  'post_type' => 'post',
									  'posts_per_page' => 4,
									  'offset' => 1,
									  'category_name'  => $mobilenewscatslug9
									  ));   
									  while($mobilenewscatpostnine->have_posts()) :  $mobilenewscatpostnine->the_post(); ?>
                                       <div class="each col_in 
                                          has_image 
                                          image_left 
                                          content_capability_blog 
                                          content_type_article 
                                          responsive_image_hide_			 
                                          m_show_featured_image_as_left 
                                          ">
                                          <!--overlay anchor-->
                                          <a class="link_overlay" href="<?php the_permalink(); ?>"></a>
                                          <!--image-->
                                          <div class="image">
                                             <?php the_post_thumbnail('slide-thumb', array('class' => 'home-tab-thumbnail-query img-responsive',itemprop=>'image')); ?>
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
									   
									   <div style="padding: 10px; background: #fff; border: 1px solid #ccc; text-align: center; font-size: 18px;">
									     <a href="<?php echo get_category_link( $spidysoft['mobile-news-cat-9'] ); ?>">এ বিভাগের আরও খবর</a>
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