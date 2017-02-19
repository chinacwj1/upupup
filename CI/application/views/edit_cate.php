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
			<td class="th" colspan="10">修改分类</td>
		</tr>
		<tr>
			<td>分类名称</td>
			<td>
				<input type="text" name="cname" value="<?php echo $cate[0]['cname'] ?>" /><?php echo form_error('cname','<span>','</span>');?>
			</td>
		</tr>
		<tr>
			<input type="hidden" name="id" value="<?php echo $cate[0]['id'] ?>"/>
			<td colspan="10"><input type="submit" value="修改" class="input_button"/></td>
		</tr>
	</table>
	</form>
</body>
</html>