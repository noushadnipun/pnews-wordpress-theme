<!-- TOP HEADER -->

<div class="container-fluid top-bar">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 top-bar-col-1">
            <i class="fa fa-map-marker" aria-hidden="true"></i> ঢাকা
            <i class="fa fa-calendar" aria-hidden="true"></i>  
            <?php 
			$currentDate = date("l, F j, Y");
			$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
			$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
			বুধবার','বৃহস্পতিবার','শুক্রবার' 
			);
			$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
			echo "$convertedDATE";
			?>            
         </div>
         <div class="col-sm-4 text-center">
            
         </div>
         <div class="col-sm-4 top-bar-col-3">
            <div class="top-bar-search">
               <form method="get" id="custom-search-form" action="<?php bloginfo('url'); ?>/" class="search-form">
                  <div class="form-group has-feedback">
                     <label for="search" class="sr-only">Search</label>
                     <input style="height: 18px;" type="text" class="form-control" name="s" id="search" placeholder="search" value="<?php the_search_query(); ?>" name="s">
                     <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
               </form>
               <div class="top-bar-social-icons">
                  <a rel="nofollow" href="<?php echo $spidysoft['facebook-link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a rel="nofollow" href="<?php echo $spidysoft['twitter-link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a rel="nofollow" href="<?php echo $spidysoft['gplus-link']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                  <a rel="nofollow" href="<?php echo $spidysoft['youtube-link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- MAIN HEADER -->

<div class="header bg padding-top" id="headerNav" align="center">
<div class="container">
<div class="headcon" style="ovrflow: unset">
   <div class="hcol1 col-md-2" style="/*display: inline-block; position: absolute; left: 0px; top: -13px;*/">
      <div class="logo alignLeft"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" rel="home" id="logo"> <img style="height: 65px; margin-top: 5px;
    width: 215px;" src="<?php echo $spidysoft['logo-upload']['url']; ?>" alt="Home" width="150" height="85"> </a></div>
   </div>
   <div class="col-md-6 xhcol2" style="/*float: unset; width: auto;*/ float: right; width: 847px">
      <div class="content alignLeft">
         <div class="headRTop padding-bottom">
            <div class="headcon">
               <div class="lastUpdateCol0 lan-switch">
                  <!--<ul>
                     <li class="switch-off"><a href="#" class="english"> <span>English</span> <i class="fa fa-toggle-on bangla-on" aria-hidden="true"></i> </a></li>
                     <li class="switch-on"><a href="#">বাংলা</a></li>
                  </ul>-->
               </div>
               <div class="lastUpdateCol2 alignRight" style="float:left;margin-left: 45px;">
                  <div class="lastUpdate"> <span class="spanLastUpdate">শিরোনাম</span></div>
               </div>
               <div class="lastUpdateCol1 alignRight" style="float: left;">
                  <div class="lastUpdate">
                     <div class="region region-latest-update">
                        <div id="block-views-breaking-content-block" class="block block-views">
                           <div class="blockContent">
                              <div class="view view-breaking-content view-id-breaking_content view-display-id-block view-dom-id-ac91cc15950093ea5c1b846508134953">
                                 <div class="view-content">
                                    <div class="skin-default">
                                       <div id="views_slideshow_cycle_main_breaking_content-block_1" class="views_slideshow_cycle_main views_slideshow_main">
                                          <div id="views_slideshow_cycle_teaser_section_breaking_content-block_1" class="views-slideshow-cycle-main-frame views_slideshow_cycle_teaser_section">
										  
										    <?php query_posts('showposts=10'); if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
										    <?php 
										    $tickerVisibility = get_post_meta(get_the_ID() , $prefix.'ticker-apply', true);
										    if($tickerVisibility == 'on'): ?>
                                             <div id="views_slideshow_cycle_div_breaking_content-block_1_0" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-1 views-row-first views-row-odd">
                                                <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-0 views-row-odd views-row-first"> <a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), $prefix.'article-ticker', true); ?></a></div>
                                             </div>
                                            <?php else : ?>	
											
				                            <?php endif; ?>												
											<?php endwhile;?>	
						                    <?php endif; wp_reset_query(); ?>										
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="headRBottom">
            <div class="headcon">
               <div class="headRBottomCol1 alignRight" style="float: unset;width: auto;">
                  <div id="main-menu" class="menu">
                     <?php                             
						$args = array(
						'theme_location' => 'header-main-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => 'links clearfix',
						'walker'         => new Bootstrap_Walker_Nav_Menu()
						);
						wp_nav_menu($args);                     
                     ?>			
                  </div>
               </div>
               <div class="headRBottomCol2 alignLeft" style="position: absolute;top: -40px; right: 0px; width: 160px;float: unset;">
                  <div class="updateTime">
                     <div class="region region-header-two">
                        <div id="block-views-d3eac563667807a30ec604384403a5f2" class="block block-views">
                           <div class="blockContent">
                              <div class="view view-latest-commented-and-read-content view-id-latest_commented_and_read_content view-display-id-block_3 view-dom-id-0d5531545fb14f72f3d8b0963d800666">
                                 <div class="view-content" style="color: #fff;">
                                    <div> আপডেটঃ <span class="xenglish"><em class="placeholder">
									
											 <?php $postslist = get_posts('numberposts=1&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>
											 <?php echo  
											 str_replace('1', '১', str_replace('2', '২', str_replace('3', '৩', str_replace('4', '৪', str_replace('5', '৫', str_replace('6', '৬', str_replace('7', '৭', str_replace('8', '৮', str_replace('9', '৯', str_replace('10', '১০',
											 str_replace('0', '০',
											 str_replace('hour', 'ঘন্টার', str_replace('hours', 'ঘন্টা', str_replace('min', 'মিনিট', str_replace('mins', 'মিনিট', str_replace('day', 'দিন', str_replace('days', 'দিন', str_replace('week', 'সপ্তাহ', str_replace('weeks', 'সপ্তাহ',
											 str_replace('month', 'মাস', str_replace('months', 'মাস',
											 human_time_diff(get_the_time('U'), current_time('timestamp')) . ' আগে '))))))))))))))))))))); ?>
											 
											 <?php endforeach; ?>
									
									</em></span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>