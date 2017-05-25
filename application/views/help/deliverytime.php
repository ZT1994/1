<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发票制度_如何付款/退款_网上购物麦路客</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<base href="<?php echo site_url();?>">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link href="assets/css/base.css" rel="stylesheet" type="text/css" />
<link href="assets/css/info.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>
</head>
<body>
<div class="side_con">
	<div class="l_m">
		<div class="f_l l_m_l">
			您好，欢迎来麦路客商城！
			<?php 
           // session_start();
			if(isset($_SESSION['uname'])){
				$name=$_SESSION['uname'];
				echo "<a>".$name."</a>已登录"."&nbsp;";
				echo "<a href='index.php/user/logout?name=$name'  class='huise''>[注销]</a>";
			}else{
				echo"<a href='index.php/user/login' class='huise'>[登录]</a>";
				echo"<a href='index.php/user/register' class='huise'>[免费注册]</a>";
				echo"<a href='index.php/user/managerlogin' calss='huise'>[管理员登录]</a>";
			}
             ?> 
		
		</div><!--l_m_l end-->
		<div class="f_r l_m_r">
			<ul class="clearfix">
				<li><a href="index.php/user/index">帮助中心</a></li>
				<li><a href="index.php/user/myOrder" class="yellow">我的订单</a></li>
			</ul>
		</div><!--l_m_r end-->
	</div><!--l_m end-->
