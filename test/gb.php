<?php
	include("connectdb.php");
 	$name=mysql_query("select 'Name' from 'guestbook'");
 	$message=mysql_query("select 'Message' from 'guestbook'");
 	$date=mysql_query("select 'Date' from 'guestbook'");
 	$rows=mysql_query("select * from 'guestbook'");

 	for($i=1;$i<=mysql_num_rows($rows);$i++){
 		echo "
 			<table>
 				<tr>
					<td><b>君の名は：</b></td>
					<td>mysql_fetch_row($name)</td>
				</tr>
				<tr>
					<td><b>我想說：</b></td>
					<td>mysql_fetch_row($message)</td>
				</tr>
				<tr>
					<td><b>時間：</b></td>
					<td>mysql_fetch_row($date)</td>
				</tr>
 			</table>
 			<br>
  		";
 	}

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
