<?php
		session_start();
		header('Content-Type: text/html; charset=utf-8');
		error_reporting(E_ALL || ~E_NOTICE);
		$con=mysqli_connect("localhost","root","","q1");//连接数据库
		mysqli_select_db($con,"q1");//选择数据库
		mysqli_query($con,"set names utf8");//设置客户端和连接字符集
		if(!empty($_POST['talk']))
		{
			$talk=$_POST['talk'];
		}
		$name=$_SESSION['name'];
		$sql="insert into talk(name,talk) values('{$name}','{$talk}')";
		mysqli_query($con,$sql);
		echo "<script>location='index.php'</script>";
?>