<?php
session_start();
require_once 'admin/config/config.php';
if(isset($_GET['id'])){

$order_id = $_GET['id'];


$cart_item = $_SESSION['cart'];
// print_r($cart_item);
// die();
$db = getDbInstance();
foreach($cart_item as $item){
$item_data = array();
$item_data['order_id'] = $order_id;
$item_data['product_id'] = $item['pr_id'];
$item_data['qty'] = $item['quantity'];

    $db->where('id', $item['pr_id']);
    $product = $db->getOne('products');
    $price = $product['price'];

    $cost = $price * $item['quantity'];
    $item_data['cost'] = $cost;


$insert = $db->insert('items', $item_data);

if($insert){
	unset($_SESSION['cart'][$id]);
}



}

header("location: success.php?id=".$order_id);
}
//header("location: index.php");
