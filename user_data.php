<?php
session_start();
include 'inc/config.php';
include 'inc/database.php';

$sender_id = $_SESSION['user_id'];

$db = new Database ();

$sql = "SELECT * FROM users WHERE NOT id = $sender_id";
$data = $db->select($sql);
$output = '';
if(!$data){
	$output .= 'No user available!';
}else{
	include 'data.php';
}

echo $output;


?>
