<?php
ob_start();
include("dbinfo.inc.php");

$trpLeader = $_POST['troopleader'];
$trpLeaderNum = $_POST['troopleadernumber'];
$trpLeaderEmail = $_POST['troopleaderemail'];
$trpnumber = $_POST['troopnumber'];

$con = mysql_connect('localhost', $username,$password);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($database, $con);


$sql = "INSERT INTO AllTroops (troopleader, troopleadernumber,
troopleaderemail, troopnumber)
VALUES ('$trpLeader','$trpLeaderNum','$trpLeaderEmail','$trpnumber');";

if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}

mysql_close($con);

//Send Email 
$value = stripslashes($_POST['value']);
$name = stripslashes($_POST['troopleader']);
$email = stripslashes($_POST['troopleaderemail']);

$message = "Hello Troop Leader,\n
I have recieved your information. If your troop has been registered, please update me as soon as possible if there are any changes in the number of girls who will be attending. If your troop has been put onto the WAITLIST, I will notify you once room have become available to accommodate your troop. Thank you for your interest in the program.\n
Very Respectfully,\n
Elizabeth\n
BOLD Student Managers\n
Girl Scout Outreach Program\n
(303) 735-1353\n
http://engineering.colorado.edu/bold/k12/girlscouts/index.html";


$subject = "CU Girl Scouts";
$headers = 'From: ' . "cugirlscouts@gmail.com" . "\r\n".
		'Reply-To: '. "cugirlscouts@gmail.com" ."\r\n" .
		'X-Mailer: PHP/' . phpversion();

mail($email, $subject, $message, $headers);

header("Location: index.php#form2");
ob_flush();
?>