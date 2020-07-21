<?php include 'inc/layout-footer.php'; ?>












  
  
<style>


.breaking_light_blue {
    overflow: hidden;
    background: #ffffff url(images/break_bg.png) repeat-x;
    height: 30px;
    position: ;
    height: 30px;
    line-height: 20px;
}
.breaking_light_blue .break_news_caption {
    background: #e30000;
}
.breaking_blue .break_news_caption, .breaking_green .break_news_caption, .breaking_light_blue .break_news_caption {
    height: 100%;
    color: #FFF;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    float: left;
    padding: 2px 5px 8px 8px;
    width: 150px;
}
.breaking_blue, .breaking_green, .breaking_light_blue {
    line-height: 24px;
}


.biggopti_light_blue .biggoptis_news {
    border: 2px solid #01060b;
}
.biggopti_blue .biggoptis_news, .biggopti_green .biggoptis_news, .biggopti_light_blue .biggoptis_news {
    height: 32px;
    position: relative;
    overflow: hidden;
    
    font-size: 20px;
    display: block;
    background:  url(images/break_bg.png) repeat-x;
    padding: 5px 5px;
}

.breaking_blue, .breaking_green, .breaking_light_blue {
    line-height: 25px;
}
.breaking_light_blue .break_news {
    border: 2px solid #0094ff;
}
.breaking_blue .break_news, .breaking_green .break_news, .breaking_light_blue .break_news {
    height: 31px;
    position: ;
    overflow: hidden;
    display: block;
    background: #ff0000url(images/break_bg.png) repeat-x;
    padding: 0 0px;
}
.breaking_blue, .breaking_green, .breaking_light_blue {
    line-height: 25px;
}


.fixedBar{background: black; bottom: 0px; color:black; font-family: "siyam_rupaliregular","Siyam Rupali","Helvetica Neue",Helvetica,Arial,sans-serif; left:0; padding: 0px 0; position:fixed; font-size:20px; Hight:100%; width:100%; z-index:99999; float:left; vertical-align:middle; margin: 0px 0 0; opacity: 0.95; font-weight: bold;
background-image: url();
}

.boxfloat{text-align:center; width:920px; margin:0 auto}

#tips, #tips li{margin:0; padding:0; list-style:none}

#tips{width:920px; font-size:20px; line-height:120%;}

#tips li{padding: 15px 0; display:none}

#tips li a{color: #fff;}

#tips li a:hover{text-decoration: none;}



</style>
<div class="fixedBar">


<table>
 <tbody>
<tr>


<div id="" class="eql"><div id="widget18473" class="breaking_light_blue">
    
   
 
 <div class="break_news"> <marquee align="top" behavior="scroll" direction="left" onMouseOut="this.start();" onMouseOver="this.stop();" scrollamount="3" scrolldelay="20" >

<!--

<?php
	$args = array( 'numberposts' => '10');
	$recent_posts = wp_get_recent_posts( $args  );
	foreach( $recent_posts as $post ){
		echo '&nbsp; <img src="http://pnews24.com/spidysoft-application/uploads/2018/09/p-icon.png" alt="Icone" style="width:12px;height:12px;"/>
<a  style="color: #111f1c;" href="' . get_permalink($post["ID"]) . '" title="দেখতে ক্লিক করুন: '.$post["post_title"].'" >'.   $post["post_title"].  '</a>';
	}
?>
-->
 <?php query_posts('showposts=10'); if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
										    <?php 
										    $tickerVisibility = get_post_meta(get_the_ID() , $prefix.'ticker-apply', true);
										    if($tickerVisibility == 'on'): ?>
										    
										    
										    
										 <img src="http://pnews24.com/spidysoft-application/uploads/2018/09/p-icon.png" alt="Icone" style="width:12px;height:12px; "/>   <a style="color: #111f1c; font-size: 16px;" href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), $prefix.'article-ticker', true); ?></a>


   <?php else : ?>	
											
				                            <?php endif; ?>												
											<?php endwhile;?>	
						                    <?php endif; wp_reset_query(); ?>



 </marquee> </div></div></div>

</div>
</div>




  </td>
 </tr>
</tbody></table>

</div>











<?php wp_footer(); ?>
</body>
</html>