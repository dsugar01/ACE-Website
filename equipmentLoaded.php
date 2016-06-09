<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="javascript/jquery-1.10.1.min.js"></script>-->
<script type="text/javascript" src="javascript/jquery.timers.js"></script>
<!--<script type="text/javascript" src="javascript/jquery.mousewheel.min.js"></script>-->
<!--<script type="text/javascript" src="horinaja/class.horinaja.jquery.pro.js"></script>-->
<script type="text/javascript" src="javascript/class.horinaja.jquery.js"></script>
<!--<script type="text/javascript" src="thumbnail-slider.js"></script>-->
<script type="text/javascript" src="bxslider/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="horinaja.css">
<link rel="stylesheet" type="text/css" href="equipment.css">
<link rel="stylesheet" type="text/css" href="bxslider/jquery.bxslider.css">

<!-- <script> $(document).ready(function(){
$('#video').Horinaja({capture:'video',delai:0.5,duree:3,leftright:false,distanceLR:150,pagination:true});
});
</script> -->

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  mode: 'fade',
  captions: true,
  adaptiveHeight: true
});
});
</script>


<script> $(document).ready(function(){
$('#slideshow').Horinaja({
capture:'slideshow',delai:0.3,
duree:2,pagination:false});
});
</script>

<script src="autocolumn.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="jquery.columnizer.js" type="text/javascript" charset="utf-8"></script> -->
<!--	<script>
		$(function(){
			$('#creditscontainer, #datasheetscontainer').columnize({ columns: 2 });
		});
	</script> --> 
<script>
$(function() {
	$('#creditscontainer').columnize({ columns: 2});
	$('#datasheetscontainer').columnize({ columns: 2});
	$('#accessoriescontainer').columnize({columns: 2});
	});
</script>






</head>
<body>

	<div id="centerdiv">
<div id="tophalfwrapper">
		<div id="logo">
			<a href="indexh4.php"><img src="images/acelogo.png" border="0" alt="ACE East"></a>		</div>

		
		<a href="indexh4.php" class="nav">
		<div id="navbutton1">
			<p class="nav" id="home">
				HOME			</p>
		</div>
		</a>

		<a href="contact.php" class="nav">
		<div id="navbutton2">
			<p class="nav">
				CONTACT US			</p>
		</div>
		</a>

		<a href="equipmentTest.php" class="nav">
		<div id="navbutton3on">
			<p class="nav">
				EQUIPMENT			</p>
		</div>
		</a>

		<a href="credits.php" class="nav">
		<div id="navbutton4">
			<p class="nav">
				CREDITS			</p>
		</div>
		</a>

			<form id="searchform" name='searchform' method='post' action='search.php'>
			<input type="text" name="search" id="searchbarinput" placeholder="search"/>
            </form>

<!-- start horinaja script div -->
<!--		<div id="slideshow" class="horinaja">

			<ul style="left:0px">
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above1">
				<div id="slidervideolink1">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription1">a short description of the system pictured can go here :)</p>
				<p class="imagedate1">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above2">
				<div id="slidervideolink2">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription2">a short description of the system pictured can go here :)</p>
				<p class="imagedate2">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above3">
				<div id="slidervideolink3">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription3">a short description of the system pictured can go here :)</p>
				<p class="imagedate3">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above4">
				<div id="slidervideolink4">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription4">a short description of the system pictured can go here :)</p>
				<p class="imagedate4">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above5">
				<div id="slidervideolink5">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription5">a short description of the system pictured can go here :)</p>
				<p class="imagedate5">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above6">
				<div id="slidervideolink6">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription6">a short description of the system pictured can go here :)</p>
				<p class="imagedate6">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above7">
				<div id="slidervideolink7">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription7">a short description of the system pictured can go here :)</p>
				<p class="imagedate7">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above8">
				<div id="slidervideolink8">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription8">a short description of the system pictured can go here :)</p>
				<p class="imagedate8">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above9">
				<div id="slidervideolink9">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription9">a short description of the system pictured can go here :)</p>
				<p class="imagedate9">December 18th 2012</p>

			</li>
			<li>
				<img src="images/slider/1.jpg"><img src="images/redcircle2.png" class="above10">
				<div id="slidervideolink10">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription10">a short description of the system pictured can go here :)</p>
				<p class="imagedate10">December 18th 2012</p>

			</li>


			

			</ul>

			<span class="slideexpandbutton">expand</span><span class="slideminimizebutton">minimize</span>
		</div> -->
