<?php 
	session_start();
?>
<?php
require "functions.php";

if (isset($_POST["submit"])){

	//cek jika data berhasil ditambahkan
	if (editUser($_POST) > 0){
		echo "<script>
				alert('Data berhasil disimpan, untuk melihat perubahan maka anda harus re-login');
				document.location.href = 'profil.php';
			</script>";
	}else{
		echo "<script>
				alert('Data gagal disimpan');
				document.location.href = 'profil.php';
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
	<title>Anpra Shop | Profil</title>
	<link rel="stylesheet" href="tampilan2.css">
	<link rel="stylesheet" href="tampilan5.css">
</head>

<body>
	
	<div class="header-sticky">
		<div class="header">
			<span style="margin-right: 10px"><a href="loginmember.php"><img style="margin: auto 10px auto 20px" src="gambar/icon/anpra-cb.svg" height="15px">ANPRA Shop</a></span>
			<span style="float: right"><a onclick="return confirm('Apakah anda ingin Logout?')" href="logout.php" class="active-page"><img src="gambar/icon/avatar icon-w.svg" height="15px" style="margin-right: 5px">
				<?php
				echo $_SESSION['username'];
				?>
			</a></span>
			<span style="float: right; margin-right: 10px; color: white">|</span>
			<span style="float: right; margin-right: 10px"><a onclick="return confirm('Apakah anda ingin Logout?')" href="logout.php" class="icon-header"><img src="gambar/icon/login icon-w.svg" height="15px" style="margin-right: 5px">Logout.</a></span>
			<span style="float: right; margin-right: 10px"><a href="cart.php" class="icon-header"><img src="gambar/icon/i-icon-w.svg" height="15px" style="margin-right: 5px">About Me.</a></span>
			<span style="float: right; margin-right: 10px"><a href="cart.php" class="icon-header"><img src="gambar/icon/keranjang icon-w.svg" height="15px" style="margin-right: 5px">Keranjang.</a></span>
			<span style="float: right; margin-right: 10px"><a href="loginmember.php" class="icon-header"><img src="gambar/icon/home icon-w.svg" height="15px" style="margin-right: 5px">Home.</a></span>
		</div>
	</div>

	<div class="container">
		<span class="card-bg"></span>
	<div class="card">
	<table>
		<tr>
			<td>
				<form action="" method="POST" enctype="multipart/form-data" class="dt-profil">
					<span>Profil Saya</span>
					<span class="profil-id"><?= $_SESSION['id_user']; ?></span>
					<input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
					<input type="hidden" name="status" value="<?= $_SESSION['status']; ?>">
					
					<div class="profil-container">
						<input type="text" name="nama" placeholder="Nama Lengkap" required value="<?= $_SESSION['nama']; ?>" class="profil-nama">
						<input type="text" name="username" placeholder="Username" required value="<?= $_SESSION['username']; ?>">
						<input type="text" name="password" placeholder="Password" required value="<?= $_SESSION['password']; ?>">
						<span><?= $_SESSION['status']; ?></span>
					</div>
					
					<input type="submit" name="submit" value="Simpan" class="kirim-4" onclick="return confirm('Apakah anda ingin menyimpan data?')">
					<input type="reset" name="reset" value="Reset" class="reset-4">
					<br><span class="profil-info">*Untuk melihat perubahan maka anda harus re-login</span>
				</form>
			</td>
		</tr>
	</table>
	</div>
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