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
	$(".modal-open05").click( function(){
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
	$(".modal-open06").click( function(){
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
<div class="n_img">
	<img src="./images/produce_sub1.png">
</div>
<div class="nakama">
		<div class="contain">
			<h2>愉快な仲間たち</h2><p>
				<div class="text">
				<span>よくある言葉ですが、やっぱりそれが一番しっくり来る感じです。<br/>
				bitにはいろんな人がいます。<br/>
				<p class="warau">よく話す人。よく笑う人。</p>
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

<div class="n_img">
	<img src="./images/produce_sub2.png">
</div>

<div class="staff">
		<div class="contain">
			<span>bitの社員の数名をご紹介します。<br/>画像または名前クリックで社員インタビューが表示されます。</span>
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
					<h3 class="ribbon17">社員の声</h3>
					<div class="voice_window">
							<h2>システム第一部　吉村 勇人</h2>
						<p>
						<p>
							<b>学生時代に学んだこと</b><br>
							主にマネジメントを勉強する学部に入学していましたので経営学といったそういったものを学んでいました。ですが、自分的にはコンビニのアルバイトで経営のイロハよりも、人との交流に興味を持ったり、趣味である旅行などで人との繋がりや温かみというものを一番学びました。
						</p>
						<p>
							<b>BITを選んだ理由</b><br>
							自分は毎年何かしらの目標やテーマを決めているのですが、入社当時の目標は「挑戦」でした。<br>
							大阪に引っ越してきたときは正社員ではなくいろいろなアルバイトに挑戦していたのですが、その中で今まで経験のなかった「IT」という分野に"挑戦"してみたくなったのがきっかけでした。もちろん未経験でもOKという部分もあったのですが「社員の２世３世が入社してくるような、社員が誇りを持てる会社」という点に惹かれました。<br>
							将来的に渡って誇れる会社で働きたいという気持ちが一番強い動機でした。
						</p>
						<p>
							<b>これから働くにあたって、身につけたいこと又は身につけておけばよかったということ</b><br>
							もちろん勉強することは大事だと思いますが、一番大事なのは「話すこと」だと思います。質問だって、コミュニケーションだって話すことです。わからないことが多いのは誰しも当然のことだと思うので、一番は話す能力かなと感じます。
						</p>
						<p>
							<b>やりがいを感じる瞬間</b><br>
							やっぱり、自分の思ったようにプログラムが動いてくれること。わからなかったところが解決したり、何かにハマった時の快感はたまりません。<br>
							それが実際にお客様に使われていると感じると思うと、数倍嬉しくなります。
						</p>
						<p>
							<b>今後の目標</b><br>
							技術者としてはもちろん向上したいですが、将来的な目標を見据えればよき指導者になりたいという思いがあります。<br>
							もちろん、そのためにはいろんな努力が必要ですがもっと話が上手くなりたいなと思います。
						</p>
						<p>
							<b>簡単な今の仕事内容と、一日の流れ</b><br>
							08:45　出社・メールチェック<br>
							09:00　始業　その日の目標を確認しながら業務開始<br>
							12:30　お昼休憩　上司と一緒に外食<br>
							13:30　業務再開<br>
							16:30　業務の進捗報告やレビューをしていただく<br>
							18:00　退社<br>
							19:00　友人と飲んだり、その日によっていろいろ…
						</p>
						<p>
							<b>メッセージ（何か一言）</b><br>
							まずはいろんなことを話したり、聞いたりすることが大切だと思ってます。自分も未だに上手くいかないですが、人との関わりって大事だと思いますしそこから勉強になることも…仕事を楽しむにはそこからかなと。
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
					<h3 class="ribbon17">社員の声</h3>
					<div class="voice_window">
						<h2>システム営業部　吉田 亮</h2>
						<p>
						<p>
							<b>学生時代に学んだこと</b><br>
							大学時代は完全に文系である「ヒト・モノ・カネ」の流れについて学び、情報処理系の授業を選択したことがきっかけで、独学で資格取得やHP作成などを行なっていました。<br>
							学業以外では、１日に２～３００万前後を売り上げる焼き肉店の厨房で３年間働き続けたことにより、余裕を持った事前準備、スピーディーな状況判断、チームワークの大切さなどを学びました。
						</p>
						<p>
							<b>BITを選んだ理由</b><br>
							入社当時は創業２０周年を迎えていましたが、その古さを感じさせない「若手、中堅社員が活躍できる」社風を感じ取れたからです。
						</p>
						<p>
							<b>これから働くにあたって、身につけたいこと又は身につけておけばよかったということ</b><br>
							何にでも興味を持つことが大事かと思います。興味があれば行動しますし、身にもつきます。大事なことは様々なことを経験していることだと思います。
						</p>
						<p>
							<b>やりがいを感じる瞬間</b><br>
							やはり楽しさは「ものづくり」にあると思います。自分で設計、プログラミングしたものが画面上で正しく表示されたり動作したりすると「よし！」と思いますし、お客さまに喜んでいただくことも当然嬉しいです。理系の人が強いイメージでしたが、上記の通り文系出身の自分の特色が生きる場面も多いので、そこにやりがいを感じて今後も楽しく仕事したいと思っています。
						</p>
						<p>
							<b>今後の目標</b><br>
							「自分のやりたいことをカタチにし、提案して、会社としての売り上げにつなげる」というサイクルを確立させることです。また、社員がやりたい仕事に就け、お客さまの満足度も上がるようなフォローを行うことです。
						</p>
						<p>
							<b>簡単な今の仕事内容と、一日の流れ</b><br>
							作業内容としては、プログラミングから要件定義支援までを行っており、その時々に必要な作業を能動的に行っています。<br>
							一日の流れは、「６時半に起床→娘を小学校へ送り出す→電車で常駐先へ→業務開始→業務終了→社長と食事(※毎日ではない)→帰宅→娘と息子を風呂からあげる→娘に本を読んで寝かしつける→自分の時間（読書、TV鑑賞など）」といった感じでしょうか。
						</p>
						<p>
							<b>メッセージ（何か一言）</b><br>
							業界、業種、会社選びは難しく、よく分からないかもしれません。BITという会社は、入社後の新人教育もしっかり行っており（とは言え自主的な学習は必須ですが）ほぼ毎年新入社員を雇用していますので、相談したり何気ない会話のできる先輩が見つかるはずです。<br>
							まずは気軽に面接を受けて、会社の場所、雰囲気、人などを見て感じて判断してもらえればと思います。
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="shain2">

			<div class="shainImg">
			<a class="button-link modal-open04">
				<img src="./images/shain04.png" width="300px">
				<p>山内　明</p>
			</a>
				<!--子画面-->
				<div id="modal-content04">
					<h3 class="ribbon17">社員の声</h3>
					<div class="voice_window">
						<h2>システム第一部　山内 明</h2>
						<p>
						<p>
							<b>学生時代に学んだこと</b><br>
							特にないです（忘れた）。ただ読書好きだったので、語彙・読解力は鍛えられたと思います。
						</p>
						<p>
							<b>BITを選んだ理由</b><br>
								自分の可能性を試せる会社だと思ったからです。
						</p>
						<p>
							<b>これから働くにあたって、身につけたいこと又は身につけておけばよかったということ</b><br>
							人への物の教え方。
						</p>
						<p>
							<b>やりがいを感じる瞬間</b><br>
							段取り通り物事が進んでいる時。
						</p>
						<p>
							<b>今後の目標</b><br>
							老後を生き抜く（死ぬまで技術者）。
						</p>
						<p>
							<b>簡単な今の仕事内容と、一日の流れ</b><br>
							複雑なので割愛させていただきます。
						</p>
						<p>
							<b>メッセージ（何か一言）</b><br>
							死ぬまで活きよ（座右の銘）
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
					<h3 class="ribbon17">社員の声</h3>
					<div class="voice_window">
						<p>
							<h2>システム第一部　小松 弘樹</h2>
						</p>
						<p>
							<b>学生時代に学んだこと</b><br>
								経済学部だったのでそっち方面です。広く浅くの大学でしたが、主に経営学関連の専攻です。<br/>
								陸上競技部では主将だったのでそちらでもマネジメントを体験しました。
						</p>
						<p>
							<b>BITを選んだ理由</b><br>
							無資格状態から何か手に職をつけたかった時、BITでは中途採用の文系でも研修があり、エンジニアとして働けたからというのが理由です。
						</p>
						<p>
							<b>これから働くにあたって、身につけたいこと又は身につけておけばよかったということ</b><br>
							まだ業務経験が少ないので上位の情報系の資格は取っておきたいです。基本情報技術者試験くらいはエンジニアを志した時から勉強を始めたほうがよかったなと思います。基本的に知らない単語ばかり出てくるので少しでも減らせると思います。
						</p>
						<p>
							<b>やりがいを感じる瞬間</b><br>
							自分の組んだプログラムが自分の思った通りに動いてくれる時。また、動かなかったプログラムが動くようになった時。謎のやったった感が好きです。
						</p>
						<p>
							<b>今後の目標</b><br>
							業務に携わる内容でできることを増やしていきたい。今はプログラムを書くことでいっぱいですが……。業務以外のプログラミング言語にも何かしら触れながら新しい知識も同時に増やしていきたいです。
						</p>
						<p>
						<b>簡単な今の仕事内容と、一日の流れ</b>
							製造業で使用する業務ソフトの改修作業。設計書の修正、プログラムの修正、テストの実施。<br/>
							08:30 出社・準備<br/>
							09:00 午前業務開始(デスクでカチャカチャ)<br/>
							12:00 昼食<br/>
							13:00 午後業務開始(テストや納品、打ち合わせで外に出ることも有り)<br/>
							18:00 退社<br/>
							19:00 勉強会（週1）
						</p>
						<p>
						<b>メッセージ（何か一言）</b><br/>
						フットワークは軽く！動けば何かしら変わります。
						</p>
					</div>
				</div>
			</div>
			
<!--
			<div class="shainImg">
			<a class="button-link modal-open06">
				<img src="./images/shain06.png" width="300px">
				<p>辻本　早季</p>
			</a>
				<!--子画面-->
				<div id="modal-content06">
					<h3 class="ribbon17">社員の声</h3>
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
-->

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