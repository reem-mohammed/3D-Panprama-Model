<?php 

include 'config.php';

$action=$_GET['action'];

if($action=='sub'){
	$val = $_GET['id']; 
	$query="SELECT * FROM  `locations` WHERE `location_type_id`='$val'";
	$result=mysql_query($query);
	$row=mysql_num_rows($result);
	for($i=0 ; $i<$row ; $i++)
	{
		$location_name=mysql_result($result,$i,'location_name');
		$id=mysql_result($result,$i,'location_id');
		$z=$i+1;
		echo '&building'.$z;
		echo '='.$location_name;
		echo '&ids'.$z;
		echo '='.$id;
	}
	echo '&num='.$row;
	echo '&xx='.$val;
}

if($action=='main'){
$query="SELECT `location_type_name`,`type_id` FROM `type_location`";
$result=mysql_query($query);
$row=mysql_num_rows($result);
	for($i=0 ; $i<$row ; $i++)
	{
		$location_name=mysql_result($result,$i,'location_type_name');
		$id=mysql_result($result,$i,'type_id');
		$z=$i+1;
		echo '&building'.$z;
		echo '='.$location_name;
		echo '&ids'.$z;
		echo '='.$id;
	}
	
	echo '&num='.$row;
}

if($action=='info'){	
$id=$_GET['id'];
$q="SELECT * FROM `locations` WHERE `location_id`='$id'";
$r=mysql_query($q);
$n=mysql_num_rows($r);
		if($n>0){
		$info=mysql_result($r,0,'info');
		$cap=mysql_result($r,0,'capacity');
		$wtud=mysql_result($r,0,'work_time_usual_day');
		$wthd=mysql_result($r,0,'work_time_holiday');
		$nob=mysql_result($r,0,'number_of_books');
		$lm=mysql_result($r,0,'lib_manager');
		$db=mysql_result($r,0,'dept_books');
		$ta=mysql_result($r,0,'names of TAs-depertment');
		
		echo "&output=<font size='16'>";
		if($info!='')
		echo"<p><b><u>Information:</u></b>$info</p>";
		
	
		if($cap!='')
		echo"<p><b><u>Capacity:</u></b>$cap</p>";
		
		if($wtud!='')
		echo"<p><b><u>Working time in usual days:</u></b>$wtud</p>";
		
		if($wthd!='')
		echo"<p><b><u>Working time in holidays:</u></b>$wthd</p>";
		
		if($nob!='')
		echo"<p><b><u>Number of books:</u></b>$nob</p>";
		
				if($lm!='')
		echo"<p><b><u>Library Manager:</u></b>$lm</p>";
		
				if($db!='')
		echo"<p><b><u>Books Classifications:</u></b>$db</p>";
		
		if($ta!='')
		echo"<p><b><u>TA's names:</u></b>$ta</p>";
		
		}
echo "</font>";

		
}
?>