<!-- end horinaja script div -->
	<div id="slideshow" class="horinaja">

			<ul style="left:0px">
			<li>
				<img width="1009" height="358" src="headers4/2.jpg"><img src="images/redcircle2.png" class="above2">
				<div id="slidervideolink2">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription2">a short description of the system pictured can go here :)</p>
				<p class="imagedate2">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/3.jpg"><img src="images/redcircle2.png" class="above3">
				<div id="slidervideolink3">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription3">a short description of the system pictured can go here :)</p>
				<p class="imagedate3">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/4.jpg"><img src="images/redcircle2.png" class="above4">
				<div id="slidervideolink4">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription4">a short description of the system pictured can go here :)</p>
				<p class="imagedate4">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/5.jpg"><img src="images/redcircle2.png" class="above5">
				<div id="slidervideolink5">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription5">a short description of the system pictured can go here :)</p>
				<p class="imagedate5">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/6.jpg"><img src="images/redcircle2.png" class="above6">
				<div id="slidervideolink6">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription6">a short description of the system pictured can go here :)</p>
				<p class="imagedate6">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/7.jpg"><img src="images/redcircle2.png" class="above7">
				<div id="slidervideolink7">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription7">a short description of the system pictured can go here :)</p>
				<p class="imagedate7">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/8.jpg"><img src="images/redcircle2.png" class="above8">
				<div id="slidervideolink8">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription8">a short description of the system pictured can go here :)</p>
				<p class="imagedate8">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/9.jpg"><img src="images/redcircle2.png" class="above9">
				<div id="slidervideolink9">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription9">a short description of the system pictured can go here :)</p>
				<p class="imagedate9">December 18th 2012</p>

			</li>
			<li>
				<img width="1009" height="358" src="headers4/10.jpg"><img src="images/redcircle2.png" class="above10">
				<div id="slidervideolink10">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription10">a short description of the system pictured can go here :)</p>
				<p class="imagedate10">December 18th 2012</p>

			</li>


			

			</ul>


		</div>   

<div id="bottomhalfwrapper">
<div id="content">
<div id="contentleft">

	<div id="equipmentlistheader">
		<span class="ace">ace </span><span class="headertext">Equipment</span><span class="headerendtext">systems</span>	</div>

	<div id="expandclosebuttons">

		<span class="expandbutton">
			expand all		</span>

		<span class="closebutton">
			close all		</span>	</div>
    
<!-- PHP CODE GOES HERE -->
<?php

if(! (mysql_connect("mysql-aceeast324581.aceeast.comcastbiz.net", "aceeast324581", "AceIsC00l") && mysql_select_db("aceeast324581"))){
	print("There was an error: mysql_error()");
	die();
	}

