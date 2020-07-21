<?php 
/*
Template name: Most Popular
*/
?> 
<?php get_header(); ?>





<!--
<div class="breadcrumb" style="margin-bottom: 10px;"> <a href="<?php echo get_home_url(); ?>"> প্রচ্ছদ </a> / <?php single_cat_title(); ?>  </div>
-->



<div class="container">

<div class="col-xs-12 col-sm-8 col-lg-8 col-module" style="margin-top:5px;">
<div class="twocol">
<div  style="padding-top: 6px; overflow: hidden">

<h4 class="headbar">						
                                   <a>
								       <?php
										$lc_title = get_option( 'kento_latest_tabs_lc_title' );
										if ( isset($lc_title) && !empty($lc_title) )
										echo $lc_title;
										elseif (empty($lc_title)){  
										echo 'আলোচিত' ;
										} ?>
                                         </a>                        
							</h4>


<?php 
$hi_com_post = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => 10, 'no_found_rows' => true, 'post_status' => 'publish',  'orderby' =>'comment_count', 'ignore_sticky_posts' => true ) ) ); 

while( $hi_com_post->have_posts() ) : $hi_com_post->the_post();?>


				


<article id="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-item hentry">
	<div class="row" style="background: #fff; padding: 5px 0px 0px 0px;">
	<div class="col-md-6 col-sm-6">
	<div class="row catlist col-md-12">
	<div class="thumb-pad1">
		<div class="thumbnail">
			<figure style="padding: 0px;"><a class="grid-width-img-responsive" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full', array('class' => 'grid-width-img-responsive')); ?></a></figure>
		</div>
	</div>
	</div>
	</div>
	<div class="col-md-6 col-sm-6">
	<div class="row catlist col-md-12">
		<h4 style="margin-top: 0px;"><a style="font-size: 24px !important; line-height: 1.4em; color:#333; font-weight: bold " href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<p><?php echo hr_content_limit(340) ?>...</p>
	</div>
	</div>
	</div>
</article>


													

<?php endwhile; ?>

 

</div>
</div>
            <!--
            <div class="twocol">
			<div style="background: #fff; padding: 10px; overflow: hidden;">
	        <?php wp_pagenavi(); ?>
			</div>
            </div>
            -->
</div>


<div class="col-xs-12 col-sm-4 col-lg-4 col-module" style="margin-top:5px;">
  <?php dynamic_sidebar('archive-sidebar'); ?>
</div>
</div>

<div  style="background: #fff; padding-top: 6px;"></div>

</div>

<?php get_footer() ;?>








<style>




.archive-thumb-query-2 {
    float: left;
    width: 70px;
    height: 50px;
    margin: 0px 5px 0px 5px;
}

#archive-post {
    overflow: hidden;
	display: inline-grid;
}



.blog-item {
    border-bottom: 0px solid #EEE;
    padding-bottom: 15px;
    margin-bottom: 0px;
}
.thumbnail {
    border: 0px solid #EEE;
    margin: 0 0 4px;
    padding: 10px;
}

.thumb-pad1 .thumbnail figure img {
    width: 100%;
    height: auto;
}

 .thumbnail {
    border: 0px solid #EEE !important;
}

h4 {
    font-size: 18px;
	margin-top: 10px;
	margin-bottom: 4px;
}

p {
    margin-bottom: 10px;
}


.grid-width-img-responsive img {
    width: 100% !important;
    height: 150px !important;
    margin-bottom: 5px !important;
}
.grid-width-img-responsive {
    display: block;
}

</style>
