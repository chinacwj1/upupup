<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>小黄管理系统</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/manager1.css' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/home1.css' ?>">
	<style type="text/css">
		span{
			color: #f00;
		}
	</style>
</head>
<body>
	<form action="<?php echo site_url('home/edit') ?>" method="POST">
	<table>
		<tr>
			<td class="th">查看分类</td>
		</tr>
		<tr id="AID">
			<td>id</td>
			<td>分类名称</td>
			<td style="width: 130px; border: none;">操作</td>
		</tr>
		<?php foreach($cate as $v): ?>
				<tr>
				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['cname']; ?></td>
				<td> 
					[<a href='<?php echo site_url('home/edit_cate/'.$v['id']) ?>'>修改</a>]
					[<a href='<?php echo site_url('home/del/'.$v['id']) ?>'>删除</a>]
				</td>
			  </tr>
		<?php endforeach ?>
		<tr><td>[<a href='<?php echo site_url('home/add_cate') ?>'>添加</a>]</td></tr>
	</table>
	</form>
</body>
</html>
