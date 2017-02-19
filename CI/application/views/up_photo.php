<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>召唤师 个人资料</title>
        <body background="<?php echo base_url().'\bg\background1.jpg'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/lead.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/all.css' ?>">
        <style type="text/css">
            table{
                margin: 50px 0px 0px 320px;
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
            <form action="<?php echo site_url('user/up_photo_r') ?>" method="POST" enctype="multipart/form-data"> 
                <table>
                    <tr>
                        <td class="th" colspan="10" style="display: block; margin-bottom: 46px; margin-left: -80px; font-family: SimHei; font-size: 20px;" ><div style="float: left; width: 86px; height: 8px; border-top: 2px solid #B6AF9A; border-left: 2px solid #B6AF9A; padding-left: 8px; padding-top: 2px; color: #534D3C;">上传照片</div><div style="float: left; width: 40px; height: 10px; border-bottom: 2px solid #B6AF9A; border-right: 2px solid #B6AF9A; margin-top: 19px; margin-left: -33px;"></div></td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; color: #534D3C;">照片名称<input type="text" name="pcname" style="margin-left: 5px;" /></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="thumb" style="margin: 3px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="10"><input type="submit" value="上传" class="input_button" style="margin-left: 3px; margin-top: 5px; border: 2px solid #D1CEB7; background: #BDB7A3; color: #474233; font-size: 14px; padding-top: 1px; padding-bottom: 1px; cursor: pointer;" /></td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </body>
</html>