<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>古典音樂</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Product_Page.css" rel="stylesheet" type="text/css" />


<!-- https://github.com/Ephigenia/jquery.slideShowを参考しました -->

<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./js/jquery.slideshow.min.js"></script>

</head>

<body>
	<header>
	<?php
		session_start();
		if(isset($_SESSION["user"]))
		{
			
			$member = $_SESSION["user"];
			
			//管理者按鈕
			if($_SESSION["user"]=="user")
				$login_btn="<a href=\"DATA_UPDATE.php\" class=\"no_underline_light\">管理者</a>";
				
			//普通使用者按鈕
			else
				$login_btn="<a href=\"Logout.php\" class=\"no_underline_light\">登出</a>";
		}
			//未登入按鈕
		else
		{
			$url = $_SERVER['PHP_SELF'];
			$login_btn = "<a href=\"Login.php?url=$url\" class=\"no_underline_light\">會員登入</a>";
		}
			
			
			
			
	?>
	
		<div id="header_background">
			<div id="header_box">
				<a href="index.php"><div id="header_mark"></div></a>
				<div id="header_searchbar">
					<form action="search.php" name="searchform" method="GET" >						
						<input id="search_text" value="" name="search_text" size="50" type="text">						
						<input id="search_btn" value="" type="submit">						
					</form>
				</div>
                <div id="header_btn">
				<div id="login_btn">
				<?=$login_btn?></div>
				<div id="cart_btn">
				<a href="shoppingcart.php" class="no_underline_light">購物車</a></div>
				</div> 	
			</div>
			<div id="header_navi_background">
				<ul id="navi_ul">
					<li><a href="hires.php" class="no_underline_bold">Hi-Res</a></li>
					<li><a href="anime.php" class="no_underline_bold">動畫</a></li>
					<li><a href="cpop.php" class="no_underline_bold">華語</a></li>
					<li><a href="jkpop.php" class="no_underline_bold">日韓</a></li>
					<li><a href="apop.php" class="no_underline_bold">歐美</a></li>
					<li id="li_right"  style="background-color: #FFECC9;"><a href="classical.php" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
	<div id="product_container">
		<div id="product_top">
			<h1>本周銷售TOP10</h1>
			<!-- 1 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=30">			
			<div class="product_rank_num">1</div>			
			<img src="img/claco04.jpg" alt="">
			<div class="product_rank_name">多位演出者</div>
			<div class="product_rank_artist">Beethoven - Greatest Hits</div>
			</a></article>
			<!-- 2 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=49">			
			<div class="product_rank_num">2</div>			
			<img src="img/claco11.jpg" alt="">
			<div class="product_rank_name">Vienna Philharmonic Orchestra</div>
			<div class="product_rank_artist">New Year's Concert 2008</div>
			</a></article>
			<!-- 3 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=46">			
			<div class="product_rank_num">3</div>			
			<img src="img/claco09.jpg" alt="">
			<div class="product_rank_name">Alicia de Larrocha (piano), Sir Colin Davis & English Chamber Orchestra</div>
			<div class="product_rank_artist">Mozart Piano Concertos Nos.20 & 21</div>
			</a></article>
			<!-- 4 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=52">			
			<div class="product_rank_num">4</div>			
			<img src="img/claco07.jpg" alt="">
			<div class="product_rank_name">Franz Liszt</div>
			<div class="product_rank_artist">Liszt Années de Pèlerinage</div>
			</a></article>
			<!-- 5 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=48">			
			<div class="product_rank_num">5</div>			
			<img src="img/claco08.jpg" alt="">
			<div class="product_rank_name">Chicago Symphony Orchestra, Carlo Maria Giulini</div>
			<div class="product_rank_artist">Pictures at an Exhibition / Night on Bald Mountain / Polovtsian Dances / Coronation of Boris / Gayaneh</div>
			</a></article>
			<!-- 6 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=51">			
			<div class="product_rank_num">6</div>			
			<img src="img/claco01.jpg" alt="">
			<div class="product_rank_name">多位演出者</div>
			<div class="product_rank_artist">Vivaldi: Le quattro stagioni</div>
			</a></article>
			<!-- 7 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=29">			
			<div class="product_rank_num">7</div>			
			<img src="img/claco12.jpg" alt="">
			<div class="product_rank_name">David Garrett</div>
			<div class="product_rank_artist">TIMELESS - Brahms & Bruch Violin Concertos</div>
			</a></article>
			<!-- 8 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=53">			
			<div class="product_rank_num">8</div>			
			<img src="img/claco06.jpg" alt="">
			<div class="product_rank_name">Amadeus Mozart</div>
			<div class="product_rank_artist">The Best of Mozart</div>
			</a></article>
			<!-- 9 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=31">			
			<div class="product_rank_num">9</div>			
			<img src="img/claco02.jpg" alt="">
			<div class="product_rank_name">林昭亮</div>
			<div class="product_rank_artist">Bruch Violin Concerto #1 and Scottish Fantasy</div>
			</a></article>
			<!-- 10 -->
			<article class="product_rank"><a class="no_underline_bold" href="Album.php?id=32">			
			<div class="product_rank_num">10</div>			
			<img src="img/claco05.jpg" alt="">
			<div class="product_rank_name">Nikita Magaloff, piano</div>
			<div class="product_rank_artist">Chopin: The Complete Piano Music</div>
			</a></article>
		</div>
		
		<div id="product_right_page">
		
			<div class="slideShow">
				<ul class="slides">
					<li class="slide"><img src="./img/slideshow_img/cla01.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cla02.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cla03.jpg" alt=""></li>
					<li class="slide"><img src="./img/slideshow_img/cla04.jpg" alt=""></li>
					
				</ul>
			</div>
			
			<div id="product_new">
				<h2>本周新發售</h2>
				<article class="product_items"><a href="Album.php?id=51" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco01.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">多位演出者</div>
							<div class="item_title">Vivaldi: Le quattro stagioni</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=31" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco02.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">林昭亮</div>
							<div class="item_title">Bruch Violin Concerto #1 and Scottish Fantasy</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=47" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco03.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">I Musici e Pina Carmirelli</div>
							<div class="item_title">Mozart, Haydn, Albinoni, Pachelbel, Boccherini, Beethoven (I Musici)</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=30" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco04.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">多位演出者</div>
							<div class="item_title">Beethoven - Greatest Hits</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=32" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco05.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Nikita Magaloff, piano</div>
							<div class="item_title">Chopin: The Complete Piano Music</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=53" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco06.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Amadeus Mozart</div>
							<div class="item_title">The Best of Mozart</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=52" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco07.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Franz Liszt</div>
							<div class="item_title">Années de pèlerinage: Complete Recording</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=48" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco08.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Chicago Symphony Orchestra, Carlo Maria Giulini</div>
							<div class="item_title">Pictures at an Exhibition / Night on Bald Mountain / Polovtsian Dances / Coronation of Boris / Gayaneh</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=46" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco09.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Alicia de Larrocha (piano), Sir Colin Davis & English Chamber Orchestra</div>
							<div class="item_title">Mozart Piano Concertos Nos.20 & 21</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=45" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco10.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Alicia de Larrocha (piano), Sir Colin Davis & English Chamber Orchestra</div>
							<div class="item_title">Mozart Piano Concertos Nos. 23 & 24</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=49" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco11.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">Vienna Philharmonic Orchestra</div>
							<div class="item_title">New Year's Concert 2008</div>
						</div>
					</a></article>
				<article class="product_items"><a href="Album.php?id=29" class="no_underline_bold">
						<div class="item_cover">
							<img src="img/claco12.jpg" alt="">
						</div>
						<div class="item_info">
							<div class="item_artist">David Garrett</div>
							<div class="item_title">TIMELESS - Brahms & Bruch Violin Concertos</div>
						</div>
					</a></article>
				
				
			</div>
		</div>
	</div>
	<script type="text/javascript">
	(function ($) 
	{
		$('.slideShow').slideShow
		({ 
		interval: 3, 
		start: 'random',
		});
	})(jQuery);
</script>
</body>
</html>