<?php
require('vertex/cms_core_functions.php');
s5_restricted_access_call();
/*
-----------------------------------------
Business Pro - Shape 5 Club Design
-----------------------------------------
Site:      shape5.com
Email:     contact@shape5.com
@license:  Copyrighted Commercial Software
@copyright (C) 2013 Shape 5 LLC

*/

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php s5_language_call(); ?>>
<head>
<?php s5_head_call(); ?>
<?php
require("vertex/parameters.php");
require("vertex/general_functions.php");
require("vertex/module_calcs.php");
require("vertex/includes/vertex_includes_header.php");
?>

<?php if ($browser == "ie7" || $browser == "ie8") { ?>
<link href="<?php echo $s5_directory_path ?>/css/IECSS3.css" rel="stylesheet" type="text/css"  />
<?php } ?>

<?php if(($s5_fonts_highlight != "Arial") && ($s5_fonts_highlight != "Helvetica") && ($s5_fonts_highlight != "Sans-Serif")) { ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","%20",$s5_fonts_highlight); if ($s5_fonts_highlight_style != "") { echo ":".$s5_fonts_highlight_style; } ?>" />
<?php } ?>

<style type="text/css"> 
body, .inputbox {font-family: '<?php echo $s5_fonts;?>',Helvetica,Arial,Sans-Serif ;} 

.s5_mod_h3, #s5_nav li a, .s5_sub_a_span, h1, h2, h3, h4, h5, .inputbox, .registration input, .login input, .contact-form input, #jform_contact_message, #mod-search-searchword, input, textarea, #s5_footer_area1, .button, .btn-primary, .s5_ts_not_active, .s5_ts_active, .contact_section span, .tab_title, .large_highlight_font, .highlight_button, .highlight_font, p.readmore a, .s5_is_display h3, .fd_title, .fd_box_title, .module_round_box-breadcrumbs, #s5_drop_down_text_inner {
font-family: <?php echo $s5_fonts_highlight ?>;
font-weight: 600 !important;
}

label {
font-family: <?php echo $s5_fonts_highlight ?>;
font-weight: 400 !important;
}

#s5_menu_wrap, .s5_ts_active, .highlight_button, .pagenav a {
background:#<?php echo $s5_highlight1; ?> !important;
}

.btn-primary:hover, .button:hover, .highlight_button:hover, p.readmore a:hover, .readon:hover, .pagenav a:hover {
background:#<?php echo change_Color($s5_highlight2,'-20'); ?> !important;
}

.readmore_button {
background:#<?php echo $s5_highlight1; ?> url(<?php echo $s5_directory_path ?>/images/s5_readmore_button.png) no-repeat center center !important;
}

.readmore_button:hover {
background:#<?php echo change_Color($s5_highlight2,'-20'); ?> url(<?php echo $s5_directory_path ?>/images/s5_readmore_button.png) no-repeat center center !important;
}

.readmore_button_large {
background:#<?php echo $s5_highlight1; ?> url(<?php echo $s5_directory_path ?>/images/s5_readmore_button_large.png) no-repeat center center !important;
}

.readmore_button_large:hover {
background:#<?php echo change_Color($s5_highlight2,'-20'); ?> url(<?php echo $s5_directory_path ?>/images/s5_readmore_button_large.png) no-repeat center center !important;
}

#cboxLoadedContent {
border-top:solid 3px #<?php echo $s5_highlight1; ?>;
border-bottom:solid 3px #<?php echo $s5_highlight1; ?>;
}

#s5_button_wrap0 {
border-bottom:solid 3px #<?php echo $s5_highlight1; ?> !important;
}

#s5_component_wrap {
background:#<?php echo $s5_component_color; ?>;
}

a {
color:#<?php echo $s5_highlight1; ?>;
}

ul.menu li.current a, #s5_accordion_menu #current a, #s5_accordion_menu a:hover, .highlight1_text, .s5_is_display  a  {
color:#<?php echo $s5_highlight1; ?> !important;
}

.highlight2_text {
color:#<?php echo change_Color($s5_highlight2,'-20'); ?>;
}

.fd_box .highlight1_text {
color:#<?php echo change_Color($s5_highlight2,'-20'); ?> !important;
}

.s5_fd_active .highlight1_text {
color:#<?php echo $s5_highlight1; ?> !important;
}

#s5_accordion_menu #current ul.s5_am_innermenu a {
color:#3C3C3C !important;
}

.module_round_box-grey2 #s5_accordion_menu #current ul.s5_am_innermenu a {
color:#FFFFFF !important;
}

<?php if ($s5_h3_highlight == "yes") { ?>
.module_round_box .s5_h3_first, .module_round_box-white .s5_h3_first, .module_round_box-dark .s5_h3_first, .module_round_box-grey2 .s5_h3_first, .module_round_box-grey2_small_border .s5_h3_first {
color:#<?php echo $s5_highlight1; ?> !important;
}
<?php } ?>

#cboxLoadedContent .s5_mod_h3 {
color:#<?php echo $s5_highlight1; ?> !important;
}

.module_round_box-highlight1 {
background:#<?php echo $s5_highlight1; ?>;
border:solid 1px #<?php echo $s5_highlight1; ?>;
}

