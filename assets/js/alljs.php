<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/head1.1.js" kdefer="defer" onload="if(jQuery.isFunction(jQuery.holdReady)){jQuery.holdReady(true);};advagg_fallback(&#039;&#039;);"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/head1.2.js" kdefer="defer" onload="
function advagg_mod_2() {
// Count how many times this function is called.
advagg_mod_2.count = ++advagg_mod_2.count || 1;
try {
if (advagg_mod_2.count <= 40) {
init_drupal_core_settings();
// Set this to 100 so that this function only runs once.
advagg_mod_2.count = 100;
}
}
catch(e) {
if (advagg_mod_2.count >= 40) {
// Throw the exception if this still fails after running 40 times.
throw e;
}
else {
// Try again in 1 ms.
window.setTimeout(advagg_mod_2, 1);
}
}
}
function advagg_mod_2_check() {
if (window.init_drupal_core_settings && window.jQuery && window.Drupal) {
advagg_mod_2();
}
else {
window.setTimeout(advagg_mod_2_check, 1);
}
}
advagg_mod_2_check();"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/head1.3.js" defer="defer"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/head1.4.js" defer="defer"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/head1.5.js" defer="defer"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<!--<script src="asset/lib/bootstrap/js/transition.js"></script>-->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/camera.min.js'></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/spidysoft.js"></script>
<script>
jQuery(function(){
  jQuery('#camera_wrap_1').camera({
	thumbnails: false
  });
});
</script>
<script>
//get getSubCatList Bangla
function getDistrictList(division_id){
  // var division_id= $(division_id).find(':selected').data('id');
  $.post("getDistrictList.php", {division_id:division_id.value}, function(rtm){
	var option = '<option value="1">--জেলা--</option>';
	if (rtm.length>0) {
	  for (var i = 0; i < rtm.length; i++) {
		option +='<option value="'+ rtm[i]['id'] +'">'+rtm[i]['name']+'</option>';
	  };
	  $("#cboDivision").html('');
	  $("#cboDistrict").html(option);
	}else{
	  // $("#subCategory").html('<option value="">No Category Found</option>');
	  $("#cboDistrict").html('<option value="1">--জেলা--</option>');
	}
  }, 'json');
}
</script>
<script>
$('#home').addClass('active')
</script>