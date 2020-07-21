<?php
//----------------//

  global $secondblackbgcatname;
      
 $secondblackbgcatname = get_the_category_by_id($spidysoft['2nd-black-bg-section-cat']);

 
/* use catslug function*/
 
  global $secondblackbgcatslug;
 $secondblackbgcatslug =  get_cat_slug( $spidysoft['2nd-black-bg-section-cat'] );


?>

<div class="container-fluid entertainment-news-container">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 entertainment-heading">
			<div style="background: #333; text-align: center;"><a href="<?php echo get_category_link( $spidysoft['2nd-black-bg-section-cat'] ); ?>" style="font-size: 30px; color: #fff;"><?php echo $secondblackbgcatname; ?></a></div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6 entertainment-lead">
		    <?php  
			  $secondblackbgcatpost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 1,
			  'category_name'  => $secondblackbgcatslug
			  ));   
			  while($secondblackbgcatpost->have_posts()) :  $secondblackbgcatpost->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
               <div>
				  <?php the_post_thumbnail('slide-thumb', array('class' => 'home-2nd-black-bg-section-big-thumbnail-query img-responsive',itemprop=>'image')); ?>
                  <h2><?php the_title(); ?></h2>
               </div>
            </a>
			<?php endwhile; ?>
         </div>
		 <?php  
		  $secondblackbgcatpost = new WP_Query(array(
		  'post_type' => 'post',
		  'posts_per_page' => 4,
		  'offset' => 1,
		  'category_name'  => $secondblackbgcatslug
		  ));   
		  while($secondblackbgcatpost->have_posts()) :  $secondblackbgcatpost->the_post(); ?>
         <div class="col-sm-3 entertainment-content-box" style="margin-bottom: 12px;">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-thumb', array('class' => 'home-2nd-black-bg-section-medium-thumbnail-query img-responsive',itemprop=>'image')); ?></a>
            <div>
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <div class="row">
	  <?php  
		  $secondblackbgcatpost = new WP_Query(array(
		  'post_type' => 'post',
		  'posts_per_page' => 4,
		  'offset' => 5,
		  'category_name'  => $secondblackbgcatslug
		  ));   
		  while($secondblackbgcatpost->have_posts()) :  $secondblackbgcatpost->the_post(); ?>
         <div class="col-sm-3 entertainment-content-box">	 
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-thumb', array('class' => 'home-2nd-black-bg-section-medium-thumbnail-query img-responsive',itemprop=>'image')); ?></a>
            <div>
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>


<style>

.home-2nd-black-bg-section-big-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 501px;
	height: 276px;
}

.home-2nd-black-bg-section-medium-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 244px;
	height: 150px;
}


</style>