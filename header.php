<!doctype html>
<html lang="en-US">
<head>
<meta name="google-site-verification" content="826DUlGR2MyeD1ZX65MMkHsrVveBvS3YiUs4CZN0CwM" />

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '150939288828087',
      xfbml      : true,
      version    : 'v3.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<style>

#latest-content ul, #most-popular-content ul {
    list-style: none;
    padding-left: 0;
    overflow-y: hidden !important;
    height: 290px !important;
}

#latest-content li .heading-container, #most-popular-content li .heading-container {
    float: left;
    width: 60% !important;
    margin-left: 8px !important;
}



.bd-news-heading-container {
    margin-bottom: 4px;
    border-bottom: 0px solid #4caf50;
}

.top-content-row {
    margin-top: 40px !important;
    padding-bottom: 24px;
}

.top-bar {
    background-color: #940000;
    padding: 1px;
}

.main-heading {
    float: left;
    padding: 0px 11px;
    background-color: #fcfdfc;
    font-size: 16px;
    color: #fe0001;
    width: 100%;

    font-weight: 700;
    
}


.bd-news-heading-container {
    margin-bottom: 3px;
    border-bottom: 0px solid #4caf50;
}

.main-heading {
    float: left;
    padding: 7px 20px;
    background-color: #d7d7d700;
    font-size: 16px;
    color: #fff;
}



.sports-news-container .main-heading {
    float: left;
    padding: 0px 16px;
    background-color: #f9f7f700;
    font-size: 24px;
    color: #fff;
    border-left: 4px solid #ffffff;
    font-weight: 700;
    
}

.international-heading a {
    background-color: #f44336;
    float: left;
    padding: 7px 20px;
    font-size: 16px;
    color: #fff;
    text-align: right;
    width: 100%;
 
    font-weight: 700;


}



.cat-style-3 .cat-heading-exclusive a {
    background-color: #607d8b;
    float: left;
    padding: 3px 17px;
    font-size: 22px;
    color: #fff;
    width: 100%;
    font-weight: 700;
   
}


.cat-style-3 .cat-heading-science-technology {
    border-bottom: 0px solid #ff7500;
    margin-bottom: 12px;
}


.cat-style-3 .cat-heading-science-technology a {
    background-color: #ff7500;
    float: left;
    padding: 3px 17px;
    font-size: 22px;
    color: #fff;
    width: 100%;
    font-weight: 700;
   
}


.cat-style-3 .cat-heading-jobs {
    border-bottom: 0px solid #f44336;
    margin-bottom: 12px;
}


.cat-style-3 .cat-heading-jobs a {
    background-color: #f44336;
    float: left;
    padding: 3px 17px;
    font-size: 22px;
    color: #fff;
    width: 100%;
    font-weight: 700;

}


.opinion-heading {
    border-bottom: 0px solid #f9c100;
    margin-bottom: 12px;
}

.opinion-heading a {
    background-color: #f44336;
    float: left;
    padding: 3px 17px;
    font-size: 22px;
    color: #fff;
    width: 100%;
    font-weight: 700;
 
 
}



.lifestyle-news-heading-container {
    margin-bottom: 12px;
    border-bottom: 0px solid #4db2ec;
}
.lifestyle-news-heading-container .main-heading {
    background-color: #190402;
    width: 100%;

    font-weight: 700;

    font-size: 22px;
    padding: 3px 17px;
}

body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #e7e7e7a8;
}

</style>




  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php
			global $query_string;

			if ( is_home() )
				bloginfo( 'name' );

			if ( get_search_query() )
				echo 'Results for: "' . get_search_query() .'"';

			if ( is_month() )
				the_time('F Y');

			if ( is_category() )
				single_cat_title();

			if ( is_single() )
				the_title();

			if ( is_page() )
				the_title();

			if ( is_tag() )
				single_tag_title();

			if ( is_404() )
				echo 'Page Not Found!';
			if ( is_author() )
				bloginfo( 'name' );
		?>
  
  
  </title>
  <?php include 'assets/css/allcss.php'; ?>
  <?php global $spidysoft; ?>
  <link rel="shortcut icon" href="<?php echo $spidysoft['favicon-logo']['url']; ?>" />
  <?php wp_head(); ?>
</head>

<body>

<?php include 'inc/layout-header.php'; ?>