<!DOCTYPE html>
<html>
<head>
	<!--本板時間誤差4hr-->
	<!--「回覆」及「刪除」功能未開發，帳號登入功能未開發-->
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./notitle.css">
	<title>留言板</title>
	<?php
		include("connectdb.php");
 		$sql = "SELECT * FROM `view_gb`";
 		$rows=mysql_query($sql);
 	?>
</head>
<body background="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/18485791_1365117116937033_1230943798877047537_n.jpg?oh=d6d0021b2366d03022b78bf5cf8f8bce&oe=59A99807">
	<h1>GuestBook</h1>
	<br>
	<div>
		<h2>我也要留言</h2>
		<form action="gbadd.php" method="post">
			<table>
				<tr>
					<td><b>君の名は：</b></td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td><b>我想說：</b></td>
					<td><textarea name="message"></textarea></td>
				</tr>
				<tr><td><input type="submit" value="送出" name="push"></td></tr>
			</table>
		</form>
	</div>
	<br><hr><br>
	<div>
		<!--a1為暱稱，a2為留言，a3為留言時間-->
		<?php
			while(list($a1, $a2, $a3)=mysql_fetch_row($rows)) {
		?>
		<table>
 			<tr>
				<td><b>君の名は：</b></td>
				<td><?php echo $a1; ?></td>
			</tr>
			<tr>
				<td><b>我想說：</b></td>
				<td><?php echo $a2; ?></td>
			</tr>
			<tr>
				<td><b>時間：</b></td>
				<td><?php echo $a3; ?></td>
			</tr>
			<tr>
				<td><a href="#">回覆</a></td>
				<td><a href="#">刪除</a></td>
			</tr>
		</table>
		<br>
		<?php }; ?>
	</div>

</body>
</html>