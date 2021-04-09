<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header("location: login.php");
	}else{

	include 'inc/config.php';
	include 'inc/database.php';
    $db = new Database ();
    $sender_id = $db->link->real_escape_string($_POST['sender_id']);
    $reciver_id = $db->link->real_escape_string($_POST['reciver_id']);
    $msg = $db->link->real_escape_string($_POST['msg']);
	$sql = "SELECT * FROM users WHERE id = $reciver_id";
	$data = $db->select($sql);

    if($data){
    	if (!empty($msg)) {
            $q = "INSERT INTO messages (sender_id, reciver_id, msg) VALUES ('{$sender_id}', '{$reciver_id}', '{$msg}')";
            $result = $db->insert($q);
            if ($result) {
                echo 'success';
            }else{
                die();
            }
        }
    }
}

?>
