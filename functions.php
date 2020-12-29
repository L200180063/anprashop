<?php 
include 'koneksi.php';
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

	error_reporting(E_ALL ^ E_NOTICE);
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $warna_barang = $_POST['warna_barang'];
    $quantity = $_POST['quantity'];
    $gambar_barang = upload();
	if(!$gambar_barang){
		return false;
	}
    $submit = $_POST['submit'];


    $query = "INSERT INTO product (id_barang, nama_barang, harga_barang, warna_barang, quantity, gambar_barang) VALUES ('', '$nama_barang', '$harga_barang', '$warna_barang', '$quantity', '$gambar_barang')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahMember($data){
	global $conn;
	error_reporting(E_ALL ^ E_NOTICE);
    $username = $_POST['username'];
	$nama = $_POST['nama'];
    $status = $_POST['status'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];
	
    $query = "INSERT INTO user (username, nama, status, password) VALUES ('$username','$nama', '$status', '$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){
	$namaFile = $_FILES['gambar_barang']['name'];
	$ukuranFile = $_FILES['gambar_barang']['size'];
	$error = $_FILES['gambar_barang']['error'];
	$tmpName = $_FILES['gambar_barang']['tmp_name'];

	if ($error == 44){
		echo "<script>
				alert('gambar belum diupload');
			</script>
			";
	}

	$ekstensiGambarValid = ['jpeg', 'jpg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('ekstensi gambar yang diperbolehkan adalah jpeg, jpg, png');
        document.location.href = 'loginadmin.php';
		</script>";
		return false;
	}

	if ($ukuranFile > 1500000) {
		echo "<script>
		alert(gambar memiliki ukuran yang tidak diperbolehkan');
        document.location.href = 'loginadmin.php';
		</script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'gambar/'. $namaFileBaru);
	return $namaFileBaru;

}

function hapus($id_barang){
	global $conn;
	mysqli_query($conn, "DELETE FROM product WHERE id_barang = '$id_barang'");
	return mysqli_affected_rows($conn); 
}

function edit($data){
	global $conn;
	$id_barang = htmlspecialchars($data["id_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$harga_barang = htmlspecialchars($data["harga_barang"]);
	$quantity = htmlspecialchars($data["quantity"]);
	$warna_barang = htmlspecialchars($data["warna_barang"]);
	$gambarLama = htmlspecialchars($data["gambar_barang"]);

	//cek jika user mengubah gambar
	if ($_FILES['gambar_barang']['error'] === 4) {
		$gambar_barang = $gambarLama;
	}else{
		$gambar_barang = upload();
	}

	//update data  
	$query = "UPDATE product SET nama_barang = '$nama_barang', harga_barang = '$harga_barang', quantity = '$quantity', warna_barang = '$warna_barang', gambar_barang = '$gambar_barang' WHERE id_barang = '$id_barang'";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function editUser($data){
	global $conn;
	$id_user = htmlspecialchars($data["id_user"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$nama = htmlspecialchars($data["nama"]);
	$status = htmlspecialchars($data["status"]);

	//update data  
	$query = "UPDATE user SET username = '$username', password = '$password', nama = '$nama' WHERE id_user = '$id_user'";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>