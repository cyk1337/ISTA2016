<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<title>ISTA招新后台</title>
		<style>
			table{border-collapse: collapse;background: #efefef;width: 60%}
			table th ,table td{padding:10px 5px 5px 5px;border:1px solid #fff;}
			table th{background: #aaa;}
			tr.singular{background: #fff;}
			tr.even{background: #efefef;}
			form{width:20%;margin:20px;}
		</style>
	</head>
	<body onload = "load_result('onload')">
		<center>
			<form onsubmit="return false">
				<fieldset>
					<legend>搜索</legend>
					<input id="search_name" type="text" placeholder="请输入姓名" onkeyup="search(this.value)">
					<br><br>
					<a href="meibian.php" target="_blank">美编</a>
					<a href="yingjian.php" target="_blank">硬件</a>
					<a href="yingji.php" target="_blank">应技</a>
					<a href="sheying.php" target="_blank">摄影组</a>
					<a href="renzi.php" target="_blank">人资</a>
					<a href="dianjing.php" target="_blank">电竞</a>
				</fieldset>
			</form>
			<div id="search_result_content">
			</div>
		</center>
		<script>
			function search(value){
				if(value == ""){
					load_result("onload");
				}
				else{
					load_result("search");
				}
			}
			function load_result(result_kind){
				var xmlhttp;
				if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
				}
				else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function(){
					if(xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById("search_result_content").innerHTML=xmlhttp.responseText;
					}
				}
				if(result_kind == "onload"){
					xmlhttp.open("GET","all_result.php",true);
					xmlhttp.send();
				}
				else if(result_kind == "search"){
					var value = document.getElementById("search_name").value;
					xmlhttp.open("GET","search.php?name="+value,true);
					xmlhttp.send();
					console.info("search.php?name="+value);
				}
			}
		</script>
	</body>
</html>