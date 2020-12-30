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
	<title>Anpra Shop | Keranjang</title>
	<link rel="stylesheet" href="tampilan2.css">
	<link rel="stylesheet" href="style.css">
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
			<span style="float: right; margin-right: 10px"><a href="cart.php" class="active-page"><img src="gambar/icon/keranjang icon-w.svg" height="15px" style="margin-right: 5px">Keranjang.</a></span>
			<span style="float: right; margin-right: 10px"><a href="loginmember.php" class="icon-header"><img src="gambar/icon/home icon-w.svg" height="15px" style="margin-right: 5px">Home.</a></span>
		</div>
	</div>
	
	<?php 
	// Start the session
	// session_start();
	require 'koneksi.php';
	require 'item.php';

	if(isset($_GET['id_barang']) && !isset($_POST['update']))  { 
		$sql = "SELECT * FROM product WHERE id_barang=".$_GET['id_barang'];
		$result = mysqli_query($conn, $sql);
		$product = mysqli_fetch_object($result);
		$item = new Item();
		$item->id_barang = $product->id_barang;
		$item->nama_barang = $product->nama_barang;
		$item->warna_barang = $product->warna_barang;
		$item->harga_barang = $product->harga_barang;
	    $iteminstock = $product->quantity;
		$item->quantity = 1;
		// Check product is existing in cart
		$index = -1;
		$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
		for($i=0; $i<count($cart);$i++)
			if ($cart[$i]->id_barang == $_GET['id_barang']){
				$index = $i;
				break;
			}
			if($index == -1) 
				$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
			else {
				
				if (($cart[$index]->quantity) < $iteminstock)
					 $cart[$index]->quantity ++;
				     $_SESSION['cart'] = $cart;
			}
	}
	// Delete product in cart
	if(isset($_GET['index']) && !isset($_POST['update'])) {
		$cart = unserialize(serialize($_SESSION['cart']));
		unset($cart[$_GET['index']]);
		$cart = array_values($cart);
		$_SESSION['cart'] = $cart;
	}
	// Update quantity in cart
	if(isset($_POST['update'])) {
	  $arrQuantity = $_POST['quantity'];
	  $cart = unserialize(serialize($_SESSION['cart']));
	  for($i=0; $i<count($cart);$i++) {
	     $cart[$i]->quantity = $arrQuantity[$i];
	  }
	  $_SESSION['cart'] = $cart;
	}
	?>

	<div class="container2">
	<span class="title-cart">Daftar barang belanja saya</span> 
	<form method="POST">
		<table border="1" cellpadding="10" cellspacing="0" id="t01">
			<tr>
				<th>Aksi</th>
				<th>Id Barang</th>
				<th>Nama Barang</th>
				<th>Warna Barang</th>
				<th>Harga Barang</th>
				<th>Quantity</th>
				<th>Sub Total (CAD)</th>
			</tr>
			<?php 
			     $cart = unserialize(serialize($_SESSION['cart']));
			 	 $s = 0;
			 	 $index = 0;
			 	for($i=0; $i<count($cart); $i++){
			 		$s += $cart[$i]->harga_barang * $cart[$i]->quantity;
			?>	
			<tr>
			    <td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Hapus barang dari keranjang?')" >Delete</a> </td>
			   	<td> <?php echo $cart[$i]->id_barang; ?> </td>
			   	<td> <?php echo $cart[$i]->nama_barang; ?> </td>
			   	<td> <?php echo $cart[$i]->warna_barang; ?> </td>
			   	<td>Rp. <?php echo $cart[$i]->harga_barang; ?> </td>
			    <td> <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
			    <td>Rp. <?php echo $cart[$i]->harga_barang * $cart[$i]->quantity; ?> </td> 
			</tr>
			<?php 
				$index++;
			} ?>
			<tr>
			 	<td colspan="6" style="text-align:right; font-weight:bold"><span class="dasar01">Hitung
			    <input class="img-btn" type="image" src="gambar/icon/calc icon-b.svg" name="update" alt="Save Button">
			    <input type="hidden" name="update"></span> 
			 	</td>
			 	<td>Rp. <?php echo $s; ?> </td>
			</tr>
		</table>
	</form>
	<br>
	<span class="lanjut-belanja">
		<a href="loginmember.php#konten"><img src="gambar/icon/shopnow icon-b.svg" class="img-btn">Lanjutkan Belanja</a> 
	</span>
	<span class="lanjut-belanja">
		<a href="checkout.php"><img src="gambar/icon/shopnow icon-b.svg" class="img-btn">Checkout</a> 
	</span>

	<?php 
	if(isset($_GET["id_barang"]) || isset($_GET["index"])){
		header('Location: cart.php');
	} 
	?>
	
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
