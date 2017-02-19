<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>召唤师 页面</title>
        <body background="<?php echo base_url().'\bg\background1.jpg'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/main.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/lead.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/myself.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/pho&diary.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/css/search.css' ?>">
        <script type="text/javascript">
            function tosousuo(){
                document.getElementById('sousuo').style.display='block';
                document.getElementById('liuyan').style.display='none';
                document.getElementById('dongtai').style.display='none';
                document.getElementById('fangke').style.display='none';
                document.getElementById('aa').style.color='#FFF';
                document.getElementById('bb').style.color='#534D3C';
                document.getElementById('cc').style.color='#534D3C';
                document.getElementById('dd').style.color='#534D3C';
                document.getElementById('aa').style.background='#B6AF9A';
                document.getElementById('bb').style.background='#DFDDCD';
                document.getElementById('cc').style.background='#DFDDCD';
                document.getElementById('dd').style.background='#DFDDCD';
            }
            function toliuyan(){
                document.getElementById('sousuo').style.display='none';
                document.getElementById('liuyan').style.display='block';
                document.getElementById('dongtai').style.display='none';
                document.getElementById('fangke').style.display='none';
                document.getElementById('aa').style.color='#534D3C';
                document.getElementById('bb').style.color='#FFF';
                document.getElementById('cc').style.color='#534D3C';
                document.getElementById('dd').style.color='#534D3C';
                document.getElementById('aa').style.background='#DFDDCD';
                document.getElementById('bb').style.background='#B6AF9A';
                document.getElementById('cc').style.background='#DFDDCD';
                document.getElementById('dd').style.background='#DFDDCD';
            }
            function todongtai(){
                document.getElementById('sousuo').style.display='none';
                document.getElementById('liuyan').style.display='none';
                document.getElementById('dongtai').style.display='block';
                document.getElementById('fangke').style.display='none';
                document.getElementById('aa').style.color='#534D3C';
                document.getElementById('bb').style.color='#534D3C';
                document.getElementById('cc').style.color='#FFF';
                document.getElementById('dd').style.color='#534D3C';
                document.getElementById('aa').style.background='#DFDDCD';
                document.getElementById('bb').style.background='#DFDDCD';
                document.getElementById('cc').style.background='#B6AF9A';
                document.getElementById('dd').style.background='#DFDDCD';
            }
            function tofangke(){
                document.getElementById('sousuo').style.display='none';
                document.getElementById('liuyan').style.display='none';
                document.getElementById('dongtai').style.display='none';
                document.getElementById('fangke').style.display='block';
                document.getElementById('aa').style.color='#534D3C';
                document.getElementById('bb').style.color='#534D3C';
                document.getElementById('cc').style.color='#534D3C';
                document.getElementById('dd').style.color='#FFF';
                document.getElementById('aa').style.background='#DFDDCD';
                document.getElementById('bb').style.background='#DFDDCD';
                document.getElementById('cc').style.background='#DFDDCD';
                document.getElementById('dd').style.background='#B6AF9A';
            }
        </script>
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

        <div id="left">

            <div id="myself">
                <div class="top">个人资料</div>
                <div id="my">
                    <div id="portrait">
                        <img src="<?php echo base_url().'\bg\portrait.jpg'?>">
                    </div>
                    <div id="btn">
                        <div id="btn1"><a href="<?php echo site_url('user/send_article')?>">发文章</a></div>
                        <div id="btn2"><a href="<?php echo site_url('user/login_out')?>">退出</a></div>
                    </div>
                    <div id="message">
                        <div id="message1"><input type="text"></div>
                        <div id="message2"><input type="button" value="发信息"></div>
                    </div>
                </div>
            </div>

            <div id="search">
                <div id="top">
                    <input type="button" value="搜索" id="aa" style="width: 60px; color: #FFF; background: #B6AF9A;" onclick="tosousuo()">
                    <input type="button" value="留言板"  id="bb" style="width: 64px;" onclick="toliuyan()">
                    <input type="button" value="最新动态" id="cc" onclick="todongtai()">
                    <input type="button" value="最近访客" id="dd" onclick="tofangke()">
                </div>
                <div id="buttom" style="clear: left; border-top: 2px solid #D1CEB7;">

                    <div id="sousuo" class="search" style="display: block;">
                      <div>
                      <form action="<?php echo site_url('user/search')?>" method="post">
                        <input type="text" id="ss1" name="string">
                        <input type="submit" value="搜索" id="ss2">
                    </form>
                      </div>
                      <div id="ss">
                        <p style="font-size: 14px;">您可能感兴趣：</p>
                        <ul>
                            <li><a href="#">我</a></li>
                            <li><a href="#">蒲公英</a></li>
                            <li><a href="#">一人路上</a></li>
                            <li><a href="#">杂思</a></li>
                            <li><a href="#">博文标题</a></li>
                        </ul>
                      </div>
                    </div>

                    <div id="liuyan" class="search"><p style="color: #857D60;font-size: 15px;text-align: center;">快来抢沙发吧</p>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>

                    <div id="dongtai" class="search"><p style="color: #857D60;font-size: 15px;text-align: center;">主人很懒，都没更新欸╥﹏╥...</p></div>

                    <div id="fangke" class="search"><p style="color: #857D60;font-size: 15px;text-align: center;">近日无访客哦~</p></div>

                </div>
            </div>

        </div>

        <div id="right">

            <div id="diary">
                <div class="top">热门博文</div>
                <div style="overflow:auto; height:390px;">
                <?php foreach($hot_bolgs as $v): ?>
                    <div class="dia" style="height='52px';overflow:hidden;">
                        <h2><a href="#" style="text-decoration: none; color: #534D3C; "><?php echo $v['title']?></a></h2>
                        <p><?php echo $v['content']?></p>
                    </div>
                <?php endforeach ?>
                </div>
            </div>

            <div id="photo">
                <div class="top">相册</div>
                <div>
                    <div id="pho1"><a href="#"><img src="<?php echo base_url().'\bg\1.jpg'?>" style="margin: 10px;"></a></div>
                    <div id="pho2"><a href="#"><img src="<?php echo base_url().'\bg\2.jpg'?>" style="margin: 10px; margin-left: 11px;"></a></div>
                    <div id="pho3"><a href="#"><img src="<?php echo base_url().'\bg\3.jpg'?>" style="margin: 10px;"></a></div>
                </div>
            </div>

        </div>

        </div>
    </body>
</html>
