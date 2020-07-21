//ajax loader by class
$(document).ready(function(){
    $(document).ajaxStart(function(){
        $(".ajaxLoader").fadeIn('fast');
    });
    $(document).ajaxComplete(function(){
        $(".ajaxLoader").fadeOut('fast');
    });
});
/* js for menu*/
$(function(){
    window.prettyPrint && prettyPrint()
    $(document).on('click', '.yamm .dropdown-menu', function(e){e.stopPropagation()})
});
$(document).ready(function(){
    // country load
    $("#menu-bangladesh-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/bangladesh.htm");});
    $("#menu-national-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/national.htm");});
    $("#menu-politics-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/politics.htm");});
    $("#menu-economics-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/economics.htm");});

    // sports subCat news load
    $("#menu-sports-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/sports.htm");});
    $("#menu-cricket-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/sports-cricket.htm");});
    $("#menu-football-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/sports-football.htm");});
    $("#menu-other-sports-news").hover(function(){$(".contentArea").load("https://www.gonews24.com/views/menu/sports-others.htm");});
    // bibidho news load
    $("#bibidho-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/literatureMenu-news.html");});
    $("#media-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/mediaMenu-news.html");});
    $("#literature-cultural-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/literatureMenu-news.html");});
    $("#health-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/healthMenu-news.html");});
    $("#law-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/lawMenu-news.html");});
    $("#womens-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/womenMenu-news.html");});
    $("#liberationWar-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/liberationMenu-news.html");});
    $("#relgion-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/religionMenu-news.html");});
    $("#education-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/educationMenu-news.html");});
    $("#probash-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/probashMenu-news.html");});
    $("#job-news").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/jobMenu-news.html");});
    $("#from-facebook").hover(function(){$(".contentArea").load("http://www.sonalinews.com/archives/menu/facebookMenu-news.html");});
});
//nav manu fixed===============================================
console.log("Default loaded");
$(window).scroll(function(){
    //console.log("Scrool loaded");
    var spx = 250;

    if( $(document).scrollTop() > spx ){
        // console.log("scrollDown");
        // $('nav.navbar').addClass('navbar-fixed-top container menu-container');
        $('.menu-container').addClass('sticky');
    }
    if( $(document).scrollTop() < spx ){
        $('.menu-container').removeClass('sticky');
        // $('nav.navbar').removeClass('navbar-fixed-top container menu-container');
    }
});
