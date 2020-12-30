<?php 
	session_start();
	include 'koneksi.php';

	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

	$id_user = $_SESSION['id_user'];
	$status = $_SESSION['status'];

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$submit = $_POST['submit'];

	if ($submit){
	    $sql = "UPDATE user SET nama = '$nama', username = '$username', password = '$password' WHERE id_user = '$id_user'";
	    $query = mysqli_query($conn, $sql);
	    
	    $sql2 = "SELECT * FROM user WHERE id_user = '$id_user' AND password = '$password'";
	    $query2 = mysqli_query($conn, $sql2);
	    $row = mysqli_fetch_array($query2);
	    
	    $_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['password'] = $row['password'];
	    $_SESSION['status'] = $row['status'];
	    $_SESSION['id_user'] = $row['id_user'];
	        
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
			<span style="float: right; margin-right: 10px"><a href="aboutme.php" class="icon-header"><img src="gambar/icon/i-icon-w.svg" height="15px" style="margin-right: 5px">About Me.</a></span>
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
					<span class="profil-id"><?= $id_user; ?></span>
					<input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
					<input type="hidden" name="status" value="<?= $_SESSION['status']; ?>">
					
					<div class="profil-container">
						<input type="text" name="nama" placeholder="Nama Lengkap" required value="<?= $_SESSION['nama']; ?>" class="profil-nama">
						<input type="text" name="username" placeholder="Username" required value="<?= $_SESSION['username']; ?>">
						<input type="text" name="password" placeholder="Password" required value="<?= $_SESSION['password']; ?>">
						<span><?= $status; ?></span>
					</div>
					
					<input type="submit" name="submit" value="Simpan" class="kirim-4">
					<input type="reset" name="reset" value="Reset" class="reset-4">
				</form>
			</td>
		</tr>
	</table>
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