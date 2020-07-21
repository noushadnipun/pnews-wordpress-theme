<?php
//----------------//

  global $mobileslidercatname;
      
 $mobileslidercatname = get_the_category_by_id($spidysoft['mobile-slider-cat']);
 

/* use catslug function*/
 
  global $mobileslidercatslug;
 $mobileslidercatslug =  get_cat_slug( $spidysoft['mobile-slider-cat'] );


?>


<div id="div_75731" class="col-md-12" style="
    padding-right: 0;
    padding-left: 0;
">
   <div class="inner">
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
                                 <div class="each col_in has_image image_featured content_capability_blog content_type_article responsive_image_hide_m_show_image_as_top special_item">
                                    <!--overlay anchor-->
                                    <!-- --------------------------------- 
                                       |        S T A R T - SLIDER        |
                                       ----------------------------------- -->
                                    <!--div style="padding: 3px; background: #f1d0adbf; text-align: center; font-size: 21px; font-weight: bold; color: #c00; margin-bottom: 2px;"> <a style="color: #c00;" href="<?php echo get_category_link( $spidysoft['mobile-slider-cat'] ); ?>"><?php echo $mobileslidercatname; ?></a></div-->
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                       <!-- Indicators -->
                                       <ol class="carousel-indicators">
                                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                          <li data-target="#myCarousel" data-slide-to="1"></li>
                                          <li data-target="#myCarousel" data-slide-to="2"></li>
										  <li data-target="#myCarousel" data-slide-to="3"></li>
                                          <li data-target="#myCarousel" data-slide-to="4"></li>
                                       </ol>
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner">
									      <?php  				  
										  $mobileslidercatpost = new WP_Query(array(
										  'post_type' => 'post',
										  'posts_per_page' => 1,
										  'category_name'  => $mobileslidercatslug
										  ));   
										  while($mobileslidercatpost->have_posts()) :  $mobileslidercatpost->the_post(); 
										  $mobilesliderImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>	
                                          <div class="item active">
                                             <?php the_post_thumbnail('full', array('class' => 'mobile-slider')); ?> 
                                             <div class="carousel-caption">
                                                <h3><a style="color: #fff;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                                
                                             </div>
                                          </div>
										  <?php endwhile; ?> 
										  
										  <?php  								  
										  $mobileslidercatpost = new WP_Query(array(
										  'post_type' => 'post',
										  'posts_per_page' => 4,
										  'offset' => 1,
										  'category_name'  => $mobileslidercatslug
										  ));   
										  while($mobileslidercatpost->have_posts()) :  $mobileslidercatpost->the_post(); 
										  $mobilesliderImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                          <div class="item">
                                             <?php the_post_thumbnail('full', array('class' => 'mobile-slider')); ?> 
                                             <div class="carousel-caption">
                                                <h3><a style="color: #fff;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                                
                                             </div>
                                          </div>
                                         <?php endwhile; ?> 
                                       </div>
                                       <!-- Left and right controls -->
                                       <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                       <span class="glyphicon glyphicon-chevron-left"></span>
                                       <span class="sr-only">Previous</span>
                                       </a>
                                       <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                       <span class="glyphicon glyphicon-chevron-right"></span>
                                       <span class="sr-only">Next</span>
                                       </a>
                                       <!-- --------------------------------- 
                                          |        E N D - T A B         |
                                          ----------------------------------- -->
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
.mobile-slider {}
@media only screen and (min-width: 700px) {
img.external-img.wp-post-image.mobile-slider {
    height: 200px !important;
    width: 100%;
}
img.mobile-slider.wp-post-image {
    height: 200px !important;
}
}

@media only screen and (max-width: 700px) {
img.external-img.wp-post-image.mobile-slider {
    height: 196px !important;
    width: 100%;
}
img.mobile-slider.wp-post-image {
    height: 196px !important;
}
}

.home-tab-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 100px;
	height: 80px;
	margin-left: 5px;
}
</style>