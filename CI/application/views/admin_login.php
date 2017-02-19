<!DOCTYPE HTML>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>管理员入口</title>
        <body background="<?php echo base_url() . '/bg/background.jpg' ?>";>
    	<link href="<?php echo base_url() . '/style/css/mr.css' ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div id="main">
        <div id="reg">后台通行证&gt&gt&gt</div>
        <form action="<?php echo site_url('user/login_in') ?>" method="POST">
        <div id="login">
            <table width="300" align="center">
                <tr><th>账号</th><td><input type="text" name="username" style="border: 1px solid #A4D0D5;"></td></tr>
                <tr><th>密码</th><td><input type="hidden" name="code1" value="<?php echo $code ?>"/><input type="password" name="password" style="border: 1px solid #A4D0D5;"></td></tr>
                <tr><th style="font-weight: normal; font-size: 18px; padding-top: 10px;">验证码</th><th style="text-align: left;"><input type="
                    text" name="code" style="width: 99px; border: 1px solid #A4D0D5;">
                    <div style="width: 94px; height: 34px; margin: -43px 0px 0px 118px; "><?php echo $captcha?></div></th></tr>
            </table>
            <div id="button"><input type="submit" value="登录" style="display: block; width: 180px; height: 40px; margin-top: -3px; border: none; font-family: 黑体; font-size: 25px; background: #156A70; color: #FFF; cursor: pointer;"></div></form>
            <div style="margin-left: 280px; margin-top: 20px;"><a href="#" style="text-decoration: none; font-size: 14px; color: #156A70;">帮助</a></div>
        </div>
    </div>
    </body>
</html>