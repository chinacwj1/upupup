<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/manager1.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/home1.css' ?>">
	<style type="text/css">
	</style>
</head>
<body>
	<table>
		<tr>
			<td style="text-align:left">AID:<?php echo $article[0]['aid'] ?></td>
		</tr>
		<tr>
			<td style="text-align:left">标题:<?php echo $article[0]['title'] ?></td>
		</tr>
		<tr>
			<td style="text-align:left">栏目:<?php echo $article[0]['cname'] ?></td>
		</tr>
		<tr>
			<td style="text-align:left">内容:<?php echo $article[0]['content'] ?></td>
		</tr>
		<tr>
			<td style="text-align:left">用户:<?php echo $article[0]['username'] ?></td>
		</tr>
		<tr>
			<td style="text-align:left">发表时间:<?php echo date('Y-m-d-h-i-s',$article[0]['time'])?></td>
		</tr>
		<tr>
			<td style="text-align:left">[<a href="<?php echo site_url('/article/del/'.$article[0]['aid']) ?>">删除</a>]</td>
			<td style="text-align:left">[<a href="<?php echo site_url('/article/change/'.$article[0]['aid']) ?>">选为热门</a>]</td>
		</tr>
	</table>
</body>
</html>