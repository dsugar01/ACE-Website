<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/jquery.timers.js"></script>
<!--<script type="text/javascript" src="javascript/jquery.mousewheel.min.js"></script>-->
<script type="text/javascript" src="javascript/class.horinaja.jquery.js"></script>



        <link rel="stylesheet" type="text/css" href="horinaja.css">
<link rel="stylesheet" type="text/css" href="main.css">


<script> $(document).ready(function(){
$('#slideshow').Horinaja({
capture:'slideshow',delai:0.3,
duree:2,pagination:false});
});
</script>


</head>
<body>

	<div id="centerdiv">
<div id="tophalfwrapper">
		<div id="logo">
			<a href="index.html"><img src="images/acelogo.png" border="0" alt="ACE East"></a>
		</div>

		
		<a href="index.php" class="nav">
		<div id="navbutton1on">
			<p class="nav" id="home">
				HOME
			</p>
		</div>
		</a>

		<a href="contact.html" class="nav">
		<div id="navbutton2">
			<p class="nav">
				CONTACT
			</p>
		</div>
		</a>

		<a href="equipment.php" class="nav">
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

			<input type="text" id="searchbarinput" value="    search"/>

		<div id="slideshow" class="horinaja">

			<ul style="left:0px">
			<li>
				<img src="headers1/2-1009.jpg"><img src="images/redcircle2.png" class="above3">
				<div id="slidervideolink3">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription3">a short description of the system pictured can go here :)</p>
				<p class="imagedate3">December 18th 2012</p>

			</li>
			<li>
				<img src="headers1/3-1009.jpg"><img src="images/redcircle2.png" class="above4">
				<div id="slidervideolink4">
				<p class="videolink">watch video</p>
			</div>
				<p class="imagedescription4">a short description of the system pictured can go here :)</p>
				<p class="imagedate4">December 18th 2012</p>

			</li>
			</ul>


		</div>

<!--		<div id="slideshowbuttons">
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

		</div>



<div id="bottomhalfwrapper">
<div id="content">
<div id="contentleft">

	<div id="newsfeedheader">
		<span class="ace">ace </span><span class="headertext">News Feed</span><span class="headerendtext">newsfeed</span>
	</div>

	<div id="newsfeed">
		<?php
		if(! (mysql_connect("mysql-aceeast324581.aceeast.comcastbiz.net", "aceeast324581", "AceIsC00l") && mysql_select_db("aceeast324581"))){
			print("There was an error: mysql_error()");
			die();
		}
		else{
			$query = "SELECT * from ace_news";
			$result = mysql_query($query);
			if(mysql_num_rows($result) < 1){
				print("No articles currently exist");
			}
			else{
			while($row = mysql_fetch_array($result)){
				if(strlen($row[articleText]) > 186){
					$shortenedText = substr($row[articleText],0,186);
				}
				else{
					$shortenedText = $row[articleText];
				}
				print("<div class='newsitem'>");
					print("<div class='newstitle'>");
						print("<a href='' class='newstitletext'>$row[title]</a>");
					print("</div>");
					print("<div class='newsthumb'>");
						print("<a href=''><img src='$row[image]'></a>");
					print("</div>");
					print("<div class='newsarticle'>");
						print("<p class='newstext'>$shortenedText</p>");
					print("</div>");
					print("<div class='newsdate'>");
						$formattedDate = date('F j, Y', strtotime($row[created]));
						print("<p class='newsdatetext'>$formattedDate</p>");
					print("</div>");
				print("</div>");
			}	
			}
		}
		?>
		<!-- <div id="newsitem1">

			<div class="newstitle">
				<a href="" class="newstitletext">Test test Test Title RRaaa</a>
			</div>
			<div class="newsthumb">
				<a href=""><img src="images/newsimages/newsthumb1.png"></a>
			</div>
			<div class="newsarticle">
				<p class="newstext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
			</div>
			<div class="newsdate">
				<p class="newsdatetext">October 16, 2012</p>
			</div>

		</div>

		<div id="newsitem2">

			<div class="newstitle">
				<a href="" class="newstitletext">Test test Test Title RRaaa</a>
			</div>
			<div class="newsthumb">
				<a href=""><img src="images/newsimages/newsthumb1.png"></a>
			</div>
			<div class="newsarticle">
				<p class="newstext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
			</div>
			<div class="newsdate">
				<p class="newsdatetext">October 16, 2012</p>
			</div>

		</div>

		<div id="newsitem3">

			<div class="newstitle">
				<a href="" class="newstitletext">Test test Test Title RRaaa</a>
			</div>
			<div class="newsthumb">
				<a href=""><img src="images/newsimages/newsthumb1.png"></a>
			</div>
			<div class="newsarticle">
				<p class="newstext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
			</div>
			<div class="newsdate">
				<p class="newsdatetext">October 16, 2012</p>
			</div>

		</div>

		<div id="newsitem4">

			<div class="newstitle">
				<a href="" class="newstitletext">Test test Test Title RRaaa</a>
			</div>
			<div class="newsthumb">
				<a href=""><img src="images/newsimages/newsthumb1.png"></a>
			</div>
			<div class="newsarticle">
				<p class="newstext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
			</div>
			<div class="newsdate">
				<p class="newsdatetext">October 16, 2012</p>
			</div>

		</div>

		<div id="newsitem5">

			<div class="newstitle">
				<a href="" class="newstitletext">Test test Test Title RRaaa</a>
			</div>
			<div class="newsthumb">
				<a href=""><img src="images/newsimages/newsthumb1.png"></a>
			</div>
			<div class="newsarticle">
				<p class="newstext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
			</div>
			<div class="newsdate">
				<p class="newsdatetext">October 16, 2012</p>
			</div>

		</div> -->

	</div>

