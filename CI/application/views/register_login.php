<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>召唤师 登录/注册</title>
        <body background="<?php echo base_url() . '/bg/background.jpg' ?>";>
        <link href="<?php echo base_url() . '/style/css/register.css' ?>" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function toregister()
            {
                document.getElementById('register').style.display='block';
                document.getElementById('login').style.display='none';
                document.getElementById('log').style.background='#E0EEEE';
                document.getElementById('reg').style.background='#C1E1EC';
            }
            function tologin()
            {
               document.getElementById('register').style.display='none';
               document.getElementById('login').style.display='block';
               document.getElementById('reg').style.background='#E0EEEE';
               document.getElementById('log').style.background='#C1E1EC'; 
            }
        </script>
    </head>
    <body>
    <div id="main">
        <input type="button" value="登录" id="reg" onclick="tologin()">
        <input type="button" value="注册" id="log" style="background: #C1E1EC;" onclick="toregister()">
        <form action="<?php echo site_url('user/u_login_in') ?>" method="POST">
        <div id="login">
            <table width="300" align="center">
                <tr><th>召唤师</th><td><input type="text" name="username"></td></tr>
                <tr><th>密码</th><td>
                <input type="hidden" name="code1" value="<?php echo $code ?>"/><input type="password" name="password"></td></tr>
                <tr><th style="font-weight: normal; font-size: 18px;">验证码</th><th><input type="
                    text" name="code" style="width: 100px;"><div style="width: 106px; height: 43px; margin: 10px 0px 0px 120px; ">
                    <?php echo $captcha?></div></th></tr>
            </table>
            <div id="button" style="clear: left; margin-top: 56px;"><input type="submit" value="登录" style="display: block; width: 180px; height: 40px; margin-top: -3px; border: none; font-family: 黑体; font-size: 25px; background: #156A70; color: #FFF; cursor: pointer;"></div></form>
            <div style="margin-left: 225px; margin-top: 13px;"><a href="<?php echo site_url() . '/user/index'?>" style="text-decoration: none; font-size: 15px; color: #156A70;">管理员入口&gt&gt&gt</a></div>
        </div>
        <form action="<?php echo site_url('user/check_register') ?>" method="POST">
        <div id="register">
            <table width="300" align="center">
                <tr><th>召唤师姓名</th><td><input type="text" name="username"></td></tr>
                <tr><th>登录密码</th><td><input type="password" name="password"></td></tr>
                <tr><th>确认密码</th><td><input type="password" name="password1"></td></tr>
                <tr><th>绑定邮箱</th><td><input type="email" name="email"></td></tr>
            </table>
            <form><div id="button"><input type="submit" value="注册" style="display: block; width: 180px; height: 40px; margin-top: -3px; border: none; font-family: 黑体; font-size: 25px; background: #156A70; color: #FFF; cursor: pointer;"></div></form>
            <div style="margin-left: 290px; margin-top: 20px;"><a href="#" style="text-decoration: none; font-size: 15px; color: #156A70;">帮助</a></div>
        </div>
    </div>
    </form>
    </body>
</html>