<html>
	<head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" ></head>
	<body>
		<style>
			table{border-collapse: collapse;background: #efefef;width:50%;margin:0 auto;}
			table th ,table td{padding:10px 5px 5px 5px;border:1px solid #000;}
			table th{background: #aaa;}
		</style>
		<a href="index.php">返回</a>
		<?php
			$con = mysql_connect("127.0.0.1","root","q9w3f6v8");
			if(!$con){
				die("Could not connect".mysql_errno());
			}
			if(!mysql_select_db("ista")){
				die("Could not find database:".mysql_errno());
			}
			$UID = $_GET['personId'];
			// echo $UID;
			$result = mysql_query("Select * from zhaoxin14 Where personId=".$UID);
			while($row = mysql_fetch_array($result)){
				$Name = $row['Name'];
				$CellPhone = $row['CellPhone'];
				$Class = $row['Class'];
				$Email = $row['Email'];
				$StudentId = $row['StudentId'];
				$Apt = $row['Apt'];
				$TellUs = $row['TellUs'];
				$mianshi = $row['mianshi'];
				$finalApt = $row['FinalApt'];
				$SomeElse = $row['SomeElse'];
			}
		?>
		<table>
			<tr>
				<td>UID</td>
				<td colspan="5"><?php echo $UID ?></td>
			</tr>
			<tr><td colspan="6">基本信息</td></tr>
			<tr>
				<td>姓名</td>
				<td><?php echo $Name ?></td>
				<td>手机号码</td>
				<td><?php echo $CellPhone ?></td>
				<td>班级</td>
				<td><?php echo $Class ?></td>
			</tr>
			<tr><td colspan="6">更多信息</td></tr>
			<tr>
				<td>邮箱</td>
				<td colspan="2"><?php echo $Email ?></td>
				<td>学号</td>
				<td colspan="2"><?php echo $StudentId ?></td>
			</tr>
			<tr>
				<td>期待部门</td>
				<td colspan="5"><?php echo $Apt ?></td>
			</tr>
			<tr>
				<td>想说的话</td>
				<td colspan="5"><?php echo $TellUs ?></td>
			</tr>
			<tr><td colspan="6">面试官填写</td></tr>
			<form action="admin_insert.php" method="post">
				<tr><td>UID</td><td colspan="5"><input type="text" name="uid"></td></tr>
				<tr>
					<td>是否来面试</td>
					<td colspan="5">
						<input type="radio" value="yes" name="mianshi">是
						<input type="radio" value="no" name="mianshi">否
					</td>
				</tr>
				<tr>
					<td>最终加入部门</td>
					<td colspan="5">
						<input type="radio" value="美编" name="finalApt">美编
						<input type="radio" value="硬件" name="finalApt">硬件
						<input type="radio" value="应技" name="finalApt">应技
						<input type="radio" value="摄影" name="finalApt">摄影
						<input type="radio" value="电竞" name="finalApt">电竞
						<input type="radio" value="人资" name="finalApt">人资
					</td>
				</tr>
				<tr>
					<td>备注</td>
					<td colspan="5" align="center">
						<textarea name="SomeElse" cols="90" rows="10"></textarea>
						<input type="submit">
					</td>
				</tr>
				<tr>
					<td colspan="6">面试信息</td>
				</tr>
				<tr>
					<td colspan="2">是否来面试</td>
					<td><?php echo $mianshi ?></td>
					<td>最终进入部门</td>
					<td colspan="2"><?php echo $finalApt ?></td>
				</tr>
				<tr>
					<td>备注</td>
					<td colspan="5"><?php echo $SomeElse ?></td>
				</tr>
			</form>
		</table>
		<script>
			console.info(<?php echo $UID ?>);
		</script>
	</body>
</html>