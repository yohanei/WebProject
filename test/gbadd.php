<!--gbadd.php-->
<?php
 	include("connectdb.php");

 	$name=$_POST['name'];
 	$message=$_POST['message'];
 	$dt=date("Y-m-d h:i:s");

 	$sql="INSERT INTO `gb`(`Name`, `Message`, `Date`) VALUES ('$name', '$message', '$dt')";

 	mysql_query($sql);

 	header("location:/test/");
?>