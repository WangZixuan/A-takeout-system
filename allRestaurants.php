﻿<!DOCTYPE HTML>
<html>
<head>
<title>allRestaurants</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flatro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" id="sourcecode">
            $(function()
            {
                $('.scroll-pane').jScrollPane();
            });
        </script>
<script>$(document).ready(function(c) {
    $('.alert-close').on('click', function(c){
        $('.message').fadeOut('slow', function(c){
            $('.message').remove();
        });
    });	  
});
</script>
<script>$(document).ready(function(c) {
    $('.alert-close1').on('click', function(c){
        $('.message1').fadeOut('slow', function(c){
            $('.message1').remove();
        });
    });	  
});
</script>
</head>
<body>
<div class="header_top">
    <div class="container">
        <div class="one-fifth column row_1">
            <span class="selection-box"><select class="domains valid" name="domains">
               <option>中文</option>
               <option>English</option>
               <option>日本語</option>
            </select></span>
         </div>
         <div class="cssmenu">
            <ul>
		<li class="active">
		<?php
		session_start();
		if (isset($_SESSION["login"]))
		{
        	global $login;
       		 echo "hello,",$_SESSION["login"],"<br/>";
        	echo "<a href='./php/logout.php'>退出登陆</a><br/>";
		}
		else
		{
        	echo "<a href='login.html'>登录</a>";
		}
		?>
               </li> 
            </ul>
         </div>
    </div>
