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

    $output = '';
    $sql = "SELECT messages.id AS msg_id, messages.msg, users.image, messages.sender_id, messages.reciver_id FROM messages
    LEFT JOIN users ON users.id = messages.sender_id
     WHERE (sender_id = $sender_id AND reciver_id = $reciver_id) OR (sender_id = $reciver_id AND reciver_id = $sender_id) ORDER BY msg_id ASC";


    $result = $db->select($sql);
    if($result){
        while ($msg = $result->fetch_assoc()) {
            if ($msg['sender_id'] == $sender_id ) { //is condition is true then he is sender
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'.$msg['msg'].'</p>
                                </div>
                            </div>';

            }else{ //he is reciver
                $output .= '<div class="chat incoming">
                                <img src="/inc/img/profile/'.$msg['image'].'" alt="">
                                <div class="details">
                                    <p>'.$msg['msg'].'</p>
                                </div>
                            </div>';
            }

        }
    }
    echo $output;

        }

?>
