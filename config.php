<?php
//database connection
if (mysql_connect ( 'localhost', 'root', '' ))
{
	//echo "Connected succesfully";
	//echo "<br />";
}
else
	die ( 'Could not connect: ' . mysql_error () );
mysql_select_db ( 'final' );


?>