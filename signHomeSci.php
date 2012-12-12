<!DOCTYPE HTML>
<?php
// run initializer to set $username, $password, $database
include("dbinfo.inc.php");
require_once("eventinfo.php");
mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$formName = "insert_homesci.php";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Girl Scouts</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<!-- FORM PG 2 -->
	<div id="form3" class="panel">
		<div class="content">
			<div id="title" style="background-image: url(images/signup.png)">
				<h1>Sign Up Part 3</h1>
			</div>
			<div class="text">
				<div style="color: #f9916b">
					<p>Enter the information of your scouts. Use as many boxes as you
						need.</p>
				</div>
				</br> </br>

				<form action="<?php echo $formName?>" method="POST">
					<table>

						<tr>
							<td>Troop Number <input type="text" size="10" name="troopnumber">
							</td>
						</tr>
						<?php for($i=0; $i<10; $i++){?>
						<tr>
							<td>First Name <input type="text" size="10"
								name="firstname<?php echo $i?>">
							</td>
							<td>Last Name <input type="text" size="10"
								name="lastname<?php echo $i?>">
							</td>
							<td>Date of Birth <input type="text" size="10"
								name="dob<?php echo $i?>">
							</td>
							<td>City of Resident <input type="text" size="10"
								name="city<?php echo $i?>">
							</td>
						</tr>
						<?php }?>
						<td><input type="Submit" value="Submit"></td>
					</table>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
