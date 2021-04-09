<?php
	session_start();
	if (isset($_SESSION['user_id'])) {
		header("location: users.php");
	}
?>
<?php require 'inc/header.php'; ?>
	<div class="wrapper">
		<section class="form signup">
			<header>Real Time Chat</header>

			<form action="#" enctype="multipart/form-data">
				<div class="error-text"></div>
				<div class="field input">
					<label for="name">Name</label>
					<input type="text" placeholder="Enter Name" name="name">
				</div>

				<div class="field input">
					<label for="email">Email</label>
					<input type="text" placeholder="Enter email" name="email">
				</div>
				<div class="field input">
					<label for="password">
					Password</label>
					<input type="password" placeholder="Enter password" name="password">
					<i class="fas fa-eye"></i>
				</div>
				<div class="field image">
					<label for="image">Image</label>
					<input type="file" name="image">
				</div>
				<div class="field button">
					<input type="submit" value="Signup To Continue">
				</div>
				<div class="link">Already signed up? <a href="login.php">Login Now</a></div>
			</form>
		</section>
	</div>
</body>
<script src="./js/pass-show-hide.js"></script>
<script src="./js/signup.js"></script>
</html>
