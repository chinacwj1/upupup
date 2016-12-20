<meta charset="UTF-8">
<?php
	 $con=mysqli_connect("localhost","root","","q1");//连接数据库
	  mysqli_select_db($con,"q1");//x选择数据库
	  mysqli_query($con,"set names utf8");//设置客户端和连接字符集
	  /*echo "<pre>";
	  print_r($_GET);
	  echo "</pre>";*/
	  $sql="delete from talk where id={$_GET['id']}";
	  if(mysqli_query($con,$sql))
	  {
	  		echo "<script>alert('删除成功')</script>";
	  		echo "<script>location='index.php'</script>";
	  }
	  else
	  {
	  		echo "<script>alert('删除失败')</script>";
	  		echo "<script>location='index.php'</script>";
	  }
?>