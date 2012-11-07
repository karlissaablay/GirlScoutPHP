<?php
include("dbinfo.inc.php");
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database."); 

$query = "INSERT INTO GirlScouts VALUES
	(
	'',
	'$_POST[troopNum]',
	'$_POST[leaderN]',
	'$_POST[leaderP]',
	''
	)";
mysql_query($query);

mysql_close();
header("Location: index.php");
?> 