</div>

<div id="contentright">

	<div id="contactheader">
		<span class="ace">ace </span><span class="headertext">Contact Us</span><span class="headerendtext">contacts</span>
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
			<span class="conlocation">Baltimore/DC</span><span class="phonenumb">(410)-243-4181</span>
				</td>
			</tr>
			<tr>
				<td id="losangelas">
			<span class="conlocation">Los Angelas</span><span class="phonenumb">(818)-794-9410</span>
				</td>
			</tr>
			<tr>
				<td id="fax">
			<span class="conlocation">Fax</span><span class="phonenumb">(443)-524-0210</span>
				</td>
			</tr>
		</table>
			<table id="individualcontacts">
				<tr id="left">
					<td>
				<span class="conname">Randy Greer Sr.<br /></span>
				<p class="coninfo"><i>Email:</i> randy@aceeast.com<br />
									Phone: 410.340.9674</p>
				</td>
				<td>
				<span class="conname">Marielle<br /></span>
				<p class="coninfo"><i>Email:</i> marielle@aceeast.com<br />
					Phone: 443.255.9114</p>
					</td>
			</tr>

			<tr id="right">
				<td>

				<span class="conname">Randy Greer Jr.<br /></span>
				<p class="coninfo"><i>Email:</i> randyjr@aceeast.com<br />
					Phone: 410.404.3836</p>
				</td>
                <td>
                <span class="conname">Cathy Welsh<br /></span>
                <p class="coninfo"><i>Email:</i> cwelsh@aceeast.com<br />
                	Phone: 410.243.4181</p>
                </td>
			</tr>
		</table>

		</div>

		<div id="partnersheader">
		<span class="ace">ace </span><span class="headertext">Our Partners</span><span class="headerendtext">links</span>
		</div>

		<div id="linklist">
			<a href="" class="partnerslink">Nettmann Systems International</a><br />
			<a href="" class="partnerslink">SuperTechno</a><br />
			<a href="" class="partnerslink">JLFisher</a><br />
			<a href="" class="partnerslink">R-T-S</a><br />
			<a href="" class="partnerslink">PMT - Professional Motion Technology</a><br />
			<a href="" class="partnerslink">SpiderCam</a><br />
		</div>



	</div>
</div>



	<div id="iconwrapper">
		<a href="http://www.facebook.com/AtlanticCineEquipment?v=wall" target="new"><img src="images/icons/facebookicon.png" class="icon"></a>
		<a href="http://www.imdb.com/company/co0172046/" target="new"><img src="images/icons/imdbicon.png" class="icon"></a>
		<a href="http://www.youtube.com/user/AtlanticCineEquip?feature=mhsn#p/p" target="new"><img src="images/icons/youtubeicon.png" class="icon"></a>
	</div>


	<div id="payment">
		<a href="payment.html" class="paymentlink">payment</a>
	</div>


	</div>

	</div>



	</div>

	<script type="text/javascript">

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

	 		

	 		var Slideshow = new function() {
            if ($j("#slideshow ul").css({'left' : '0px'})) {
            $j("#highlight").animate({'left' : '39px'}, 500);
            $j("#slidervideolink1, .imagedate1, .imagedescription1, .above1").animate({'opacity' : '1'}, 500);
            } 
            else {
            $j("#slidervideolink1, .imagedate1, .imagedescription1, .above1").animate({'opacity' : '0'}, 500);
            }
        	}();

        	$(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-1009px'})) {
            $j("#highlight").animate({'left' : '141px'}, 500);
            }
        	});

        	$(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-2018px'})) {
            $j("#highlight").animate({'left' : '243px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-3027px'})) {
            $j("#highlight").animate({'left' : '346px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-4036px'})) {
            $j("#highlight").animate({'left' : '449px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-5045px'})) {
            $j("#highlight").animate({'left' : '552px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-6054px'})) {
            $j("#highlight").animate({'left' : '655px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-7063px'})) {
            $j("#highlight").animate({'left' : '758px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-8072px'})) {
            $j("#highlight").animate({'left' : '861px'}, 500);
            }
            });

            $(document).ready(function(){
            if ($j("#slideshow ul").css({'left' : '-9081px'})) {
            $j("#highlight").animate({'left' : '964px'}, 500);
            } 
            });

            




	</script>




	</body>
	</html>