<?php
include("dbinfo.inc.php");

$trpLeader = $_POST['troopleader'];
$trpLeaderNum = $_POST['troopleadernumber'];
$trpLeaderEmail = $_POST['troopleaderemail'];
$trpnumber = $_POST['troopnumber'];
//$firstname = $_POST['firstname'];
//$lastname = $_POST['lastname'];
//$dob = $_POST['dob'];
//$city = $_POST['city'];

$con = mysql_connect('localhost', $username,$password);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("GirlScouts1", $con);


$sql = "INSERT INTO AllTroops (troopleader, troopleadernumber,
troopleaderemail, troopnumber)
VALUES ('$trpLeader','$trpLeaderNum','$trpLeaderEmail','$trpnumber');";

if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
echo "record added";

mysql_close($con);
header("Location: index.php#form2");

?>
