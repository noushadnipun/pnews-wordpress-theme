<?php
//----------------//

 global $firstcolumnstylecatname1;
      
 $firstcolumnstylecatname1 = get_the_category_by_id($spidysoft['first-column-cat-1']);

 global $firstcolumnstylecatname2;
      
 $firstcolumnstylecatname2 = get_the_category_by_id($spidysoft['first-column-cat-2']);
 
 global $firstcolumnstylecatname3;
      
 $firstcolumnstylecatname3 = get_the_category_by_id($spidysoft['first-column-cat-3']);
 
/* use catslug function*/
 
  global $firstcolumnstylecatslug1;
 $firstcolumnstylecatslug1 =  get_cat_slug( $spidysoft['first-column-cat-1'] );

 global $firstcolumnstylecatslug2;
 $firstcolumnstylecatslug2 =  get_cat_slug( $spidysoft['first-column-cat-2'] );
 
 global $firstcolumnstylecatslug3;
 $firstcolumnstylecatslug3 =  get_cat_slug( $spidysoft['first-column-cat-3'] );

?>


<div class="container-fluid mt24">
   <div class="container">
      <div class="row mlr-30">
         <div class="col-sm-4 cat-style-3">
            <div class="cat-heading-exclusive">
               <a href="<?php echo get_category_link( $spidysoft['first-column-cat-1'] ); ?>"><?php echo $firstcolumnstylecatname1; ?></a>
               <div class="clearfix"></div>
            </div>
			<?php  
			  $firstcolumnstylecatonepost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 5,
			  'category_name'  => $firstcolumnstylecatslug1
			  ));   
			  while($firstcolumnstylecatonepost->have_posts()) :  $firstcolumnstylecatonepost->the_post(); ?>
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
               <a href="<?php echo get_category_link( $spidysoft['first-column-cat-2'] ); ?>"><?php echo $firstcolumnstylecatname2;?></a>
               <div class="clearfix"></div>
            </div>
            <?php  
			  $firstcolumnstylecattwopost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 5,
			  'category_name'  => $firstcolumnstylecatslug2
			  ));   
			  while($firstcolumnstylecattwopost->have_posts()) :  $firstcolumnstylecattwopost->the_post(); ?>
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
               <a href="<?php echo get_category_link( $spidysoft['first-column-cat-3'] ); ?>"> <?php echo $firstcolumnstylecatname3;?> </a>
               <div class="clearfix"></div>
            </div>
            <?php  
			  $firstcolumnstylecatthreepost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 5,
			  'category_name'  => $firstcolumnstylecatslug3
			  ));   
			  while($firstcolumnstylecatthreepost->have_posts()) :  $firstcolumnstylecatthreepost->the_post(); ?>
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