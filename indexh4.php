<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/jquery.timers.js"></script>
<!--<script type="text/javascript" src="javascript/jquery.mousewheel.min.js"></script>-->
<script type="text/javascript" src="javascript/class.horinaja.jquery.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

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
			<a href="indexh4.php"><img src="images/acelogo.png" border="0" alt="ACE East"></a>
		</div>

		
		<a href="indexh4.php" class="nav">
		<div id="navbutton1on">
			<p class="nav" id="home">
				HOME
			</p>
		</div>
		</a>

		<a href="contact.php" class="nav">
		<div id="navbutton2">
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
						print("<a href='news.php?id=$row[id]' class='newstitletext'>$row[title]</a>");
					print("</div>");
					if($row[showImage] == 'yes' && $row[image] != ''){
					print("<div class='newsthumb'>");
						print("<a href=''><img src='$row[image]' width='450' height='150'></a>");
					print("</div>");
					}
					else{
					print("<div class='newsthumb'>");
					print("</div>");
					}
					print("<div class='newsarticle'>");
						print("<p class='newstext'>$shortenedText...<a href='news.php?id=$row[id]' class='newstext'>see more</a></p>");
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
			<span class="conlocation">Los Angeles</span><span class="phonenumb">(818)-794-9410</span>
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
				<p class="coninfo"><i>Email:</i><a class="coninfo1" href="mailto:randy@aceeast.com">randy@aceeast.com</a><br />
									Phone: 410.340.9674</p>
				</td>
				<td>
				<span class="conname">Marielle Greer<br /></span>
				<p class="coninfo"><i>Email:</i><a class="coninfo1" href="mailto:marielle@aceeast.com">marielle@aceeast.com</a><br />
					Phone: 443.255.9114</p>
					</td>
			</tr>

			<tr id="right">
				<td>

				<span class="conname">Randy Greer Jr.<br /></span>
				<p class="coninfo"><i>Email:</i><a class="coninfo1" href="mailto:randywrap@mac.com">randywrap@aceeast.com</a><br />
					Phone: 410.404.3836</p>
				</td>
                <td>
                </td>
			</tr>
		</table>

		</div>

		<div id="partnersheader">
		<span class="ace">ace </span><span class="headertext">Our Partners</span><span class="headerendtext">links</span>
		</div>

		<div id="linklist">
            <a href="http://nettmannsystems.com/" class="partnerslink">Nettmann Systems International</a><br />
			<a href="http://www.supertechno.com/" class="partnerslink">SuperTechno</a><br />
			<a href="http://www.jlfisher.com/" class="partnerslink">JLFisher</a><br />
			<a href="http://www.r-t-s.org/index.html" class="partnerslink">R-T-S</a><br />
			<a href="http://www.mypmt.de/" class="partnerslink">PMT - Professional Motion Technology</a><br />
		</div>



	</div>
</div>



	<div id="iconwrapper">
		<a href="http://www.facebook.com/AtlanticCineEquipment?v=wall" target="new"><div class="icon1"></div></a>
		<a href="http://www.imdb.com/company/co0172046/" target="new"><div class="icon2"></div></a>
		<a href="http://www.youtube.com/user/AtlanticCineEquip?feature=mhsn#p/p" target="new"><div class="icon3"></div></a>
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