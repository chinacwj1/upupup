<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>查看文章</title>
        <body background="background1.jpg">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/lead.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/all.css' ?>">
       <style>
            #AID td
                {
                    width: 100px;
                    height: 18px;
                    border-right:  1px solid #D7D5C1;
                }
                a{
                    text-decoration: none;
                    color: #26241C;
                }
                a:hover{
                    color: #B0A992;
                }
        </style>

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
                <li><a href="<?php echo site_url('user/myself')?>">关于我</a></li>
            </ul>   
        </div>
        <div id="main">
            <div style=" width: 873px; height: 665px; margin: 15px 11px; border: 3px dashed #D1CEB7; border-radius: 8px; background: #FFF;">
                        <table>
                                <tr id="AID">
                                    <td style="width: 220px;">标题</td>
                                    <td>用户</td>
                                    <td style="border: none;">时间</td>
                                    <td>操作</td>
                                </tr>
                                <?php foreach($article as $v): ?>
                                    <tr>
                                        <td><?php echo $v['title']?></td>
                                        <td><?php echo $v['username']?></td>
                                        <td><?php echo date('Y-m-d-h-i-s',$v['time'])?></td>
                                        <td>[<a href="<?php echo site_url('user/article_content/'.$v['aid'])?>">查看</a>]</td>
                                    </tr>
                                <?php endforeach ?>
                        </table>
            </div>
        </div>
    </body>
</html>