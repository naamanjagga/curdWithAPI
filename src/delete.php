<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');

include 'connection.php';

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['post_id'];

$sql = "DELETE FROM users WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

echo 'record deleted susseccfully';