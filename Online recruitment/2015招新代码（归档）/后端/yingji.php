<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<style>
			table{border-collapse: collapse;background: #efefef;width: 60%}
			table th ,table td{padding:10px 5px 5px 5px;border:1px solid #fff;}
			table th{background: #aaa;}
			tr.singular{background: #fff;}
			tr.even{background: #efefef;}
			form{width:20%;margin:20px;}
		</style>
	</head>
	<body>
		<center>
			<?php
				echo "
				<table>
					<tr>
						<th>序号</th>
						<th>UID</th>
						<th>姓名</th>
						<th>手机号码</th>	
						<th>班级</th>
						<th>希望部门</th>	
					</tr>";
					$con = mysql_connect("127.0.0.1","root","q9w3f6v8");
					if(!$con){
						die("Could not connect the DB".mysql_errno());
					}
					if(!mysql_select_db("ista")){
						die("Could not choose the DB".mysql_errno());
					}
					$qid = mysql_query("select count(*) as total from zhaoxin15");
					$res = mysql_fetch_array($qid);
					$db_num =  $res[0];
					$name = $_GET['name'];
					// echo gettype($name);
					$result = mysql_query("Select * from zhaoxin15 Where FinalApt ='应技'");
					$i = 1;
					while($row = mysql_fetch_array($result)){
						if($i % 2 == 0){
							echo "<tr class='even'>";
						}
						else{
							echo "<tr class='singular'>";
						}
						echo "<td>".$i."</td>";
						echo "<td>".$row['PersonId']."</td>";
						echo "<td><a href='/result_detail.php?personId=".$row['PersonId']."'target='_blank'>".$row['Name']."</a></td>";
						echo "<td>".$row['CellPhone']."</td>";
						echo "<td>".$row['Class']."</td>";
						echo "<td>".$row['Apt']."</td>";
						echo "</tr>";
						$i++;
					}
					echo "</table>";
				?>
			</center>
	</body>
</html>