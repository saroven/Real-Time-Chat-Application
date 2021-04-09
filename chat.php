<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header("location: login.php");
	}else{

	include 'inc/config.php';
	include 'inc/database.php';
	$uid = $_SESSION['user_id'];
	$db = new Database ();
    $user_id = $db->link->real_escape_string($_GET['user_id']);
	$sql = "SELECT * FROM users WHERE id = $user_id";
	$data = $db->select($sql);

    if($data){
    	$user = $data->fetch_assoc();
    }
}

 ?>


<?php require 'inc/header.php'; ?>
    <div class="wrapper">
		<section class="chat-area">
			<header>
                <a href="users.php" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
				<img src="/inc/img/profile/<?php echo $user['image']; ?>" alt="user_image">
					<div class="details">
						<span><?php echo $user['name']; ?></span>
						<p><?php echo $user['active_status']; ?></p>
					</div>
			</header>
            <div class="chat-box">

            </div>
            <form action="#" class="typing-area">
            <input type="hidden" name="sender_id" value="<?php echo $_SESSION['user_id']; ?>">
            <input type="hidden" name="reciver_id" value="<?php echo $user_id; ?>">
                <input type="text" class="input-field" name="msg" placeholder="Type a message here ....">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
		</section>
	</div>
</body>
<script src="js/chat.js"></script>
</html>
