<?php
	session_start();
	include 'koneksi.php';
	require "functions.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="icon" type="image/png" href="gambar/icon/logo-title.png">
	<title>Anpra Shop | Halaman Admin</title>
	<link rel="stylesheet" href="tampilan2.css">
	<link rel="stylesheet" href="tampilan4.css">
</head>

<body>
	
	<div class="header-sticky">
		<div class="header">
			<span style="margin-left: 20px"><a href="loginadmin.php"><img style="margin: auto 10px auto 20px" src="gambar/icon/anpra-cb.svg" height="15px">ANPRA Shop - <i id="sub-title">Administrator</i></a></span>

			<span style="float: right; margin-right: 60px"><a onclick="return confirm('Apakah anda ingin Logout?')" href="logout.php" class="icon-header"><img src="gambar/icon/avatar icon-w.svg" height="15px" style="margin-right: 5px">
				<?php
				echo $_SESSION['username'];
				?>
			</a></span>
			<span style="float: right; margin-right: 10px; color: white">|</span>
			<span style="float: right; margin-right: 10px"><a onclick="return confirm('Apakah anda ingin Logout?')" href="logout.php" class="icon-header"><img src="gambar/icon/login icon-w.svg" height="15px" style="margin-right: 5px">Logout.</a></span>
			<span style="float: right; margin-right: 10px"><a href="loginadmin.php" class="active-page"><img src="gambar/icon/home icon-w.svg" height="15px" style="margin-right: 5px">Home.</a></span>

			<span style="float: right; margin-right: 40px; display: block;">
				<div class="balls">
					<span class="crud-1" onclick="window.location.href='tambahkan.php'"></span>
					<span class="crud-2" onclick="window.location.href='#read'"></span>
					<span class="crud-3" onclick="window.location.href='#read'"></span>
					<span class="crud-4" onclick="window.location.href='#read'"></span>
				</div>
			</span>
			
		</div>
	</div>
	
	
	<center>

	<!-- <input class="src-bar src-icon" type="search" placeholder="Search"> -->

	<div class="crud">
		<div class="c create"><span onclick="window.location.href='tambahkan.php'"><img src="gambar/icon/tambahkan icon-w.svg" height="20px" style="margin-right: 10px">Create.</span></div>
		<span class="cap">Menambahkan data baru ke dalam database.</span>
	</div>
	<div class="crud">
		<div class="c read"><span onclick="window.location.href='#read'"><img src="gambar/icon/view icon-w.svg" height="18px" style="margin-right: 10px">Read.</span></div>
		<span class="cap">Membaca / Menampilkan data dari database.</span>
	</div>
	<div class="crud">
		<div class="c update"><span onclick="window.location.href='#read'"><img src="gambar/icon/edit icon-w.svg" height="18px" style="margin-right: 10px">Update.</span></div>
		<span class="cap">Memperbarui data di dalam database.</span>
	</div>
	<div class="crud">
		<div class="c delete"><span onclick="window.location.href='#read'"><img src="gambar/icon/hapus icon-w.svg" height="18px" style="margin-right: 10px">Delete.</span></div>
		<span class="cap">Menghapus data dari database.</span>
	</div>
	</center>
	
	<div class="menuu">
	<table border="0" cellpadding="10" cellspacing="5" class="menu-crud">
		<tr>
			<td></td>
			<td colspan="3"><span class="tbl-title-bg"><span class="tbl-title">Database Info</span></span></td>
		</tr>
		<tr>
			<td rowspan="4"><img src="gambar/icon/db icon-b.svg" class="icon-db"></td>
			<td>Jenis Database yang digunakan</td>
			<td>:</td>
			<td>MySQL</td>
		</tr>
		<tr>
			<td>Nama Database yang digunakan</td>
			<td>:</td>
			<td>ta_pwd</td>
		</tr>
		<tr>
			<td>Tabel yang tersedia</td>
			<td>:</td>
			<td>
				<span class="tbl-tag">product</span>
			</td>
		</tr>
		<tr>
			<td>Operasi yang diijinkan</td>
			<td>:</td>
			<td>
				<span class="tbl-tag" onclick="window.location.href='tambahkan.php'">Create</span>
				<span class="tbl-tag" onclick="window.location.href='#read'">Read</span>
				<span class="tbl-tag" onclick="window.location.href='#read'">Update</span>
				<span class="tbl-tag" onclick="window.location.href='#read'">Delete</span>
			</td>
		</tr>
	</table>
	</div>
	

	<!-- <div id="create" class="menu-crud">
	<table>
		<tr>
			<td height="80px"></td>
		</tr>
		<tr>
			<td height="80px"><span class="tbl-title">Create</span></td>
		</tr>
		<tr>
			<td>
				<form action="tambahkan.php" method="POST" enctype="multipart/form-data" class="tambahkan">	
					<span class="tambahkan-title">Masukkan Data Barang</span>
					<input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" class="tambahkan1 tambahkan2" required/>
					<input type="text" name="harga_barang" id="harga_barang" placeholder="Harga Barang" class="tambahkan1 tambahkan2" required/>
					<input type="text" name="warna_barang" id="warna_barang" placeholder="Warna Barang" class="tambahkan1 tambahkan2" required/>
					<input type="number" name="quantity" id="quantity" min="1" placeholder="Quantity" class="tambahkan1 tambahkan2" required/>
					<span>Gambar Barang</span>
					<input type="file" name="gambar_barang" id="gambar_barang" class="tambahkan1 tambahkan2" required/>
					<input type="submit" id="submit" name="submit" value="Kirim" class="kirim">
					<input type="reset" name="reset" value="Reset" class="reset">
				</form>
			</td>
		</tr>
	</table>
	</div> -->

	<div id="read">
		<table>
			<tr>
				<td height="80px"></td>
			</tr>
			<tr>
				<td id="td01"><span class="tbl-title t-t2">Read, Update dan Delete</span></td>
			</tr>
		</table>

		<?php 
		require 'koneksi.php';
		$sql = 'SELECT * FROM product';
		$result = mysqli_query($conn, $sql);
		?>
		
		<table border="0" cellspacing="20" cellpadding="0" width="100%">

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
			<table id="t02" class="readd" cellspacing="0">
				<tr>
					<th>ID Barang</th>
					<td>:</td>
					<td> <?php echo $product->id_barang; ?> </td>
				</tr>
				<tr>
					<th>Nama Barang</th>
					<td>:</td>
					<td> <?php echo $product->nama_barang; ?> </td>
				</tr>
				<tr>
					<th>Harga Barang</th>
					<td>:</td>
					<td> <?php echo $product->harga_barang; ?> </td>
				</tr>
				<tr>
					<th>Warna Barang</th>
					<td>:</td>
					<td> <?php echo $product->warna_barang; ?> </td>
				</tr>
				<tr>
					<th>Quantity</th>
					<td>:</td>
					<td> <?php echo $product->quantity; ?> </td>
				</tr>
				<tr>
					<th>Gambar Barang</th>
					<td>:</td>
					<td> <?php echo $product->gambar_barang; ?> </td>
				</tr>
				<tr>
					<td colspan="3"><img name="gambar_barang" class="images" style="object-fit: cover; max-height: 100px; width: auto; max-width: 100%" src="gambar/<?php echo $product->gambar_barang; ?>"></td>
				</tr>
				<tr>
					<td colspan="3">
						<span class="cc update"><a href="edit.php?id_barang=<?= $product->id_barang; ?>">Update</a></span>
						<span class="cc delete"><a href="hapus.php?id_barang=<?= $product->id_barang; ?>" onclick="return confirm('Apakah anda ingin menghapus data?')">Delete</a></span>
					</td>
				</tr>
			</table>
		<?php
		}
		?>
			</td></tr>
		</table>
	</div>

	<footer>
		<center>
		<span style="display: block; margin: 20px auto">&#169 Copyright Anang Prasetyo 2020</span>
		<span class="foo-img"><a href=""><img src="gambar/icon/ig-icon-rsb.svg"></a></span>
		<span class="foo-img"><a href=""><img src="gambar/icon/wa-icon-rsb.svg"></a></span>
		<span class="foo-img"><a href=""><img src="gambar/icon/pinterest-icon-rsb.svg"></a></span>
		<span class="foo-img"><a href=""><img src="gambar/icon/github-icon-rsb.svg"></a></span>
		</center>
	</footer>
	
</body>
</html>