</div>	
<div class="header_bottom men_border">
        <div class="container">
            <div class="col-xs-9 header-bottom-left">
                <div class="col-xs-2 logo">
                    <h1><a href="mainpage.html"><span>My</span>waimai</a></h1>

                </div>
                <div class="col-xs-7 menu">
                    <ul class="megamenu skyblue">
                      <li class="active grid"><a class="color1">点餐</a><div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="allRestaurants.html">中式快餐</a></li>
                                        <li><a href="allRestaurants.html">西餐</a></li>
                                        <li><a href="allRestaurants.html">黄焖鸡（推荐）</a></li>
                                        <li><a href="allRestaurants.html">火锅</a></li>
                                        <li><a href="allRestaurants.html">烧烤</a></li>
                                        <li><a href="allRestaurants.html">日本料理</a></li>
                                        <li><a href="allRestaurants.html">法国大厨</a></li>
                                        <li><a href="allRestaurants.html">面点</a></li>
                                        <li><a href="allRestaurants.html">中式正餐</a></li>
                                        <li><a href="allRestaurants.html">本地特色</a></li>
                                        <li><a href="allRestaurants.html">不知道吃些啥</a></li>

                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>热门品牌</h4>
                                    <ul>
                                        <li><a href="allRestaurants.html">味湾</a></li>
                                        <li><a href="allRestaurants.html">老友记</a></li>
                                        <li><a href="allRestaurants.html">郭氏</a></li>
                                        <li><a href="allRestaurants.html">老兵</a></li>
                                        <li><a href="allRestaurants.html">御品</a></li>
                                        <li><a href="allRestaurants.html">彭德凯</a></li>
                                        <li><a href="allRestaurants.html">和园</a></li>
                                        <li><a href="allRestaurants.html">微客食代</a></li>
                                        <li><a href="allRestaurants.html">杨铭宇</a></li>

                                    </ul>	
                                </div>												
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="grid"><a class="color2" href="#">随便看看</a>
                      <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="allRestaurants.html">中式快餐</a></li>
                                        <li><a href="allRestaurants.html">西餐</a></li>
                                        <li><a href="allRestaurants.html">黄焖鸡（推荐）</a></li>
                                        <li><a href="allRestaurants.html">火锅</a></li>
                                        <li><a href="allRestaurants.html">烧烤</a></li>
                                        <li><a href="allRestaurants.html">日本料理</a></li>
                                        <li><a href="allRestaurants.html">法国大厨</a></li>
                                        <li><a href="allRestaurants.html">面点</a></li>
                                        <li><a href="allRestaurants.html">中式正餐</a></li>
                                        <li><a href="allRestaurants.html">本地特色</a></li>
                                        <li><a href="allRestaurants.html">不知道吃些啥</a></li>

                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>热门品牌</h4>
                                    <ul>
                                        <li><a href="allRestaurants.html">味湾</a></li>
                                        <li><a href="allRestaurants.html">老友记</a></li>
                                        <li><a href="allRestaurants.html">郭氏</a></li>
                                        <li><a href="allRestaurants.html">老兵</a></li>
                                        <li><a href="allRestaurants.html">御品</a></li>
                                        <li><a href="allRestaurants.html">彭德凯</a></li>
                                        <li><a href="allRestaurants.html">和园</a></li>
                                        <li><a href="allRestaurants.html">微客食代</a></li>
                                        <li><a href="allRestaurants.html">杨铭宇</a></li>
                                    </ul>	
                                </div>												
                            </div>
                          </div>
                        </div>
                </li>
                <li class="active grid"><a class="color5" href="404.html">官方论坛</a></li>
                <li class="active grid"><a class="color5" href="404.html">联系我们</a></li>

                </ul> 
            </div>
        </div>
		<div class="col-xs-3 header-bottom-right">
	       <ul class="icon1 sub-icon1 profile_img">
				<li><a class="active-icon c1" href="#"> </a>
					<ul class="sub-icon1 list">
						  <h3>购物车(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="images/food/huangmenji.jpg" class="img-responsive" alt=""/></div>
								    <div class="list_desc"><h4><a href="#">味湾黄焖鸡</a></h4>1 x<span class="actual">
		                             22.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="images/food/shuijiao.jpg" class="img-responsive" alt=""/></div>
								    <div class="list_desc"><h4><a href="#">哈尔滨水饺</a></h4>1 x<span class="actual">
		                             16.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">总价 : </div>
	                        	<div class="total_right">38.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="checkout.html">结账</a></div>
							  <div class="login_button"><a href="login.html">登录</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
					 </li>
		      </ul>

              <div class="search">	  
                <input type="text" name="s" class="textbox" value="查找" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
             </div>
             <div class="clearfix"></div>
          </div>
      <div class="clearfix"></div>
     </div>
    </div>
<div class="container">

<div class="women_main">
    <div class="col-md-9 w_content">
        <div class="women">
            <a href="#"><h4>餐厅列表</h4></a>
            <ul class="w_nav">
                        <li>所有</li> |
                        <li><a class="active" href="#">热门</a></li> |
                        <li><a href="#">新品 </a></li> |
                        <li><a href="#">折扣</a></li>
                        <div class="clear"></div>	
             </ul>
             <div class="clearfix"></div>	
        </div>
        <!-- grids_of_4 -->
        <div class="grids_of_4">
          <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/1_weizhongxian.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                    <h5><a href="details.html"> 木子味中仙</a></h5>
                    <h6>起送:10¥  免配送费<h6>
                     月售2112单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/2_dujiapaigu.jpg" class="img-responsive" alt=""/>
                       <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                     <h5><a href="details.html"> 独家排骨饭</a></h5>
                    <h6>起送:15¥  配送费:1¥<h6>
                     月售1196单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/3_gongfubaozai.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                    <h5><a href="details.html"> 功夫煲仔</a></h5>
                    <h6>起送:10¥  免配送费<h6>
                     月售1652单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/4_jiaodiandian.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                    <h5><a href="details.html"> 校点点</a></h5>
                    <h6>起送:15¥  免配送费<h6>
                     月售6984单
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="grids_of_4">
          <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/5_qingzhihe.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                    <h5><a href="details.html"> 青知和中式快餐</a></h5>
                    <h6>起送:16¥  免配送费<h6>
                     月售4954单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/6_qianbaiwei.jpg" class="img-responsive" alt=""/>
                       <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                     <h5><a href="details.html"> 仟佰味骨头饭</a></h5>
                    <h6>起送:0¥  免配送费<h6>
                     月售3911单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/7_cailinji.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                     <h5><a href="details.html"> 蔡林记黄焖鸡米饭</a></h5>
                    <h6>起送:10¥  免配送费<h6>
                     月售548单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/8_shikede.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                    <h5><a href="details.html"> 仕客徳秘制烤肉饭</a></h5>
                    <h6>起送:16¥  配送费:1¥<h6>
                     月售5070单
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="grids_of_4">
          <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/9_guojiadayuan.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                     <h5><a href="details.html"> 郭家大院</a></h5>
                    <h6>起送:0¥  免配送费<h6>
                     月售3725单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/10_maocai.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                     <h5><a href="details.html"> 乡丫头冒菜</a></h5>
                    <h6>起送:0¥  免配送费<h6>
                     月售1634单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/11_ruyihuntun.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                    <h5><a href="details.html"> 如意馄饨</a></h5>
                    <h6>起送:20¥  免配送费<h6>
                     月售1758单
                </div>
            </div>
            <div class="grid1_of_4">
                <div class="content_box"><a href="singleRestaurant.html">
                  <div class="view view-fifth">
                     <img src="images/restaurants/12_jieke.jpg" class="img-responsive" alt=""/>
                        <div class="mask1">
                            <div class="info"> </div>
                        </div>
                      </a>
                   </div>
                     <h5><a href="details.html"> 杰克餐厅</a></h5>
                    <h6>起送:0¥  免配送费<h6>
                     月售799单
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end grids_of_4 -->
    </div>
    <!-- start sidebar -->
    <div class="col-md-3">
      <div class="w_sidebar">
        <div class="w_nav1">
            <h4>分类：</h4>
            <ul>
                <li><a href="allRestaurants.html">中式快餐</a></li>
                <li><a href="allRestaurants.html">西餐</a></li>
                <li><a href="allRestaurants.html">火锅</a></li>
                <li><a href="allRestaurants.html">烧烤</a></li>
                <li><a href="allRestaurants.html">日本料理</a></li>
                <li><a href="allRestaurants.html">法国大厨</a></li>
                <li><a href="allRestaurants.html">面点</a></li>
                <li><a href="allRestaurants.html">中式正餐</a></li>
                <li><a href="allRestaurants.html">本地特色</a></li>
            </ul>	
        </div>
      </div>
   </div>
    <!-- start content -->
   <div class="clearfix"></div>
   <!-- end content -->
 </div>
</div>
<div class="footer">
	<div class="container">
	   <div class="footer_top">
		<div class="col-md-4 box_3">
			<h3>联系我们</h3>
			<address class="address">
              <p>Nanjing University.</p>
              <dl>
                 <dt></dt>
                 <dd>iPhone:<span> +159********</span></dd>
                 <dd>Telephone:<span> +1 *****</span></dd>
                 <dd>FAX: <span>+1 800 ******</span></dd>
                 <dd>E-mail:&nbsp; <a href="mailto@example.com">contace@waimai.com</a></dd>
              </dl>
           </address>
           <ul class="footer_social">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="instagram"> </i> </a></li>
		   </ul>
		</div>
		<div class="col-md-4 box_3">
			<h3>最新讯息</h3>
			<h4><a href="#">热烈祝贺我司与支付宝达成合作</a></h4>
			<p>为庆祝我司与支付宝达成合作，现举行“三天免费吃”的活动。机不可失，时不再来！</p>
			<h4><a href="#">美联储正在与我司洽谈合作事宜</a></h4>
			<p>日前，我司法务代表紫薇正在腐朽的美帝国与美联储洽谈，我们坚信：只有共产主义才能拯救全世界！</p>
			<h4><a href="#">即将到来的活动</a></h4>
			<p>为庆祝高考顺利结束，高考考生可凭借准考证领取50000元大礼包！</p>
		</div>
		<div class="col-md-4 box_3">
			<h3>系统支持</h3>

			<ul class="list_1">
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Payment</a></li>
				<li><a href="#">Refunds</a></li>
				<li><a href="#">Track Order</a></li>
				<li><a href="#">Services</a></li>
			</ul>

			<ul class="list_1">
				<li><a href="#">Services</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="footer_bottom">
			<div class="copy">
                <p>Copyright &copy; 2015.Waimai Commpany. All rights reserved.</p>
	        </div>
	    </div>
	</div>
</div>
</body>
</html>		