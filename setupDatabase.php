<?php
include("dbinfo.inc.php");

//Connect to MySQL
mysql_connect(localhost,$username,$password);

$con = mysql_connect(localhost,$username,$password);

// Make the GirlScouts database
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

if (mysql_query("CREATE DATABASE $database",$con))
{
	echo "Database created.";
}
else
{
	echo "Error creating database: " . mysql_error();
}

@mysql_select_db($database) or die( "Unable to select database in setup.php");

//Create Empty Tables
//All Troops
//Consists of:
//  id: unique counter for each troop (order of registration)
//	Troop number
//  Troop leader name
//	Troop leader phone
//	Troop leader email
//	Troop number
$query="CREATE TABLE AllTroops
		(
		id int(6) PRIMARY KEY NOT NULL auto_increment,
		troopleader varchar(30) NOT NULL,
		troopleadernumber varchar(10) NOT NULL,
		troopleaderemail varchar(30) NOT NULL,
		troopnumber varchar(10) NOT NULL,
		scoutList varchar(100) NOT NULL)";
mysql_query($query);

/*Test Only
$query = "INSERT INTO AllTroops VALUES ('','troopleader','troopleadernumber',
'leaderemail','troopnumber', 'firstname', 'lastname', 'dob', 
'Scout List')";
mysql_query($query);*/


//Invited Troops
$query="CREATE TABLE InvitedTroops
		(
		id int(6) PRIMARY KEY NOT NULL auto_increment,
		troopNumber varchar(6) NOT NULL,
		leaderName varchar(30) NOT NULL,
		leaderPhone varchar(15) NOT NULL,
		leaderEmail varchar(30) NOT NULL,
		scoutList varchar(100) NOT NULL)";
mysql_query($query);

//Waitlisted Troops

//Girl Scout Names
$query="CREATE TABLE Scouts
		(
		id int(6) PRIMARY KEY NOT NULL auto_increment,
		troopNumber varchar(6) NOT NULL,
		firstName varchar(20) NOT NULL,
		lastName varchar(20) NOT NULL,
		dob varchar(12) NOT NULL,
		city varchar(20) NOT NULL)";
mysql_query($query);
		

mysql_close();
?>
