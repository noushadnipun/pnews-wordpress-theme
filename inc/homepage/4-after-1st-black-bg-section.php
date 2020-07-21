<?php
//----------------//

  global $afterfirstblackbgleftcatname;
      
 $afterfirstblackbgleftcatname = get_the_category_by_id($spidysoft['after-1st-black-bg-section-left-cat']);

 global $afterfirstblackbgrightcatname;
      
 $afterfirstblackbgrightcatname = get_the_category_by_id($spidysoft['1st-black-bg-section-right-cat']);
 

/* use catslug function*/
 
  global $afterfirstblackbgleftcatslug;
 $afterfirstblackbgleftcatslug =  get_cat_slug( $spidysoft['after-1st-black-bg-section-left-cat'] );

 global $afterfirstblackbgrightcatslug;
 $afterfirstblackbgrightcatslug =  get_cat_slug( $spidysoft['1st-black-bg-section-right-cat'] );

?>

<div class="container-fluid local-news-container">
   <div class="container">
      <div class="row">
         <div class="left-content-area">
            <div class="col-sm-12 pr-12">
               <div class="row">
                  <div class="col-sm-12 pl-0 pr-12">
                     <div class="bd-news-heading-container">
                        <div class="main-heading">
                           <a href="<?php echo get_category_link( $spidysoft['after-1st-black-bg-section-left-cat'] ); ?>" class="no-style"><?php echo $afterfirstblackbgleftcatname ;?></a>
                        </div>
                        <div class="sub-heading">
                           <!-- Nav tabs -->                         
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-sm-12 p0">
                     <!-- Tab panes -->
                     <div class="xtab-content">
                        <div role="xtabpanel" class="xtab-pane active fade in" id="xall-division-news">
                           <div class="col-sm-7 p0">
						   <?php  
							  $firstblackbgleftcatpost = new WP_Query(array(
							  'post_type' => 'post',
							  'posts_per_page' => 1,
							  'category_name'  => $afterfirstblackbgleftcatslug
							  ));   
							  while($firstblackbgleftcatpost->have_posts()) :  $firstblackbgleftcatpost->the_post(); ?>
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
							  $firstblackbgleftcatpost = new WP_Query(array(
							  'post_type' => 'post',
							  'posts_per_page' => 4,
							  'offset' => 1,
							  'category_name'  => $afterfirstblackbgleftcatslug
							  ));   
							  while($firstblackbgleftcatpost->have_posts()) :  $firstblackbgleftcatpost->the_post(); ?>
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
            <aside class="col-sm-12 opinion-section">             
			   <?php echo do_shortcode('[prayer_time]'); ?>
            </aside>
         </div>
      </div>
   </div>
</div>