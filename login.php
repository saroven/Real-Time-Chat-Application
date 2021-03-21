<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Real Time Chat</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
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
					<input type="submit" value="Signup To Continue">
				</div>
				<div class="link">Don't have an account? <a href="index.php">Create Now</a></div>
			</form>
		</section>
	</div>`
	<script src="./js/pass-show-hide.js"></script>
	<script src="./js/login.js"></script>
</body>
</html>
