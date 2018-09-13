<?php
// WOOBIZZ LIGHTBOX PLUGIN (options.php)
//---------------------------------------------------------------------------- 
//START GENERAL OPTIONS
//----------------------------------------------------------------------------
$options = array();		
//---------------------------------------------------------------------------- 
//START LIGHTBOX CONTENT OPTIONS
//----------------------------------------------------------------------------
$options[] = array( "name" => __('1- LightBox Content ','woobizz-lightbox'),
				"type" => "section");
$options[] = array( "name" => __('1 Lightbox Options','woobizz-lightbox'),
				"type" => "title",
				"class" => "medium first",
				"desc" => __("", "woobizz-lightbox"));				
$options[] = array( "name" => "1.1 LIGHTBOX BACKGROUND", 
		"type" => "html",
		 "std" => "");					 
$options[] = array( "name" => __("Background Color","woobizz-lightbox"), 
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_backgroundcolor",
		"class" => "medium first",
		"std" => '#2c2d33',
		"type" => "color");
//Gradient 2 Opacity
$options[] = array( "name" => __("Background Opacity","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_backgroundopacity",
		"class" => "medium last",
		"std" => 0.4,
		"min" => 0,
		"max" => 1,
		"suffix" => "",
		"increment" => 0.01,
		"type" => "number");	
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.2 LIGHTBOX CONTENT", 
		"type" => "html",
		 "std" => "");
//Sidebar Widget Size			
$options[] = array( "name" => __("Content Max-width","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_content_maxwidth",
		"class" => "full",
		"std" => 700,
		"min" => 0,
		"max" => 1900,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
//2.3 Page Box Shadow 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.3 LIGHTBOX SHADOWS",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Apply Shadow?","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_shadowapply",
		"class" => "short first",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Yes",
			1 => "Non",
			));
$options[] = array( "name" => __("Shadow Color","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_shadowcolor",
		"class" => "short",
		"std" => '#2c2d33',
		"type" => "color");
$options[] = array( "name" => __("Shadow Right","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_shadowrightdistance",
		"class" => "short last",
		"std" => 0,
		"min" => -200,
		"max" => 200,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Shadow Bottom","woobizz-lightbox"),
			"desc" => __("", "woobizz-lightbox"),
			"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_shadowbottomdistance",
			"class" => "short first",
			"std" => 0,
			"min" => -200,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Spread","woobizz-lightbox"),
			"desc" => __("", "woobizz-lightbox"),
			"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_shadowspread",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Shadow Size","woobizz-lightbox"),
			"desc" => __("", "woobizz-lightbox"),
			"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_shadowsize",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array("type" => "divider");
//border
$options[] = array( "name" => "1.4 LIGHTBOX BORDER",
		"type" => "html",
		"std" => "");
$options[] = array("type" => "divider");							
$options[] = array( "name" => __("Border Size","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_bordersize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("Border Style","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_borderstyle",
		"class" => "tiny ",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "dotted",
			1 => "dashed",
			2 => "solid",
			3 => "none",
			));			
$options[] = array( "name" => __("Border Color","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_bordercolor",
		"class" => "tiny",
		"std" => '#2c2d33',
		"type" => "color");	
$options[] = array( "name" => __("Border Radius","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_borderradius",
		"class" => "tiny last",
		"std" => 0,
		"min" => 0,
		"max" => 50,
		"suffix" => "px",
		"increment" => 1,
		"type" => "number");
// 1.2 PADDINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.5 LIGHTBOX PADDINGS",
		"type" => "html",
		 "std" => "");
$options[] = array("type" => "divider");
$options[] = array( "name" => __("Padding Top","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingtopsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Right","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingrightsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Bottom","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingbottomsize",
		"class" => "tiny first",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array( "name" => __("Padding Left","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingleftsize",
		"class" => "tiny",
		"std" => 0,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_paddingunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
$options[] = array("type" => "divider");		
// 1.2 MARGINGS 
$options[] = array("type" => "divider");
$options[] = array( "name" => "1.6 LIGHTBOX CONTENT MARGINS",
		"type" => "html",
		 "std" => "Top & Bottom only left and right will be apply on the responsive option");
$options[] = array("type" => "divider");
//margin top
$options[] = array( "name" => __("Margin Top","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_margintopsize",
		"class" => "tiny first",
		"std" => 15,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginunittop",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
//margin right		
$options[] = array( "name" => __("Margin Right","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginrightsize",
		"class" => "tiny",
		"std" => 35,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginunitright",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
//margin bottom	
$options[] = array( "name" => __("Margin Bottom","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginbottomsize",
		"class" => "tiny first",
		"std" => 15,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginunitbottom",
		"class" => "tiny",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
//margin left			
$options[] = array( "name" => __("Margin Left","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginleftsize",
		"class" => "tiny",
		"std" => 35,
		"min" => 0,
		"max" => 100,
		"suffix" => "",
		"increment" => 1,
		"type" => "number");
$options[] = array( "name" => __("","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_woobizz_lightbox_marginunitleft",
		"class" => "tiny last",
		"std" => 0,
		"type" => "select",
		"options" => array(
			0 => "Pixels (px)",
			1 => "Percent (%)",
			2 => "Ems” (em)",
			3 => "Points (pt)",));
//---------------------------------------------------------------------------- 
//END PRODUCT LIGHTBOX OPTIONS
//----------------------------------------------------------------------------
//---------------------------------------------------------------------------- 
//START BACKUP & IMPORT
//----------------------------------------------------------------------------
$options[] = array( "name" => __('lightbox Back-up & Reset','woobizz-lightbox'),
				"type" => "section");
// Backup Field					
$options[] = array( "name" => __("lightbox Back-up & Reset","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"id" => WOOBIZZLIGHTBOX."_textarea",
		"class" => "first",
		"type" => "backup");
// Reset					
$options[] = array( "name" => __("Reset All Options","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"class" => "first",
		"type" => "reset");			
$options[] = array( "name" => __('lightbox Import & Export','woobizz-lightbox'),
				"type" => "section");			
$options[] = array( "name" => __("Export Options","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"class" => "first",
		"type" => "export");			
// Import Field					
$options[] = array( "name" => __("Import Options","woobizz-lightbox"),
		"desc" => __("", "woobizz-lightbox"),
		"class" => "first",
		"placeholder" => "Paste your export code here",
		"type" => "import");
//---------------------------------------------------------------------------- 
//END BACKUP & IMPORT
//----------------------------------------------------------------------------		
?>