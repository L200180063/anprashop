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
	<title>Anpra Shop | Halaman Member</title>
	<link rel="stylesheet" href="tampilan2.css">
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
			<span style="float: right; margin-right: 10px"><a href="aboutme.php" class="icon-header"><img src="gambar/icon/i-icon-w.svg" height="15px" style="margin-right: 5px">About Me.</a></span>
			<span style="float: right; margin-right: 10px"><a href="cart.php" class="icon-header"><img src="gambar/icon/keranjang icon-w.svg" height="15px" style="margin-right: 5px">Keranjang.</a></span>
			<span style="float: right; margin-right: 10px"><a href="loginmember.php" class="active-page"><img src="gambar/icon/home icon-w.svg" height="15px" style="margin-right: 5px">Home.</a></span>
		</div>
	</div>
	

	<div class="loginform">
		<img src="gambar/gambar-home/bgloginform.png">
	</div>

	<div class="awalan">
		<span class="tbl-title-bg"><span class="tbl-title">Halo Selamat Datang di Anpra Shop</span></span>
		<p>Temukan beragam produk favoritmu disini.</p>
		<div class="icon-product">
			<img src="gambar/icon/icon-product.png">
		</div>
	</div>

	<!-- <div class="content"> -->
		<center>
			<div class="shop-now" onclick="window.location.href='#konten'"><img src="gambar/icon/shop icon-w.svg" height="15px" style="margin-right: 10px">Shop Now</div>
		</center>
	<!-- </div> -->

	<div class="table-style2">
		<center>
			<div class="image-wrapper1"><img class="image image-zoom" src="gambar/gambar-home/tshirt1.jpg"></div>
			<div class="image-wrapper1"><img class="image image-zoom" src="gambar/gambar-home/IMG_3108.jpg"></div>
			<div class="image-wrapper2"><img class="image2 image-zoom" src="gambar/gambar-home/fabio-alves-eAUE_FmclYE-unsplash.jpg"></div>
			<div class="image-wrapper2"><img class="image2 image-zoom" src="gambar/gambar-home/keagan-henman-Won79_9oUEk-unsplash.jpg"></div>
			<div class="image-wrapper2"><img class="image2 image-zoom" src="gambar/gambar-home/IMG_3109.jpg"></div>
			<div class="image-wrapper2"><img class="image2 image-zoom" src="gambar/gambar-home/IMG_3110.jpg"></div>
		</center>
	</div>
	
	
	
	<?php 
	require 'koneksi.php';
	$sql = 'SELECT * FROM product';
	$result = mysqli_query($conn, $sql);
	?>
	
	<table id="konten" border="0" cellspacing="20" cellpadding="0" width="100%">
		<tr>
			<td height="20px"></td>
		</tr>
		<tr>
			<td><span class="title-konten">Shop Now</span></td>
		</tr>

	<?php
	$kolom = 3;
	$i = 0;

	while($product = mysqli_fetch_object($result)) { 
		if ($i >= $kolom) {
	          echo "<tr></tr>";
	          $i = 0;
	        }
	    	$i++;
	?><td width="33%">
		<table id="t01" class="table-style" border="0" cellspacing="0" cellpadding="10">
			<tr height="250px">
	    		<td colspan="3">	
		    		<img name="gambar_barang" class="images" align="center" style="border-radius: 30px; object-fit: cover; max-height: 250px; width: auto; max-width: 100%" src="gambar/<?php echo $product->gambar_barang; ?>">
	    		</td>
	    	</tr>
	    	<tr>
	    		<td colspan="2" width="60%"><span><?php echo $product->nama_barang; ?></span></td>
				<td width="40%" align="right"><span style="font-weight: bold; font-size: 18px; color: #F85528">Rp. <?php echo $product->harga_barang; ?></span></td>
	    	</tr>
	    	<tr>
	    		<td><span class="jenis-brg"><?php echo $product->warna_barang; ?></span></td>
				<td colspan="2" align="right">
					<span class="tombol-beli"><img src="gambar/icon/keranjang icon-w.svg" height="13px" style="margin-right: 10px"><a href="cart.php?id_barang= <?php echo $product->id_barang; ?> &action=add" class="tombol-belii">Beli</a></span>
				</td>
	    	</tr>
		</table>
	<?php
	}
	?>
		</td></tr>
	</table>
	
	
	
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
