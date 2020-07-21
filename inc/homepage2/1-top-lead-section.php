<?php
//----------------//

  global $leadcatname1;
      
 $leadcatname1 = get_the_category_by_id($spidysoft['lead-news-1']);

 global $leadrightsidecatname;
      
 $leadrightsidecatname = get_the_category_by_id($spidysoft['lead-right-side-cat']);

  global $leadcatname2;
      
 $leadcatname2 = get_the_category_by_id($spidysoft['lead-news-2']);

  global $leadcatname3;
      
 $leadcatname3 = get_the_category_by_id($spidysoft['lead-news-3']);
 

/* use catslug function*/
 
  global $leadcatslug1;
 $leadcatslug1 =  get_term_slug( $spidysoft['lead-news-1'] );

 global $leadrightsidecatslug;
 $leadrightsidecatslug =  get_cat_slug( $spidysoft['lead-right-side-cat'] );

  global $leadcatslug2;
 $leadcatslug2 =  get_term_slug( $spidysoft['lead-news-2'] );
 
  global $leadcatslug3;
 $leadcatslug3 =  get_term_slug( $spidysoft['lead-news-3'] );

?>


<div class="container">
   <div class="row top-content-row">
      <div class="left-content-area">
         <div class="col-sm-12 pr-12">
            <div class="row">
		     <!-- --------------------------------- 
			 |        L E A D - 1                  |
			 ----------------------------------- -->
               <div class="col-sm-8 p0">
			    <?php     
				 $leadcategorypost1 = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 1,
				    'taxonomy' => 'topics',
					'term' => $leadcatslug1,
				 ));    
                while($leadcategorypost1->have_posts()) :  $leadcategorypost1->the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                     <div class="lead-news">                       
						<?php the_post_thumbnail('slide-thumb', array('class' => 'home-1st-lead-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        <div class="lead-news-heading">
                           <h1><?php the_title(); ?></h1>
                        </div>
                     </div>
                  </a>
				<?php endwhile; ?>  
               </div>
			 <!-- --------------------------------- 
			 |  R I G H T - S I D E - L E A D - 1  |
			 ----------------------------------- -->
               <div class="col-sm-4">
			      <?php  
                  $leadrightsidecatpost = new WP_Query(array(
                  'post_type' => 'post',
                  'posts_per_page' => 1,
                  'category_name'  => $leadrightsidecatslug
                  ));   
                  while($leadrightsidecatpost->have_posts()) :  $leadrightsidecatpost->the_post(); ?>
                  			  
                     <div id="focus">
                        <h2><a style="font-size: 24px; color: #fff;" href="<?php echo get_category_link( $spidysoft['lead-right-side-cat'] ); ?>"><?php echo $leadrightsidecatname ;?></a></h2>                      
						<a href="<?php the_permalink(); ?>" class="focus-link">
						<?php the_post_thumbnail('slide-thumb', array('class' => 'home-lead-right-side-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        <div class="focus-heading-container">
                           <h2><?php the_title(); ?></h2>
                           <p style="text-align:justify"><?php hr_content_limit(300)?></p>					
                        </div>
                        </a>
                  </div>
				  <?php endwhile; ?>
               </div>
            </div>
         </div>
         <div class="col-sm-12 top-ad-space">
            <?php echo $spidysoft['lead-left-side-ad-1']; ?>
         </div>
         <div class="col-sm-12 selected-content-area">
		    <!-- --------------------------------- 
			 |        L E A D - 2                  |
			 ----------------------------------- -->
            <div class="row">
			   <?php   
               $leadcategorypost2 = new WP_Query(array(
               'post_type' => 'post',
               'posts_per_page' => 3,
               'taxonomy' => 'topics',
               'term' => $leadcatslug2
               ));   
               while($leadcategorypost2->have_posts()) :  $leadcategorypost2->the_post(); ?>
               <a href="<?php the_permalink(); ?>">
                  <div class="col-sm-4 selected-content-box">
                     <div>                      
						<?php the_post_thumbnail('slide-thumb', array('class' => 'home-2nd-lead-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        <div class="heading-container">
                           <h2><?php the_title(); ?></h2>
                        </div>
                     </div>
                  </div>
               </a>
              <?php endwhile; ?>
            </div>			
			<!-- --------------------------------- 
			 |        L E A D - 3                  |
			 ----------------------------------- -->
            <div class="row">
			   <?php 
               $leadcategorypost3 = new WP_Query(array(
               'post_type' => 'post',
               'posts_per_page' => 3,
	           'taxonomy' => 'topics',
               'term' => $leadcatslug3
               ));  
               while($leadcategorypost3->have_posts()) :  $leadcategorypost3->the_post(); ?>
               <a href="<?php the_permalink(); ?>">
                  <div class="col-sm-4 selected-content-box">
                     <div>                     
						<?php the_post_thumbnail('slide-thumb', array('class' => 'home-2nd-lead-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        <div class="heading-container">
                           <h2><?php the_title(); ?></h2>
                        </div>
                     </div>
                  </div>
               </a>
               <?php endwhile; ?>
            </div>
			<div class="col-sm-12 pl0pr12">
			    <?php echo $spidysoft['lead-left-side-ad-2']; ?>
			</div>
         </div>
      </div>
      <div class="right-content-area">
         <aside class="col-sm-12 pl12pr0">
            <div class="row">
               <div class="col-sm-12">
                  <div class="tab_container">
                     <input id="tab1" type="radio" name="tabs" checked>
                     <label for="tab1"><span>সর্বশেষ</span></label>
                     <input id="tab2" type="radio" name="tabs">
                     <label for="tab2"><span>জনপ্রিয়</span></label>
                     <section id="latest-content" class="xtab-content">
					 <!-- --------------------------------- 
			         |       T A B - L A T E S T           |
			         ----------------------------------- -->
                        <ul>
						<?php
						 $recent = new WP_Query( apply_filters( 'widget_posts_args', array('posts_per_page' => 10, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) ); 
						 while ( $recent->have_posts() ) : $recent->the_post(); ?>
						 
                           <li>
                              <a href="<?php the_permalink(); ?>">
                                 <div class="img-container">                                  
									<?php the_post_thumbnail('slide-thumb', array('class' => 'home-tab-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                 </div>
                                 <div class="heading-container">
                                    <h2><?php the_title(); ?></h2>
                                 </div>
                                 <div class="clearfix"></div>
                              </a>
                           </li>
                           <?php endwhile; ?>
                        </ul>
                     </section>
                     <section id="most-popular-content" class="xtab-content">
					 <!-- --------------------------------- 
			         |       T A B - P O P U L A R         |
			         ----------------------------------- -->
                        <ul>
						<?php
						$hi_view_post = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => 10, 'more' => $more = 0, 'meta_key' => 'views', 'no_found_rows' => true, 'post_status' => 'publish',  'orderby' =>'meta_value_num', 'order' => 'DESC', 'ignore_sticky_posts' => true ) ) );
						 while( $hi_view_post->have_posts() ) : $hi_view_post->the_post(); ?>
                           <li>
                              <a href="<?php the_permalink(); ?>">
                                 <div class="img-container">
                                    <?php the_post_thumbnail('slide-thumb', array('class' => 'home-tab-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                 </div>
                                 <div class="heading-container">
                                    <h2><?php the_title(); ?></h2>
                                 </div>
                                 <div class="clearfix"></div>
                              </a>
                           </li>                     
						   <?php endwhile; ?>
                        </ul>
                     </section>
                  </div>
			
               </div>
            </div>
            <div class="mt24">
               <?php echo $spidysoft['lead-right-side-ad']; ?>
            </div>
         </aside>
      </div>
   </div>
</div>


<style>

.home-1st-lead-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 463px;
	height: 265px;
}

.home-2nd-lead-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 211px;
	height: 126px;
}

.home-lead-right-side-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 218px;
	height: 133px;
}

.home-tab-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 93px;
	height: 56px;
}

</style>