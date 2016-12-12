<?php
	//从数据库获取到数据
	include "mysqli.php";
	$sql = "SELECT * FROM news";
	$list = getlist($sql);
//	pre($list);die;
	$perPage = 3;  //每页要显示的数据条数；
	$totalCount = count($list); //数据的总条数；
	//需要显示的分页数量
	$page = ceil($totalCount/$perPage);
	if(empty($_GET['p'])){
		$startPage = 0;
	}else{
		$startPage = ($_GET['p']-1)*$perPage;
	}
	
	
	$sql = "SELECT * FROM news LIMIT $startPage,$perPage";
	$lists = getlist($sql);
	

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
<link href="css/news.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-3.1.1.min.js">
</script>
</head>
<body>

<div id="container">
	<div class="header">
    	<div class="headTop">
        	<div class="logo">
            	<a href="index.html"><img src="images/logo.gif" alt="佛山市顺德区宝源家具实业公司" title="佛山市顺德区宝源家具实业公司" /></a>
            </div>
            <div class="headRight">
            	<div class="tool"><a>设为主页</a>|<a>加入收藏夹</a></div>
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
            	<div class="breadCrumb">您现在的位置是：新闻中心</div>
                <ul class="news">
                	
                	<?php foreach($lists as $k=>$v){ ?>
                	<li><a href="news_info.php?id=<?php echo $v['id'] ?>"><?php echo $v['title']; ?>
                	<?php echo date("Y-m-d H:i:s",$v['newTime']); ?></a></li>
             		 <?php } ?>
                </ul>
                <?php for($i=1;$i<=$page;$i++){
              echo "<span onclick='getData(".$i.")'>".$i."</span>&nbsp;";  	
					
                } ?>
            </div>
           
            <div class="rightBtm" ></div>
        </div>
        <div class="clear"></div>    
    </div>
    <ul class="footer">
    	<li></li>
        <li class="footCen">版权所有&copy;佛山市顺德区宝源家具实业有限公司&nbsp;&nbsp;技术支持QQ:4630222413</li>
        <li class="footRig"></li>
    </ul>
<!--    1、加快显示速度
    2、提高负载承受能力
    3、保证特效的完整性
    <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>-->
</div>
</body>
<script type="text/javascript">

	//通过ajax获取到相应的分页数据
	function getData(p){
		
		$.ajax({
			type:"post",
			url:"getData.php",
			data:{
				p:p,
				perPage:<?php echo $perPage; ?>
			},
			dataType:'json',
			async:true,
			success:function(data){
//				var str = "";
//				for(var i=0;i<data.length;i++){
//					str +="<li><a href='#'>"+data[i].title+"</a>"+data[i].newsTime+"</li>";
//				}
//				$('.news').html(str);
                console.log(data);

			}
		
		});
		
		
		
	}
	
	
	
	
	
</script>


</html>