<?php
session_start();
include 'inc/config.php';
include 'inc/database.php';



$db = new Database ();

$email = $db->link->real_escape_string($_POST['email']);
$password = $db->link->real_escape_string($_POST['password']);

if (!empty($email) && !empty($password)) { //if all field is not empty
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //if email is valid

    	$sql = "SELECT * FROM users WHERE email = '$email'";
        $check_mail = $db->select($sql);
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $data = $db->select($sql);
        if($check_mail){
            if ($data) {
                $udata = $data->fetch_assoc();
                $_SESSION['user_id'] = $udata['id'];
			    echo "success";
            }else{
                echo 'Password is incorrect!';
            }
        }else{
            echo 'Email is incorrect!';
        }
    }else{
        echo 'Invalid email format!';
    }
}else{
    echo 'All field required.';
}


?>
