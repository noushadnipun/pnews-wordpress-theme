<?php get_header(); ?>


<style>
    .details-container .breadcrumb {
    background-color: #f0f0edbd;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0);
    padding: 2px 9px;
    margin: 2px 0;
}

</style>
<div class="container">
   <div class="row">
       <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <div class="left-content-area">
         <div class="col-sm-12 details-container">
            <div class="breadcrumb">
                
               <a href="<?php echo get_bloginfo ('home'); ?>"> <i class="fa fa-home"></i> </a> <i class="fa fa-angle-double-right"></i> 
               <a href="<?php the_permalink(); ?>"><?php the_category(' <i class="fa fa-angle-double-right"></i> ') ?></a>
            </div>
            <div class="content-details">
               <h1><?php the_title(); ?></h1>
               
               
               <hr>
               <div style="margin-bottom:10px;">
                  <small>
                      <img height="" src="/prokas-icn.png" alt="" style="
    width: 70px;
    height:  auto;
"> || 
                      
                          <i class="fa fa-clock-o"></i>  প্রকাশিত: <?php echo get_the_time(); ?> , <?php echo get_the_date(); ?></small>
               </div>
               <?php if ( has_post_thumbnail() ) { 
                        the_post_thumbnail( 'slide-thumb', array('class' => 'img-esponsive') ); } ?>
               <div style="padding:10px 0 0;">
                 <?php echo $spidysoft['single-page-top-ad']; ?>
               </div>
               <?php the_content(); ?>
               
               <div style="margin-bottom:10px;">
                  <small>
                      <img height="" src="/prokas-icn.png" alt="" style="
    width: 75px;
    height:  auto;
"> || 
                      
                          <i class="fa fa-clock-o"></i>  প্রকাশিত: <?php echo get_the_time(); ?> , <?php echo get_the_date(); ?></small>
               </div>
               
               
			   <div style="padding:10px 0 0;">
                 <?php echo $spidysoft['single-page-bottom-ad']; ?>
               </div>
            </div>
         </div>
		 </div>
		  <?php endwhile;?>	
                 <?php endif; ?>
         <div class="right-content-area">
            <div class="col-sm-12 details-container">
			  <?php dynamic_sidebar('right-sidebar-single-page'); ?>
            </div>
        </div>
   </div>
</div>

<?php get_footer(); ?>