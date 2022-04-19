<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');

include 'connection.php';
$data=json_decode(file_get_contents("php://input"),true);
// print_r($data); die;
$id =  $data['post_id'];
$name = $data['post_name'];
$email = $data['post_email'];
$role = $data['post_role'];

$sql = "UPDATE `users` SET `name`= '$name',`email`='$email',`role`='$role' WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

if($result == null) {
    echo 'error';
} else {
    echo 'record updated successfully';
}
