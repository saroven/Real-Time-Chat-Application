<?php
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header("location: login.php");
	}else{

	include 'inc/config.php';
	include 'inc/database.php';
	$uid = $_SESSION['user_id'];
	$db = new Database ();
	$sql = "SELECT * FROM users WHERE id = $uid";
	$data = $db->select($sql);

    if($data){
    	$user = $data->fetch_assoc();
    }
}

 ?>


<?php require 'inc/header.php'; ?>
	<div class="wrapper">
		<section class="users">
			<header>
				<div class="content">
					<img src="/inc/img/profile/<?php echo $user['image']; ?>" alt="">
					<div class="details">
						<span><?php echo $user['name']; ?></span>
						<p><?php echo $user['active_status']; ?></p>
					</div>
				</div>
				<a href="logout.php?id=<?php echo $user['id']; ?>" class="logout">Logout</a>
			</header>
			<div class="search">
				<span class="text">Select an user to start chat</span>
				<input type="text" class="search-btn" name="searchTerm" placeholder="Enter name to search...">
				<button class="btn"><i class="fas fa-search"></i></button>
			</div>
			<div class="users-list">

			</div>
		</section>
	</div>
<?php require 'inc/footer.php'; ?>
