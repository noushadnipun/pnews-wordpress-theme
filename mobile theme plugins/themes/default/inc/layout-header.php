<div class="header_wrap" style="box-sizing: unset !important">
   <div class="header">
      <!--logo-->
      <h1 class="site_logo" style="box-sizing: unset !important;">
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img height="46" src="<?php echo $spidysoft['logo-upload']['url']; ?>" alt=""></a>
      </h1>
      <div class="header_right_part">
         <div class="header_right_inner">
            <span class="more_main_menu"><span></span></span>
            <div class="more_main_menu_wrap">
               <div class="more_main_menu_inner">
                  <span class="close_more_main"></span>
                  <div class="top_big_menu big_menu">
                     <div class="big_menu_top">
                        <div class="all-menu">                          						   
                           <?php                             
                              $args = array(
                              'theme_location' => 'mobile-header-menu',
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
            <div class="header_search_wrap">
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
            </div>
            <!--social links-->
            <div class="header_social_wrap mh_toggle">
               <span class="social_toggle click-free-pop" data-pop=".social_links"></span>
               <div class="social_links">
                  <ul>
                     <li><a rel="nofollow" target="_blank" class="facebook" href="<?php echo $spidysoft['facebook-link']; ?>"><span>Facebook</span></a></li>
                     <li><a rel="nofollow" target="_blank" class="twitter" href="<?php echo $spidysoft['twitter-link']; ?>"><span>Twitter</span></a></li>
                     <li><a rel="nofollow" target="_blank" class="googleplus" href="<?php echo $spidysoft['gplus-link']; ?>"><span>Google Plus</span></a></li>
                     <li><a rel="nofollow" target="_blank" class="youtube" href="<?php echo $spidysoft['youtube-link']; ?>"><span>YouTube</span></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>