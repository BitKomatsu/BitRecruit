<!DECTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>会社概要</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body>
		<script type="text/javascript">
			$(function(){
			  $("#toggle").click(function(){
			    $(".menu").slideToggle();
			    return false;
			  });
			  $(window).resize(function(){
			    var win = $(window).width();
			    var p = 640;
			    if(win > p){
			      $(".menu").show();
			    } else {
			      $(".menu").hide();
			    }
			  });
			});
			$(function() {
				var win = $(window).width();
			    var p = 640;
			    if(win < p)$(function(){
					$(".menuList").click(function(){
						$(".menu").hide();
					});
				});
			});
		</script>
<body class="overview">
	<?php include("../inc/header.inc"); ?>
	
	<!-- パンくずリスト -->
	<div class="">
		<a href="index.html" class="">
			HOME
		</a>
		> 会社概要
	</div>
	<div class="outline_title">
		<img src="images/title01.png">
	</div>
	<div class="outline_wrapper">
		<span class="outline_index">
			会社名
		</span>
		<span class="container">
			株式会社ビーアイテイ(略称 BIT)
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			設立
		</span>
		<span class="container">
			1983年9月16日
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			役員
		</span>
		<span class="container">
			代表取締役　野間　一志<br>
			専務取締役　西川　寿一<br>
			取締役　山内　明<br>
			取締役　羽岡　義明<br>
			<br>
			執行役員　高田　秀二<br>
			執行役員　鈴木　淳也<br>
			執行役員　柳本　隆春<br>
			執行役員　大黒　良司
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			資本金
		</span>
		<span class="container">
			3,000万円
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			社員数
		</span>
		<span class="container">
			53名（平均年齢38歳【H29.07.01現在】）
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			取引銀行
		</span>
		<span class="container">
			三井住友銀行　大阪本店営業部<br>
			みずほ銀行　大阪支店
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			許認可
		</span>
		<span class="container">
			労働者派遣事業者　派27-302566（2017年6月1日）<br>
			プライバシーマーク　20001691号（2012年3月13日）
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			業務内容
		</span>
		<span class="container">
			<ul style="padding-left:3em">
				<li>ITコンサルティング</li>
				<li>業務系ソフトウェア開発</li>
				<li>Webコンテンツ作成、Webアプリケーション開発</li>
				<li>パッケージソフトウェア開発・販売</li>
				<li>各種サーバー構築・保守</li>
			</ul>
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			加入団体
		</span>
		<span class="container">
			大阪商工会議所
			日本Linux協会
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			認定パートナー
		</span>
		<span class="container">
			<div class="partner">
				マイクロソフト 認定パートナー(Silver Datacenter)
				<br>
				<img src="images/MPN_logo.png" hspace="20">
			</div>
			<div class="partner">
				オラクル(OPN Silver Partner) 
				<br>
				<img src="images/opn_mp.gif" hspace="20">
			</div>
			<div class="partner">
				シマンテック（Symantec Silver Partner)
				<br>
				<img src="images/icon_sales.gif" hspace="20">
			</div>
		</span>
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			大阪本社
		</span>
		<span class="container">
			<div class="address">
				〒550-0002<br>
				大阪市西区江戸堀1-10-2(肥後橋ニッタイビル5F)<br>
				TEL：06-6445-7480<br>
				FAX：06-6445-7239<br>
			</div>
			<div class="google-box">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5679.162899329557!2d135.4936039889313!3d34.68706335155884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6fab81e199d%3A0x5f4f4f9f1b1f4759!2z44CSNTUwLTAwMDIg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65rGf5oi45aCA77yR5LiB55uu77yR77yQ4oiS77yS!5e0!3m2!1sja!2sjp!4v1522312932591" frameborder="0" style="border: 0;  width: 100%; height: 100%;" allowfullscreen></iframe>
			</div>
		</span>
	</div>
	<div class="clear">
	</div>
	<hr class="outline_hr">
	<div class="outline_wrapper">
		<span class="outline_index">
			東京オフィス
		</span>
		<span class="container">
			<div class="address">
				〒101-0032<br>
				東京都千代田区岩本町2-12-2 第2早川ビル9階<br>
				TEL：03-6240-9120<br>
				FAX：03-6240-9121<br>
			</div>
			<div class="google-box">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6480.617671528825!2d139.776435!3d35.69401700000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188eabc2ba8ac1%3A0x8cbe6ddcf855af59!2z5pel5pys44CB44CSMTAxLTAwMzIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65bKp5pys55S677yS5LiB55uu77yR77yS4oiS77yS!5e0!3m2!1sja!2sus!4v1522317496916" frameborder="0" style="border: 0; width: 100%; height: 100%;" allowfullscreen></iframe>
			</div>
		</span>
	</div>
	<div class="clear">
	</div>
	<?php include("../inc/footer.inc"); ?>
</body>
</html>