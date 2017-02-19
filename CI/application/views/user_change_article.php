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
<form action="<?php echo site_url('user/change_art_r') ?>" method="POST" enctype="multipart/form-data">
    <table class="table" style="margin:auto;">
        <tr>
            <td class="th" colspan="10">修改文章</td>
        </tr>
        <tr>
            <td>标题</td>
            <td class="ctt">
            <input type="hidden" name="aid" value="<?php echo $article['0']['aid'] ?>"/><input type="text" name="title" value="<?php echo $article['0']['title'] ?>"/>
            </td>
        </tr>
        <tr>
            <td>内容</td>
            <td>
                <textarea name="content" id="content" style="width:550px;height:310px;"><?php echo $article['0']['content'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="10"><input type="submit" class="input_button" value="修改"/></td>
        </tr>
    </table>
    </form>
            </div>
        </div>
    </body>
</html>