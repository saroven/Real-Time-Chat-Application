<?php

while ($user = $data->fetch_assoc()) {

	$sql2 = "SELECT * FROM messages WHERE reciver_id = {$user['id']} OR sender_id = {$user['id']} AND sender_id = {$sender_id} OR sender_id = {$user['id']} ORDER BY id DESC LIMIT 1";

	$msg_result = $db->select($sql2);
	if ($msg_result) {
		$msg_data = $msg_result->fetch_assoc();
		$mdata = $msg_data['msg'];

	}else{
		$mdata = "No Message!";
	}
	// if message bigger then 28 then trim message
	(strlen($mdata) > 28) ? $msg = substr($mdata, 0, 28).'...' : $msg = $mdata;

	//adding you before msg if login id send msg
	($sender_id == $msg_data['sender_id']) ? $you = "You: " : $you = "";
	// check user is online or offline

	($user['active_status'] == "Offline now") ? $offline = "offline" : $offline = "";

		$output .='<a href="chat.php?user_id='.$user['id'].'" class="cl">
						<div class="content">
							<img src="inc/img/profile/'.$user['image'].'" alt="">
								<div class="details">
									<span>'.$user['name'].'</span>
									<p>'.$you.$msg.'</p>
								</div>
						</div>
						<div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
					</a>';
	}
?>
