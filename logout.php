<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header("location: login.php");
	}else{
        include 'inc/config.php';
        include 'inc/database.php';
        $uid = $_SESSION['user_id'];
        $db = new Database ();
        $uid = $db->link->real_escape_string($_GET['id']);
        if(isset($uid)){
            $status = "Offline now";
            $sql = "UPDATE users SET active_status = '{$status}' WHERE id = $uid";
            $result = $db->update($sql);
            if($result){
                session_unset();
                session_destroy();
                header('location: login.php');
            }else{
                header('location: users.php');
            }
        }

        if($data){
            $user = $data->fetch_assoc();
        }
    }
