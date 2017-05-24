<?php
 	include("connectdb.php");

 	$dt=date("Y-m-d h:i:s");

 	$sql="insert into 資料表 values ('', '{$dt}', '{$name}', '{$message}')";
 	mysql_query($sql);

 	header("location:index.php?Act=100");
?>