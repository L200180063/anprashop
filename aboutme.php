<?php 
	session_start();
 ?>
 <!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="icon" type="image/png" href="gambar/icon/logo-title.png">
	<title>Anpra Shop | About Me</title>
	<link rel="stylesheet" href="tampilan2.css">
	<link rel="stylesheet" href="tampilan5.css">
</head>

<body>
	
	<div class="header-sticky">
		<div class="header">
			<span style="margin-right: 10px"><a href="loginmember.php"><img style="margin: auto 10px auto 20px" src="gambar/icon/anpra-cb.svg" height="15px">ANPRA Shop</a></span>
			<span style="float: right"><a href="profil.php" class="icon-header"><img src="gambar/icon/avatar icon-w.svg" height="15px" style="margin-right: 5px">
				<?php
				echo $_SESSION['username'];
				?>
			</a></span>
			<span style="float: right; margin-right: 10px; color: white">|</span>
			<span style="float: right; margin-right: 10px"><a onclick="return confirm('Apakah anda ingin Logout?')" href="logout.php" class="icon-header"><img src="gambar/icon/login icon-w.svg" height="15px" style="margin-right: 5px">Logout.</a></span>
			<span style="float: right; margin-right: 10px"><a href="cart.php" class="active-page"><img src="gambar/icon/i-icon-w.svg" height="15px" style="margin-right: 5px">About Me.</a></span>
			<span style="float: right; margin-right: 10px"><a href="cart.php" class="icon-header"><img src="gambar/icon/keranjang icon-w.svg" height="15px" style="margin-right: 5px">Keranjang.</a></span>
			<span style="float: right; margin-right: 10px"><a href="loginmember.php" class="icon-header"><img src="gambar/icon/home icon-w.svg" height="15px" style="margin-right: 5px">Home.</a></span>
		</div>
	</div>

	<div class="container">
		<div class="am">
			<img src="gambar/icon/IMG_3886.png" class="am-ava">
			<div class="am-isi">
				<h3 class="user-title">Anang Prasetyo</h3>
				<h4 class="user-sub">Aplikasi Online Shop</h4>
			</div>
			<p class="profil">
				"Assalamualaikum perkenalkan nama saya <i>Anang Prasetyo</i> nim <i>L200180063</i> kelas <i>C</i> mata kuliah <i>Praktikum Pemrograman Web</i>. Website ini dibuat untuk memenuhi tugas akhir Praktikum Pemrograman Web. Saya minta maaf apabila di dalam web ini masih banyak kekurangan karena keterbatasan waktu dan keterbatasan kemampuan saya."
			</p>
			<p class="profil">
				Website ini dibangun dengan referensi dari : <b>Modul Praktikum Pemrograman Web</b>, <a href="https://www.w3schools.com" target="_blank">W3School</a>, <a href="https://instagram.com/webdev.tips?igshid=1eeplj8f4sjjx" target="_blank">WebDevTips</a>, <a href="https://www.eduardo-araujo.com" target="_blank">Eduardo Araujo</a> dan <a href="https://www.codepolitan.com/tutorial-membuat-shopping-cart-dengan-php-59a38b4aa047a" target="_blank">Codepolitan</a>.
			</p>
			<p class="profil">Dengan sumber icon dan gambar dari : <a href="https://www.freepik.com">Freepik</a> dan <a href="https://www.etsy.com" target="_blank">Etsy</a>.</p>
			<p class="profil">Inspirasi warna dari : <a href="https://instagram.com/awsmcolor?igshid=10q01aewpnrkx" target="_blank">Awsmcolor</a>.</p>
		</div>
	</div>

	<footer>
		<center>
		<span style="display: block; margin: 20px auto">&#169 Copyright Anang Prasetyo 2020</span>
		<span class="foo-img"><a href="https://www.instagram.com/pra_anang/" target="_blank"><img src="gambar/icon/ig-icon-rsb.svg"></a></span>
		<span class="foo-img"><a href="https://api.whatsapp.com/send?phone=82133938464" target="_blank"><img src="gambar/icon/wa-icon-rsb.svg"></a></span>
		<span class="foo-img"><a href="https://id.pinterest.com/pra_anang/_saved/" target="_blank"><img src="gambar/icon/pinterest-icon-rsb.svg"></a></span>
		<span class="foo-img"><a href="https://github.com/L200180063" target="_blank"><img src="gambar/icon/github-icon-rsb.svg"></a></span>
		</center>
	</footer>

</body>
</html>