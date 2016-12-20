	<?php
	error_reporting(E_ALL || ~E_WARNING);
		header('Content-Type: text/html; charset=utf-8');
		session_start();
		$con=mysqli_connect("localhost","root","","q1");//连接数据库
		mysqli_select_db($con,"q1");//选择数据库
		mysqli_query($con,"set names utf8");//设置客户端和连接字符集
		if(!empty($_POST['name']))
		{
			$name=$_POST['name'];
		}
		if(!empty($_POST['password']))
		{
			$password=md5($_POST['password']);
			//echo $password;

		}
		$sql="select name from user where name='{$name}' and password='{$password}'";
		$result=mysqli_query($con,$sql);
		$flag=mysqli_num_rows($result);
		if($flag)
		{
			$_SESSION['name']=$name;
			$_SESSION['password']=$password;
			echo "<script>alert('登入成功')</script>";
	   		echo "<script>location='index.php'</script>";
		}
		else
		{
			echo "<script>alert('密码或用户名错误')</script>";
	   		echo "<script>location='login.php'</script>";
		}
	?>