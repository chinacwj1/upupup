<html>
	<meta charset="UTF-8">
	<body background="123.jpg">
	<style>
		/*img
		{
			margin-top:2px;
		}*/
	</style>
		<title><?php echo"注册"?></title>
			<form <?php echo"action='check.php' method=post "; ?> >
				<h2 align="center"><?php echo"注册";?><h2>
					<table border="2" width="520px" align="center" bordercolor="#000080">
						<tr><th><?php echo"用户名";?><td><input type="text" name="name"></td></tr>
						<tr><th><?php echo"密码";?></th><td><input type="password" name="password"></td></tr>
						<tr><th><?php echo"确认密码";?></th><td><input type="password" name="passwords"></td></tr>
						<tr>
							<th>验证码</th>
							<td>
								<input type="text" name="code">
								<img src="code.php">
							</td>
						</tr>
						<tr>
							<td align="center"  colspan="2">
								<input type="reset" name="hehe">
								<input type="submit" value="注册">
							</td>
						</tr>
					</table>
			</form>
	</body>
</html>