<html>
	<head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" ></head>
	<body>
		<?php
			$con = mysql_connect("127.0.0.1","root","q9w3f6v8");
			if(!$con){
				die("Could not connect".mysql_errno());
			}
			if(!mysql_select_db("ista")){
				die("Could not find database:".mysql_errno());
			}
			$UID = $_POST[uid];
			$sql = "UPDATE zhaoxin15 SET mianshi='".$_POST[mianshi]."',finalApt='".$_POST[finalApt]."',SomeElse='".$_POST[SomeElse]."' WHERE PersonId = '".$UID."'";
			// echo $sql;
			if(!mysql_query($sql)){
				die("Could not insert".mysql_errno());
			}
			else{
				echo("提交成功!");
			}
		?>
		<a href="index.php">返回</a>
	</body>
</html>