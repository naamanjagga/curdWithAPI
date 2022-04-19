<?php
header('Content-Type: application/json');
// header('Access-Control-Allow-Origin:*');

include 'connection.php';

$data=json_decode(file_get_contents("php://input"),true);
$name = $data['post_name'];
$email = $data['post_email'];
$role = $data['post_role'];


$sql="INSERT INTO users(name,email,role) VALUES('{$name}','{$email}','{$role}')";

$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo json_encode($row);


// echo "New record has id: " . mysqli_insert_id($conn);

// mysqli_close($conn);
