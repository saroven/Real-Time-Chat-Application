<?php
	session_start();
	if (isset($_SESSION['user_id'])) {
		header("location: users.php");
	}
?>

<?php require 'inc/header.php'; ?>
	<div class="wrapper">
		<section class="form login">
			<header>Real Time Chat</header>

			<form action="#">
				<div class="error-text"></div>

				<div class="field input">
					<label for="email">Email</label>
					<input type="email" placeholder="Enter email" name="email">
				</div>
				<div class="field input">
					<label for="password">
					Password</label>
					<input type="password" placeholder="Enter password" name="password">
					<i class="fas fa-eye"></i>
				</div>

				<div class="field button">
					<input type="submit" value="Login">
				</div>
				<div class="link">Don't have an account? <a href="index.php">Create Now</a></div>
			</form>
		</section>
	</div>`
	<script src="./js/pass-show-hide.js"></script>
	<script src="./js/login.js"></script>
</body>
</html>
