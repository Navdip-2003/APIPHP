<?php
$uname = "ql7MOAQ36H";
$pass = "NQpk46XHTW";
$dbname = "ql7MOAQ36H";
$hostname ="remotemysql.com";
$conn = mysqli_connect($hostname , $uname , $pass , $dbname);
if(!$conn){
  echo "database is not correctly not support";
}

?>
