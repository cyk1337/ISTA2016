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
			$sql = "INSERT INTO zhaoxin14(Name,CellPhone,Class,Email,StudentId,Apt,TellUs) Values('$_POST[name]','$_POST[cellPhone]','$_POST[class]','$_POST[email]','$_POST[studentId]','$_POST[Apt]','$_POST[tellUs]')";
			if(!mysql_query($sql)){
				die("Could not insert".mysql_errno());
			}
			else{
				header('location:insertSuccess.html');
			}
		?>
		 <br>
	</body>
</html>