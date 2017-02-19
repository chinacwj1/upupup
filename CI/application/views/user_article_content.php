<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>查看文章</title>
        <body background="<?php echo base_url().'\bg\background1.jpg'?>">
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
                <li><a href="<?php echo site_url('user/photo')?>">相册</a></li>
                <li><a href="#">关于我</a></li>
            </ul>   
        </div>
        <div id="main" style="overflow:auto;">
            <div style=" width: 873px; height: 665px; margin: 15px 11px; border: 3px dashed #D1CEB7; border-radius: 8px; background: #FFF;"->
            <h2 style="margin: 25px 0px 0px 50px;"><?php echo $article['0']['title']?></h2>
            <p style="margin-left: 25px; font-size: 15px;"> 作者:<?php echo $article['0']['username']?></p>
            <hr style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="94%" color=#D1CEB7 SIZE="1" />
            <p style="margin-left: 25px;font-size: 15px;">发表时间:<?php echo date('Y-m-d-h-i-s',$article['0']['time'])?></p>
            <hr style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="94%" color=#D1CEB7 SIZE="1" />
            <img src="<?php echo base_url().'/img/'.$article['0']['thumb']?>">
            <hr style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="94%" color=#D1CEB7 SIZE="1" />
            <p style="margin-left: 25px; margin-right: 25px; text-indent: 2em;"><?php echo date($article['0']['content'])?></p>
            </div>
        </div>
    </body>
</html>