else{
	//Create a query to pull the categories
	$cat_query = "SELECT * from ace_categories ORDER BY ca_id ASC";
	
	//Pull the query result
	$cat_result = mysql_query($cat_query);
	if(mysql_num_rows($cat_result) < 1){
		print("No categories exist");
		}
		
	//start printing the categories	
	else{
		while($row_cat = mysql_fetch_array($cat_result)){
			//set the category
			$current_category = $row_cat[ca_id];
		
			//print category here
//			print("<div class='equipmentlist_item'>");
//				print("<div class='equipmentbuttonpadding'>");
//				print("<span class='equipmentlist_text'>$row_cat[ca_name] </span>");
//				print("<span class='plus'>+</span>");
//				print("<span class='minus'>-</span>");
//				print("</div>");
//			print("</div>");	
			
			print("<div id='$row_cat[equipmentlist_item]'>");
				print("<div class='equipmentbuttonpadding'>");
				print("<span class='equipmentlist_text'>$row_cat[ca_name] </span>");
				print("<span class='plus'>+</span>");
				print("<span class='minus'>-</span>");
				print("</div>");
			print("</div>");

			
			//select systems in my current category
			$system_query = "SELECT * from ace_systems
			WHERE cs_ca_id = $current_category
			ORDER BY cs_order";
			
			$system_result = mysql_query($system_query);
			if(mysql_num_rows($system_result) < 1) {
				print("No systems exist.");
			}		
		
			else{ //start printing the systems
	
				print("<div id='$row_cat[subgroup]'>");
				while($row_system = mysql_fetch_array($system_result)){
//					print($row_system[cs_name]);
//					print("<div class='equipmentlist_subgroup'>");
//					print("<div class='equipmentlist_subitem'>");
//						print("<div class='equipmentbuttonpadding'>");
//					print("<span class='equipmentlist_text2'>");
//					print("<a class='equipmentlist_text2' href='equipment.php?system=$row_system[cs_id]'>$row_system[cs_name] </a>");
//					print("</span>");
//					print("</div>");
//					print("</div>");

//					print("</div>");

//					print("<div class='equipmentlist_subgroup1'>");
					print("<div id='$row_system[subitem]'>");
						print("<div class='equipmentbuttonpadding'>");
					print("<span class='equipmentlist_text2'><a class='equipmentlist_text2' href='equipmentLoaded.php?system=$row_system[cs_id]'>$row_system[cs_name] </a> </span>");
					print("</div>");
					print("</div>");
					
				//	print("</div>");
				}				
				print("</div>");
			}//end printing the systems
		}//end while for print categories
	}//end else for printing categories
}//end else
?>
<!--
	<div id="equipmentlist_item1">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Technocranes </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup1">

		<div id="equipmentlist_subitem1">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2"><a class="equipmentlist_text2" href="equipment.php?system=12">SuperTechno30 </a></span>
		</div>
		</div>

		<div id="equipmentlist_subitem2">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Techno15 </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item2">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Cranes & Dollys </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup2">

		<div id="equipmentlist_subitem1_2">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MC88 </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_2">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Fisher 10 </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item3">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Gyro-Stabilized Heads </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup3">

		<div id="equipmentlist_subitem1_3">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Stab-C </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_3">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Stab-C Compact EX </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_3">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Mini-C</span>
		</div>
		</div>

		<div id="equipmentlist_subitem4_3">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">CamRemote SAS </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item4">
		<div class="equipmentbuttonpadding">
	<span class="equipmentlist_text">Gyro-Stabilized Heads for Helicopters </span>
	<span class="plus">+</span>
	<span class="minus">-</span>
	</div>
	</div>

		<div id="equipmentlist_subgroup4">

		<div id="equipmentlist_subitem1_4">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Super G </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_4">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Stab-C Compact EX (Aerial) </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_4">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Stab-C/Gyron FS Classic</span>
		</div>
		</div>

		<div id="equipmentlist_subitem4_4">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Cineflex V14HD </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item5">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Remote Heads </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup5">

		<div id="equipmentlist_subitem1_5">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">CamRemote </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_5">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Super MiniMote Film </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_5">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MiniMote </span>
		</div>
		</div>

		<div id="equipmentlist_subitem4_5">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MicroPlus </span>
		</div>
		</div>

		<div id="equipmentlist_subitem5_5">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MicroMote </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item6">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Tracking Systems </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup6">

		<div id="equipmentlist_subitem1_6">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">TrackRunner </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_6">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">TrackRunner Mini </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_6">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">RailRunner </span>
		</div>
		</div>

		<div id="equipmentlist_subitem4_6">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">BeamRunner </span>
		</div>
		</div>

		<div id="equipmentlist_subitem5_6">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">RigRunner </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item7">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Telescopic Towers </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup7">

		<div id="equipmentlist_subitem1_7">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">SuperTower 20</span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_7">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">SuperTower 17H </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_7">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">SuperTower 6 </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item8">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Flying Systems </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup8">

		<div id="equipmentlist_subitem1_8">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Spidercam Studio HD </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_8">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Spidercam Field HD </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_8">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Spidercam 35 Film </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item9">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Descender Rigs </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup9">

		<div id="equipmentlist_subitem1_9">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Various Descender Rigs </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_9">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Rope Climber </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_9">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Speed Winch </span>
		</div>
		</div>

		</div>

	<div id="equipmentlist_item10">
		<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text">Specialized Systems </span>
		<span class="plus">+</span>
		<span class="minus">-</span>
		</div>
	</div>

		<div id="equipmentlist_subgroup10">

		<div id="equipmentlist_subitem1_10">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Kenworthy-Nettmann Snorkel </span>
		</div>
		</div>

		<div id="equipmentlist_subitem2_10">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MicroMote NTSC Package </span>
		</div>
		</div>

		<div id="equipmentlist_subitem3_10">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MicroMote HD Package </span>
		</div>
		</div>

		<div id="equipmentlist_subitem4_10">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">MicroPlus HD Package </span>
		</div>
		</div>

		<div id="equipmentlist_subitem5_10">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Speed Winch </span>
		</div>
		</div>

		<div id="equipmentlist_subitem6_10">
			<div class="equipmentbuttonpadding">
		<span class="equipmentlist_text2">Lift Arm Dolly </span>
		</div>
		</div>

		</div>

