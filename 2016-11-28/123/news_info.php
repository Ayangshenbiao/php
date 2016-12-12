<?php
//
include "mysqli.php";
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id=$id";
$one = getlist($sql);
pre($one);
//die;
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="家具,顺德家具,木材,沙发" />
<meta name="description" content="顺德家具厂" />
<title>佛山市顺德区宝源家具实业公司</title>
<script language="javascript" src="images/qq04/90304.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="css/address.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
	<div class="header">
    	<div class="headTop">
        	<div class="logo">
            	<a href="index.html"><img src="images/logo.gif" alt="佛山市顺德区宝源家具实业公司" title="佛山市顺德区宝源家具实业公司" /></a>
            </div>
            <div class="headRight">
            	<div class="tool"><a onmousedown="S.Common.ns_click("homepageSet","",{stattype:"set"});S.Evt.fire("page","homepageSet",{stattype:"set"});" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://120717.1207.dodiphp.cn/index.html');_s_dhp()" href="javascript:;">设为主页</a>|<a id="setf" onClick="fa(this)" href="javascript:void(0)" onmousedown="return ns_c({'fm':'behs','tab':'favorites','pos':0})">加入收藏夹</a></div>
                <ul class="nav">
                    <li class="navLeft"></li>
                    <li class="navCenter">
                    	<a href="index.html">公司简介</a>
                        <a href="product1.html">产品展示</a>
                        <a href="news.html">新闻中心</a>
                        <a href="message.html">给我留言</a>
                        <a href="links.html">友情链接</a>
                        <a href="address.html">联系我们</a>
                        <a href="login.html" class="last">会员登录</a>
                    </li>
                    <li class="navRight"></li>
                </ul><!-- 避免多DIV症 -->
            </div>
        </div>
        <div class="banner"><img src="images/banna.jpg" /></div>
    </div>

    <div class="main">
    	<div class="mainLeft">
        	<img src="images/product.gif" /><!-- 隐式块级 -->
            <ul class="cate">
            	<li class="cateTop"></li>
                <li class="cateMid">
                	<a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                </li>
                <li class="cateBtm"></li>
            </ul>
            <img src="images/search.gif" />
            <div class="search">
            <form>
            	<p><input type="text" name="keyword" size="15" /></p>
            	<p>
                	<select name="cate">
                		<option value="">请选择</option>
                    	<option value="">商务会议</option>
                    	<option value="">商务会议</option>
                	</select>
                </p>
                <p><input type="image" src="images/search_left.gif" /></p>
            </form>
            </div>
        </div>
        <div class="mainRight">
        	<div class="rightTOP"></div>
            <div class="rightMid">
            	<div class="breadCrumb"><?php echo $one[0]['title'] ?></div>
                <div class="add">
                <p><?php echo $one[0]['content'] ?></p>
                <p></p>
                <p></p>
                </div>
            </div>
            <div class="rightBtm"></div>
        </div>
        <div class="clear"></div>
    </div>
    <ul class="footer">
    	<li></li>
        <li class="footCen">版权所有&copy;佛山市顺德区宝源家具实业有限公司&nbsp;&nbsp;技术支持QQ:4630222431</li>
        <li class="footRig"></li>
    </ul>
<!--    1、加快显示速度
    2、提高负载承受能力
    3、保证特效的完整性
    <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>-->
</div>
</body>
</html>