</div><!--side_con end-->
<div class="header container">
	<div class="l_s">
		<a class="f_l logo" href="index.php/user/index"><img src="assets/images/logo.gif" alt="麦路客商城" width="152" height="71" /></a>
		
		<ul class="f_r l_s_r">
			<li class="icon_01"><a title="货到付款" href="index.php/user/payment">货到付款</a></li><li class="icon_02"><a title="支付宝支付" href="index.php/user/payment">支付宝支付</a></li><li class="icon_03"><a title="7天退换" href="index.php/user/policy">7天退换</a></li><li class="icon_04"><a title="提供发票" href="index.php/user/invoiceSystem">提供发票</a></li>
		</ul><!--l_s_r end-->
	</div><!--l_s end-->
	<div class="site-nav">
		<div class="floor_nav">
			<ul class="floors">
				<li id="floor_0"><a class="track" title="首页" href="index.php/user/index">首页</a></li>
				<!-- <li id="floor_1"><a class="track" title="飞机模型" href="index.php/user/airplane">飞机模型</a></li> -->
				<li id="floor_2"><a class="track" title="女装" href="index.php/user/women">女装</a></li>
				<li id="floor_3"><a class="track" title="男装" href="index.php/user/man">男装</a></li>
				<li id="floor_4"><a class="track" title="鞋子" href="index.php/user/shoes">鞋子</a></li>
				<li id="floor_5"><a class="track" title="箱包" href="index.php/user/bags">箱包</a></li>
				<!-- <li id="floor_6"><a class="track" title="折扣积分" href="index.php/user/discount">折扣积分</a></li>
				<li id="floor_7"><a class="track" title="所有分类" href="index.php/user/sort">所有分类</a></li> -->
			</ul>
			
		</div><!--floor_nav end-->
		<div class="sub-floor-menus">
			<div class="menu" id="sub_floor_2">
				<div class="meun_sort">
					<div class="sort clearfix">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/women?id1=5">上装 ></a></dt>
									<dd><span><a href="index.php/user/women?id=15">T恤</a></span><span><a href="index.php/user/women?id=17">打底衫</a></span><span><a href="index.php/user/women?id=16">雪纺衫</a></span></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="index.php/user/women?id1=6">下装 ></a></dt>
									<dd><span><a href="index.php/user/women?id=18">亚麻裤</a></span><span><a href="index.php/user/women?id=19">小脚裤</a></span></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="index.php/user/women?id1=6">裙子 ></a></dt>
									<dd><span><a href="index.php/user/women?id=20">连衣裙</a></span><span><a href="index.php/user/women?id=21">蓬蓬裙</a></span></dd>
								</dl>
							</li>
						</ul><!--sort_nav end-->
						<!-- <div class="f_l sort_pp">
							<h3>热门品牌</h3>
							<ul>
								<li><a href="#">JACKJONES</a><a href="#">九牧王</a><a href="#">七匹狼</a><a href="#">马克华菲</a><a href="#">稻草人</a><a href="#">TONYJEANS</a><a href="#">凡诺</a></li>
							</ul>
							<div class="blank10"></div>
							<h3>新品推荐</h3>
							<p align="center"><a href="#"><img src="assets/images/polo.jpg" width="135" height="137" alt="美素活悦弹力系列" /></a></p>
						</div> --><!--sort_pp end-->
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_2 end-->
			<div class="menu" id="sub_floor_3">
				<div class="meun_sort">
					<div class="sort clearfix" style="width:100px;">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/man?id1=8">上装 ></a></dt>
									<dd><span><a href="index.php/user/man?id=22">T恤</a></span><span><a href="index.php/user/man?id=23">风衣</a></span></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="index.php/user/man?id1=9">下装 ></a></dt>
									<dd><span><a href="index.php/user/man?id=24">哈伦裤</a></span><span><a href="index.php/user/man?id=25">小脚裤</a></span><span><a href="index.php/user/man?id=26">短裤</a></span></dd>
								</dl>
							</li>
						</ul><!--sort_nav end-->
						<!-- <div class="f_l sort_pp">
							<h3>热门品牌</h3>
							<ul>
								<li><a href="#">JACKJONES</a><a href="#">九牧王</a><a href="#">七匹狼</a><a href="#">马克华菲</a><a href="#">稻草人</a><a href="#">TONYJEANS</a><a href="#">凡诺</a></li>
							</ul>
							<div class="blank10"></div>
							<h3>新品推荐</h3>
							<p align="center"><a href="#"><img src="assets/images/polo.jpg" width="135" height="137" alt="美素活悦弹力系列" /></a></p>
						</div> --><!--sort_pp end-->
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_3 end-->
			<div class="menu" id="sub_floor_4">
				<div class="meun_sort">
					<div class="sort clearfix" style="width:100px;">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/shoes?id1=10">男鞋 ></a></dt>
									<dd><span><a href="index.php/user/shoes?id=27">运动鞋</a></span></dd>
								</dl>
							</li>
							 <li>
								<dl>
									<dt><a href="index.php/user/shoes?id1=11">女鞋 ></a></dt>
									<dd><span><a href="index.php/user/shoes?id=29">凉鞋</a></span><span><a href="index.php/user/shoes?id=28">高跟鞋</a></span>
								</dl>
							</li> 
						</ul><!--sort_nav end-->
						<!-- <div class="f_l sort_pp">
							<h3>热门品牌</h3>
							<ul>
								<li><a href="#">JACKJONES</a><a href="#">九牧王</a><a href="#">七匹狼</a><a href="#">马克华菲</a><a href="#">稻草人</a><a href="#">TONYJEANS</a><a href="#">凡诺</a></li>
							</ul>
							<div class="blank10"></div>
							<h3>新品推荐</h3>
							<p align="center"><a href="#"><img src="assets/images/polo.jpg" width="135" height="137" alt="美素活悦弹力系列" /></a></p>
						</div> --><!--sort_pp end-->
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_4 end-->
			<div class="menu" id="sub_floor_5">
				<div class="meun_sort">
					<div class="sort clearfix" style="width:100px;">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/bags?id=30">箱包></a></dt>
									<dd><span><a href="index.php/user/bags?id=30">拉杆箱</a></span><span><a href="index.php/user/bags?id=31">布箱</a></span></dd>
								</dl>
							</li>
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_5 end-->
		</div><!--sub_floor_menus end-->
	</div><!--site-nav end-->
</div><!--header end-->
	
