<?php if ($s5_tooltips  == "yes") { ?>
	<script type="text/javascript" language="javascript" src="<?php echo $s5_directory_path ?>/js/tooltips.js"></script>
<?php } ?>
	
<?php if ($s5_multibox  == "yes") { ?>
	<script type="text/javascript">
		window.addEvent('domready',function(){
			$$('.s5mb').each(function(z,i){if(!$(z).getAttribute('rel'))$(z).setAttribute('rel','[me]');});
			});
		var s5mbox = {};
		<?php if ($browser == "ie9") { ?>
		window.setTimeout(s5_multiboxg,1000);
		<?php } ?>

		<?php if ($browser == "ie9") { ?>function s5_multiboxg() {	
		<?php } ?>
		
		<?php if ($browser != "ie9") { ?>
        window.addEvent('domready', function() {
		<?php } ?>
		
		<?php 
		if ($s5_multimaxwidth == "") {
			$s5_multimaxwidth = "400";
		}
		if ($s5_multimaxheight == "") {
			$s5_multimaxheight = "600";
		}
		if ($s5_multimoviewidth == "") {
			$s5_multimoviewidth = "300";
		}
		if ($s5_multimovieheight == "") {
			$s5_multimovieheight = "400";
		}
		if ($s5_multitooltips == "") {
			$s5_multitooltips = "false";
		}
		if ($s5_multirollover == "") {
			$s5_multirollover = "false";
		}
		?>

		window.s5mbox = new multiBox({
			mbClass: '.s5mb',//class you need to add links that you want to trigger multiBox with (remember and update CSS files)
			container: $(document.body),//where to inject multiBox
			path: '<?php echo $s5_directory_path ?>/js/multibox/',//path to mp3player and flvplayer etc
			useOverlay: <?php if ($s5_multioverlay  == "yes") { ?>true,<?php } else {?>false,<?php } ?>//detect overlay setting
			maxSize: {w:<?php echo $s5_multimaxwidth; ?>, h:<?php echo $s5_multimaxheight; ?>},//max dimensions (width,height) - set to null to disable resizing
			movieSize: {w:<?php echo $s5_multimoviewidth; ?>, h:<?php echo $s5_multimovieheight; ?>},
			addDownload: false,//do you want the files to be downloadable?
			descClassName: 's5_multibox',//the class name of the description divs
			pathToDownloadScript: '<?php echo $s5_directory_path ?>/js/multibox/forceDownload.asp',//if above is true, specify path to download script (classicASP and ASP.NET versions included)
			addRollover: <?php echo $s5_multirollover; ?>,//add rollover fade to each multibox link
			addOverlayIcon: false,//adds overlay icons to images within multibox links
			addChain: false,//cycle through all images fading them out then in
			recalcTop: true,//subtract the height of controls panel from top position
			addTips: <?php echo $s5_multitooltips; ?>,//adds MooTools built in 'Tips' class to each element (see: http://mootools.net/docs/Plugins/Tips)
			autoOpen: 0//to auto open a multiBox element on page load change to (1, 2, or 3 etc)
		});

		}<?php if ($browser != "ie9") { ?>);<?php } ?>

			<?php if ($browser != "ie7" && $browser != "ie8") { ?>
			Eventx.onResizend(function(){		
				s5mbox.resize(); 
			});
			<?php } ?>
			
	</script>
<?php } ?>


