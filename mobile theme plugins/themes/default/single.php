<?php get_header(); ?>

<style>
    
    .crp_related li {
    margin: 0px !important;
    border: 1px solid #ddd;
    padding: 6px;
}
.crp_related ul {
    list-style: none;
    float: left;
    margin: 0 !important;
    padding: 0 !important;
}

.crp_related .crp_title {
    width: 100% !important;
    height: 75px;
}

.crp_related a {
    width: 125px;
    height: 125px;
    text-decoration: none;
}
</style>


<div class="container">
   <div class="">
       <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <div class="col-md-8">
         <div class="details-container">
            <div class="breadcrumb">
               <a href="<?php echo get_bloginfo ('home'); ?>"> <i class="fa fa-home"></i> </a>/
               <a href="<?php the_permalink(); ?>"><?php the_category(', ') ?></a>
            </div>
            <div class="content-details">
               <h1><?php the_title(); ?></h1>
               <hr>
               <div style="margin-bottom:10px;">
                  <small>
                      
                      <img height="" src="/prokas-ic.png" alt="" style="
    width: 75px;
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
               
			   <div style="padding:10px 0 0;">
                 <?php echo $spidysoft['single-page-bottom-ad']; ?>
               </div>
            </div>
         </div>
		 </div>
		  <?php endwhile;?>	
                 <?php endif; ?>
         <!--div class="col-md-4">
            <div class="details-container">
			  <?php dynamic_sidebar('right-sidebar-single-page'); ?>
            </div>
        </div-->
   </div>
</div>

<?php get_footer(); ?>