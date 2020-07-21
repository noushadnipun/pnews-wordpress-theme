<?php
//----------------//

 global $bottomgridcatname;
      
 $bottomgridcatname = get_the_category_by_id($spidysoft['bottom-grid-cat']);
 
 /* use catslug function*/
 
  global $bottomgridcatslug;
 $bottomgridslug =  get_cat_slug( $spidysoft['bottom-grid-cat'] );
 ?>


<div class="container-fluid video-gallery-container" style="margin-top: 24px;">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="video-gallery-heading-container">
               <h2><a href="<?php echo get_category_link( $spidysoft['bottom-grid-cat'] ); ?>"><?php echo $bottomgridcatname; ?></a></h2>
            </div>
         </div>
		 <?php  
		  $bottomgridcatonepost = new WP_Query(array(
		  'post_type' => 'post',
		  'posts_per_page' => 4,
		  'category_name'  => $bottomgridslug
		  ));   
		  while($bottomgridcatonepost->have_posts()) :  $bottomgridcatonepost->the_post(); ?>
         <div class="col-sm-3 video-box">
            <div>
               <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail('slide-thumb', array('class' => 'home-bottom-grid-section-thumbnail-query img-responsive',itemprop=>'image')); ?>
               </a>
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
         </div>
         <?php endwhile; ?>   
      </div>
   </div>
</div>


<style>
.home-bottom-grid-section-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 232px;
	height: 139px;
}
</style>