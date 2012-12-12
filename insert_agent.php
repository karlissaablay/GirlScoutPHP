<?php
ob_start();
include("dbinfo.inc.php");
include("eventinfo.php");

// Connect to mySQL and select database
$con = mysql_connect('localhost', $username,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("GirlScoutsDB", $con);

// Choose table
$query="SELECT * FROM CadetteSpecialAgent";
$result=mysql_query($query);

// recover ALL the things from this broad query
$count=mysql_numrows($result);
$tempCount = 0;

// Check if total amount of entries will exceed total amount
// of scouts allowed in event.
for($i=0; $i<10; $i++){
	if(!empty($_POST['firstname'.$i]))
	{
		$tempCount++;
	}
}

// Check to waitlist scouts
// If waitlist, add to waitlist
if($tempCount > $eventMax-$count){
	for($i=0; $i<10;$i++)
	{
		if(!empty($_POST['firstname'.$i]))
		{
			$troopnumber = $_POST['troopnumber'];
			$firstname = $_POST['firstname'.$i];
			$lastname = $_POST['lastname'.$i];
			$dob = $_POST['dob'.$i];
			$city = $_POST['city'.$i];


			$sql = "INSERT INTO WaitlistCadetteSpecAgnt (troopNumber, firstName,
			lastName, dob, city)
			VALUES ('$troopnumber','$firstname','$lastname','$dob','$city');";

			if (!mysql_query($sql,$con))
			{
				die('Error: ' . mysql_error());
			}
		}
	}
	echo "Your total amount of scouts exceeds the max amount allowed in event. Scouts added to waitlist.";
}
else{
	for($i=0; $i<10;$i++)
	{
		if(!empty($_POST['firstname'.$i]))
		{
			$troopnumber = $_POST['troopnumber'];
			$firstname = $_POST['firstname'.$i];
			$lastname = $_POST['lastname'.$i];
			$dob = $_POST['dob'.$i];
			$city = $_POST['city'.$i];


			$sql = "INSERT INTO CadetteSpecialAgent (troopNumber, firstName,
			lastName, dob, city)
			VALUES ('$troopnumber','$firstname','$lastname','$dob','$city');";

			if (!mysql_query($sql,$con))
			{
				die('Error: ' . mysql_error());
			}
		}
	}
	echo "Scouts added to event.";
}

mysql_close($con);
header("Refresh:5; Location: index.php#waitlist");
ob_flush();
?>
