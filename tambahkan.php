<?php
    session_start();
    include 'koneksi.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="icon" type="image/png" href="gambar/icon/logo-title.png">
    <title>Anpra Shop | Create</title>
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
                    <span class="crud-1 create" onclick="window.location.href='tambahkan.php'"></span>
                    <span class="crud-2" onclick="window.location.href='loginadmin.php#read'"></span>
                    <span class="crud-3" onclick="window.location.href='loginadmin.php#read'"></span>
                    <span class="crud-4" onclick="window.location.href='loginadmin.php#read'"></span>
                </div>
            </span>
            
        </div>
    </div>
        

    <div id="create" class="container3">
    <center>
    <table>
        <tr>
            <td height="30px"><!-- <span class="tbl-title">Create</span> --></td>
        </tr>
        <tr>
            <td>
                <form action="" method="POST" enctype="multipart/form-data" class="tambahkan"> 
                    <span class="tambahkan-title">Create Data Barang</span>
                    <input type="text" name="nama_barang" placeholder="Nama Barang" class="tambahkan1 tambahkan2" required/>
                    <input type="text" name="harga_barang" placeholder="Harga Barang" class="tambahkan1 tambahkan2" required/>
                    <input type="text" name="warna_barang" placeholder="Warna Barang" class="tambahkan1 tambahkan2" required/>
                    <input type="number" name="quantity" min="1" placeholder="Quantity" class="tambahkan1 tambahkan2" required/>
                    <span>Gambar Barang</span>
                    <input type="file" name="gambar_barang" class="tambahkan1 tambahkan2" required/>
                    <input type="submit" name="submit" value="Create" class="kirim-2">
                    <input type="reset" name="reset" value="Reset" class="reset-2">
                </form>
            </td>
        </tr>
    </table>
    </center>
    </div>



    <?php
    require "functions.php";

    if (isset($_POST["submit"])){

        if (tambah($_POST) > 0){
            echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'tambahkan.php';
            </script>";
        }else{
            echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'tambahkan.php';
            </script>";
        }
    }
    ?>

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