<div class="content container">
	<div class="breadcrumbs">
		<a href="../index.html">首页</a><span>></span><a href="index.html">帮助中心</a><span>></span>发票制度
	</div><!--breadcrumbs end-->
	<h2 class="title">帮助中心</h2>
	<div class="content_main clearfix">
		<div class="f_l c_l">
			<dl>
				<dt>新手指南</dt>
				<dd><a href="index.php/user/help" target="_blank"><span>购物流程</span></a></dd>
				<dd><a href="index.php/user/common" target="_blank"><span>常见问题</span></a></dd>
			</dl>
			<dl>
				<dt>订单问题</dt>
				<dd><a href="index.php/user/orderstatus" target="_blank">订单状态</a></dd>
				   
				<dd><a href="index.php/user/notorder" target="_blank">未达订单</a></dd> 
			</dl>
			<dl>
				<dt>如何付款/退款</dt>
				<dd><a href="index.php/user/payment" target="_blank">支付方式</a></dd>
				
				<dd><a href="index.php/user/payissue" target="_blank">支付问题</a></dd>
				<dd><a href="index.php/user/refund" target="_blank">办理退款</a></dd>
				<dd><a href="index.php/user/invoiceSystem" target="_blank">发票制度</a></dd>        
			</dl>
			<dl>
				<dt>配送和收费</dt>
				<dd><a href="index.php/user/timerange" target="_blank">配送时间</a></dd> 
				<dd><a href="index.php/user/deliverytime" target="_blank">送达时间</a></dd> 
				<dd><a href="index.php/user/inspectionsign" target="_blank">验货与签收</a></dd> 
				<dd><a href="index.php/user/express" target="_blank">快递配送和收费</a></dd> 
				<dd><a href="index.php/user/ems" target="_blank">EMS配送和收费</a></dd>      
			</dl>
			<dl>
				<dt>售后服务</dt>
				<dd><a href="index.php/user/policy" target="_blank">退换货政策</a></dd>
				<dd><a href="index.php/user/applygoods" target="_blank">如何办理退换货</a></dd>     
			</dl>
		</div><!--c_l end-->
		<div class="f_r c_r">
			<div class="help_r_t">
				<dl class="clearfix">
					<dt>送达时间</dt>
				</dl>
			</div>
			<div class="help_r_t_m">
				<dl>
					<dt>一、配货发货时间</dt>
					<dd>1. 配货时间：正常情况下，<a href="http://www.mailuke.com/">网上购物麦路客</a>会在确认订单后的1个工作日内为您配货发货。</dd>
					<dd>2. 无货延迟：如出现您下单后无货，无法在1个工作日内发货的情况，我们的工作人员会第一时间通知到您，并征求您的意见延迟发货。</dd>
					<dd>3. EMS快递：由于邮政快递双休日是不进行发货的，您的货物会在下周一进行发货。</dd>
					<dt>二、各地区发货后到货时间</dt>
					<dd>
						<table width="100%" class="list-table a-c">
							<tbody>
								<tr>
									<td width="72" height="51">地区</td>
									<td width="117">快递公司送达时间<br />4008-111-111</td>
									<td width="117">EMS快递送达时间<br />11185</td>
									<td width="25" rowspan="18">&nbsp;</td>
									<td width="72">地区</td>
									<td width="117">快递公司送达时间<br />4008-111-111</td>
									<td width="117">EMS快递送达时间<br />11185</td>
								</tr>
								<tr>
									<td>上海</td>
									<td>1-2天</td>
									<td>NA</td>
									<td>黑龙江</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>北京</td>
									<td>1-2天</td>
									<td>3-4天</td>
									<td>内蒙古</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>广州</td>
									<td>1-2天</td>
									<td>3-4天</td>
									<td>湖南</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>江苏</td>
									<td>1-2天</td>
									<td>3-4天</td>
									<td>吉林</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>深圳</td>
									<td>1-2天</td>
									<td>3-4天</td>
									<td>江西</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>天津</td>
									<td>1-2天</td>
									<td>3-4天</td>
									<td>辽宁</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>浙江</td>
									<td>1-2天</td>
									<td>3-4天</td>
									<td>湖北</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>安徽</td>
									<td>2-3天</td>
									<td>3-4天</td>
									<td>宁夏</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>广东</td>
									<td>2-3天</td>
									<td>3-4天</td>
									<td>山东</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>河北</td>
									<td>2-3天</td>
									<td>3-4天</td>
									<td>山西</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>福建</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>陕西</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>甘肃</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>四川</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>广西</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>云南</td>
									<td>2-3天</td>
									<td>4-6天</td>
								</tr>
								<tr>
									<td>贵州</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>新疆</td>
									<td>3-4天</td>
									<td>6-7天</td>
								</tr>
								<tr>
									<td>海南</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>青海</td>
									<td>无法送达</td>
									<td>6-7天</td>
								</tr>
								<tr>
									<td>河南</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>西藏</td>
									<td>无法送达</td>
									<td>6-7天</td>
								</tr>
								<tr>
									<td>重庆</td>
									<td>2-3天</td>
									<td>4-6天</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</dd>
					<dd><b>个别地区：</b>以上时间为大致到货时间，部分村镇地区使用邮政快递的到货时间在此基础上延长1-2天。</dd>
					<dd><b class="red">友情提示：</b>当货物到达您当地的邮局或投递站而没有及时派送，请不要着急，可以拨打相应快递的客服热线进行咨询，以此来节约时间。</dd>
					<dt>三、货物未妥投</dt>
					<dd>1. 投递失败：由于地址无人接收，或无法联系收件人造成的投递失败。请您立即拨打快递的服务热线，以确认地址以及配送时间。</dd>
					<dd>2. 延迟投递：您的货物已经到达当地的邮局或配送点，但由于时间原因需延迟到第二天派件。请您再耐心等待一天。</dd>							
					<dd>3. 邮政快递：由于邮政快递双休日是不进行派件的，您的货物会在下周一进行派送。</dd>
					</dd>
				</dl>						
			</div>
		</div>
	</div>
	<div class="content_bg mb-10"></div>
