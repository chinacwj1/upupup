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
	<form action="<?php echo site_url('article/send') ?>" method="POST" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td class="th" colspan="10">发表文章</td>
		</tr>
		<tr>
			<td>标题</td>
			<td class="ctt"><input type="text" name="title" value="<?php echo set_value('title') ?>"/>
			<?php echo form_error('title','<span>','</span>')?>
			</td>
		</tr>
		<tr>
			<td>类型</td>
			<td class="ctt">
				<input type="radio" name="type" value="0" <?php echo set_radio('type','0',TRUE) ?>/> 普通
				<input type="radio" name="type" value="1" <?php echo set_radio('type','1') ?>/> 热门
			</td>
		</tr>
		<tr>
			<td>栏目</td>
			<td class="ctt">
				<select name="cid" id="">
				<?php foreach($cate as $v): ?>
					<option value="<?php echo $v['id']?>" <?php echo set_select('id',$v['id']) ?>><?php echo $v['cname']?></option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>缩略图</td>
			<td class="ctt">
				<input type="file" name="thumb"/>
			</td>
		</tr>
		<tr>
			<td>摘要</td>
			<td>
				<textarea name="info" id="" style="width:550px;height:125px;"><?php echo set_value('info') ?></textarea>
				<?php echo form_error('info','<span>','</span>')?>
			</td>
		</tr>
		<tr>
			<td>内容</td>
			<td>
				<textarea name="content" id="content" style="width:550px;height:280px;"><?php echo set_value('content') ?></textarea><?php echo form_error('content','<span>','</span>')?>
			</td>
		</tr>
		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="发布"/></td>
		</tr>
	</table>
	</form>
</body>
</html>