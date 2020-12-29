<?php 
	session_start();
?>
<?php
require "functions.php";

$id_barang = $_GET["id_barang"];

//ambil data dari id
$brg = query("SELECT * FROM product WHERE id_barang = '$id_barang'")[0]; 

if (isset($_POST["submit"])){

	//cek jika data berhasil ditambahkan
	if (edit($_POST) > 0){
		echo "<script>
				alert('Data berhasil diedit');
				document.location.href = 'loginadmin.php';
			</script>";
	}else{
		echo "<script>
				alert('Data gagal diedit');
				document.location.href = 'loginadmin.php';
			</script>";
	}
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="icon" type="image/png" href="gambar/icon/logo-title.png">
	<title>Anpra Shop | Update</title>
	<link rel="stylesheet" href="tampilan4.css">
	<link rel="stylesheet" href="tampilan5.css">
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
			<span style="float: right; margin-right: 10px"><a href="loginadmin.php" class="icon-header"><img src="gambar/icon/home icon-w.svg" height="15px" style="margin-right: 5px">Home.</a></span>

			<span style="float: right; margin-right: 40px; display: block;">
				<div class="balls">
					<span class="crud-1" onclick="window.location.href='tambahkan.php'"></span>
					<span class="crud-2" onclick="window.location.href='loginadmin.php#read'"></span>
					<span class="crud-3 update" onclick="window.location.href='edit.php'"></span>
					<span class="crud-4" onclick="window.location.href='loginadmin.php#read'"></span>
				</div>
			</span>
			
		</div>
	</div>

	<div class="container3">
    <center>
    <table>
        <tr>
            <td height="30px"><!-- <span class="tbl-title">Create</span> --></td>
        </tr>
		<tr>
			<td>
				<form action="" method="POST" enctype="multipart/form-data" class="tambahkan">
					<span class="tambahkan-title">Update Data Barang</span>
					<input type="hidden" name="id_barang" value="<?= $brg["id_barang"]; ?>">
					<input type="hidden" name="gambar_barang" value="<?= $brg["gambar_barang"]; ?>">
					<!-- <span>Nama Barang</span> -->
					<input type="text" name="nama_barang" class="tambahkan1 tambahkan2" placeholder="Nama Barang" required value="<?= $brg["nama_barang"]; ?>">	
					<!-- <span>Harga Barang</span> -->
					<input type="text" name="harga_barang" class="tambahkan1 tambahkan2" placeholder="Harga Barang" required value="<?= $brg["harga_barang"]; ?>">
					<!-- <span>Quantity</span> -->
					<input type="number" min="1" name="quantity" class="tambahkan1 tambahkan2" placeholder="Quantity" required value="<?= $brg["quantity"]; ?>">	
					<!-- <span>Warna Barang</span> -->
					<input type="text" name="warna_barang" class="tambahkan1 tambahkan2" placeholder="Warna Barang" required value="<?= $brg["warna_barang"]; ?>">	
					<span>Gambar Barang</span><br>
					<img src="gambar/<?= $brg["gambar_barang"]; ?>" width="60px">
					<input type="file" name="gambar_barang" class="tambahkan1 tambahkan2" required value="<?= $brg["gambar_barang"]; ?>">
					<input type="submit" name="submit" value="Update" class="kirim-3" onclick="return confirm('Apakah anda ingin mengirim data?')">
					<input type="reset" name="reset" value="Reset" class="reset-3">
				</form>
			</td>
		</tr>
	</table>
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