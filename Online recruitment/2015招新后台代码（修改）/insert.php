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
			
			$sql = "INSERT INTO zhaoxin15(Name,CellPhone,Class,Email,StudentId,Apt,TellUs) Values('$_POST[name]','$_POST[cellPhone]','$_POST[class]','$_POST[email]','$_POST[studentId]','$_POST[Apt]','$_POST[tellUs]')";
			if(!mysql_query($sql)){
				die("Could not insert".mysql_errno());
			}
			else{
				header('location:insertSuccess.html');
			}
			$result = mysql_query("Select * from zhaoxin15");
			echo "<table><tr><th>PersonID</th><th>Name</th><th>CellPhone</th><th>Class</th>";
			while($row = mysql_fetch_array($result)){
				echo "<tr><td>".$row['PersonId'].$row['Name']."</td><td>".$row['CellPhone']."</td><td>".$row['Class']."</td><td>".$row['Email']."</td></tr>";
			}
		?>
		 <br>
	</body>
</html>