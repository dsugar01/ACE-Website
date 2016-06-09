<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="javascript/jquery-1.10.1.min.js"></script>-->
<script type="text/javascript" src="javascript/jquery.timers.js"></script>
<!--<script type="text/javascript" src="javascript/jquery.mousewheel.min.js"></script>-->
<script type="text/javascript" src="javascript/class.horinaja.jquery.js"></script>



        <link rel="stylesheet" type="text/css" href="horinaja.css">
<link rel="stylesheet" type="text/css" href="equipment.css">


<script> $(document).ready(function(){
$('#slideshow').Horinaja({
capture:'slideshow',delai:0.3,
duree:2,pagination:false});
});
</script>


<!-- <script src="jquery.columnizer.js" type="text/javascript" charset="utf-8"></script> -->
<script src="autocolumn.js" type="text/javascript" charset="utf-8"></script>
<!--	<script>
		$(function(){
			$('#creditscontainer, #datasheetscontainer').columnize({ columns: 2 });
		});
	</script> --> 
    
<script>
$(function() {
	$('#creditscontainer').columnize({ columns: 2});
	$('#datasheetscontainer').columnize({ columns: 2});
	});
</script>








</head>
<body>

	<div id="centerdiv">
<div id="tophalfwrapper">
		<div id="logo">
			<a href="indexh4.php"><img src="images/acelogo.png" border="0" alt="ACE East"></a>
		</div>

		
		<a href="indexh4.php" class="nav">
		<div id="navbutton1">
			<p class="nav" id="home">
				HOME
			</p>
		</div>
		</a>

		<a href="contact.php" class="nav">
		<div id="navbutton2on">
			<p class="nav">
				CONTACT US
			</p>
		</div>
		</a>

		<a href="equipmentTest.php" class="nav">
		<div id="navbutton3">
			<p class="nav">
				EQUIPMENT
			</p>
		</div>
		</a>

		<a href="credits.php" class="nav">
		<div id="navbutton4">
			<p class="nav">
				CREDITS
			</p>
		</div>
		</a>

            <form id="searchform" name='searchform' method='post' action='search.php'>
			<input type="text" name="search" id="searchbarinput" placeholder="search"/>
            </form>

		<div id="slideshow" class="horinaja">

			<ul style="left:0px">
			<!-- <li>
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

			</li> -->
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

			<span class="slideexpandbutton">expand</span><span class="slideminimizebutton">minimize</span>
		</div>

		<!-- <div id="slideshowbuttons">
				<table>
					<tr>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button1">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button2">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button3">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button4">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button5">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button6">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button7">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button8">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button9">
						</td>
						<td>
							<img src="images/slider/slideshowimagebutton.png" id="button10">
						</td>
					</tr>
				</table>

				<img src="images/slider/currentimagehighlight.png" id="highlight">

			</div> -->



<div id="bottomhalfwrapper">
<div id="content">

<!-- THIS IS WHERE YOU WILL PUT YOUR CONTACT FORM FOR THE CONTACT PAGE, AND WHERE YOU WILL PUT THE NEWS ARTICLES, THEY CAN ALL JUST BE IN ONE LONG FEED LIKE A BLOG -->
<?php
print("<p class='instructions'>All fields with an * are required</p>");
print("<form name='contactform' method='post' action='contact2.php'>");
print("<table>");
print("<tr>");
print("<td valign='top'>");
print("<label for='first_name'>* First Name</label>");
print("</td>");
print("<td valign='top'>");
print("<input type='text' name='first_name' maxlength='50' size='30'>");
print("</td>");
print("</tr>");
print("<tr>");
print("<td valign='top'>");
print("<label for='last_name'>* Last Name</label>");
print("</td>");
print("<td valign='top'>");
print("<input type='text' name='last_name' maxlength='50' size='30'>");
print("</td>");
print("</tr>");
print("<tr>");
print("<td valign='top'>");
print("<label for='email'>* Email Address</label>");
print("</td>");
print("<td valign='top'>");
print("<input type='text' name='email' maxlength='80' size='30'>");
print("</td>");
print("</tr>");
print("<tr>");
print("<td valign='top'>");
print("<label for='phone'>Phone Number</label>");
print("</td>");
print("<td valign='top'>");
print("<input type='text' name='phone' maxlength='30' size='30'>");
print("</td>");
print("</tr>");
print("<tr>");
print("<td valign='top'>");
print("<label for='comments'>Comments</label>");
print("</td>");
print("<td valign='top'>");
print("<textarea name='comments' maxlength='1000' cols='80' rows='20'></textarea>");
print("</td>");
print("</tr>");
print("<tr>");
print("<td colspan='2' style='text-align:center'>");
print("<input type='submit' value='Submit'>");
print("</td>");
print("</tr>");
print("</table>");
print("</form>");
?>

</div>

</div>






	
</div>





<div id="footer">



<div id="footercontent">

	<div id="footercentering">

<div id="footerleft">

<div id="contactheader">
		<span class="headerendtext2">contacts</span>
	</div>

	<div id="contacts">
		<table id="officenumbers">
			<tr>
				<td id="newyork">
			<span class="conlocation">New York</span><span class="phonenumb">(212)-944-0003</span>
				</td>
			</tr>
			<tr>
				<td id="baltimore">
			<span class="conlocation">Baltimore</span><span class="phonenumb">(410)-243-4181</span>
				</td>
			</tr>
			<tr>
				<td id="losangelas">
			<span class="conlocation">Los Angeles</span><span class="phonenumb">(818)-794-9410</span>
				</td>
			</tr>
			<tr>
				<td id="fax">
			<span class="conlocation">Fax</span><span class="phonenumb">(443)-524-0210</span>
				</td>
			</tr>
		</table>
			<table class="individualcontacts">
				<tr class="left">
					<td>
				<span class="conname">Randy Greer Sr.<br /></span>
				<p class="coninfo"><i>Email:</i><a class="coninfo1" href="mailto:randy@aceeast.com">randy@aceeast.com</a><br />
									Phone: 410.340.9674</p>
				</td>
				<td>
				<span class="conname">Marielle Greer<br /></span>
				<p class="coninfo"><i>Email:</i><a class="coninfo1" href="mailto:marielle@aceeast.com">marielle@aceeast.com</a><br />
					Phone: 443.255.9114</p>
					</td>
			</tr>

		</table>

		</div>

</div>

<div id="footerright">

<div id="partnersheader">
		<span class="headerendtext2">links</span>
		</div>

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
		<a href="http://www.youtube.com/user/AtlanticCineEquip?feature=mhsn#p/p" target="new"><div class="icon3"></div></a>
	</div>

	<div id="right">

		<table class="individualcontacts">
				<tr class="left">
					<td>
				<span class="conname">Randy Greer Jr.<br /></span>
				<p class="coninfo"><i>Email:</i><a class="coninfo1" href="mailto:randywrap@mac.com">randywrap@mac.com</a><br />
					Phone: 410.404.3836</p>
                 </td>
                 <td>
                 
				</div>
			</td>
		</tr>
	</table>

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