-->
</div>

<div id="contentright">


		<!-- <span class="ace">ace </span><span class="headertext">SuperTechno30</span><span class="headerendtext">camera system</span> -->
        <?php				
		print("<div id='systemdetailsheader'>");
		$query_title = "SELECT * from ace_systems where cs_id=$system";		
		$title_result = mysql_query($query_title);
		$row_title = mysql_fetch_array($title_result);
		print("<span class='ace'>ace </span><span class='headertext'>$row_title[cs_name]</span><span class='headerendtext'></span>");
		print("</div>");
		print("<div id='systemdetailscontainer'>");
		//start div for the images
		$equipImages = "SELECT im_image, im_caption from ace_images where im_cs_id=$system ORDER BY RAND() LIMIT 5";
		$equipImagesResult = mysql_query($equipImages);
		print("div id='video'>");
		print("<ul class='bxslider'>");
		while($rowImages = mysql_fetch_array($equipImagesResult)){
			$filename = "../cam_images/".$rowImages[im_image];
			print("<li><img width='660' src='$filename' title='$rowImages[im_caption]' /></li>");
		}
		print("</ul>");
		print("</div>");
		//end div for the images
		//start the section for the description
		print("<div id='descriptionheader'>");
		print("<span class='header2'>Description</span>");
		print("</div>");
		print("<div id='descriptioncontainer'>");
		$query_desc = "SELECT * from ace_systems where cs_id=$system";		
		$desc_result = mysql_query($query_desc);
		$row_desc = mysql_fetch_array($desc_result);
		print("<p class='descriptiontext'>$row_desc[cs_desc]</p>");
		print("</div>");
		//end the description section
		//start credits section
		print("<div id='creditsheader'>");
		print("<span class='header2'>Credits</span>");
		print("</div>");
		print("<div id='creditscontainer'>");
		$sql_string = "SELECT * FROM ace_credits, ace_credit_map WHERE mp_cs_id = '$system' AND mp_cr_id = cr_id ORDER BY cr_name ASC";
			
			//Run the query
			$result = mysql_query($sql_string);
	
			//Get the column names
			$num = mysql_num_rows($result);
	
			if ($num == 0) {
			print("<p class='credittext'>Credits coming soon!</p>");
			}
			
			else {
			
			//Display the results
			for($i = 0; $i < $num; $i++) {
	
				$cr_id = mysql_result($result, $i, "cr_id");
				$name = mysql_result($result, $i, "cr_name");
		
				//check if credit has details
				$sql_string2 = "SELECT ci_id FROM ace_credit_images WHERE ci_cr_id = '$cr_id'";
					
				//Run the query
				$result2 = mysql_query($sql_string2);
		
				$count = mysql_num_rows($result2);
		
				
				if ($count > 0) {		
					print("<a class='credittext' href='creditsSelected.php?credit=$cr_id'>$name</a><br />");
					}
		
				else{
					print("<span class='credittext'>$name</span><br />");
					}
		
				
				}//end for
			
		}//end else
		print("</div>");
		//end credits section				
		//start data sheet section
		print("<div id='datasheetsheader'>");
		print("<span class='header2'>Data Sheets</span>");
		print("</div>");

		print("<div id='datasheetscontainer'>");

		//Create a query to insert the data
		$docsql_string = "SELECT * FROM ace_docs WHERE do_cs_id = $system ORDER BY do_file ASC";

		//Run the query
		$docresult = mysql_query($docsql_string);
	
		//Get the column names
		$docnum = mysql_num_rows($docresult);
	
		if ($docnum == 0) {
			 print("<p class='credittext'>Datasheets coming soon!</p>");
			}

		//start list
		

		//Display the results
		for($doc_i = 0; $doc_i < $docnum; $doc_i++) {
	
		$doc_id = mysql_result($docresult, $doc_i, "do_id");
		$doc_file = mysql_result($docresult, $doc_i, "do_file");
		$doc_filename = "../cam_docs/".$doc_file;
		
		print("<a class='credittext' href='$doc_filename' target='_blank'>$doc_file</a><br />");
		}
		print("</div>");
		//end data sheet 
		//start accessories section
		print("<div id='accessoriesheader'>");
		print("<span class='header2'>Accessories</span>");
		print("</div>");
		
		print("<div id='accessoriescontainer'>");
		//Create a query to insert the data
		$sql_string = "SELECT * FROM ace_accessories WHERE ac_cs_id = $system ORDER BY ac_name ASC";

		//Run the query
		$result = mysql_query($sql_string);
	
		//Get the column names
		$num = mysql_num_rows($result);
	
		if ($num == 0) {
			print("<p class='credittext'>Accessories coming soon!</p>");
			}

		//Display the results
		for($i = 0; $i < $num; $i++) {
	
			$id = mysql_result($result, $i, "ac_id");
			$name = mysql_result($result, $i, "ac_name");
            $web = mysql_result($result, $i, "webField");
			
			if($web == 1){
				print("<span class='accessorytext'>$name</span><br />");
			}
			else{
			print("<span class='credittext'>$name</span><br />");
			}
		}
		print("</div>");
		//end accessories section
		print("</div>");
		?>
