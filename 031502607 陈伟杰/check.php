<?php
	//error_reporting(E_ALL || ~E_WARNING);
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/
	$con=mysqli_connect("localhost","root","","q1");//连接数据库
	mysqli_select_db($con,"q1");//选择数据库
	mysqli_query($con,"set names utf8");//设置客户端和连接字符集
	$sql="select name from user where name='{$_POST['name']}'";
	$result=mysqli_query($con,$sql);
	$flag=mysqli_num_rows($result);
	if(!empty($_POST['code']))
    {
   		$code=$_POST['code'];
    }
    $password=md5($_POST['password']);
	if($flag)
	{
		echo "<script>alert('用户名已存在')</script>";
   		echo "<script>location='registe.php'</script>";
	}
	else
	{
	    if(empty($_POST['name']))
	    {
	   		echo "<script>alert('请输入用户名')</script>";
	   		echo "<script>location='registe.php'</script>";
	    }
	    else
	    {
			if(empty($_POST['password']))
		    {
		   		echo "<script>alert('请输入密码')</script>";
		   		echo "<script>location='registe.php'</script>";
		    }
		    else
		    {
			    
				    if($_POST['password']!=$_POST['passwords'])
				    {
				   		echo "<script>alert('两次输入密码不同')</script>";
				   		echo "<script>location='registe.php'</script>";
				    }
				    else
				    {
					    if($_SESSION['vstr']!=$code)
					    {
					   		echo "<script>alert('验证码错误')</script>";
					   		echo "<script>location='registe.php'</script>";
					    }
					    else
											    {
						    $sql1="insert into user(name,password) values('{$_POST['name']}','{$password}')";
						    if(mysqli_query($con,$sql1))
						    {
						    	echo "<script>alert('注册成功')</script>";
						   		echo "<script>location='login.php'</script>";
						    }
					    }
				    }		    	
			    
		    }
	    }
	}
?>