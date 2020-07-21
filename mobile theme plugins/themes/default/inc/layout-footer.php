<?php global $spidysoft ;?>
<div class="container">
<footer style="background: #ddd" class="">
   <div class="">
      <div class="row" style="margin-left: 0px;margin-right: 0px; padding: 10px 10px; color: #fff;">
         <div class="foot-logo oh" style="width: 100%;">
            <a href="<?php bloginfo ('home');?>"><img style="width: 145px; height: 31px;" src="<?php echo $spidysoft['logo-upload']['url']; ?>" alt=""></a>
         </div>
      </div>
</footer>
<footer style="background: #3a3636" class="">
<div class="">
<div class="footer-menu">
<div class="menu-footer-menu-container">
<?php 
   $catNav = '';
   if (function_exists('wp_nav_menu')) {
   	$catNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'bottom-menu', 'menu_id' => 'bottom-menu', 'echo' => false, 'fallback_cb' => '' ) );};
   if ($catNav == '') { ?>
<ul class="bottom-menu">
<?php // wp_list_categories('title_li=&orderby=id'); ?>
</ul>
<?php } else echo($catNav); ?></div>
</div>
</div></footer>
<footer style="background: #222;" class="">
<div class="">
<div class="row" style="background: #222;margin-left: 0px;margin-right: 0px; padding: 10px 10px; color: #fff;">
<div class="col-md-8 col-sm-6"><div style="margin-top: 0px; font-size: 18px;">
<?php echo $spidysoft['footer-left']; ?>
<div></div>
<div></div>
<div></div>
<div style="left: 0px; bottom: 0px;">
<div class="footerborder" style="height: 1px; background: #b1a4a4; margin: 5px 0;"></div>
<div style="font-size: 18px; padding: 4px;"><?php echo $spidysoft['copyright-text']; ?></div>
</div>
</div> </div>
<div class="col-md-4 col-sm-6">
<center style="
   margin-top: 8px;
   ">
<div class="">
<a rel="nofollow" href="<?php echo $spidysoft['youtube-link']; ?>" target="_blank"><i class="fa fa-youtube" style="font-size:25px;color:white"></i></a>
<a rel="nofollow" href="<?php echo $spidysoft['twitter-link']; ?>" target="_blank"><i class="fa fa-twitter-square" style="font-size:25px;color:white"></i></a>
<a rel="nofollow" href="<?php echo $spidysoft['facebook-link']; ?>" target="_blank"><i class="fa fa-facebook-official" style="font-size:25px;color:white"></i></a>
</div>
<div> </div>           
 <div style="
    padding: ;
    display: inline-block;
    text-align: ;
    color: black;
        font-weight: 700;
        margin-top: 8px;
"><div style="
    color: #b3b3b3;
"> Developed by  <a target="_blank" href="https://nextzenbd.com" style="font-size: 16px;font-weight: 600;color:#ff6a00fc !important"><span style="
    font-size: 13px;
    color: #ff7800;
"> NE<span style="color: #efefef;">X</span>TZEN-IT</span></a></div></div>
</center>
</div>
</div>
</div>
</footer>
</div>