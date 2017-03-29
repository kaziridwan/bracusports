<?php
session_start(); 
if(isset($_SESSION['myusername'])){
include("header.php");
?>
<div id="tabDivId" style="
    position: relative;   
    top: 100px;   
    left: 800px;
">
<table id="tabId"><tr>
<td colspan='2' height='38'><p align='center'  style="
    background-color: bisque;
"><a href='books_search.php' style='color: #0000A0' ><h3>Book Facility</h3></a></td></tr>
<tr><td colspan='2' height='38'><p align='center'  style="
    background-color: bisque;
"><a href='cancel_facility.php' style='color: #0000A0'><h3>MySchedule</h3></a></td></tr>

</tr></table>
</div>
<?php  
}
else{ 
include("loginheader.php");} 
?>
<?php
if(isset($_GET['bookmsg']))
{
echo "<h4> $_GET[bookmsg]</h4>";
unset($_GET['bookmsg']);
}
?>

		
			<div id="main">
			<div id="content">
				<h1>Outstanding Facilities</h1>
				<div class="projects">
				
			
					
					<div class="item">
						<div class="image left">
							<a href="#"><img src="images/tennis.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Practice Pad</h4>	
							<p>Cricket is a lifetime sport that can increase physical fitness and health.  What more, cricket is a highly-social sport. Players not only revel in the competition but also the camaraderie that comes with participation in the sport. You can play individually or as part of a team.  It is a sport that offers something for everyone, regardless of age, background or ability. So come and we will teach you this interesting sport. 
 </p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="./services.html"><img src="images/swim.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Swimming</h4>
							<p>We offer professional equipment for people who love to swim. With these equipment, you can really enjoy the swim ming. On the other hand, some people in the gym will be responsible for rescuing people. So, it is a good choice for people who are not good at swimming.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					
					
				</div>
			</div>
			
			
			<div class="cl">&nbsp;</div>
		</div>
		
		<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		<div class="shadow-b"></div>
	</div>
	

	
<?php

if(isset($_SESSION['myusername'])){
include("footer.php");
}  
else{ 
include("login_footer.php");} 
?>