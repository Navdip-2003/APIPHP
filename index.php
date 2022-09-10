<?php
  include "conn.php";
  $str = "select $ from data";
  $res = mysqli_query($conn , $str);
  $arr =array[];
  while($row = mysqli_fetch_assoc($res)){
    $arr[] = $row;
  }
echo json_encode($arr);
conn->close();
?>