<!--	<div id="systemdetailscontainer"> -->

<!--	<div id="video">
    <ul class="bxslider">
    <li><img width="660" src="MicroMote4.jpg" title="image 1" /></li>
    <li><img width="660" src="GyronFS9.jpg" title="image 2" /></li>
    <li><img width="660" src="MicroMote4.jpg" title="image 3" /></li>
    <li><img width="660" src="MicroMote4.jpg" title="image 4" /></li>
    </ul> -->
		<!--	<iframe width="660" height="371" src="http://www.youtube.com/embed/2VUye-TSFdE?list=UUGDCgIRI7Og92ZJIC4UC7yg" frameborder="0" allowfullscreen></iframe> -->
<!--	</div> -->  <!-- end div video --> 

<!--	<div id="datasheetsheader">
		<span class="header2">Data Sheets</span>	</div>

	<div id="datasheetscontainer">
		<a href="" class="credittext" target="new">ACE SuperTechno 30 Overview.pdf</a>
		<a href="" class="credittext" target="new">st30_dimensions_1.pdf</a>
		<a href="" class="credittext" target="new">st30_dimensions_2.pdf</a><br />
		<a href="" class="credittext" target="new">Z_head_alt_config.pdf</a>	</div> -->

<!--	<div id="descriptionheader">
		<span class="header2">Description</span>	</div> -->

<!--	<div id="descriptioncontainer"> -->
		<?php
	//	$query_desc = "SELECT * from ace_systems where cs_id=$system";		
	//	$desc_result = mysql_query($query_desc);
	//	$row_desc = mysql_fetch_array($desc_result);
	//	print("<p class='descriptiontext'>$row_desc[cs_desc]</p>");
		?> 
    	<!--
		<p class="descriptiontext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        -->
<!--	</div> -->

<!--	<div id="creditsheader">
		<span class="header2">Credits</span>	</div>

	<div id="creditscontainer"> -->
			<!-- <a href="" class="credittext">"21"</a>
			<a href="" class="credittext">"American Gangster"</a>
			<a href="" class="credittext">"An American Affair"</a>
			<a href="" class="credittext">"Body of Evidence"</a>
			<a href="" class="credittext">"Breach"</a>
			<a href="" class="credittext">"Celebrity Apprentice"</a>
			<a href="" class="credittext">"Failure to Launch"</a>
			<a href="" class="credittext">"Fantastic 4"</a>
			<a href="" class="credittext">"Four Single Fathers"</a><br />
			<a href="" class="credittext">"Gone Baby Gone"</a> -->
            <?php
