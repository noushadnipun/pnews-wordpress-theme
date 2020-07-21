<?php
//----------------//

  global $slidercatname;
      
 $slidercatname = get_the_category_by_id($spidysoft['slider-cat']);
 

/* use catslug function*/
 
  global $slidercatslug;
 $slidercatslug =  get_cat_slug( $spidysoft['slider-cat'] );


?>


<div class="container-fluid photo-gallery-container mt24">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 pr0">
            <div class="photo-gallery-heading-container">
               <h2><a href="<?php echo get_category_link( $spidysoft['slider-cat'] ); ?>"><?php echo $slidercatname; ?></a></h2>
            </div>
         </div>
         <div class="col-sm-8">
            <div class="photo-slider-container">
               <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
			    <?php  				  
				  $slidercatpost = new WP_Query(array(
				  'post_type' => 'post',
				  'posts_per_page' => 3,
				  'category_name'  => $slidercatslug
				  ));   
				  while($slidercatpost->have_posts()) :  $slidercatpost->the_post(); 
				  $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>			  
                  <div data-thumb="<?php echo $featuredImage; ?>" data-src="<?php echo $featuredImage; ?>">			  
                     <div class="camera_caption fadeFromBottom">
                        <a style="color: #fff;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </div>
                  </div>
                  <?php endwhile; ?>             
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="row">
			<?php  				  
			  $slidercatpost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 2,
			  'offset' => 3,
			  'category_name'  => $slidercatslug
			  ));   
			  while($slidercatpost->have_posts()) :  $slidercatpost->the_post(); ?>	
               <div class="col-sm-6 p0">
                  <a href="<?php the_permalink(); ?>">
                     <div class="album-box-1">                      
                        <?php the_post_thumbnail('slide-thumb', array('class' => 'home-slider-medium-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        <h3><?php the_title(); ?></h3>
                     </div>
                  </a>
               </div>
               <?php endwhile; ?>
            </div>
            <div class="row mt10">
			<?php  				  
			  $slidercatpost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 2,
			  'offset' => 5,
			  'category_name'  => $slidercatslug
			  ));   
			  while($slidercatpost->have_posts()) :  $slidercatpost->the_post(); ?>	
               <div class="col-sm-6 p0">
                  <a href="<?php the_permalink(); ?>">
                     <div class="album-box-1">                      
                        <?php the_post_thumbnail('slide-thumb', array('class' => 'home-slider-medium-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        <h3><?php the_title(); ?></h3>
                     </div>
                  </a>
               </div>
               <?php endwhile; ?>
            </div>
            <div class="row mt15">
               <div class="col-sm-12" style="padding: 0;">
                 <a href="<?php echo get_category_link( $spidysoft['slider-cat'] ); ?>"> <button class="btn btn-block btn-more-albums"><span>আরও দেখতে ক্লিক করুন</span></button></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<style>
.home-slider-medium-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 157px;
	height: 91px;
}
</style>