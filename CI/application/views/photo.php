<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>召唤师 个人相册</title>
        <body background="<?php echo base_url().'\bg\background1.jpg'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/lead.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/all.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/photo.css' ?>">
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
                <li><a href="#">关于我</a></li>
            </ul>   
        </div>
    	<div id="main">
            <div style=" width: 873px; height: 665px; margin: 15px 11px; border: 3px dashed #D1CEB7; border-radius: 8px; background: #FFF;overflow:auto;">
                <div id="top">
                    相册
                    <form action="<?php echo site_url('user/up_photo') ?>" method="POST" enctype="multipart/form-data"> 
                    <input type="submit" value="上传照片" id="new"  class="set">
                </div>
                <div>
                <?php foreach($photo as $v): ?>
                    <div id="back" style="margin: 25px 14px;">
                        <div id="show"><img src="<?php echo base_url().'/img/'.$v['thumb']?>"></div>
                        <div id="name"><?php echo $v['pname']?></div>
                    </div>
                <?php endforeach ?>
                </div>
            </div>
    	</div>
    </body>
</html>