/*			$sql_string = "SELECT * FROM ace_credits, ace_credit_map WHERE mp_cs_id = '$system' AND mp_cr_id = cr_id ORDER BY cr_name ASC";
			
			//Run the query
			$result = mysql_query($sql_string);
	
			//Get the column names
			$num = mysql_num_rows($result);
	
			if ($num == 0) {
			print("<p class='credittext'>Credits coming soon!</p>");
			}
			
			else {
			print("<table>");
			
			$newRow = true;
			//Display the results
			for($i = 0; $i < $num; $i++) {
	
				$cr_id = mysql_result($result, $i, "cr_id");
				$name = mysql_result($result, $i, "cr_name");
		
				//check if credit has details
				$sql_string2 = "SELECT ci_id FROM ace_credit_images WHERE ci_cr_id = '$cr_id'";
					
				//Run the query
				$result2 = mysql_query($sql_string2);
		
				$count = mysql_num_rows($result2);
				if($newRow){
					print("<tr>");								
					if ($count > 0) {		
						print("<td class='credittext'><a href='credits.php?credit=$cr_id'>$name</a></td>");
						$left = false;
						}
		
					else{
						print("<td class='credittext'>$name</td>");
						$left = false;
						}
				}//if newrow
				
				else{
					if ($count > 0) {		
						print("<td class='credittext'><a href='credits.php?credit=$cr_id'>$name</a></td>");
						print("</tr>");
						$left = true;
						}
		
					else{
						print("<td class='credittext'>$name</td>");
						print("</tr>");
						$left = true;
						}
				}//end else not newrow
			}//end for
			
			print("</table>"); 
			}//end else */
			
			?>
<!--	</div>
</div> -->
</div>
		</div>
</div>
	</div>
	</div>



</div>


	</div>








<div id="footer">



<div id="footercontent">

	<div id="footercentering">

<div id="footerleft">

<div id="contactheader">
		<span class="headerendtext2">contacts</span>	</div>

	<div id="contacts">
		<table id="officenumbers">
			<tr>
				<td id="newyork">
			<span class="conlocation">New York</span><span class="phonenumb">(212)-944-0003</span>				</td>
			</tr>
			<tr>
				<td id="baltimore">
			<span class="conlocation">Baltimore</span><span class="phonenumb">(410)-243-4181</span>				</td>
			</tr>
			<tr>
				<td id="losangelas">
			<span class="conlocation">Los Angeles</span><span class="phonenumb">(818)-794-9410</span>				</td>
			</tr>
			<tr>
				<td id="fax">
			<span class="conlocation">Fax</span><span class="phonenumb">(443)-524-0210</span>				</td>
			</tr>
		</table>
			<table id="individualcontacts">
				<tr id="left">
					<td>
				<span class="conname">Randy Greer Sr.<br /></span>
				<p class="coninfo"><i>Email:</i> randy@aceeast.com<br />
									Phone: 410.340.9674</p>				</td>
				<td>
				<span class="conname">Marielle Greer<br /></span>
				<p class="coninfo"><i>Email:</i> marielle@aceeast.com<br />
					Phone: 443.255.9114</p>					</td>
			</tr>
		</table>
		</div>
</div>

<div id="footerright">

