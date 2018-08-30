<!DECTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>(仮)BITリクルートサイト</title>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/colorbox.css" />
		<title>(仮)BITリクルートサイト</title>
		<script src="./js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="./js/jquery.colorbox-min.js"></script>

    	<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider({
					auto: true,
					speed: 500,
					pause: 4000
				});
			});
<!--子画面モーダル関連-->
$(function(){
	$(".modal-open").click( function(){
		$(this).blur() ;
		if($("#modal-overlay")[0]) return false ;
		$("body").append('<div id="modal-overlay"></div>');
		$("#modal-overlay").fadeIn(500);
		centeringModalSyncer() ;
		$("#modal-content").fadeIn(500);
		$( "#modal-overlay" ).unbind().click( function(){
			$( "#modal-content,#modal-overlay" ).fadeOut( 500 , function(){
				$('#modal-overlay').remove() ;
			});
		});
	});
	function centeringModalSyncer(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var cw = $("#modal-content").outerWidth(true);
		var ch = $("#modal-content").outerHeight(true);
		
		var pxleft = ((w - cw)/2);
		var pxtop = ((h - ch)/2);
		$("#modal-content").css({"left": pxleft + "px"});
		$("#modal-content").css({"bottom": pxtop + "px"});
	}
});
$(function(){
	$(".modal-open02").click( function(){
		$(this).blur() ;
		if($("#modal-overlay")[0]) return false ;
		$("body").append('<div id="modal-overlay"></div>');
		$("#modal-overlay").fadeIn(500);
		centeringModalSyncer() ;
		$("#modal-content02").fadeIn(500);
		$( "#modal-overlay" ).unbind().click( function(){
			$( "#modal-content02,#modal-overlay" ).fadeOut( 500 , function(){
				$('#modal-overlay').remove() ;
			});
		});
	});
	function centeringModalSyncer(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var cw = $("#modal-content03").outerWidth(true);
		var ch = $("#modal-content03").outerHeight(true);
		
		var pxleft = ((w - cw)/2);
		var pxtop = ((h - ch)/2);
		$("#modal-content02").css({"left": pxleft + "px"});
		$("#modal-content02").css({"bottom": pxtop + "px"});
	}
});
$(function(){
	$(".modal-open03").click( function(){
		$(this).blur() ;
		if($("#modal-overlay")[0]) return false ;
		$("body").append('<div id="modal-overlay"></div>');
		$("#modal-overlay").fadeIn(500);
		centeringModalSyncer() ;
		$("#modal-content03").fadeIn(500);
		$( "#modal-overlay" ).unbind().click( function(){
			$( "#modal-content03,#modal-overlay" ).fadeOut( 500 , function(){
				$('#modal-overlay').remove() ;
			});
		});
	});
	function centeringModalSyncer(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var cw = $("#modal-content03").outerWidth(true);
		var ch = $("#modal-content03").outerHeight(true);
		
		var pxleft = ((w - cw)/2);
		var pxtop = ((h - ch)/2);
		$("#modal-content03").css({"left": pxleft + "px"});
		$("#modal-content03").css({"bottom": pxtop + "px"});
	}
});
$(function(){
	$(".modal-open04").click( function(){
		$(this).blur() ;
		if($("#modal-overlay")[0]) return false ;
		$("body").append('<div id="modal-overlay"></div>');
		$("#modal-overlay").fadeIn(500);
		centeringModalSyncer() ;
		$("#modal-content04").fadeIn(500);
		$( "#modal-overlay" ).unbind().click( function(){
			$( "#modal-content04,#modal-overlay" ).fadeOut( 500 , function(){
				$('#modal-overlay').remove() ;
			});
		});
	});
	function centeringModalSyncer(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var cw = $("#modal-content04").outerWidth(true);
		var ch = $("#modal-content04").outerHeight(true);
		
		var pxleft = ((w - cw)/2);
		var pxtop = ((h - ch)/2);
		$("#modal-content04").css({"left": pxleft + "px"});
		$("#modal-content04").css({"bottom": pxtop + "px"});
	}
});
$(function(){
	$(".modal-open03").click( function(){
		$(this).blur() ;
		if($("#modal-overlay")[0]) return false ;
		$("body").append('<div id="modal-overlay"></div>');
		$("#modal-overlay").fadeIn(500);
		centeringModalSyncer() ;
		$("#modal-content05").fadeIn(500);
		$( "#modal-overlay" ).unbind().click( function(){
			$( "#modal-content05,#modal-overlay" ).fadeOut( 500 , function(){
				$('#modal-overlay').remove() ;
			});
		});
	});
	function centeringModalSyncer(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var cw = $("#modal-content05").outerWidth(true);
		var ch = $("#modal-content05").outerHeight(true);
		
		var pxleft = ((w - cw)/2);
		var pxtop = ((h - ch)/2);
		$("#modal-content05").css({"left": pxleft + "px"});
		$("#modal-content05").css({"bottom": pxtop + "px"});
	}
});
$(function(){
	$(".modal-open03").click( function(){
		$(this).blur() ;
		if($("#modal-overlay")[0]) return false ;
		$("body").append('<div id="modal-overlay"></div>');
		$("#modal-overlay").fadeIn(500);
		centeringModalSyncer() ;
		$("#modal-content06").fadeIn(500);
		$( "#modal-overlay" ).unbind().click( function(){
			$( "#modal-content06,#modal-overlay" ).fadeOut( 500 , function(){
				$('#modal-overlay').remove() ;
			});
		});
	});
	function centeringModalSyncer(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var cw = $("#modal-content06").outerWidth(true);
		var ch = $("#modal-content06").outerHeight(true);
		
		var pxleft = ((w - cw)/2);
		var pxtop = ((h - ch)/2);
		$("#modal-content06").css({"left": pxleft + "px"});
		$("#modal-content06").css({"bottom": pxtop + "px"});
	}
});


		</script>
	</head>
	<body>

