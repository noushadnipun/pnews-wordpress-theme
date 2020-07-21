<?php get_header() ;?>
<div class="container category-content-container">
   <div class="content_list">
      <div class="row">
	    <div style="font-size: 30px; border-bottom: 1px dotted #222; margin: 0px 15px;">
		     <?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?>
		 </div>
	  </div>
	  
	  
      <div class="row">		 
		 <?php 
		 $i = 0;
		 if (have_posts()): while (have_posts()): the_post(); 
		 {
         echo $i % 4 == 0 ? '<div class="col-md-12"></div>' : '';
		 ?>	 
         <div class="col-sm-3" style="margin-bottom: 10px;">
            <a href="<?php the_permalink();?>">
               <div>
                  <?php the_post_thumbnail('slide-thumb', array('class' => 'archive-thumbnail-query img-responsive',itemprop=>'image')); ?>
                  <span class="content-sub-head"></span>
                  <h2><?php the_title();?></h2>
               </div>
            </a>
         </div>
		 <?php $i++; } ?>
         <?php endwhile;?>	
		 <?php endif; ?>
      </div>
	  
	  <div align="center"><?php wp_pagenavi(); ?></div>
	  
	  
   </div>
</div>
<?php get_footer(); ?>

<style>
.archive-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 228px;
	height: 137px;
}

</style>