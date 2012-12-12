<?php
include("dbinfo.inc.php");
$con = mysql_connect('localhost', $username,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("GirlScoutsDB", $con);

$query="SELECT * FROM Courses";
$result=mysql_query($query);

// recover ALL the things from this broad query
$count=mysql_numrows($result);





for($i=0; $i<2;$i++)
{
	if(!empty($_POST['firstname'.$i]))
	{
		$troopnumber = $_POST['troopnumber'];
		$firstname = $_POST['firstname'.$i];
		$lastname = $_POST['lastname'.$i];
		$dob = $_POST['dob'.$i];
		$city = $_POST['city'.$i];


		$sql = "INSERT INTO Scouts (troopNumber, firstName,
		lastName, dob, city)
		VALUES ('$troopnumber','$firstname','$lastname','$dob','$city');";

		if (!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error());
		}
	}
}
echo "Your troop has been added! Please complete Form 2 for individual scout sign up";

mysql_close($con);
//header("Location: index.php#form2");

?>
