<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');

include 'connection.php';

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['post_id'];

$sql = "SELECT * FROM users WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($row);




// {
//     'post_name' = 'new',
//     'post_email' = 'new@email.com',
//     'post_role' = 'user'
// }
