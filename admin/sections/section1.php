<?php
//----------------------------------------------------------------------------
//WOOBIZZ LIGHTBOX
//----------------------------------------------------------------------------
 
 //Enqueue CSS
function woobizz_enqueue_featherlight_min_css() {
	
	wp_register_style('featherlight-min', plugins_url('/woobizz-lightbox/admin/css/featherlight.min.css'));
	wp_enqueue_style('featherlight-min');
	
}
add_action( 'wp_enqueue_scripts', 'woobizz_enqueue_featherlight_min_css' );  
//Enqueue JS
function woobizz_enqueue_featherlight_min_js() {
	
	wp_register_script('featherlight-min-js', plugins_url('/woobizz-lightbox/admin/js/featherlight.min.js'), array('jquery'), '1.7.7', true );
	wp_enqueue_script('featherlight-min-js');
	
}
add_action( 'wp_enqueue_scripts', 'woobizz_enqueue_featherlight_min_js' );   

//---------------------------------------------------------------------------- 
//START HEX TO RGB FUNCTION
//----------------------------------------------------------------------------
function woobizz_lightbox_hextorgb($hex){
	$hex = str_replace("#", "", $hex);
if(strlen($hex) == 3){
	$r = hexdec(substr($hex,0,1).substr($hex,0,1));
	$g = hexdec(substr($hex,1,1).substr($hex,1,1));
	$b = hexdec(substr($hex,2,1).substr($hex,2,1));
}else{
	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);
return implode(",", $rgb); 
}
//---------------------------------------------------------------------------- 
//END HEX TO RGB FUNCTION
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START ALL CSS OPTIONS FUNCTION
//----------------------------------------------------------------------------
function woobizz_lightbox_allcssoptions(){
//----------------------------------------------------------------------------	
//START LIGHTBOX CONTENT
//----------------------------------------------------------------------------
//Max-Width
$woobizz_lightbox_content_maxwidth= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_content_maxwidth');
//Shadows
$woobizz_lightbox_shadowcolor= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_shadowcolor');
$woobizz_lightbox_shadowrightdistance= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_shadowrightdistance');
$woobizz_lightbox_shadowbottomdistance= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_shadowbottomdistance');
$woobizz_lightbox_shadowspread= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_shadowspread');
$woobizz_lightbox_shadowsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_shadowsize');
$woobizz_lightbox_shadowapply= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_shadowapply');
if ($woobizz_lightbox_shadowapply==0){
		$woobizz_lightbox_shadowfull=$woobizz_lightbox_shadowrightdistance."px "
											.$woobizz_lightbox_shadowbottomdistance."px "
											.$woobizz_lightbox_shadowspread."px "
											.$woobizz_lightbox_shadowsize."px "
											.$woobizz_lightbox_shadowcolor;
	} elseif($woobizz_lightbox_shadowapply==1) {
		$woobizz_lightbox_shadowfull="none";
	} else {
		$woobizz_lightbox_shadowfull="none";
}
//Borders
$woobizz_lightbox_bordersize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_bordersize');
$woobizz_lightbox_bordercolor= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_bordercolor');
$woobizz_lightbox_borderstyle= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_borderstyle');
if ($woobizz_lightbox_borderstyle==0){
		$woobizz_lightbox_borderstyle="dotted";
	} elseif($woobizz_lightbox_borderstyle==1) {
		$woobizz_lightbox_borderstyle="dashed";
	} elseif($woobizz_lightbox_borderstyle==2) {
		$woobizz_lightbox_borderstyle="solid";
	} elseif($woobizz_lightbox_borderstyle==3) {
		$woobizz_lightbox_borderstyle="none";
	} else {$woobizz_lightbox_borderstyle="none";
}
$woobizz_lightbox_borderradius= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_borderradius'); 
$woobizz_lightbox_borderfull=$woobizz_lightbox_bordersize."px "
								.$woobizz_lightbox_borderstyle." "
								.$woobizz_lightbox_bordercolor." ";
//Margins
$woobizz_lightbox_margintopsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_margintopsize');
$woobizz_lightbox_marginunittop= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginunittop');
if ($woobizz_lightbox_marginunittop==0){
	$woobizz_lightbox_marginunittop="px";
} elseif($woobizz_lightbox_marginunittop==1) {
	$woobizz_lightbox_marginunittop="%";
} elseif($woobizz_lightbox_marginunittop==2) {
	$woobizz_lightbox_marginunittop="em";
} elseif($woobizz_lightbox_marginunittop==3) {
	$woobizz_lightbox_marginunittop="pt";
} else {
	$woobizz_lightbox_marginunittop="initial";
} 
$woobizz_lightbox_marginrightsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginrightsize');
$woobizz_lightbox_marginunitright= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginunitright');
if ($woobizz_lightbox_marginunitright==0){
	$woobizz_lightbox_marginunitright="px";
} elseif($woobizz_lightbox_marginunitright==1) {
	$woobizz_lightbox_marginunitright="%";
} elseif($woobizz_lightbox_marginunitright==2) {
	$woobizz_lightbox_marginunitright="em";
} elseif($woobizz_lightbox_marginunitright==3) {
	$woobizz_lightbox_marginunitright="pt";
} else {
	$woobizz_lightbox_marginunitright="initial";
}	
$woobizz_lightbox_marginbottomsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginbottomsize');
$woobizz_lightbox_marginunitbottom= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginunitbottom');
if ($woobizz_lightbox_marginunitbottom==0){
	$woobizz_lightbox_marginunitbottom="px";
} elseif($woobizz_lightbox_marginunitbottom==1) {
	$woobizz_lightbox_marginunitbottom="%";
} elseif($woobizz_lightbox_marginunitbottom==2) {
	$woobizz_lightbox_marginunitbottom="em";
} elseif($woobizz_lightbox_marginunitbottom==3) {
	$woobizz_lightbox_marginunitbottom="pt";
} else {
	$woobizz_lightbox_marginunitbottom="initial";
}	
$woobizz_lightbox_marginleftsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginleftsize');
$woobizz_lightbox_marginunitleft= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_marginunitleft');
if ($woobizz_lightbox_marginunitleft==0){
	$woobizz_lightbox_marginunitleft="px";
} elseif($woobizz_lightbox_marginunitleft==1) {
	$woobizz_lightbox_marginunitleft="%";
} elseif($woobizz_lightbox_marginunitleft==2) {
	$woobizz_lightbox_marginunitleft="em";
} elseif($woobizz_lightbox_marginunitleft==3) {
	$woobizz_lightbox_marginunitleft="pt";
} else {
	$woobizz_lightbox_marginunitleft="initial";
}
$woobizz_lightbox_marginfull=$woobizz_lightbox_margintopsize.$woobizz_lightbox_marginunittop." "
							   .$woobizz_lightbox_marginrightsize.$woobizz_lightbox_marginunitright." "
							   .$woobizz_lightbox_marginbottomsize.$woobizz_lightbox_marginunitbottom." "
							   .$woobizz_lightbox_marginleftsize.$woobizz_lightbox_marginunitleft." ";	
							   
//Paddings
$woobizz_lightbox_paddingtopsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingtopsize');
$woobizz_lightbox_paddingunittop= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingunittop');
if ($woobizz_lightbox_paddingunittop==0){
	$woobizz_lightbox_paddingunittop="px";
} elseif($woobizz_lightbox_paddingunittop==1) {
	$woobizz_lightbox_paddingunittop="%";
} elseif($woobizz_lightbox_paddingunittop==2) {
	$woobizz_lightbox_paddingunittop="em";
} elseif($woobizz_lightbox_paddingunittop==3) {
	$woobizz_lightbox_paddingunittop="pt";
} else {
	$woobizz_lightbox_paddingunittop="initial";
} 
$woobizz_lightbox_paddingrightsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingrightsize');
$woobizz_lightbox_paddingunitright= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingunitright');
if ($woobizz_lightbox_paddingunitright==0){
	$woobizz_lightbox_paddingunitright="px";
} elseif($woobizz_lightbox_paddingunitright==1) {
	$woobizz_lightbox_paddingunitright="%";
} elseif($woobizz_lightbox_paddingunitright==2) {
	$woobizz_lightbox_paddingunitright="em";
} elseif($woobizz_lightbox_paddingunitright==3) {
	$woobizz_lightbox_paddingunitright="pt";
} else {
	$woobizz_lightbox_paddingunitright="initial";
}	
$woobizz_lightbox_paddingbottomsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingbottomsize');
$woobizz_lightbox_paddingunitbottom= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingunitbottom');
if ($woobizz_lightbox_paddingunitbottom==0){
	$woobizz_lightbox_paddingunitbottom="px";
} elseif($woobizz_lightbox_paddingunitbottom==1) {
	$woobizz_lightbox_paddingunitbottom="%";
} elseif($woobizz_lightbox_paddingunitbottom==2) {
	$woobizz_lightbox_paddingunitbottom="em";
} elseif($woobizz_lightbox_paddingunitbottom==3) {
	$woobizz_lightbox_paddingunitbottom="pt";
} else {
	$woobizz_lightbox_paddingunitbottom="initial";
}	
$woobizz_lightbox_paddingleftsize= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingleftsize');
$woobizz_lightbox_paddingunitleft= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_paddingunitleft');
if ($woobizz_lightbox_paddingunitleft==0){
	$woobizz_lightbox_paddingunitleft="px";
} elseif($woobizz_lightbox_paddingunitleft==1) {
	$woobizz_lightbox_paddingunitleft="%";
} elseif($woobizz_lightbox_paddingunitleft==2) {
	$woobizz_lightbox_paddingunitleft="em";
} elseif($woobizz_lightbox_paddingunitleft==3) {
	$woobizz_lightbox_paddingunitleft="pt";
} else {
	$woobizz_lightbox_paddingunitleft="initial";
}
$woobizz_lightbox_paddingfull=$woobizz_lightbox_paddingtopsize.$woobizz_lightbox_paddingunittop." "
							   .$woobizz_lightbox_paddingrightsize.$woobizz_lightbox_paddingunitright." "
							   .$woobizz_lightbox_paddingbottomsize.$woobizz_lightbox_paddingunitbottom." "
							   .$woobizz_lightbox_paddingleftsize.$woobizz_lightbox_paddingunitleft." ";							   	

//----------------------------------------------------------------------------	
//START LIGHTBOX BACKGROUND
//----------------------------------------------------------------------------	
//Background Color
$woobizz_lightbox_backgroundcolor= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_backgroundcolor');
//echo $woobizz_lightbox_backgroundcolor;
$woobizz_lightbox_backgroundopacity= get_option(WOOBIZZLIGHTBOX.'_woobizz_lightbox_backgroundopacity');
$trasnform_woobizz_lightbox_background=woobizz_lightbox_hextorgb($woobizz_lightbox_backgroundcolor);
$woobizz_lightbox_fullbackground=$trasnform_woobizz_lightbox_background.",".$woobizz_lightbox_backgroundopacity;
//----------------------------------------------------------------------------    
//START SHOWING CSS OPTIONS
//----------------------------------------------------------------------------
echo"
<style>
	.lightbox {
		display: none;
		max-width:".$woobizz_lightbox_content_maxwidth."px!important;
	}
	.featherlight .featherlight-close-icon {
		border-radius: 50%;
		margin: 15px;
		background:white;
	}
	.featherlight:last-of-type {
		background:rgba(".$woobizz_lightbox_fullbackground.")!important;
	}
	.featherlight .featherlight-content {	
		box-shadow:".$woobizz_lightbox_shadowfull."; 
		border:".$woobizz_lightbox_borderfull."!important;
	}
	.featherlight .featherlight-content {
		padding:".$woobizz_lightbox_paddingfull."!important;
		border-bottom: 0px solid transparent;
	}
	.wb-lightbox-content{
		margin:".$woobizz_lightbox_marginfull."!important; 
	}
	
</style>";
}
add_action('wp_footer', 'woobizz_lightbox_allcssoptions', 100);
//---------------------------------------------------------------------------- 
//END ALL CSS FUNCTIONS
//----------------------------------------------------------------------------