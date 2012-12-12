<!DOCTYPE HTML>
<?php
// run initializer to set $username, $password, $database
include("dbinfo.inc.php");
require_once("eventinfo.php");
mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Girl Scouts</title>
<link href="style.css" rel="stylesheet" type="text/css">

<!-- Scroller Code -->
<script src="jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
		       $("a").bind("click",function(event){
		           event.preventDefault();
		           var target = $(this).attr("href");
		           $("html, body").stop().animate({
		               scrollLeft: $(target).offset().left,
					   scrollTop: $(target).offset().top
		           }, 1200);
		       });
			});
			
<!-- Horizontal scrollbar will be hidden.-->
document.documentElement.style.overflow = 'hidden';

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

</script>
</head>
<body>

	<!-- HOME -->
	<div id="home" class="panel">
		<ul id="banner">
			<li><a href="#home" style="color: #ffa600">To Home</a>
			</li>
			<li><a href="#events" style="color: #f97015">To Events</a>
			</li>
			<li><a href="#form" style="color: #df2a30">To Form</a></li>
			<li><a href="#form2" style="color: #df2a30">To Form PG.2</a></li>
			<li><a href="#waitlist" style="color: #8c2c8f">To Waitlist</a>
			</li>
		</ul>

		<div id="intro">
			<b>Mission: To enlighten young women of opportunities in the fields
				of science and engineering through interactive Girl Scout badges
				with our student mentors to encourage teamwork and education.</b> <br>
			<br>The BOLD Center provides Girl Scout badge workshops to introduce
			K-12 girls to the exciting world of engineering and to enhance the
			program's relationship with the local Girl Scout community. Through
			these events, Girl Scouts learn about the exciting opportunities in
			science and engineering and learn how engineering is essential to
			health, happiness and safety. Scouts work in teams with CU student
			mentors in fun learning atmosphere.
		</div>

	</div>

	<!-- EVENTS -->
	<div id="events" class="panel">
		<div class="content">
			<div id="title" style="background-image: url(images/events.png)">
				<h1>Events</h1>
			</div>
			<div class="text">
				<div id="rank" style="background-image: url(images/brownies.png)">
					<h2>Brownies</h2>
				</div>

				<table>
					<col width="350">

					<tr>
						<td>December 1, 2012</td>
					</tr>
					<!-- Event Name -->
					<tr>
						<td>Computer Expert</td>
						<td>Home Scientist</td>
					</tr>

					<!-- Event Time -->
					<tr>
						<td>10:30am - 12pm</td>
						<td>12:30pm - 2pm</td>
					</tr>

					<!-- Event Description -->
					<tr>
						<td>Step-by-Step, learn how to navigate the Internet safely.
							Bookmark your favorite websites. Discover the Girl Scout links to
							fun and games. Finally, talk to someone who uses a computer for
							work.</td>
						<td>By paying careful attention during experiments, scientists
							learn new thingseven if they've done the test before. That means
							you don't have to grow up to be a scientist. You're a scientist
							every time you do an experiment! In this badge, find ou where
							science has been hiding in your own home.</td>
					</tr>
				</table>


				<div id="rank" style="background-image: url(images/juniors.png)">
					<h2>Junior</h2>
				</div>
				<table>
					<col width="350">

					<tr>
						<td>February 18, 2012</td>
					</tr>
					<!-- Event Name-->
					<tr>
						<td>Aerospace</td>
						<td>Science Discovery</td>

						<!-- Event Time-->
					
					
					<tr>
						<td>10:00am - 12:00pm</td>
						<td>12:30pm - 2:30pm</td>
					</tr>
					<tr>
						<td>Come fly a kite or build a paper airplane. Join us as we learn
							about airplanes, women in the space industry, space launches and
							technologies, and help us celebrate with games and festivities.</td>
						<td>What is an engineer? In Science Discovery, girls will learn
							what it is like to become an engineer by testing friction and
							learning the secret of optical illusions.</td>
					</tr>
				</table>

				<div id="rank" style="background-image: url(images/cadettes.png)">
					<h2>Cadette</h2>
				</div>
				<table>
					<col width="350">

					<tr>
						<td>December 1, 2012</td>
					</tr>
					<tr>
						<td>Special Agent</td>
					</tr>
					<tr>
						<td>2:30pm - 5pm</td>
					</tr>
					<tr>
						<td>A special agent wears many hats: detective, scientist,
							psychologist, enforcer of the law. No wonder novels an shows
							about their work are so popular! In this badge, grab your
							magnifying glass and your microscope, and uncover your skills in
							one of the most exciting and demanding jobs for investigative
							minds.</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<!-- FORM PG. 1-->
	<div id="form" class="panel">
		<div class="content">
			<div id="title" style="background-image: url(images/signup.png)">
				<h1>Sign Up Part 1</h1>
			</div>
			<div class="text">

				<div id="left">Please enter your information in the boxes provided.
					Once entered, you will be sent to a page where you can enter your
					scout member's names.</div>

				<div id="right">
					<h1 style="line-height: 20px">Troop Leader Information</h1>
					<form action="form.php" method="post" name="contact">
						<input type="hidden" name="value" id="value" value="submit" />
						Name: <input type="text" name="troopleader" id="name" /><br />
						Email: <input type="text" name="troopleaderemail" id="email" /><br />
						Phone Number: <input type="text" name="troopleadernumber"
							id="number" /><br /> Troop Number: <input type="text"
							name="troopnumber" id="trpnumber" /><br /> <input type="submit"
							value="Submit"
							style="border: solid; border-color: #CCCCCC; border-width: 1px;" />
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- FORM PG 2 -->
	<div id="form2" class="panel">
		<div class="content">
			<div id="title" style="background-image: url(images/signup.png)">
				<h1>Sign Up Part 2</h1>
			</div>

			<p>Click the event you wish to sign up for.</p>
			</br>

			<div id="brownies">
				<table>
					<tr>
						<td><div id="rank"
								style="background-image: url(images/brownies.png)">Brownies</div>
						</td>
					</tr>
					<tr>
						<td>
							<ul>
								<li><a href="compExpSignUp.php">Computer Expert</a></li>
								<li><a href="signCompExp.php">Home Scientist</a></li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			
			<div id="juniors">
				<table>
					<tr>
						<td><div id="rank"
								style="background-image: url(images/juniors.png)">Brownies</div>
						</td>
					</tr>
					<tr>
						<td>
							<ul>
								<li><a href="signAero.php">Aerospace</a></li>
								<li><a href="signSciDisc.php">Science Discovery</a></li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			
			<div id="cadettes">
				<table>
					<tr>
						<td><div id="rank"
								style="background-image: url(images/cadettes.png)">Brownies</div>
						</td>
					</tr>
					<tr>
						<td>
							<ul>
								<li><a href="signAgent.php">Special Agent</a></li>
							</ul>
						</td>
					</tr>
				</table>
			</div>

		</div>
	</div>

	<!-- WAITLIST -->
	<div id="waitlist" class="panel">
		<div class="content">
			<div id="title"
				style="background-image: url(images/waitlist.png); margin-top: 10px;">
			</div>
			<div class="text">
				<table>
					<col width="250">
					<div id="rank" style="background-image: url(images/brownies.png)">
						<h2>Brownies</h2>
					</div>
					<tr>
						<td>Computer Expert</td>
						<td>Home Scientist</td>
					</tr>
					<tr>
						<td>Troops Attending</td>
						<td>Troops Attending</td>
					</tr>
					<tr>
						<td><?php
						$query = 'SELECT DISTINCT troopNumber FROM BrownieComputerExpert';
						$result = mysql_query($query);
						while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					   }
					   ?>
						</td>
						<td><?php
						$query = 'SELECT DISTINCT troopNumber FROM BrownieHomeScientist';
						$result = mysql_query($query);
						while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					   }
					   ?>
						</td>
					</tr>

					<tr>
						<td>Spots Remaining</td>
						<td>Spots Remaining</td>
					</tr>
					</td>
					</tr>

					<tr>
						<td><?php
						$query = 'SELECT firstName FROM BrownieComputerExpert';
						$result = mysql_query($query);
						$count= $eventMax-mysql_numrows($result);
						echo $count;
						?>
						</td>

						<td><?php
						$query = 'SELECT firstName FROM BrownieHomeScientist';
						$result = mysql_query($query);
						$count= $eventMax-mysql_numrows($result);
						echo $count;
						?>
						</td>
					</tr>
					<tr>
						<td>Waitlisted</td>
						<td>Waitlisted</td>
					</tr>
					<tr>
						<td><?php
						$query = 'SELECT DISTINCT troopNumber FROM WaitlistBrownieCompExp';
						$result = mysql_query($query);
						while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
						</td>
						<td><?php
						$query = 'SELECT DISTINCT troopNumber FROM WaitlistBrownieHomeSci';
						$result = mysql_query($query);
						while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value. '<br>';
						 }
					  echo '<br>';
}
?>
						</td>
					</tr>
					</col>
				</table>
				<div>
					<div id="rank" style="background-image: url(images/juniors.png)">
						<h2>Junior</h2>
					</div>
					<table>
						<col width="250">
						<tr>
							<td>Aerospace</td>
							<td>Science Discovery</td>
						</tr>

						<tr>
							<td>Troops Attending</td>
							<td>Troops Attending</td>
						</tr>

						<tr>
							<td><?php
							$query = 'SELECT DISTINCT troopNumber FROM JuniorAerospace';
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
							</td>
							<td><?php
							$query = 'SELECT DISTINCT troopNumber FROM JuniorScienceDiscovery';
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
							 }
					  }
					  ?>
						
						
						<tr>
							<td>Spots Remaining</td>
							<td>Spots Remaining</td>
						</tr>
						</td>
						</tr>
						<td><?php
						$query = 'SELECT firstName FROM JuniorAerospace';
						$result = mysql_query($query);
						$count= $eventMax-mysql_numrows($result);
						echo $count;
						?>
						</td>
						<td><?php
						$query = 'SELECT firstName FROM JuniorScienceDiscovery';
						$result = mysql_query($query);
						$count= $eventMax-mysql_numrows($result);
						echo $count;
						?>
						</td>
						<tr>
							<td><?php
							$query = 'SELECT COUNT(firstName) FROM JuniorScienceDiscovery';
							$result = $eventMax-mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
							</td>
						</tr>
						<tr>
							<td>Waitlisted</td>
							<td>Waitlisted</td>
						</tr>

						<tr>
							<td><?php
							$query = 'SELECT DISTINCT troopNumber FROM WaitlistJuniorAero';
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
							</td>
							<td><?php
							$query = 'SELECT DISTINCT troopNumber FROM WaitlistJuniorSciDisc';
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
							</td>
						</tr>
					</table>
					<div id="rank" style="background-image: url(images/cadettes.png)">
						<h2>Cadette</h2>
					</div>
					<table>
						<col width="250">
						<tr>
							<td>Special Agent</td>
						</tr>

						<tr>
							<td>Troops Attending</td>
						</tr>

						<tr>
							<td><?php
							$query = 'SELECT DISTINCT troopNumber FROM CadetteSpecialAgent';
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
							</td>
						</tr>

						<tr>
							<td>Spots Remaining</td>
						</tr>
						<tr>
							<td><?php
							$query = 'SELECT firstName FROM CadetteSpecialAgent';
							$result = mysql_query($query);
							$count= $eventMax-mysql_numrows($result);
							echo $count;
							?>
							</td>
						</tr>
						<tr>
							<td>Waitlisted</td>
						</tr>

						<tr>
							<td><?php
							$query = 'SELECT DISTINCT troopNumber FROM WaitlistJCadetSpecAgnt';
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
					foreach($row as $key => $value){
						echo $key.': '.$value.'<br>';
						 }
					  }
					  ?>
							</td>
						</tr>
						</col>
					</table>
				</div>
			</div>

</body>
</html>
