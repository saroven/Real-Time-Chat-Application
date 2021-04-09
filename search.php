<?php

session_start();
include 'inc/config.php';
include 'inc/database.php';

$sender_id = $_SESSION['user_id'];
$db = new Database ();
$searchTerm = $db->link->real_escape_string($_POST['searchTerm']);
$searchTerm = trim($searchTerm);

$sql = "SELECT * FROM users WHERE name LIKE '%$searchTerm%' AND NOT id = $sender_id";

$data = $db->select($sql);
$output = '';
if($data == ''){
	$output .= 'No user found!';
}else{
	include 'data.php';

}
echo $output;

