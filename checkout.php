<?php 
session_start();
require 'koneksi.php';
require 'item.php';

// Save new orders
$sql1 = 'INSERT INTO orders (name, datecreation, status, username) VALUES ("New Order","'.date('Y-m-d').'",0,"acc2")';
mysqli_query($conn, $sql1);
$ordersid = mysqli_insert_id($conn); 
// Save order details for new orders
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart);$i++) {
$sql2 = "INSERT INTO odersdetail (productid, ordersid, price, quantity) VALUES ('.$cart[$i]->id_barang.', '.$ordersid.', '.$cart[$i]->harga_barang.', '.$cart[$i]->quantity.')";
mysqli_query($conn, $sql2);
}
// Clear all product in cart
unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="loginmember.php">here</a> to continue purchasing products.