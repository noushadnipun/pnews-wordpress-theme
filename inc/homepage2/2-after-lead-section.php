<?php
//----------------//

  global $afterladsectionleftcatname;
      
 $afterladsectionleftcatname = get_the_category_by_id($spidysoft['after-lead-section-left-cat']);

 global $afterladsectionrightcatname;
      
 $afterladsectionrightcatname = get_the_category_by_id($spidysoft['after-lead-section-right-cat']);

/* use catslug function*/
 
  global $afterladsectionleftcatslug;
 $afterladsectionleftcatslug =  get_cat_slug( $spidysoft['after-lead-section-left-cat'] );

 global $afterladsectionrightcatslug;
 $afterladsectionrightcatslug =  get_cat_slug( $spidysoft['after-lead-section-right-cat'] );

?>

<div class="container-fluid bd-news-container">
   <div class="container">
      <div class="row">
         <div class="left-content-area">
            <div class="col-sm-12 pr-12">
               <div class="row">
                  <div class="col-sm-12 pl-0 pr-12">
                     <div class="bd-news-heading-container">
                        <div class="main-heading"><a style="font-size: 22px; color: #dd0404;" href="<?php echo get_category_link( $spidysoft['after-lead-section-left-cat'] ); ?>"><?php echo $afterladsectionleftcatname ;?></a></div>
                        <div class="sub-heading">
                           <!-- Nav tabs -->                         
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-sm-12 p0">
                     <!-- Tab panes -->
                     <div class="xtab-content">
                        <div role="xtabpanel" class="xtab-pane active fade in" id="xall-bd-news">
                           <div class="col-sm-7 p0">
						   <?php  
                              $afterladsectionleftcatpost = new WP_Query(array(
                              'post_type' => 'post',
                              'posts_per_page' => 1,
                              'category_name'  => $afterladsectionleftcatslug
                              ));   
                              while($afterladsectionleftcatpost->have_posts()) :  $afterladsectionleftcatpost->the_post(); ?>
                              <a href="<?php the_permalink(); ?>">
                                 <div class="cat-lead-news">                                   
									<?php the_post_thumbnail('slide-thumb', array('class' => 'home-after-lead-left-big-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                    <div>
                                       <h2><?php the_title(); ?></h2>
                                    </div>
                                 </div>
                              </a>
							 <?php endwhile; ?>
                           </div>
                           <div class="col-sm-5 cat-list-news">
                              <div class="row mr-0">
							  <?php  
                              $afterladsectionleftcatpost = new WP_Query(array(
                              'post_type' => 'post',
                              'posts_per_page' => 4,
							  'offset'  => 1,
                              'category_name'  => $afterladsectionleftcatslug
                              ));   
                              while($afterladsectionleftcatpost->have_posts()) :  $afterladsectionleftcatpost->the_post(); ?>
                                 <a href="<?php the_permalink(); ?>">
                                    <div class="col-sm-12">
                                       <div class="img-container">
                                          <?php the_post_thumbnail('slide-thumb', array('class' => 'home-after-lead-left-small-thumbnail-query img-responsive',itemprop=>'image')); ?>
                                       </div>
                                       <div class="heading-container">
                                          <h2><?php the_title(); ?></h2>
                                       </div>
                                    </div>
                                 </a>
                               <?php endwhile; ?> 
                              </div>
                           </div>
                        </div>                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="right-content-area">
            <aside class="col-sm-12 international-section">
               <div class="international-heading">
                  <a style="font-size: 16px; color: #fff;" href="<?php echo get_category_link( $spidysoft['after-lead-section-right-cat'] ); ?>"><?php echo $afterladsectionrightcatname ;?></a>
                  <div class="clearfix"></div>
               </div>
			   <?php  
			  $afterladsectionrightcatpost = new WP_Query(array(
			  'post_type' => 'post',
			  'posts_per_page' => 4,			  
			  'category_name'  => $afterladsectionrightcatslug
			  ));   
			  while($afterladsectionrightcatpost->have_posts()) :  $afterladsectionrightcatpost->the_post(); ?>
               <a href="<?php the_permalink(); ?>">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="international-img-container">
                           <?php the_post_thumbnail('slide-thumb', array('class' => 'home-after-lead-right-small-thumbnail-query img-responsive',itemprop=>'image')); ?>
                        </div>
                        <div class="international-content-heading">
                           <h2><?php the_title(); ?></h2>
                        </div>
                     </div>
                  </div>
               </a>
               <?php endwhile; ?> 
            </aside>
         </div>
      </div>
   </div>
</div>


<style>
.home-after-lead-left-big-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 400px;
	height: 240px;
}

.home-after-lead-left-small-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 110px;
	height: 66px;
}

.home-after-lead-right-small-thumbnail-query {
    display: block;
    min-width: 100%;
    min-height: auto;
	width: 100px;
	height: 70px;
}
</style>