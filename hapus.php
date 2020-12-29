<?php
require 'functions.php';

$id_barang = $_GET["id_barang"];

if (hapus($id_barang) > 0) {
	echo "
			<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'loginadmin.php';
			</script>
	";
	}else{
	echo "
			<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'loginadmin.php';
			</script>
	";
	}
?>