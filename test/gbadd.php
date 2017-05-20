<?php
 	include("connectdb.php");

 	$dt=date("Y-m-d h:i:s");

 	$sql="insert into 資料表 values (null, '$dt', '$a1', '$a2', '$a3', '$a4')";
 	mysql_query($sql);

 	header("location:index.php?Act=100");
?>