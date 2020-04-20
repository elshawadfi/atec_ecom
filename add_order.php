<?php 
// session_start();
// $_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
require_once 'admin/config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$db = getDbInstance();
$order_data =array();
$order_data['name'] = $_POST['name'];
$order_data['address'] = $_POST['address'];
$order_data['phone'] = $_POST['phone'];
$order_data['email'] =$_POST['email'];
$order_data['status'] ="pending";
$order_data['zipcode'] =$_POST['zipcode'];
$last_id = $db->insert('orders', $order_data);
// $lid = $last_id;
// print_r($db->rawQuery($db->getLastQuery()));
$id =  $db->getInsertId();



if($last_id){



header("location: add_item.php?id=".$id);



}





}
