<?php
 session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center><h1>欢迎<?php echo $_SESSION['name']?>登陆|<a href="logout.php">退出</a></h1></center>
	<hr>
	<form action="index1.php" method="post">
	<center><textarea name="talk" id="" cols="100" rows="10"></textarea></center>
	<center><input type="submit" value="发言"></input></center>
	</form>
</body>
</html>
<?php
	error_reporting(E_ALL || ~E_WARNING);
	 $con=mysqli_connect("localhost","root","","q1");//连接数据库
	  mysqli_select_db($con,"q1");//x选择数据库
	  mysqli_query($con,"set names utf8");//设置客户端和连接字符集
	  $len=5;
	  if(!empty($_GET['page']))
	  {
			$p=$_GET['page']>1?$_GET['page']:1;
	  }
	  else
	  {
	  	$p=1;
	  }
	  $tot=mysqli_fetch_row(mysqli_query($con,"select count(*) from talk"));
	  $lenmax=ceil($tot[0]/$len);
	  if($p>=$lenmax)
	  {
	  	$p=$lenmax;
	  }
	  $off=($p-1)*5;
	  $sql="select * from talk order by id limit {$off},{$len}";
	  $rst=mysqli_query($con,$sql);
	  echo "<center>";
	  echo "<hr>";
	  while($row=mysqli_fetch_assoc($rst))
	  {
	  	echo "用户:".$row['name'];
	  	echo "                             <a href='del.php?id={$row['id']}'>删除此条留言</a>";
	  	echo "<br>";
	  	echo "{$row['talk']}";
	  	echo "<hr>";
	  }
	  $pp=$p-1;
	  $np=$p+1;
	  echo "<h2><a href='index.php?page={$pp}'>上一页</a>||<a href='index.php?page={$np}'>下一页</a></h2>";
	  echo "</center>";
?>