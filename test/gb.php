<?php
	
	include("connectdb.php");
 	$sql = "SELECT * FROM `view_gb`";
 	$rows=mysql_query($sql);

 	while(list($a1, $a2, $a3)=mysql_fetch_row($rows)) {
 		echo "
 			<table>
 				<tr>
					<td><b>君の名は：</b></td>
					<td>$a1</td>
				</tr>
				<tr>
					<td><b>我想說：</b></td>
					<td>$a2</td>
				</tr>
				<tr>
					<td><b>時間：</b></td>
					<td>$a3</td>
				</tr>
 			</table>
 			<br>
  		";
 	}

?>
