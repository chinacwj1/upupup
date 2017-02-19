<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>管理员系统</title>
        <body background="<?php echo base_url() . '/bg/background1.jpg' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/admin.css' ?>">
        <script>
            window.onload=function(){

                var oDiv1=document.getElementById("left");
                var aBtn=oDiv1.getElementsByTagName("input");
                var oDiv2=document.getElementById("right");
                var aDiv=oDiv2.getElementsByTagName("div");
                for (var i = 0; i < aBtn.length; i++) {
                    aBtn[i].index=i;
                    aBtn[i].onclick=function(){
                        for (var i = 0; i < aBtn.length; i++) {
                            aBtn[i].className="";
                        }
                        this.className="btn";
                        for (var j = 0; j < aDiv.length; j++) {
                            aDiv[j].style.display="none"
                        }
                        aDiv[this.index].style.display="block";
                    }
                }
            };
            var flag=1;
            var m=1;
            var n=1;
            function toone(){
                if (flag==1) {
                    document.getElementById('a').style.display='block';
                    document.getElementById('b').style.display='block';
                    document.getElementById('one').style.color='#FFF';
                    flag=0;
                }
                else{
                    document.getElementById('a').style.display='none';
                    document.getElementById('b').style.display='none';
                    document.getElementById('one').style.color='#26241C';
                    flag=1;
                }
            }
            function totow(){
                if (m==1) {
                    document.getElementById('d').style.display='block';  
                    document.getElementById('tow').style.color='#FFF';
                    m=0;
                }
                else{
                    document.getElementById('d').style.display='none';
                    document.getElementById('tow').style.color='#26241C';
                    m=1;
                }
            }
            function tothree(){
                if (n==1) {
                    document.getElementById('g').style.display='block';
                    document.getElementById('h').style.display='block';
                    document.getElementById('i').style.display='block';
                    document.getElementById('three').style.color='#FFF';
                    n=0;
                }
                else{
                    document.getElementById('g').style.display='none';
                    document.getElementById('h').style.display='none';
                    document.getElementById('i').style.display='none';  
                    document.getElementById('three').style.color='#26241C';
                    n=1;
                }
            }
        </script>
    </head>

    <body>
    	<div id="header">
            <img src="<?php echo base_url() . '/bg/header.jpg' ?>" width="100%" height="180px">   
        </div>
        <div id="name">
            <div style="float: left;">管理员操作中心</div>
            <div style="float: left; margin-top: 40px; margin-left: 140px; font-family: 宋体;font-size: 15px;color: #534D3C; font-style: normal;letter-spacing: 0px;">当前用户：<input type="button" value="陈伟杰" style="width: 70px; border: none;background: none;font-size: 15px;text-decoration: underline; color: #534D3C;"><a href="<?php echo site_url('user/login_out') ?>" style="margin-left:400px; border: 2px solid #D1CEB7;color: #534D3C;background: #B6AF9A;">退出登录</a></div>
        </div> 
        <div id="main">
            <div id="left">
                <ul>
                    <li onclick="toone()" id="one" style="margin-top: -16px;">文章管理</li>
                    <input type="button" id="a" class="btn" value="发表文章">
                    <input type="button" id="b" value="文章审核">
                    <li onclick="totow()" id="tow">分类管理</li>
                    <input type="button" id="d" value="查看分类">
                    <li onclick="tothree()" id="three">大标题3</li>
                    <input type="button" id="g" value="小标题7">
                    <input type="button" id="h" value="小标题8">
                    <input type="button" id="i" value="小标题9">
                </ul>
            </div>
            <div id="right">
                <div style="display: block;"><iframe src="<?php echo site_url() . '/article/send_article'?>" width="1000px" height="820px" scrolling="no" frameborder="0"></iframe></div>
                <div><iframe src="<?php echo site_url() . '/article/index'?>" width="1000px" height="680px" scrolling="no" frameborder="0"> </iframe></div>
                <div><iframe src="<?php echo site_url() . '/home/index'?>" width="1000px" height="680px" scrolling="no" frameborder="0"></iframe></div>
                <div>ddd</div>
                <div>eee</div>
                <div>ggg</div>
                <div>hhh</div>
                <div>iii</div>
                <div>xxx</div>
            </div>
        </div>
    </body>
</html>