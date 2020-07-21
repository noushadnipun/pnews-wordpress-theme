<!-- TOP HEADER -->

<!--div class="container-fluid top-bar" style="background-color: #a60202; padding: 10px;">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 top-bar-col-1">
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
    
<div style="display: inline-block;"> | আপডেটঃ <span class="xenglish"><em class="placeholder">
									
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
</div-->





<!-- MAIN HEADER -->

<link href="http://pnews24.com/spidysoft-application/plugins/mobilepress/themes/default/assets/css/font-jade-embedded.css" rel="stylesheet">

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/palo-header.js"></script>  

<script type="text/javascript" src="http://pnews24.com/spidysoft-application/plugins/mobilepress/themes/default/assets/js/jquery-ui-1.9.2.custom.min.js"></script>


<script type="text/javascript" src="http://pnews24.com/spidysoft-application/plugins/mobilepress/themes/default/assets/js/jquery-ui-timepicker-addon.js"></script>

<script type="text/javascript" src="http://pnews24.com/spidysoft-application/plugins/mobilepress/themes/default/assets/js/custom.js"></script>



<div class="header_wrap" style="box-sizing: unset !important;     height: auto;">
    
 
 
 
 
 
 
<div class="container-fluid top-bar">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 top-bar-col-1">
            <i class="fa fa-map-marker" aria-hidden="true"></i> ঢাকা
            <i class="fa fa-calendar" aria-hidden="true"></i>  
            <?php 
			$currentDate = date("l, F j, Y");
			$engDATE = array(1,2,3,4,5,6,7,8,9,0, 'January', 'February', 'March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
			$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০', 'জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
			বুধবার','বৃহস্পতিবার','শুক্রবার' );
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











 
 
 
 
 
    
   <div class="container">
      <!--logo-->
      
      
      <h1 class="site_logo" style="box-sizing: unset !important;">
          
          
          
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img height="" src="<?php echo $spidysoft['logo-upload']['url']; ?>" alt="" style="
    width: 196px;
    height:  auto;
"></a>
         
         
   
									
									
         
      </h1>
      
      
      
      
      <div class="header_right_part">
         <div class="header_right_inner">
            <span class="more_main_menu"><span></span></span>
            <div class="more_main_menu_wrap">
               <div class="more_main_menu_inner">
                  <span class="close_more_main"></span>
                  <div class="top_big_menu big_menu">
                     <div class="big_menu_top">
                        <div class="all-menu" style="width: 100%;">                          						   
                           <?php                             
                              $args = array(
                              'theme_location' => 'header-second-menu',
                              'depth'          => 2,
                              'container'      => false,
                              'menu_class'     => '',
                              'menu_id'     => '13'
                              );
                              wp_nav_menu($args);                     
                              ?>	
                        </div>
                        <script type="text/javascript">
                           jw_menu_fixer('.footer_menu','navigation');
                        </script>
                     </div>
                     <div class="big_menu_bottom">
                        <div class="bmenu_bottom_left">
                           <script type="text/javascript">
                              jw_menu_fixer('.footer_menu','navigation');
                           </script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               $('.more_main_menu').click(function(){ 
               	$('.more_main_menu_wrap').toggle(200); 
               	$('body').toggleClass('no-scrollbar');
               	$('.more_main_menu').toggleClass('opened');
               	$('.mh_toggle').toggleClass('db');
               	});
               $('.close_more_main').click(function(){
               	$('.more_main_menu_wrap').toggle(200);
               	$('body').toggleClass('no-scrollbar');
               	$('.more_main_menu').toggleClass('opened');
               	$('.mh_toggle').toggleClass('db');
               	});
               $('.more_main_menu_wrap' ).click(function(e){
               	if(e.target !== e.currentTarget) return;
               	$('.more_main_menu_wrap').toggle(200);
               	$('body').toggleClass('no-scrollbar');
               	$('.more_main_menu').toggleClass('opened');
               	$('.mh_toggle').toggleClass('db');
               });
            </script>
            
            <!--site switcher-->
            <!--user accounts-->
            <!--search form-->
            <!--<div class="header_search_wrap">
               <span class="search_toggle click-free-pop" data-pop=".header_seach_form"></span>
               <div class="header_seach_form">
                  <form id="jadewits_search_form_1223" action="<?php bloginfo('url'); ?>/" method="get" id="searchfor">
                     <span class="search_close"></span>
                     <button class="search_button" type="submit"><span>অনুসন্ধান</span></button>
                     <div class="search_input_holder" style="box-sizing: unset !important;">
                        <input style="box-sizing: unset !important;" class="search_input jadewits_keyboard " name="s" id="search" data-keyboardfixedpos="32" type="text" value="<?php the_search_query(); ?>" placeholder="কী খুঁজতে চান?">
                     </div>
                  </form>
                  <script type="text/javascript">
                     $('#jadewits_search_form_1223').submit(function(){
                     	var search_text = $.trim($('[name=s]',this).val());
                     	if( search_text == 'কী খুঁজতে চান?' || !search_text){
                     		alert('Please type something to search');
                     		return false;
                     		}
                     	return true;
                     	});
                  </script>
               </div>
               <script type="text/javascript">$('.search_toggle').click(function(){  /*$('.header_seach_form .search_input').focus();*/});$('.header_seach_form  .search_close').click(function(){ $('.header_seach_form').toggle();});
                  /*$('.header_seach_form .search_input').focus(function(){
                  	$('#banglaInpTool').addClass('keyboard_top');
                  	});
                  $('.header_seach_form .search_input').blur(function(){
                  	$('#banglaInpTool').removeClass('keyboard_top');
                  	});*/
                  
               </script>
            </div>-->
            <!--social links-->
            <!--<div class="header_social_wrap mh_toggle">
               <span class="social_toggle click-free-pop" data-pop=".social_links"></span>
               <div class="social_links">
                  <ul>
                     <li><a rel="nofollow" target="_blank" class="facebook" href="<?php echo $spidysoft['facebook-link']; ?>"><span>Facebook</span></a></li>
                     <li><a rel="nofollow" target="_blank" class="twitter" href="<?php echo $spidysoft['twitter-link']; ?>"><span>Twitter</span></a></li>
                     <li><a rel="nofollow" target="_blank" class="googleplus" href="<?php echo $spidysoft['gplus-link']; ?>"><span>Google Plus</span></a></li>
                     <li><a rel="nofollow" target="_blank" class="youtube" href="<?php echo $spidysoft['youtube-link']; ?>"><span>YouTube</span></a></li>
                  </ul>
               </div>
            </div>-->
         </div>
      </div>

<div class="header_menu_wrap">
						<span class="main_menu_toggle"></span>
						<div id="main_menu" class="main_menu">
						<?php                             
                              $args = array(
                              'theme_location' => 'header-main-menu',
                              'depth'          => 2,
                              'container'      => false,
                              'menu_class'     => '',
                              'menu_id'     => '9'
                              );
                              wp_nav_menu($args);                     
                              ?>				</div>
						<script type="text/javascript">
							jw_menu_fixer('.main_menu','navigation');
							//now run horizontal menu hover helper
							//jadewits_horizontal_hover_menu({container:'.main_menu',waittime:500});
						</script>
					</div>


   </div>
</div>