<div id="partnersheader">
		<span class="headerendtext2">links</span>		</div>

		<div id="linklist">
		<a href="http://nettmannsystems.com/" class="partnerslink">Nettmann Systems International</a><br />
			<a href="http://www.supertechno.com/" class="partnerslink">SuperTechno</a><br />
			<a href="http://www.jlfisher.com/" class="partnerslink">JLFisher</a><br />
			<a href="http://www.r-t-s.org/index.html" class="partnerslink">R-T-S</a><br />
			<a href="http://www.mypmt.de/" class="partnerslink">PMT - Professional Motion Technology</a><br />
		</div>

		<div id="iconwrapper">
		<a href="http://www.facebook.com/AtlanticCineEquipment?v=wall" target="new"><div class="icon1"></div></a>
		<a href="http://www.imdb.com/company/co0172046/" target="new"><div class="icon2"></div></a>
		<a href="http://www.youtube.com/user/AtlanticCineEquip?feature=mhsn#p/p" target="new"><div class="icon3"></div></a>	</div>

	<div id="right">
				<br />
				<span class="conname">Randy Greer Jr.<br /></span>
				<p class="coninfo"><i>Email:</i> randyrap@mac.com<br />
					Phone: 410.404.3836</p>
                </div>
	</div>
</div>
</div>
<div id="footerbottom"></div>
</div>







