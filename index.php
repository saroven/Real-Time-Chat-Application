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