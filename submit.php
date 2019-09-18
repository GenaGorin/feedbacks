<?php 
require_once 'php/dbconnect.php';

$db = new Db();
$params = [
    'name'=> $_POST['name'],
    'email'=> $_POST['email'],
    'phone' => $_POST['phone'],
    'message' => $_POST['message'],
];
$sql = "INSERT INTO feedbacks (name, email, phone, message) VALUES ( :name, :email, :phone, :message)";
$db->query($sql, $params);

echo "Спасибо ". $_POST['name'];


?>