<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/manager1.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/home1.css' ?>">
	<style type="text/css">
		span{
			color: #f00;
		}
	</style>
</head>
<body>
	<table>
		<tr id="AID">
			<td>AID</td>
			<td style="width: 220px;">标题</td>
			<td>栏目</td>
			<td>用户</td>
			<td style="border: none;">时间</td>
		</tr>
		<?php foreach($article as $v): ?>
			<tr>
				<td><?php echo $v['aid']?></td>
				<td><?php echo $v['title']?></td>
				<td><?php echo $v['cname']?></td>
				<td><?php echo $v['username']?></td>
				<td><?php echo date('Y-m-d-h-i-s',$v['time'])?></td>
				<td>[<a href="<?php echo site_url('article/article_content/'.$v['aid'])?>">审核</a>]</td>
			</tr>
		<?php endforeach ?>
	</table>
	<div style="text-align:center;">
		<?php echo $links ?>
	</div>
</body>
</html>