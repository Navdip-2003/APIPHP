<?php
$username="ql7MOAQ36H";//change username 
$password="NQpk46XHTW"; //change password
$host="remotemysql.com";
$db_name="ql7MOAQ36H"; //change databasename

$conn=mysqli_connect($host,$username,$password,$db_name);

if(!$conn)
{
	echo json_encode("Connection Failed");
}

$query="select * from data";

$q = mysqli_query($conn,$query);

$res =array();
while($r=mysqli_fetch_assoc($q)){
	$res[] = $r;
}
echo json_encode($res);
$conn->close();
?>
