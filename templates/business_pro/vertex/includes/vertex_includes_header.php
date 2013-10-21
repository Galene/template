<?php
// Mobile device settings. These are legacy functions that apply to vertex 1.0 only. Mobile is handled by responsive layouts after 1.0.
if (version_compare($s5_vertex_version, '1.0', '<=')) {
	if ($s5_mobile_device_enable_disable == "enabled") {
		require(dirname(__FILE__)."/../../vertex/mobile_device_detect.php");
		mobile_device_detect();
		if(isset($_GET['switch'])){
			$mobile = $_GET['switch']; // should be either 1 for true or empty for false
			setcookie('switch',$_GET['switch']); // set a cookie
			if(isset($_SERVER['HTTP_REFERER'])){ // if the referer is set send the user there
				header('Location:'.$_SERVER['HTTP_REFERER']);
				exit;
			}
		}else if(isset($_COOKIE['switch'])){ // if the cookie is set use it
			$mobile = $_COOKIE['switch'];
		}else{ // else use the function to detect if it's a mobile or not
			$mobile = mobile_device_detect();
		}
	}
}
if ($s5_mobile_device_enable_disable == "disabled") {$mobile = false;}

// Vertex 2.0 and higher calls
$s5_responsive_cookie = ""; // Default value of desktop cookie. Called outside of if statement below so vertex 1.0 is set to null. 
if (version_compare($s5_vertex_version, '1.0', '>')) {

	$s5_livesite_cookie_var = $LiveSiteUrl;
	$s5_livesite_cookie_strips = array(" ", "http", "/", ".", ":", "-");
	$s5_livesite_cookie_var = str_replace($s5_livesite_cookie_strips, "", $s5_livesite_cookie_var);

	if ($s5_responsive == "enabled" && $s5_responsive_mobile_links == "enabled") {
		// Set mobile cookie for responsive layout. 
		if(isset($_GET['s5_responsive_switch_'.$s5_livesite_cookie_var.''])){
			setcookie('s5_responsive_switch_'.$s5_livesite_cookie_var.'',$_GET['s5_responsive_switch_'.$s5_livesite_cookie_var.'']); // Set a cookie, and give it a unique name using the site url so it doesn't conflict with other sites
			if(isset($_SERVER['HTTP_REFERER'])){ // 
				header('Location:'.$_SERVER['HTTP_REFERER']);
				exit;
			}
		}
		else if(isset($_COOKIE['s5_responsive_switch_'.$s5_livesite_cookie_var.''])){ // If the cookie is set then check to see what layout to show
			if ($_COOKIE['s5_responsive_switch_'.$s5_livesite_cookie_var.''] == "0") {
				$s5_responsive_cookie = "desktop"; // User chose to see the desktop version
				$s5_responsive = "disabled"; // Disable the responsive layout
			}
			if ($_COOKIE['s5_responsive_switch_'.$s5_livesite_cookie_var.''] == "1") {
				$s5_responsive_cookie = "mobile"; // User chose to see the mobile version
			}
		}
		else{ 
			$s5_responsive_cookie = "not_set";
		}

	}
	
	// Turn off old vertex 1.0 mobile settings
	$mobile = false; 
	
}

if ($mobile==true) { require(dirname(__FILE__)."/../../vertex/mobile_device_menu.php");}
?>



<?php if($mobile==true || $s5_responsive == "enabled"){ ?>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<?php } ?>

<?php if ($mobile == false && $s5_show_menu == "show") { require(dirname(__FILE__)."/../../vertex/call_menu.php"); } ?>
<?php require(dirname(__FILE__)."/../../vertex/css_and_js.php"); ?>

<!-- Info Slide Script - Called in header so css validates -->	
<?php if ($s5_info_slide == "yes") { ?>
<link href="<?php echo $s5_directory_path ?>/css/s5_info_slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $s5_directory_path ?>/js/s5_info_slide.js"></script>
<?php } ?>


<!-- File compression. Needs to be called last on this file -->	
<!-- The excluded files, listed below the compressed php files, are excluded because their calls vary per device or per browser. Included compression files are only ones that have no conditions and are included on all devices and browsers. Otherwise unwanted css will compile in the compressed files. -->	
<?php if ($s5_compress_js == "yes" || $s5_compress_css == "yes") {
$filepath = 'templates/'.$s5_template_name.'/cache/';
$usejscompression = $s5_compress_js;
$usecsscompression = $s5_compress_css;
$cachetime = $s5_compress_cache;
$excludeFiles= "s5_responsive_ie.js,s5_responsive_mobile_bar.js,s5_responsive.css,s5_responsive_bars.css,s5_responsive_hide_classes.css,s5_responsive_rtl.css,editor_rtl.css,template_rtl.css";
$bottomexcludeFiles= "";
require(dirname(__FILE__)."/../../vertex/compression/top_css_and_js_compression.php");
}
?>
