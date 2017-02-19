<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>发表文章</title>
        <body background="background1.jpg">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/lead.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/all.css' ?>">

    </head>
    <body>
        <div id="header">
            <img src="<?php echo base_url().'/bg/header.jpg'?>" width="900px" height="180px">   
        </div>
        <div id="lead">
            <ul>
                <li><a href="<?php echo site_url('home/u_look')?>">首页</a></li>
                <li><a href="<?php echo site_url('user/more_bolgs')?>">博文</a></li>
                <li><a href="#">相册</a></li>
                <li><a href="#">关于我</a></li>
            </ul>   
        </div>
        <div id="main">
            <div style=" width: 873px; height: 665px; margin: 15px 11px; border: 3px dashed #D1CEB7; border-radius: 8px; background: #FFF;">
<form action="<?php echo site_url('article/u_send') ?>" method="POST" enctype="multipart/form-data">
    <table class="table" style="margin:auto;">
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
                <textarea name="content" id="content" style="width:550px;height:310px;"><?php echo set_value('content') ?></textarea><?php echo form_error('content','<span>','</span>')?>
            </td>
        </tr>
        <tr>
            <td colspan="10"><input type="submit" class="input_button" value="发布"/></td>
        </tr>
    </table>
    </form>
            </div>
        </div>
    </body>
</html>