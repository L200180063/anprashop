<?php include "koneksi.php" ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="icon" type="image/png" href="gambar/icon/logo-title.png">
	<title>Anpra Shop | Register</title>
	<link rel="stylesheet" href="tampilan3.css">
</head>

<body>
	<div class="headmenu">
		<span class="headmenu2"><img src="gambar/icon/anpra-rs.svg"> ANPRA Shop</span>
	</div>
	
	<div class="loginform">
		<img src="gambar/gambar-home/bgloginform.png">
	</div>

	<div class="box moving-gradient">
		<form action="" method="POST" enctype="multipart/form-data">
			<span class="box-title">Register</span>
			<span><input type="text" name="username" placeholder="Username" required class="input input-ava"></span><br>
			<span><input type="text" name="nama" placeholder="Nama Lengkap" required class="input input-ful"></span><br>
			<span><input type="hidden" name="status" value="Member"></span>
			<span><input type="password" name="password" placeholder="Password" required class="input input-pas"></span>
			<span><input type="submit" name="submit" value="Kirim" class="input-kirim"></span>
		</form>

	</div>
	<script language="javascript">
		const box = document.querySelector('.box')
		const boxRect = box.getBoundingClientRect()

		box.addEventListener('mousemove', e => {
		  const xPos = (e.clientX - boxRect.left) / boxRect.width
		  const xOffset = -(xPos - 0.5)
		  const dxNorm = Math.min(Math.max(xOffset, -0.5), 0.5)
		  const yPos = (e.clientY - boxRect.top) / boxRect.height - 0.5
		  box.style.transform = `perspective(1000px) rotateY(${dxNorm *
			45}deg) rotateX(${yPos * 45}deg) `
		})

		box.addEventListener('mouseleave', () => {
		  box.style.transform = 'none'
		})
	</script>
	
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
    $username = $_POST['username'];
	$nama = $_POST['nama'];
    $status = $_POST['status'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];
	
    $query = "INSERT INTO user (username, nama, status, password) VALUES ('$username','$nama', '$status', '$password')";

	if($submit){
		mysqli_query($conn,$query);
		echo "<script>
			 alert('Data berhasil ditambahkan');
			 document.location.href = 'login.php';
		 </script>";
	 }
	?>

	<div class="submenu">
		<span>Sudah punya akun? <a href="login.php">Login</a></span>
	</div>
	
	<!-- <div class="flowchart">
		<h1>Flowchart</h1>
		<img src="gambar/gambar-home/flowchart anprashop.png" width="60%">
	</div> -->


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