</div><!--content end-->
	
<div class="footer container">
	<div class="service">
		<div class="cat_bg"></div>
		<div class="help_list clearfix">
			<dl>
				<dt>新手指南</dt>
				<dd><a href="index.php/user/help" target="_blank"><span>购物流程</span></a></dd>
				<dd><a href="index.php/user/common" target="_blank"><span>常见问题</span></a></dd>
			</dl>
			<dl>
				<dt>订单问题</dt>
				<dd><a href="index.php/user/orderstatus" target="_blank">订单状态</a></dd>
				
				<dd><a href="index.php/user/notorder" target="_blank">未达订单</a></dd> 
			</dl>
			<dl>
				<dt>如何付款/退款</dt>
				<dd><a href="index.php/user/payment" target="_blank">支付方式</a></dd>
				
				<dd><a href="index.php/user/payissue" target="_blank">支付问题</a></dd>
				<dd><a href="index.php/user/refund" target="_blank">办理退款</a></dd>
				<dd><a href="index.php/user/invoiceSystem" target="_blank">发票制度</a></dd>        
			</dl>
			<dl>
				<dt>配送和收费</dt>
				<dd><a href="index.php/user/timerange" target="_blank">配送时间</a></dd> 
				<dd><a href="index.php/user/deliverytime" target="_blank">送达时间</a></dd> 
				<dd><a href="index.php/user/inspectionsign" target="_blank">验货与签收</a></dd> 
				<dd><a href="index.php/user/express" target="_blank">快递配送和收费</a></dd> 
				<dd><a href="index.php/user/ems" target="_blank">EMS配送和收费</a></dd>      
			</dl>
			<dl>
				<dt>售后服务</dt>
				<dd><a href="index.php/user/policy" target="_blank">退换货政策</a></dd>
				<dd><a href="index.php/user/applygoods" target="_blank">如何办理退换货</a></dd>     
			</dl>
		</div>
	</div><!--service end-->
	<div class="copyright">
		<!-- <a href="help/about.html" target="_blank">关于麦路客</a><span>|</span><a href="help/contact.html" target="_blank">联系麦路客</a><span>|</span><a href="help/job.html" target="_blank">加入麦路客</a><span>|</span><a href="sort.html" target="_blank">网站地图</a><span>|</span><a href="help/complainting.html" target="_blank">投诉与建议</a><span>|</span><a href="help/links.html" target="_blank">友情链接</a><br /> -->
		Copyright&nbsp;&nbsp;©&nbsp;&nbsp;2009-2011&nbsp;&nbsp;<a title="麦路客商城" href="http://www.mailuke.com/">www.mailuke.com</a>&nbsp;&nbsp;麦路客商城版权所有<span>|</span><a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备10031526号</a><br />
		<a href="#" target="_blank"><img src="assets/images/beian.gif" width="128" height="47" alt="经营性网站备案中心" /></a><a href="#" target="_blank"><img src="assets/images/trustA.gif" width="119" height="47" alt="A级-信用企业" /></a><a href="#" target="_blank"><img src="assets/images/alipay.gif" width="123" height="40" alt="支付宝-特约商家" /></a>
	</div><!--copyright end-->
</div><!--footer end-->

<!-- plugin -->
<script type="text/javascript" src="../js/lib.js"></script>
<!-- online -->
<script type="text/javascript" src="../js/online.js"></script> 	
</body>
</html>