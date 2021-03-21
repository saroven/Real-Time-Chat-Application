<?php
session_start();
include 'inc/config.php';
include 'inc/database.php';



$db = new Database ();



$name = $db->link->real_escape_string($_POST['name']);
$email = $db->link->real_escape_string($_POST['email']);
$password = $db->link->real_escape_string($_POST['password']);

if (!empty($name) && !empty($email) && !empty($password)) { //if all field is not empty
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //if email is valid
    	//check is email is alrady registerd
    	$sql = "SELECT * FROM users WHERE email = '$email'";
        $data = $db->select($sql);
        if(!$data){ //if email is avalilabe
            if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);

                $img_ext = $img_explode[1];
                $extension = ['jpg', 'jpeg', 'png'];

                if (in_array($img_ext, $extension) == true) { //is user uploaded image extension matched
                	$time = time();
                	$image = $time.$img_name;
                	if (move_uploaded_file($tmp_name, 'inc/img/profile/'.$image)) { // if upload done
                		$status = 'Active Now';

			            date_default_timezone_set("Asia/Dhaka"); //this is for bangladeshi time
			            $date = date('Y-m-d h:i:sa');
			            $password = md5($password);
			            $sql = "INSERT INTO users (name, email, password, image, active_status, created_at) VALUES ('$name', '$email', '$password','$image', '$status', '$date')";
			             $result = $db->insert($sql);

			            if ($result) {
			                $q = "SELECT * FROM users WHERE email = '$email'";
			                $udatas = $db->select($q);
			                if ($udatas) {
			                	$udata = $udatas->fetch_assoc();
			                	$_SESSION['user_id'] = $udata['id'];
			                	echo "success";
			                }else{
			                	echo "Something went wrong, please try again!";
			                }

			            }else{
			                echo "Something went wrong, please try again!";
			            }
                	}
                }else{
                	echo "Please select an image - jpeg, jpg, png";
                }


                // echo "$img_formate";
            }else{
                echo 'Please select an image';
            }
        }else{
        	echo "Email is already taken! Try diffrent one.";
        }


    }else{
        echo $email.'is not valid email';
    }
}else{
    echo 'All field required';
}

// echo $name;
// print_r($_POST);
