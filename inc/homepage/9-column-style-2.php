<?php
//----------------//

 global $secondcolumnstylecatname1;
      
 $secondcolumnstylecatname1 = get_the_category_by_id($spidysoft['second-column-cat-1']);

 global $secondcolumnstylecatname2;
      
 $secondcolumnstylecatname2 = get_the_category_by_id($spidysoft['second-column-cat-2']);
 
 global $secondcolumnstylecatname3;
      
 $secondcolumnstylecatname3 = get_the_category_by_id($spidysoft['second-column-cat-3']);
 
/* use catslug function*/
 
  global $secondcolumnstylecatslug1;
 $secondcolumnstylecatslug1 =  get_cat_slug( $spidysoft['second-column-cat-1'] );

 global $secondcolumnstylecatslug2;
 $secondcolumnstylecatslug2 =  get_cat_slug( $spidysoft['second-column-cat-2'] );
 
 global $secondcolumnstylecatslug3;
 $secondcolumnstylecatslug3 =  get_cat_slug( $spidysoft['second-column-cat-3'] );

?>


<div class="container-fluid mt24">
   <div class="container">
      <div class="row mlr-30">
         <div class="col-sm-4 cat-style-3">
            <div class="cat-heading-exclusive">
               <a href="<?php echo get_category_link( $spidysoft['second-column-cat-1'] ); ?>"><?php echo $secondcolumnstylecatname1; ?></a>
               <div class="clearfix"></div>
            </div>
			<?php  
			  $secondcolumnstylecatonepost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 5,
			  'category_name'  => $secondcolumnstylecatslug1
			  ));   
			  while($secondcolumnstylecatonepost->have_posts()) :  $secondcolumnstylecatonepost->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
               <div class="content-box">
                  <div class="img-container">
					 <?php the_post_thumbnail('slide-thumb', array('class' => 'home-column-section-thumbnail-query img-responsive',itemprop=>'image')); ?>
                  </div>
                  <div class="heading-container">
                     <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </a>
            <?php endwhile; ?>
         </div>
         <div class="col-sm-4 cat-style-3">
            <div class="cat-heading-science-technology">
               <a href="<?php echo get_category_link( $spidysoft['second-column-cat-2'] ); ?>"><?php echo $secondcolumnstylecatname2;?></a>
               <div class="clearfix"></div>
            </div>
            <?php  
			  $secondcolumnstylecattwopost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 5,
			  'category_name'  => $secondcolumnstylecatslug2
			  ));   
			  while($secondcolumnstylecattwopost->have_posts()) :  $secondcolumnstylecattwopost->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
               <div class="content-box">
                  <div class="img-container">
					 <?php the_post_thumbnail('slide-thumb', array('class' => 'home-column-section-thumbnail-query img-responsive',itemprop=>'image')); ?>
                  </div>
                  <div class="heading-container">
                     <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </a>
            <?php endwhile; ?>         
         </div>
         <div class="col-sm-4 cat-style-3">
            <div class="cat-heading-jobs">
               <a href="<?php echo get_category_link( $spidysoft['second-column-cat-3'] ); ?>"> <?php echo $secondcolumnstylecatname3;?> </a>
               <div class="clearfix"></div>
            </div>
            <?php  
			  $secondcolumnstylecatthreepost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 5,
			  'category_name'  => $secondcolumnstylecatslug3
			  ));   
			  while($secondcolumnstylecatthreepost->have_posts()) :  $secondcolumnstylecatthreepost->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
               <div class="content-box">
                  <div class="img-container">
					 <?php the_post_thumbnail('slide-thumb', array('class' => 'home-column-section-thumbnail-query img-responsive',itemprop=>'image')); ?>
                  </div>
                  <div class="heading-container">
                     <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </a>
            <?php endwhile; ?>   
            
         </div>
      </div>
   </div>
</div>


<style>

.home-column-section-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 122px;
	height: 73px;
}
</style>