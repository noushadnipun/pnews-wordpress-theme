<?php get_header(); ?>

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
         <div class="col-md-4">
            <div class="details-container">
			  <?php dynamic_sidebar('right-sidebar-single-page'); ?>
            </div>
        </div>
   </div>
</div>

<?php get_footer(); ?>