.module_round_box-highlight1 .s5_mod_h3 {
background: #<?php echo change_Color($s5_highlight1,'+20'); ?>; /* Old browsers */
background: -moz-linear-gradient(top, #<?php echo $s5_highlight1; ?> 0%, #<?php echo change_Color($s5_highlight1,'+20'); ?> 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php echo $s5_highlight1; ?>), color-stop(100%,#<?php echo change_Color($s5_highlight1,'+20'); ?>)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #<?php echo $s5_highlight1; ?> 0%,#<?php echo change_Color($s5_highlight1,'+20'); ?> 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #<?php echo $s5_highlight1; ?> 0%,#<?php echo change_Color($s5_highlight1,'+20'); ?> 100%); /* Opera11.10+ */
background: -ms-linear-gradient(top, #<?php echo $s5_highlight1; ?> 0%,#<?php echo change_Color($s5_highlight1,'+20'); ?> 100%); /* IE10+ */
background: linear-gradient(top, #<?php echo $s5_highlight1; ?> 0%,#<?php echo change_Color($s5_highlight1,'+20'); ?> 100%); /* W3C */
-pie-background: linear-gradient(top, #<?php echo $s5_highlight1; ?> 0%,#<?php echo change_Color($s5_highlight1,'+20'); ?> 100%); /* IE */
border-bottom:none;
}

.module_round_box-highlight2 {
background:#<?php echo $s5_highlight2; ?>;
border:solid 1px #<?php echo $s5_highlight2; ?>;
}

.module_round_box-highlight2 .s5_mod_h3 {
background: #<?php echo change_Color($s5_highlight2,'+20'); ?>; /* Old browsers */
background: -moz-linear-gradient(top, #<?php echo $s5_highlight2; ?> 0%, #<?php echo change_Color($s5_highlight2,'+20'); ?> 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php echo $s5_highlight2; ?>), color-stop(100%,#<?php echo change_Color($s5_highlight2,'+20'); ?>)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #<?php echo $s5_highlight2; ?> 0%,#<?php echo change_Color($s5_highlight2,'+20'); ?> 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #<?php echo $s5_highlight2; ?> 0%,#<?php echo change_Color($s5_highlight2,'+20'); ?> 100%); /* Opera11.10+ */
background: -ms-linear-gradient(top, #<?php echo $s5_highlight2; ?> 0%,#<?php echo change_Color($s5_highlight2,'+20'); ?> 100%); /* IE10+ */
background: linear-gradient(top, #<?php echo $s5_highlight2; ?> 0%,#<?php echo change_Color($s5_highlight2,'+20'); ?> 100%); /* W3C */
-pie-background: linear-gradient(top, #<?php echo $s5_highlight2; ?> 0%,#<?php echo change_Color($s5_highlight2,'+20'); ?> 100%); /* IE */
border-bottom:solid 1px #<?php echo change_Color($s5_highlight2,'-16'); ?>;
}

<?php if ($s5_scrolltotop  == "yes") { ?>
#s5_footer_area1 {
padding-right:64px;
}
<?php } ?>

<?php if ($s5_uppercase == "yes") { ?>
#s5_nav li a, .s5_sub_a_span, #s5_search_wrap input, .s5_mod_h3, .button, .btn-primary, .s5_ts_not_active, .s5_ts_active, .s5_is_display h3, #s5_drop_down_text_inner {
text-transform:uppercase;
}
<?php } ?>

<?php if ($s5_small_menu == "yes") { ?>
.S5_parent_subtext {
display:none;
}
<?php } ?>

<?php if ($s5_small_menu == "no") { ?>
#s5_search_wrap input {
margin-top:18px;
}
<?php } ?>

#s5_top_row1_area1 .module_round_box_outer, #s5_bottom_row3_area1 .module_round_box_outer {
margin-right:<?php echo $s5_row_side_gap; ?>px;
margin-bottom:<?php echo $s5_row_bottom_gap; ?>px;
}

#s5_top_row1_area_inner, #s5_bottom_row3_area_inner {
padding-right:<?php echo 30 - $s5_row_side_gap; ?>px;
padding-bottom:<?php echo 30 - $s5_row_bottom_gap; ?>px;
}

#s5_center_area .module_round_box_outer, #s5_component_wrap {
margin-right:<?php echo $s5_side_gap; ?>px;
margin-bottom:<?php echo $s5_bottom_gap; ?>px;
}

#s5_center_area {
padding-right:<?php echo 30 - $s5_side_gap; ?>px;
padding-bottom:<?php echo 30 - $s5_bottom_gap; ?>px;
}

<?php if ($browser == "ie7" || $browser == "ie8" || $browser == "ie9") { ?>
.s5_lr_tab_inner {writing-mode: bt-rl;filter: flipV flipH;}
<?php } ?>

<?php if($s5_thirdparty == "enabled") { ?>
/* k2 stuff */
div.itemHeader h2.itemTitle, div.catItemHeader h3.catItemTitle, h3.userItemTitle a, #comments-form p, #comments-report-form p, #comments-form span, #comments-form .counter, #comments .comment-author, #comments .author-homepage,
#comments-form p, #comments-form #comments-form-buttons, #comments-form #comments-form-error, #comments-form #comments-form-captcha-holder {font-family: '<?php echo $s5_fonts;?>',Helvetica,Arial,Sans-Serif ;} 
<?php } ?>	
.s5_wrap{width:<?php echo $s5_body_width; echo $s5_fixed_fluid ?>;}	
</style>
</head>

<body id="s5_body">

<div id="s5_scrolltotop"></div>

<!-- Top Vertex Calls -->
<?php require("vertex/includes/vertex_includes_top.php"); ?>

<!-- Body Padding Div Used For Responsive Spacing -->		
<div id="s5_body_padding">



<div id="s5_body_wrap" class="s5_wrap">
<div id="s5_body_wrap_inner">

	<!-- Header -->			
		<div id="s5_header_area1">		
		<div id="s5_header_area2">	
		<div id="s5_header_area_inner">		
			<div id="s5_header_wrap">
			
				<?php if($s5_pos_logo == "published") { ?>
					<div id="s5_logo_module">
						<?php s5_module_call('logo','notitle'); ?>
					</div>	
				<?php } else { ?>
					<img alt="logo" src="<?php echo $s5_directory_path ?>/images/s5_logo.png" id="s5_logo" onclick="window.document.location.href='<?php echo $LiveSiteUrl ?>'" />
				                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?php $fml='PGRpdiBpZD0iczUtaHAiPjxhIGhyZWY9Imh0dHA6Ly9qb29tbGFydS5jb20iIHRhcmdldD0iX2JsYW5rIiB0aXRsZT0iam9vbWxhIDMg0YjQsNCx0LvQvtC90YsiPmpvb21sYSAzINGI0LDQsdC70L7QvdGLPC9hPiANCjxhIGhyZWY9Imh0dHA6Ly9hbGxtZWRpY2luLnJ1IiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItCd0LDRgNC+0LTQvdCw0Y8g0LzQtdC00LjRhtC40L3QsCI+0J3QsNGA0L7QtNC90LDRjyDQvNC10LTQuNGG0LjQvdCwPC9hPjwvZGl2Pg=='; echo base64_decode($fml);?><?php } ?>
				
				<div id="s5_logo_responsive_clear"></div>
				
				<?php if($s5_pos_banner == "published") { ?>
					<div id="s5_banner">
						<?php s5_module_call('banner','notitle'); ?>
					</div>	
				<?php } ?>
				
				<div style="clear:both; height:0px"></div>
				
				
				
				<?php if ($s5_show_menu == "show") { ?>
					<div id="s5_menu_wrap">
						<?php include("vertex/s5flex_menu/default.php"); ?>
						<?php if ($s5_pos_search == "published") { ?>
							<div id="s5_search_wrap">
								<?php s5_module_call('search','notitle'); ?>
							</div>
						<?php } ?>
						<div style="clear:both; height:0px"></div>
					</div>
					<div style="clear:both; height:0px"></div>
				<?php } ?>
				
				<?php if ($s5_rss  != "" || $s5_twitter  != "" || $s5_facebook  != "" || $s5_google  != "") { ?>
					<div id="s5_social_bar_wrap">
						<div id="s5_social_bar">
							<?php if ($s5_facebook  != "") { ?>
								<div id="s5_facebook" onclick="window.open('<?php echo $s5_facebook; ?>')"></div>
							<?php } ?>	
							<?php if ($s5_twitter  != "") { ?>
								<div id="s5_twitter" onclick="window.open('<?php echo $s5_twitter; ?>')"></div>
							<?php } ?>
							<?php if ($s5_google  != "") { ?>
								<div id="s5_google" onclick="window.open('<?php echo $s5_google; ?>')"></div>
							<?php } ?>	
							<?php if ($s5_rss  != "") { ?>
								<div id="s5_rss" onclick="window.open('<?php echo $s5_rss; ?>')"></div>
							<?php } ?>
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				<?php } ?>
				
				<?php if ($s5_pos_custom_1 == "published" || $s5_login  != "" || $s5_register  != "" || $s5_font_resizer == "yes") { ?>
					<div id="s5_below_menu">
						<?php if ($s5_pos_custom_1 == "published") { ?>
							<div id="s5_pos_custom_1">
								<?php s5_module_call('custom_1','notitle'); ?>
							</div>
						<?php } ?>
						
						<?php if (($s5_login  != "") || ($s5_register  != "")) { ?>	
							<div id="s5_loginreg">	
									<div id="s5_logregtm">
										
											<?php if ($s5_register  != "") { ?>

												<?php if ($s5_user_id) { } else {?>
													<div id="s5_register" class="s5box_register">
														<ul class="s5boxmenu">
															<li><?php echo $s5_register;?></li>
														</ul>
													</div>
												<?php } ?>
												
											<?php } ?>
											
											<?php if ($s5_login  != "") { ?>
										
												<div id="s5_login" class="s5box_login">
													<ul class="s5boxmenu">
														<li>
															<?php if ($s5_user_id) { echo $s5_loginout; } else { echo $s5_login; } ?>
														</li>
													</ul>
												</div>
											
											<?php } ?>
											
									</div>
							</div>
						<?php } ?>
						
						<?php if($s5_font_resizer == "yes") { ?>
							<div id="fontControls"></div>
						<?php } ?>
						<div style="clear:both; height:0px"></div>
					</div>
				<?php } ?>
				
				<div style="clear:both; height:0px"></div>			
			</div>
		</div>
		</div>
		</div>
	<!-- End Header -->	
	
	
		
	
	<!-- Top Row1 -->	
		<?php if ($s5_pos_top_row1_1 == "published" || $s5_pos_top_row1_2 == "published" || $s5_pos_top_row1_3 == "published" || $s5_pos_top_row1_4 == "published" || $s5_pos_top_row1_5 == "published" || $s5_pos_top_row1_6 == "published") { ?>
			<div id="s5_top_row1_area1">
			<div id="s5_top_row1_area2">
			<div id="s5_top_row1_area_inner">

				<div id="s5_top_row1_wrap">
					<div id="s5_top_row1">
					<div id="s5_top_row1_inner">
					
						<?php if ($s5_pos_custom_2 == "published") { ?>
							<div id="s5_pos_custom_2">
								<?php s5_module_call('custom_2','round_box'); ?>
							</div>
						<?php } ?>
					
						<?php if ($s5_pos_top_row1_1 == "published") { ?>
							<div id="s5_pos_top_row1_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_1_width ?>%">
								<?php s5_module_call('top_row1_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_2 == "published") { ?>
							<div id="s5_pos_top_row1_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_2_width ?>%">
								<?php s5_module_call('top_row1_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_3 == "published") { ?>
							<div id="s5_pos_top_row1_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_3_width ?>%">
								<?php s5_module_call('top_row1_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_4 == "published") { ?>
							<div id="s5_pos_top_row1_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_4_width ?>%">
								<?php s5_module_call('top_row1_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_5 == "published") { ?>
							<div id="s5_pos_top_row1_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_5_width ?>%">
								<?php s5_module_call('top_row1_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_6 == "published") { ?>
							<div id="s5_pos_top_row1_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_6_width ?>%">
								<?php s5_module_call('top_row1_6','round_box'); ?>
							</div>
						<?php } ?>
						
						<div style="clear:both; height:0px"></div>

					</div>
					</div>
				</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Top Row1 -->	
		
	<div id="s5_center_area">
		
	<!-- Top Row2 -->	
		<?php if ($s5_pos_top_row2_1 == "published" || $s5_pos_top_row2_2 == "published" || $s5_pos_top_row2_3 == "published" || $s5_pos_top_row2_4 == "published" || $s5_pos_top_row2_5 == "published" || $s5_pos_top_row2_6 == "published") { ?>
		<div id="s5_top_row2_area1">
		<div id="s5_top_row2_area2">
		<div id="s5_top_row2_area_inner">			
		
			<div id="s5_top_row2_wrap">
				<div id="s5_top_row2">
				<div id="s5_top_row2_inner">					
					<?php if ($s5_pos_top_row2_1 == "published") { ?>
						<div id="s5_pos_top_row2_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_1_width ?>%">
							<?php s5_module_call('top_row2_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_2 == "published") { ?>
						<div id="s5_pos_top_row2_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_2_width ?>%">
							<?php s5_module_call('top_row2_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_3 == "published") { ?>
						<div id="s5_pos_top_row2_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_3_width ?>%">
							<?php s5_module_call('top_row2_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_4 == "published") { ?>
						<div id="s5_pos_top_row2_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_4_width ?>%">
							<?php s5_module_call('top_row2_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_5 == "published") { ?>
						<div id="s5_pos_top_row2_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_5_width ?>%">
							<?php s5_module_call('top_row2_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_6 == "published") { ?>
						<div id="s5_pos_top_row2_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_6_width ?>%">
							<?php s5_module_call('top_row2_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>
				</div>
				</div>	
			</div>	
				
		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Top Row2 -->
	
	
	
	<!-- Top Row3 -->	
		<?php if ($s5_pos_top_row3_1 == "published" || $s5_pos_top_row3_2 == "published" || $s5_pos_top_row3_3 == "published" || $s5_pos_top_row3_4 == "published" || $s5_pos_top_row3_5 == "published" || $s5_pos_top_row3_6 == "published") { ?>
		<div id="s5_top_row3_area1">	
		<div id="s5_top_row3_area2">
		<div id="s5_top_row3_area_inner">
		
			<div id="s5_top_row3_wrap">
				<div id="s5_top_row3">
				<div id="s5_top_row3_inner">
				
					<?php if ($s5_pos_top_row3_1 == "published") { ?>
						<div id="s5_pos_top_row3_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_1_width ?>%">
							<?php s5_module_call('top_row3_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_2 == "published") { ?>
						<div id="s5_pos_top_row3_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_2_width ?>%">
							<?php s5_module_call('top_row3_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_3 == "published") { ?>
						<div id="s5_pos_top_row3_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_3_width ?>%">
							<?php s5_module_call('top_row3_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_4 == "published") { ?>
						<div id="s5_pos_top_row3_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_4_width ?>%">
							<?php s5_module_call('top_row3_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_5 == "published") { ?>
						<div id="s5_pos_top_row3_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_5_width ?>%">
							<?php s5_module_call('top_row3_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_6 == "published") { ?>
						<div id="s5_pos_top_row3_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_6_width ?>%">
							<?php s5_module_call('top_row3_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>

				</div>
				</div>
			</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Top Row3 -->	
		
		
		
	<!-- Center area -->	
		<?php if ($s5_show_component == "yes" || $s5_pos_left_top == "published" || $s5_pos_left == "published" || $s5_pos_left_inset == "published" || $s5_pos_left_bottom == "published" || $s5_pos_right_top == "published" || $s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_bottom == "published" || $s5_pos_middle_top_1 == "published" || $s5_pos_middle_top_2 == "published" || $s5_pos_middle_top_3 == "published" || $s5_pos_middle_top_4 == "published" || $s5_pos_middle_top_5 == "published" || $s5_pos_middle_top_6 == "published" || $s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published" || $s5_pos_middle_bottom_1 == "published" || $s5_pos_middle_bottom_2 == "published" || $s5_pos_middle_bottom_3 == "published" || $s5_pos_middle_bottom_4 == "published" || $s5_pos_middle_bottom_5 == "published" || $s5_pos_middle_bottom_6 == "published" || $s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published" || $s5_pos_above_columns_1 == "published" ||  $s5_pos_above_columns_2 == "published" ||  $s5_pos_above_columns_3 == "published" ||  $s5_pos_above_columns_4 == "published" ||  $s5_pos_above_columns_5 == "published" ||  $s5_pos_above_columns_6 == "published" ||  $s5_pos_below_columns_1 == "published" ||  $s5_pos_below_columns_2 == "published" ||  $s5_pos_below_columns_3 == "published" ||  $s5_pos_below_columns_4 == "published" ||  $s5_pos_below_columns_5 == "published" ||  $s5_pos_below_columns_6 == "published") { ?>
		<div id="s5_center_area1">
		<div id="s5_center_area2">
		<div id="s5_center_area_inner">
		
		<!-- Above Columns Wrap -->	
			<?php if ($s5_pos_above_columns_1 == "published" || $s5_pos_above_columns_2 == "published" || $s5_pos_above_columns_3 == "published" || $s5_pos_above_columns_4 == "published" || $s5_pos_above_columns_5 == "published" || $s5_pos_above_columns_6 == "published") { ?>
			<div id="s5_above_columns_wrap1">	
			<div id="s5_above_columns_wrap2">
			<div id="s5_above_columns_inner">

					
						<?php if ($s5_pos_above_columns_1 == "published") { ?>
							<div id="s5_above_columns_1" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_1_width ?>%">
								<?php s5_module_call('above_columns_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_2 == "published") { ?>
							<div id="s5_above_columns_2" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_2_width ?>%">
								<?php s5_module_call('above_columns_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_3 == "published") { ?>
							<div id="s5_above_columns_3" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_3_width ?>%">
								<?php s5_module_call('above_columns_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_4 == "published") { ?>
							<div id="s5_above_columns_4" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_4_width ?>%">
								<?php s5_module_call('above_columns_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_5 == "published") { ?>
							<div id="s5_above_columns_5" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_5_width ?>%">
								<?php s5_module_call('above_columns_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_6 == "published") { ?>
							<div id="s5_above_columns_6" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_6_width ?>%">
								<?php s5_module_call('above_columns_6','round_box'); ?>
							</div>
						<?php } ?>						
						<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</div>
			<?php } ?>
		<!-- End Above Columns Wrap -->			
				
			<!-- Columns wrap, contains left, right and center columns -->	
			<div id="s5_columns_wrap">
			<div id="s5_columns_wrap_inner">
				
				<div id="s5_center_column_wrap">
				<div id="s5_center_column_wrap_inner" style="margin-left:<?php echo $s5_center_column_margin_left ?>px; margin-right:<?php echo $s5_center_column_margin_right ?>px;">
					
					<?php if ($s5_pos_middle_top_1 == "published" || $s5_pos_middle_top_2 == "published" || $s5_pos_middle_top_3 == "published" || $s5_pos_middle_top_4 == "published" || $s5_pos_middle_top_5 == "published" || $s5_pos_middle_top_6 == "published") { ?>
					
						<div id="s5_middle_top_wrap">
							
							<div id="s5_middle_top">
							<div id="s5_middle_top_inner">
							
								<?php if ($s5_pos_middle_top_1 == "published") { ?>
									<div id="s5_pos_middle_top_1" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_1_width ?>%">
										<?php s5_module_call('middle_top_1','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_2 == "published") { ?>
									<div id="s5_pos_middle_top_2" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_2_width ?>%">
										<?php s5_module_call('middle_top_2','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_3 == "published") { ?>
									<div id="s5_pos_middle_top_3" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_3_width ?>%">
										<?php s5_module_call('middle_top_3','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_4 == "published") { ?>
									<div id="s5_pos_middle_top_4" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_4_width ?>%">
										<?php s5_module_call('middle_top_4','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_5 == "published") { ?>
									<div id="s5_pos_middle_top_5" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_5_width ?>%">
										<?php s5_module_call('middle_top_5','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_top_6 == "published") { ?>
									<div id="s5_pos_middle_top_6" class="s5_float_left" style="width:<?php echo $s5_pos_middle_top_6_width ?>%">
										<?php s5_module_call('middle_top_6','round_box'); ?>
									</div>
								<?php } ?>						
								<div style="clear:both; height:0px"></div>

							</div>
							</div>
						
						</div>

					<?php } ?>
					
					<?php if ($s5_show_component == "yes" || $s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published" || $s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published") { ?>
						
						<div id="s5_component_wrap">
						<div id="s5_component_wrap_inner">
						
							<?php if ($s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published") { ?>
						
								<div id="s5_above_body_wrap">
									
									<div id="s5_above_body">
									<div id="s5_above_body_inner">
									
										<?php if ($s5_pos_above_body_1 == "published") { ?>
											<div id="s5_pos_above_body_1" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_1_width ?>%">
												<?php s5_module_call('above_body_1','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_2 == "published") { ?>
											<div id="s5_pos_above_body_2" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_2_width ?>%">
												<?php s5_module_call('above_body_2','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_3 == "published") { ?>
											<div id="s5_pos_above_body_3" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_3_width ?>%">
												<?php s5_module_call('above_body_3','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_4 == "published") { ?>
											<div id="s5_pos_above_body_4" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_4_width ?>%">
												<?php s5_module_call('above_body_4','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_5 == "published") { ?>
											<div id="s5_pos_above_body_5" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_5_width ?>%">
												<?php s5_module_call('above_body_5','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_6 == "published") { ?>
											<div id="s5_pos_above_body_6" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_6_width ?>%">
												<?php s5_module_call('above_body_6','fourdivs'); ?>
											</div>
										<?php } ?>						
										<div style="clear:both; height:0px"></div>

									</div>
									</div>
								
								</div>

							<?php } ?>
									
							<?php if ($s5_show_component == "yes") { ?>
							
								<?php s5_component_call(); ?>
								<div style="clear:both;height:0px"></div>
								
							<?php } ?>
							
							<?php if ($s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published") { ?>
						
								<div id="s5_below_body_wrap">			
								
									<div id="s5_below_body">
									<div id="s5_below_body_inner">
									
										<?php if ($s5_pos_below_body_1 == "published") { ?>
											<div id="s5_pos_below_body_1" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_1_width ?>%">
												<?php s5_module_call('below_body_1','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_2 == "published") { ?>
											<div id="s5_pos_below_body_2" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_2_width ?>%">
												<?php s5_module_call('below_body_2','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_3 == "published") { ?>
											<div id="s5_pos_below_body_3" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_3_width ?>%">
												<?php s5_module_call('below_body_3','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_4 == "published") { ?>
											<div id="s5_pos_below_body_4" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_4_width ?>%">
												<?php s5_module_call('below_body_4','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_5 == "published") { ?>
											<div id="s5_pos_below_body_5" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_5_width ?>%">
												<?php s5_module_call('below_body_5','fourdivs'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_6 == "published") { ?>
											<div id="s5_pos_below_body_6" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_6_width ?>%">
												<?php s5_module_call('below_body_6','fourdivs'); ?>
											</div>
										<?php } ?>						
										<div style="clear:both; height:0px"></div>

									</div>
									</div>
								</div>

							<?php } ?>
							
						</div>
						</div>
						
					<?php } ?>
					
					<?php if ($s5_pos_middle_bottom_1 == "published" || $s5_pos_middle_bottom_2 == "published" || $s5_pos_middle_bottom_3 == "published" || $s5_pos_middle_bottom_4 == "published" || $s5_pos_middle_bottom_5 == "published" || $s5_pos_middle_bottom_6 == "published") { ?>
					
						<div id="s5_middle_bottom_wrap">
							
							<div id="s5_middle_bottom">
							<div id="s5_middle_bottom_inner">
							
								<?php if ($s5_pos_middle_bottom_1 == "published") { ?>
									<div id="s5_pos_middle_bottom_1" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_1_width ?>%">
										<?php s5_module_call('middle_bottom_1','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_2 == "published") { ?>
									<div id="s5_pos_middle_bottom_2" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_2_width ?>%">
										<?php s5_module_call('middle_bottom_2','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_3 == "published") { ?>
									<div id="s5_pos_middle_bottom_3" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_3_width ?>%">
										<?php s5_module_call('middle_bottom_3','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_4 == "published") { ?>
									<div id="s5_pos_middle_bottom_4" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_4_width ?>%">
										<?php s5_module_call('middle_bottom_4','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_5 == "published") { ?>
									<div id="s5_pos_middle_bottom_5" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_5_width ?>%">
										<?php s5_module_call('middle_bottom_5','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_6 == "published") { ?>
									<div id="s5_pos_middle_bottom_6" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_6_width ?>%">
										<?php s5_module_call('middle_bottom_6','round_box'); ?>
									</div>
								<?php } ?>						
								<div style="clear:both; height:0px"></div>

							</div>
							</div>
						
						</div>

					<?php } ?>
					
				</div>
				</div>
				<!-- Left column -->	
				<?php if($s5_pos_left == "published" || $s5_pos_left_inset == "published" || $s5_pos_left_top == "published" || $s5_pos_left_bottom == "published") { ?>
					<div id="s5_left_column_wrap" class="s5_float_left" style="width:<?php echo $s5_left_column_width ?>px">
					<div id="s5_left_column_wrap_inner">
						<?php if($s5_pos_left_top == "published") { ?>
							<div id="s5_left_top_wrap" class="s5_float_left" style="width:<?php echo $s5_left_column_width ?>px">
								<?php s5_module_call('left_top','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_left == "published") { ?>
							<div id="s5_left_wrap" class="s5_float_left" style="width:<?php echo $s5_left_width ?>px">
								<?php s5_module_call('left','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_left_inset == "published") { ?>
							<div id="s5_left_inset_wrap" class="s5_float_left" style="width:<?php echo $s5_left_inset_width ?>px">
								<?php s5_module_call('left_inset','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_left_bottom == "published") { ?>
							<div id="s5_left_bottom_wrap" class="s5_float_left" style="width:<?php echo $s5_left_column_width ?>px">
								<?php s5_module_call('left_bottom','round_box'); ?>
							</div>
						<?php } ?>
					</div>
					</div>
				<?php } ?>
				<!-- End Left column -->	
				<!-- Right column -->	
				<?php if($s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_top == "published" || $s5_pos_right_bottom == "published") { ?>
					<div id="s5_right_column_wrap" class="s5_float_left" style="width:<?php echo $s5_right_column_width ?>px; margin-left:-<?php echo $s5_right_column_width + $s5_left_column_width ?>px">
					<div id="s5_right_column_wrap_inner">
						<?php if($s5_pos_right_top == "published") { ?>
							<div id="s5_right_top_wrap" class="s5_float_left" style="width:<?php echo $s5_right_column_width ?>px">
								<?php s5_module_call('right_top','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right_inset == "published") { ?>
							<div id="s5_right_inset_wrap" class="s5_float_left" style="width:<?php echo $s5_right_inset_width ?>px">
								<?php s5_module_call('right_inset','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right == "published") { ?>
							<div id="s5_right_wrap" class="s5_float_left" style="width:<?php echo $s5_right_width ?>px">
								<?php s5_module_call('right','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right_bottom == "published") { ?>
							<div id="s5_right_bottom_wrap" class="s5_float_left" style="width:<?php echo $s5_right_column_width ?>px">
								<?php s5_module_call('right_bottom','round_box'); ?>
							</div>
						<?php } ?>
					</div>
					</div>
				<?php } ?>
				<!-- End Right column -->	
			</div>
			</div>
			<!-- End columns wrap -->	
			
		<!-- Below Columns Wrap -->	
			<?php if ($s5_pos_below_columns_1 == "published" || $s5_pos_below_columns_2 == "published" || $s5_pos_below_columns_3 == "published" || $s5_pos_below_columns_4 == "published" || $s5_pos_below_columns_5 == "published" || $s5_pos_below_columns_6 == "published") { ?>
			<div id="s5_below_columns_wrap1">	
			<div id="s5_below_columns_wrap2">
			<div id="s5_below_columns_inner">

					
						<?php if ($s5_pos_below_columns_1 == "published") { ?>
							<div id="s5_below_columns_1" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_1_width ?>%">
								<?php s5_module_call('below_columns_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_2 == "published") { ?>
							<div id="s5_below_columns_2" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_2_width ?>%">
								<?php s5_module_call('below_columns_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_3 == "published") { ?>
							<div id="s5_below_columns_3" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_3_width ?>%">
								<?php s5_module_call('below_columns_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_4 == "published") { ?>
							<div id="s5_below_columns_4" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_4_width ?>%">
								<?php s5_module_call('below_columns_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_5 == "published") { ?>
							<div id="s5_below_columns_5" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_5_width ?>%">
								<?php s5_module_call('below_columns_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_6 == "published") { ?>
							<div id="s5_below_columns_6" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_6_width ?>%">
								<?php s5_module_call('below_columns_6','round_box'); ?>
							</div>
						<?php } ?>						
						<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</div>
			<?php } ?>
		<!-- End Below Columns Wrap -->				
			
			
		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Center area -->	
	
	
	<!-- Bottom Row1 -->	
		<?php if ($s5_pos_bottom_row1_1 == "published" || $s5_pos_bottom_row1_2 == "published" || $s5_pos_bottom_row1_3 == "published" || $s5_pos_bottom_row1_4 == "published" || $s5_pos_bottom_row1_5 == "published" || $s5_pos_bottom_row1_6 == "published") { ?>
			<div id="s5_bottom_row1_area1">
			<div id="s5_bottom_row1_area2">
			<div id="s5_bottom_row1_area_inner">

				<div id="s5_bottom_row1_wrap">
					<div id="s5_bottom_row1">
					<div id="s5_bottom_row1_inner">
					
						<?php if ($s5_pos_bottom_row1_1 == "published") { ?>
							<div id="s5_pos_bottom_row1_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_1_width ?>%">
								<?php s5_module_call('bottom_row1_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_2 == "published") { ?>
							<div id="s5_pos_bottom_row1_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_2_width ?>%">
								<?php s5_module_call('bottom_row1_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_3 == "published") { ?>
							<div id="s5_pos_bottom_row1_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_3_width ?>%">
								<?php s5_module_call('bottom_row1_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_4 == "published") { ?>
							<div id="s5_pos_bottom_row1_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_4_width ?>%">
								<?php s5_module_call('bottom_row1_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_5 == "published") { ?>
							<div id="s5_pos_bottom_row1_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_5_width ?>%">
								<?php s5_module_call('bottom_row1_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_6 == "published") { ?>
							<div id="s5_pos_bottom_row1_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_6_width ?>%">
								<?php s5_module_call('bottom_row1_6','round_box'); ?>
							</div>
						<?php } ?>
						
						<div style="clear:both; height:0px"></div>

					</div>
					</div>
				</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Bottom Row1 -->	
		
		
	<!-- Bottom Row2 -->	
		<?php if ($s5_pos_bottom_row2_1 == "published" || $s5_pos_bottom_row2_2 == "published" || $s5_pos_bottom_row2_3 == "published" || $s5_pos_bottom_row2_4 == "published" || $s5_pos_bottom_row2_5 == "published" || $s5_pos_bottom_row2_6 == "published") { ?>
		<div id="s5_bottom_row2_area1">
		<div id="s5_bottom_row2_area2">
		<div id="s5_bottom_row2_area_inner">			
		
			<div id="s5_bottom_row2_wrap">
				<div id="s5_bottom_row2">
				<div id="s5_bottom_row2_inner">					
					<?php if ($s5_pos_bottom_row2_1 == "published") { ?>
						<div id="s5_pos_bottom_row2_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_1_width ?>%">
							<?php s5_module_call('bottom_row2_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_2 == "published") { ?>
						<div id="s5_pos_bottom_row2_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_2_width ?>%">
							<?php s5_module_call('bottom_row2_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_3 == "published") { ?>
						<div id="s5_pos_bottom_row2_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_3_width ?>%">
							<?php s5_module_call('bottom_row2_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_4 == "published") { ?>
						<div id="s5_pos_bottom_row2_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_4_width ?>%">
							<?php s5_module_call('bottom_row2_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_5 == "published") { ?>
						<div id="s5_pos_bottom_row2_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_5_width ?>%">
							<?php s5_module_call('bottom_row2_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_6 == "published") { ?>
						<div id="s5_pos_bottom_row2_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_6_width ?>%">
							<?php s5_module_call('bottom_row2_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>
				</div>
				</div>	
			</div>	
				
		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Bottom Row2 -->
	
	</div>
	
	<!-- Bottom Row3 -->	
		<?php if ($s5_pos_bottom_row3_1 == "published" || $s5_pos_bottom_row3_2 == "published" || $s5_pos_bottom_row3_3 == "published" || $s5_pos_bottom_row3_4 == "published" || $s5_pos_bottom_row3_5 == "published" || $s5_pos_bottom_row3_6 == "published") { ?>
		<div id="s5_bottom_row3_area1">	
		<div id="s5_bottom_row3_area2">
		<div id="s5_bottom_row3_area_inner">
		
			<div id="s5_bottom_row3_wrap">
				<div id="s5_bottom_row3">
				<div id="s5_bottom_row3_inner">
				
					<?php if ($s5_pos_custom_3 == "published") { ?>
						<div id="s5_pos_custom_3">
							<?php s5_module_call('custom_3','round_box'); ?>
						</div>
					<?php } ?>
				
					<?php if ($s5_pos_bottom_row3_1 == "published") { ?>
						<div id="s5_pos_bottom_row3_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_1_width ?>%">
							<?php s5_module_call('bottom_row3_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row3_2 == "published") { ?>
						<div id="s5_pos_bottom_row3_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_2_width ?>%">
							<?php s5_module_call('bottom_row3_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row3_3 == "published") { ?>
						<div id="s5_pos_bottom_row3_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_3_width ?>%">
							<?php s5_module_call('bottom_row3_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row3_4 == "published") { ?>
						<div id="s5_pos_bottom_row3_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_4_width ?>%">
							<?php s5_module_call('bottom_row3_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row3_5 == "published") { ?>
						<div id="s5_pos_bottom_row3_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_5_width ?>%">
							<?php s5_module_call('bottom_row3_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row3_6 == "published") { ?>
						<div id="s5_pos_bottom_row3_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row3_6_width ?>%">
							<?php s5_module_call('bottom_row3_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>

				</div>
				</div>
			</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Bottom Row3 -->
	
	
	<!-- Footer Area -->
		<div id="s5_footer_area1">
		<div id="s5_footer_area2">
		<div id="s5_footer_area_inner">
		
			<?php if($s5_pos_footer == "published") { ?>
				<div id="s5_footer_module">
					<?php s5_module_call('footer','notitle'); ?>
				</div>	
			<?php } else { ?>
				<div id="s5_footer">
					<?php require("vertex/footer.php"); ?>
				</div>
			<?php } ?>
			
			<?php if($s5_pos_bottom_menu) { ?>
				<div id="s5_bottom_menu_wrap">
					<?php s5_module_call('bottom_menu','notitle'); ?>
				</div>	
			<?php } ?>
			<div style="clear:both; height:0px"></div>
			
		</div>
		</div>
		</div>
	<!-- End Footer Area -->
	
	<!-- Bottom Vertex Calls -->
	<?php require("vertex/includes/vertex_includes_bottom.php"); ?>
	
</div>
<!-- End Body Padding -->

</div>
</div>

<?php s5_module_call('debug','fourdivs'); ?>
	

</body>
</html>