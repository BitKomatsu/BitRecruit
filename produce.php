<!DECTYPE html>
<html>
	<head>
<?php
	include_once("./inc/config.inc");
?>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>(仮)BITリクルートサイト</title>
		<link rel="stylesheet" href="modaal.css">
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src="modaal.min.js"></script>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
		<title>(仮)BITリクルートサイト</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="./js/iziModal.min.css">
		<script src="./js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="./js/iziModal.min.js" type="text/javascript"></script>
		<script src="./js/modal.js" type="text/javascript"></script>

    	<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider({
					auto: true,
					speed: 500,
					pause: 4000
				});
			});
		</script>
	</head>
	<body>

<div class="wrapper">
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
<?php
	include("./inc/header.inc");
?>
		

<!-- パンくずリスト -->
<div class="">
	<a href="index.html" class="">
		HOME
	</a>
		> 社員紹介
</div>

	
<!-- 画像 -->
<div class="image">
	<img src="./images/title04.png" alt="社員紹介">
</div>
<!-- //画像 -->
 
<!-- 社風 -->
<div class="nakama">
	<img src="./images/produce_sub1.png">
		<div class="contain">
			<h2>愉快な仲間たち</h2><p>
				<div class="text">
				<span>よくある言葉ですが、やっぱりそれが一番しっくり来る感じです。<br/>
				bitにはいろんな人がいます。<br/>
				よく話す人。よく笑う人。<br/>
				もちろん、仕事をしている最中は集中していますので、無言でパソコンの画面を見つめ、聞こえてくるのはキーボードをたたく音だけ。<br/>
				そんな場面がほとんどですが、誰だって息抜きが必要なわけで、その使い分けが上手です。<br/>
				誰かの一言がきっかけで、さらにかぶせてボケる人やノリ突っ込みをする人でしばらくは笑い話で脳の緊張を緩めたあと、またみんな仕事に集中する。<br/>
				こんなことを繰り返しながら日々の仕事をこなしています。<br/>
				大阪発の会社だから、といわれればまさにそのとおりなのですが、考える仕事なのでどうしても行き詰ってしまうことがあります。<br/>
				そんなときにさりげなく、冗談の中で手助けをし合う。<br/>
				そんな人たちが、それぞれの夢や希望、憧れや目標をみんなで実現していく会社です。
				</span>
				</div>
		</div>
</div>
<!-- //社風 -->

<!-- スタッフ -->
<div class="staff">
	<img src="./images/produce_sub2.png">
		<div class="contain">
			<span>bitの社員の数名をご紹介します。</span>
		</div>
<!-- 紹介 -->

		<p>ボタンをクリックするとモーダルが表示されます</p>
		<button class="open-default button">default</button>
		<div id="modal-default">
		  <div class="close">
		    <a data-izimodal-close="">×</a>
		  </div>
		  <p>このモーダルはデフォルト設定です</p>
		</div>

		<button class="open-options button">options</button>
		<div id="modal-options" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="オプション設定モーダル" data-izimodal-subtitle="サブタイトル">
		  <p>このモーダルはオプション設定をしています<br>iframeモーダルとグループ設定しています</p>
		</div>

		<button class="open-iframe button">iframe</button>
		<div id="modal-iframe" data-izimodal-group="group1"></div>

		<button class="open-alert button">alert</button>
		<div id="modal-alert" data-izimodal-title="アラートモーダル" data-izimodal-subtitle="10秒で非表示になります"></div>


		<div class="shain">
			<div class="shainImg"><img src="./images/shain01.png" width="300px">
				<p>高田　秀二</p>
				<button class="open-options button">options</button>
					<div id="modal-options" data-izimodal-group="group2" data-izimodal-loop="" data-izimodal-title="オプション設定モーダル" data-izimodal-subtitle="サブタイトル">
		  			<p>このモーダルはオプション設定をしています<br>iframeモーダルとグループ設定しています</p>
				</div>
			</div>
			<div class="shainImg"><img src="./images/shain02.png" width="300px">
				<p>吉村　勇人</p>
			</div>
			<div class="shainImg"><img src="./images/shain03.png" width="300px">
				<p>吉田　亮</p>
			</div>
			<div class="shainImg"><img src="./images/shain04.png" width="300px">
				<p>山内　明</p>
			</div>
			<div class="shainImg"><img src="./images/shain05.png" width="300px">
				<p>小松　弘樹</p>
			</div>
			<div class="shainImg"><img src="./images/shain06.png" width="300px">
</div>
</div>

<!-- //紹介 -->
<!-- //スタッフ -->

		
<div class="clear"></div>
</div>
<?php
	include("./inc/footer.inc");
?>
</body>
</html>