<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');

include 'connection.php';


$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($row); die;
echo json_encode($row);
// $id = $data['post_id'];