<div class="wrapper">
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

		<div class="shain">
			<a class="button-link modal-open">
				<div class="shainImg"><img src="./images/shain01.png" width="300px">
				<p>高田　秀二</p>
			</a>
				<!--子画面-->
				<div id="modal-content">
					<h3 class="ribbon17">社員の声</h3>
					<div class="voice_window">
						<h2>システム営業部　高田 秀二</h2>
						<p>
						<p>
							<b>学生時代に学んだこと</b><br/>
							旅行専門学校で資格取得を目指し観光業務やホテル業務のイロハを学んでおりました。残念ながら在学中資格の取得は出来ませんでしたが…。
						</p>
						<p>
							<b>BITを選んだ理由</b><br>
							旅行会社への就職を目指し就活開始。１９９０年代初旬に突然バブルが崩壊。旅行会社の求人が激減し挫折。路頭に迷っているさなか求人媒体ではＳＥ・ＰＧの募集があふれていました。<br>
							そこでとりあえず何の知識を無く某システム会社へ応募。なぜか採用ＩＴ業界に足をふみいれ約３年ほど勤務。自分自身のスキルアップを目指し新たに活躍できる場所を求め転職活動を開始しＢＩＴへ応募。<br>
							当時は設立１０年目ほどで少人数のＢＩＴでしたがビジョンがあり、また若手社員が活躍し活力や将来性を感じ、なぜか心をひかれこの会社を選びました。
						</p>
						<p>
							<b>これから働くにあたって、身につけたいこと又は身につけておけばよかったということ</b><br>
							経営哲学や会社運営に携わる全ての事。
						</p>
						<p>
							<b>やりがいを感じる瞬間</b><br>
							不景気時に仕事が受注できた時。お客様に助けられた時。新たな仕事が受注できた時。沢山の仲間と出会えた事　etc.
						</p>
						<p>
							<b>今後の目標</b><br>
							事業拡大・システム開発業務以外にＩＴを活用した新たな事業を起こす。
						</p>
					</div>
				</div>
			</div>
			
			<div class="shainImg">
				<a class="button-link modal-open02">
					<img src="./images/shain02.png" width="300px">
					<p>吉村　勇人</p>
				</a>
				<!--子画面-->
				<div id="modal-content02">
					<div class="voice_window">
						<p>
							システム営業部<br>
							吉田　亮
						</p>
						<p>
							学生時代に学んだこと<br>
							旅行専門学校で資格取得を目指し観光業務やホテル業務のイロハを学んでおりました。残念ながら在学中資格の取得は出来ませんでしたが…。
						</p>
						<p>
							BITを選んだ理由<br>
							旅行会社への就職を目指し就活開始。１９９０年代初旬に突然バブルが崩壊。旅行会社の求人が激減し挫折。路頭に迷っているさなか求人媒体ではＳＥ・ＰＧの募集があふれていました。<br>
							そこでとりあえず何の知識を無く某システム会社へ応募。なぜか採用ＩＴ業界に足をふみいれ約３年ほど勤務。自分自身のスキルアップを目指し新たに活躍できる場所を求め転職活動を開始しＢＩＴへ応募。<br>
							当時は設立１０年目ほどで少人数のＢＩＴでしたがビジョンがあり、また若手社員が活躍し活力や将来性を感じ、なぜか心をひかれこの会社を選びました。
						</p>
						<p>
							これから働くにあたって、身につけたいこと又は身につけておけばよかったということ<br>
							経営哲学や会社運営に携わる全ての事。
						</p>
						<p>
							やりがいを感じる瞬間<br>
							不景気時に仕事が受注できた時。お客様に助けられた時。新たな仕事が受注できた時。沢山の仲間と出会えた事　etc.
						</p>
						<p>
							今後の目標<br>
							事業拡大・システム開発業務以外にＩＴを活用した新たな事業を起こす。
						</p>
					</div>
				</div>
			</div>
			
				<div class="shainImg">
				<a class="button-link modal-open03">
					<img src="./images/shain03.png" width="300px">
					<p>吉田　亮</p>
				</a>
				<!--子画面-->
				<div id="modal-content03">
					<div class="voice_window">
						<p>
							システム営業部<br>
							吉田　亮
						</p>
						<p>
							学生時代に学んだこと<br>
							旅行専門学校で資格取得を目指し観光業務やホテル業務のイロハを学んでおりました。残念ながら在学中資格の取得は出来ませんでしたが…。
						</p>
						<p>
							BITを選んだ理由<br>
							旅行会社への就職を目指し就活開始。１９９０年代初旬に突然バブルが崩壊。旅行会社の求人が激減し挫折。路頭に迷っているさなか求人媒体ではＳＥ・ＰＧの募集があふれていました。<br>
							そこでとりあえず何の知識を無く某システム会社へ応募。なぜか採用ＩＴ業界に足をふみいれ約３年ほど勤務。自分自身のスキルアップを目指し新たに活躍できる場所を求め転職活動を開始しＢＩＴへ応募。<br>
							当時は設立１０年目ほどで少人数のＢＩＴでしたがビジョンがあり、また若手社員が活躍し活力や将来性を感じ、なぜか心をひかれこの会社を選びました。
						</p>
						<p>
							これから働くにあたって、身につけたいこと又は身につけておけばよかったということ<br>
							経営哲学や会社運営に携わる全ての事。
						</p>
						<p>
							やりがいを感じる瞬間<br>
							不景気時に仕事が受注できた時。お客様に助けられた時。新たな仕事が受注できた時。沢山の仲間と出会えた事　etc.
						</p>
						<p>
							今後の目標<br>
							事業拡大・システム開発業務以外にＩＴを活用した新たな事業を起こす。
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="shain">

			<div class="shainImg">
			<a class="button-link modal-open04">
				<img src="./images/shain04.png" width="300px">
				<p>山内　明</p>
			</a>
				<!--子画面-->
				<div id="modal-content04">
					<div class="voice_window">
						<p>
							システム営業部<br>
							吉田　亮
						</p>
						<p>
							学生時代に学んだこと<br>
							旅行専門学校で資格取得を目指し観光業務やホテル業務のイロハを学んでおりました。残念ながら在学中資格の取得は出来ませんでしたが…。
						</p>
						<p>
							BITを選んだ理由<br>
							旅行会社への就職を目指し就活開始。１９９０年代初旬に突然バブルが崩壊。旅行会社の求人が激減し挫折。路頭に迷っているさなか求人媒体ではＳＥ・ＰＧの募集があふれていました。<br>
							そこでとりあえず何の知識を無く某システム会社へ応募。なぜか採用ＩＴ業界に足をふみいれ約３年ほど勤務。自分自身のスキルアップを目指し新たに活躍できる場所を求め転職活動を開始しＢＩＴへ応募。<br>
							当時は設立１０年目ほどで少人数のＢＩＴでしたがビジョンがあり、また若手社員が活躍し活力や将来性を感じ、なぜか心をひかれこの会社を選びました。
						</p>
						<p>
							これから働くにあたって、身につけたいこと又は身につけておけばよかったということ<br>
							経営哲学や会社運営に携わる全ての事。
						</p>
						<p>
							やりがいを感じる瞬間<br>
							不景気時に仕事が受注できた時。お客様に助けられた時。新たな仕事が受注できた時。沢山の仲間と出会えた事　etc.
						</p>
						<p>
							今後の目標<br>
							事業拡大・システム開発業務以外にＩＴを活用した新たな事業を起こす。
						</p>
					</div>
				</div>
			</div>
			
			<div class="shainImg">
			<a class="button-link modal-open05">
				<img src="./images/shain05.png" width="300px">
				<p>小松　弘樹</p>
			</a>
				<!--子画面-->
				<div id="modal-content05">
					<div class="voice_window">
						<p>
							システム営業部<br>
							吉田　亮
						</p>
						<p>
							学生時代に学んだこと<br>
							旅行専門学校で資格取得を目指し観光業務やホテル業務のイロハを学んでおりました。残念ながら在学中資格の取得は出来ませんでしたが…。
						</p>
						<p>
							BITを選んだ理由<br>
							旅行会社への就職を目指し就活開始。１９９０年代初旬に突然バブルが崩壊。旅行会社の求人が激減し挫折。路頭に迷っているさなか求人媒体ではＳＥ・ＰＧの募集があふれていました。<br>
							そこでとりあえず何の知識を無く某システム会社へ応募。なぜか採用ＩＴ業界に足をふみいれ約３年ほど勤務。自分自身のスキルアップを目指し新たに活躍できる場所を求め転職活動を開始しＢＩＴへ応募。<br>
							当時は設立１０年目ほどで少人数のＢＩＴでしたがビジョンがあり、また若手社員が活躍し活力や将来性を感じ、なぜか心をひかれこの会社を選びました。
						</p>
						<p>
							これから働くにあたって、身につけたいこと又は身につけておけばよかったということ<br>
							経営哲学や会社運営に携わる全ての事。
						</p>
						<p>
							やりがいを感じる瞬間<br>
							不景気時に仕事が受注できた時。お客様に助けられた時。新たな仕事が受注できた時。沢山の仲間と出会えた事　etc.
						</p>
						<p>
							今後の目標<br>
							事業拡大・システム開発業務以外にＩＴを活用した新たな事業を起こす。
						</p>
					</div>
				</div>
			</div>
			
			<div class="shainImg">
			<a class="button-link modal-open06">
				<img src="./images/shain06.png" width="300px">
				<p>辻本　早季</p>
			</a>
				<!--子画面-->
				<div id="modal-content06">
					<div class="voice_window">
						<p>
							システム営業部<br>
							吉田　亮
						</p>
						<p>
							学生時代に学んだこと<br>
							旅行専門学校で資格取得を目指し観光業務やホテル業務のイロハを学んでおりました。残念ながら在学中資格の取得は出来ませんでしたが…。
						</p>
						<p>
							BITを選んだ理由<br>
							旅行会社への就職を目指し就活開始。１９９０年代初旬に突然バブルが崩壊。旅行会社の求人が激減し挫折。路頭に迷っているさなか求人媒体ではＳＥ・ＰＧの募集があふれていました。<br>
							そこでとりあえず何の知識を無く某システム会社へ応募。なぜか採用ＩＴ業界に足をふみいれ約３年ほど勤務。自分自身のスキルアップを目指し新たに活躍できる場所を求め転職活動を開始しＢＩＴへ応募。<br>
							当時は設立１０年目ほどで少人数のＢＩＴでしたがビジョンがあり、また若手社員が活躍し活力や将来性を感じ、なぜか心をひかれこの会社を選びました。
						</p>
						<p>
							これから働くにあたって、身につけたいこと又は身につけておけばよかったということ<br>
							経営哲学や会社運営に携わる全ての事。
						</p>
						<p>
							やりがいを感じる瞬間<br>
							不景気時に仕事が受注できた時。お客様に助けられた時。新たな仕事が受注できた時。沢山の仲間と出会えた事　etc.
						</p>
						<p>
							今後の目標<br>
							事業拡大・システム開発業務以外にＩＴを活用した新たな事業を起こす。
						</p>
					</div>
				</div>
			</div>
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