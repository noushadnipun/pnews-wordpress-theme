<?php get_header() ;?>
<div class="container category-content-container">
<div class="pagemaker content_list">
   <div class="container">
      <div style="font-size: 20px; border-bottom: 1px dotted #222; margin: 15px 15px; padding-bottom: 10px;">
         <a href="<?php echo get_bloginfo ('home'); ?>"> <i class="fa fa-home"></i></a> / 
         <?php if ( is_category() ) : ?>
         <?php single_cat_title(); ?> 
         <?php elseif ( is_day() ) : ?>
         Archive for <?php the_time( 'F jS, Y' ); ?>
         <?php elseif ( is_month() ) : ?>
         Archive for <?php the_time( 'F, Y' ); ?>
         <?php elseif ( is_year() ) : ?>
         Archive for <?php the_time('Y'); ?>
         <?php endif; ?>
      </div>
      <div class="container">
         <?php 
            $i = 0;
            if (have_posts()): while (have_posts()): the_post(); 
            {
                  echo $i % 2 == 0 ? '<div class="spacebar"></div>' : '';
            ?>	 
         <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="img_holder_lead_medium">
               <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive',itemprop=>'image')); ?></a>
            </div>
            <div class="title_holder">
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
         </div>
         <?php $i++; } ?>
         <?php endwhile;?>	
         <?php endif; ?>
      </div>
      <div style="padding: 10px;" class="container"><?php wp_pagenavi(); ?></div>
   </div>
</div>
<?php get_footer(); ?>
<style>
   .img_holder_lead_medium {margin-bottom: 5px;}
   .img_holder_lead_medium img {width: 100%; height: 100px}
</style>