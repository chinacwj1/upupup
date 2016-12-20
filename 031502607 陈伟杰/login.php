<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<body background="123.jpg">
	<center><h1>请登录</h1></center>

	<form action="checkin.php" method="post">
	<table border="2" width="520px" align="center" bordercolor="#000080">
						<tr><th><?php echo"用户";?><td><input type="text" name="name"></td></tr>
						<tr><th><?php echo"密码";?></th><td><input type="password" name="password"></td></tr>
						<tr><td align="center"  colspan="2"><a href="registe.php">注册</a></td></tr>
						<tr>
							<td align="center"  colspan="2">
								<input type="reset" name="hehe">
								<input type="submit" value="登陆">
							</td>
						</tr>
	</table>
	</form>
</body>
</html>