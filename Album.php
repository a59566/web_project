<!doctype html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Album</title>
	<link href="./css/CSS_Header.css" rel="stylesheet" type="text/css" />
	<link href="./css/CSS_Album.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<header>
		<div id="header_background">
			<div id="header_box">
				<div id="header_mark"></div>
				<div id="header_searchbar">
					<form action="">						
						<input id="search_text" value="" type="text" name="search_text" size="50">
						<input id="search_btn" value="" type="submit">						
					</form>
				</div>
                <div id="header_btn">
				<div id="login_btn">
				<a href="Login.html" class="no_underline_light">會員登入</a></div>
				<div id="cart_btn">
				<a href="" class="no_underline_light">購物車</a></div>
				</div>	

			</div>
			<div id="header_navi_background">
				<ul id="navi_ul">
					<li><a href="" class="no_underline_bold">Hi-Res</a></li>
					<li><a href="" class="no_underline_bold">動畫</a></li>
					<li><a href="" class="no_underline_bold">華語</a></li>
					<li><a href="" class="no_underline_bold">日韓</a></li>
					<li><a href="" class="no_underline_bold">歐美</a></li>
					<li id="li_right"><a href="" class="no_underline_bold">古典</a></li>
				</ul>
			</div>			
		</div>
	</header>
	
	<div id="album_container">
		<div id="album_left">
			<div id="album_content">
				<h1>七転八起☆至上主義！</h1>
				<img src="./img/cover/Cover.jpg" alt="">
				<div id="content_title">
					<div class="content_text">演唱者</div>
					<div class="content_text">曲風</div>
					<div class="content_text">歌曲數</div>
					<div class="content_text">音質</div>
				</div>
				<div id="content_info">
					<div class="content_text">KOTOKO</div>
					<div class="content_text">Anime</div>
					<div class="content_text">4</div>
					<div class="content_text">320kbps MP3</div>
				</div>
			</div>
			<div id="album_track"></div>
		</div>
		<div id="album_right"></div>
	</div>