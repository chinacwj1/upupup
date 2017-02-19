<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>召唤师 个人资料</title>
        <body background="<?php echo base_url().'\bg\background1.jpg'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/lead.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/all.css' ?>">
        <style type="text/css">
            table tr th{
                font-weight: normal;
            }
            .infor{
                text-align: center;
            }
        </style>
    </head>
    <body>
    	<div id="header">
            <img src="<?php echo base_url().'\bg\header.jpg'?>" width="900px" height="180px">   
        </div>
    	<div id="lead">
            <ul>
                <li><a href="<?php echo site_url('home/u_look')?>">首页</a></li>
                <li><a href="<?php echo site_url('user/more_bolgs')?>">博文</a></li>
                <li><a href="<?php echo site_url('user/photo')?>">相册</a></li>
                <li><a href="<?php echo site_url('user/myself')?>">关于我</a></li>
            </ul>   
        </div>
    	<div id="main">
            <div style=" width: 873px; height: 665px; margin: 15px 11px; border: 3px dashed #D1CEB7; border-radius: 8px; background: #FFF;">
                <div id="left" style="float: left; width: 380px; height: 665px;">
                    <div style="width: 196px; height: 230px; margin-top: 50px; margin-left: 150px; border: 4px double #999;"></div>
                </div>
                <div id="right" style="width: 492px; height: 665px; float: left;">
                    <table style="margin-top: 40px; margin-left: 10px; text-align: left; color: #413D2F;">
                        <tr><th class="infor">姓名：</th><th>暂无</th></tr>
                        <tr><th class="infor">性别：</th><th>暂无</th></tr>
                        <tr><th class="infor">年龄：</th><th>暂无</th></tr>
                        <tr><th class="infor">职业：</th><th>暂无</th></tr>
                        <tr><th>兴趣爱好：</th><th>暂无</th></tr>
                    </table>
                </div>
            </div>
    	</div>
    </body>
</html>