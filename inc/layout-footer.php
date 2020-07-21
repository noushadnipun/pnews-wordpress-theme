<?php global $spidysoft; ?>

<footer>
    <div class="container-fluid footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footer-menu">                    
					<?php                             
						$args = array(
						'theme_location' => 'footer-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => '',					
						);
						wp_nav_menu($args);                     
                     ?>	
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 footer-col-1">
				
                    <?php echo $spidysoft['footer-left']; ?>
                    
                </div>
                
                
                <!--div class="col-sm-4">
                    <div class="editors-board">
                        <?php echo $spidysoft['footer-middle']; ?>
                    </div>
                    <div class="email-subscription-aria">
                        
                    </div>
               </div-->
               
               
            <div class="col-sm-3 footer-col-3" style="
    padding-top: 0px;
">
                    <?php echo $spidysoft['footer-right']; ?>
                    <center>
                    
</br>
                    <div class="footer-social-icons">
                        <a href="<?php echo $spidysoft['facebook-link']; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $spidysoft['twitter-link']; ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $spidysoft['gplus-link']; ?>" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
			<a href="<?php echo $spidysoft['youtube-link']; ?>" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
				     </div>
				     
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
			<center>	     
				     
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 copy-right-text">
                    <?php echo $spidysoft['copyright-text']; ?>
                </div>
                <!--div class="col-sm-5 credit-text">
                    <a style="color: #fff; font-weight: bold" href="http://spidysoft.com">Technology: SpidySoft-IT</a>
                </div-->
            </div>
        </div>
    </div>
</footer>