<script type="text/javascript">


	



	$("#equipmentlist_item1").click(function () {

            if ($("#equipmentlist_subgroup1").is(":hidden")) {
            $("#equipmentlist_subgroup1").slideDown("fast");
            $('.plus', '#equipmentlist_item1').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item1').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup1").slideUp("fast");
            $('.minus', '#equipmentlist_item1').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item1').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item2").click(function () {

            if ($("#equipmentlist_subgroup2").is(":hidden")) {
            $("#equipmentlist_subgroup2").slideDown("fast");
            $('.plus', '#equipmentlist_item2').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item2').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup2").slideUp("fast");
            $('.minus', '#equipmentlist_item2').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item2').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item3").click(function () {

            if ($("#equipmentlist_subgroup3").is(":hidden")) {
            $("#equipmentlist_subgroup3").slideDown("fast");
            $('.plus', '#equipmentlist_item3').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item3').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup3").slideUp("fast");
            $('.minus', '#equipmentlist_item3').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item3').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item4").click(function () {

            if ($("#equipmentlist_subgroup4").is(":hidden")) {
            $("#equipmentlist_subgroup4").slideDown("fast");
            $('.plus', '#equipmentlist_item4').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item4').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup4").slideUp("fast");
            $('.minus', '#equipmentlist_item4').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item4').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item5").click(function () {

            if ($("#equipmentlist_subgroup5").is(":hidden")) {
            $("#equipmentlist_subgroup5").slideDown("fast");
            $('.plus', '#equipmentlist_item5').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item5').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup5").slideUp("fast");
            $('.minus', '#equipmentlist_item5').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item5').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item6").click(function () {

            if ($("#equipmentlist_subgroup6").is(":hidden")) {
            $("#equipmentlist_subgroup6").slideDown("fast");
            $('.plus', '#equipmentlist_item6').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item6').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup6").slideUp("fast");
            $('.minus', '#equipmentlist_item6').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item6').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item7").click(function () {

            if ($("#equipmentlist_subgroup7").is(":hidden")) {
            $("#equipmentlist_subgroup7").slideDown("fast");
            $('.plus', '#equipmentlist_item7').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item7').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup7").slideUp("fast");
            $('.minus', '#equipmentlist_item7').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item7').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item8").click(function () {

            if ($("#equipmentlist_subgroup8").is(":hidden")) {
            $("#equipmentlist_subgroup8").slideDown("fast");
            $('.plus', '#equipmentlist_item8').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item8').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup8").slideUp("fast");
            $('.minus', '#equipmentlist_item8').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item8').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item9").click(function () {

            if ($("#equipmentlist_subgroup9").is(":hidden")) {
            $("#equipmentlist_subgroup9").slideDown("fast");
            $('.plus', '#equipmentlist_item9').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item9').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup9").slideUp("fast");
            $('.minus', '#equipmentlist_item9').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item9').css({'display' : 'block'});
            }
            });

	$("#equipmentlist_item10").click(function () {

            if ($("#equipmentlist_subgroup10").is(":hidden")) {
            $("#equipmentlist_subgroup10").slideDown("fast");
            $('.plus', '#equipmentlist_item10').css({'display' : 'none'});
            $('.minus', '#equipmentlist_item10').css({'display' : 'block'});
            } else {
            $("#equipmentlist_subgroup10").slideUp("fast");
            $('.minus', '#equipmentlist_item10').css({'display' : 'none'});
            $('.plus', '#equipmentlist_item10').css({'display' : 'block'});
            }
            });

	$(".expandbutton").click(function () {

            $("#equipmentlist_subgroup1, #equipmentlist_subgroup2, #equipmentlist_subgroup3, #equipmentlist_subgroup4, #equipmentlist_subgroup5, #equipmentlist_subgroup6, #equipmentlist_subgroup7, #equipmentlist_subgroup8, #equipmentlist_subgroup9, #equipmentlist_subgroup10").slideDown("fast");
            $('.plus').css({'display' : 'none'});
            $('.minus').css({'display' : 'block'});
            });

	$(".closebutton").click(function () {

            $("#equipmentlist_subgroup1, #equipmentlist_subgroup2, #equipmentlist_subgroup3, #equipmentlist_subgroup4, #equipmentlist_subgroup5, #equipmentlist_subgroup6, #equipmentlist_subgroup7, #equipmentlist_subgroup8, #equipmentlist_subgroup9, #equipmentlist_subgroup10").slideUp("fast");
            $('.minus').css({'display' : 'none'});
            $('.plus').css({'display' : 'block'});
            
            });

	$("#button1").click(function () {
            $("#highlight").animate({'left' : '39px'}, 500);
            $("#slideshow ul").animate({'left' : '0px'}, 500);
            });

	$("#button2").click(function () {
            $("#highlight").animate({'left' : '141px'}, 500);
            $("#slideshow ul").animate({'left' : '-1009px'}, 500);
            });

	$("#button3").click(function () {
            $("#highlight").animate({'left' : '243px'}, 500);
            $("#slideshow ul").animate({'left' : '-2018px'}, 500);
            });

	$("#button4").click(function () {
            $("#highlight").animate({'left' : '346px'}, 500);
            $("#slideshow ul").animate({'left' : '-3027px'}, 500);
            });

	$("#button5").click(function () {
            $("#highlight").animate({'left' : '449px'}, 500);
            $("#slideshow ul").animate({'left' : '-4036px'}, 500);
            });

	$("#button6").click(function () {
            $("#highlight").animate({'left' : '552px'}, 500);
            $("#slideshow ul").animate({'left' : '-5045px'}, 500);
            });

	$("#button7").click(function () {
            $("#highlight").animate({'left' : '655px'}, 500);
            $("#slideshow ul").animate({'left' : '-6054px'}, 500);
            });

	$("#button8").click(function () {
            $("#highlight").animate({'left' : '758px'}, 500);
            $("#slideshow ul").animate({'left' : '-7063px'}, 500);
            });

	$("#button9").click(function () {
            $("#highlight").animate({'left' : '861px'}, 500);
            $("#slideshow ul").animate({'left' : '-8072px'}, 500);
            });

	$("#button10").click(function () {
            $("#highlight").animate({'left' : '964px'}, 500);
            $("#slideshow ul").animate({'left' : '-9081px'}, 500);
            });

	 		

	 		/*$(document).ready(function() {
            if ($("#slideshow ul").css({'left' : '0px'})) {
            $("#highlight").animate({'left' : '39px'}, 500);
            $("#slidervideolink1, .imagedate1, .imagedescription1, .above1").animate({'opacity' : '1'}, 500);
            } 
            else {
            $("#slidervideolink1, .imagedate1, .imagedescription1, .above1").animate({'opacity' : '0'}, 500);
            }
        	}();

        	$(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-1009px'})) {
            $("#highlight").animate({'left' : '141px'}, 500);
            }
        	});

        	$(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-2018px'})) {
            $("#highlight").animate({'left' : '243px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-3027px'})) {
            $("#highlight").animate({'left' : '346px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-4036px'})) {
            $("#highlight").animate({'left' : '449px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-5045px'})) {
            $("#highlight").animate({'left' : '552px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-6054px'})) {
            $("#highlight").animate({'left' : '655px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-7063px'})) {
            $("#highlight").animate({'left' : '758px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-8072px'})) {
            $("#highlight").animate({'left' : '861px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($("#slideshow ul").css({'left' : '-9081px'})) {
            $("#highlight").animate({'left' : '964px'}, 500);
            } 
            });*/




	</script>




	</body>
	</html>