<?php require("register.class.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['username'], $_POST['password']);
	}

	if(isset($_POST['submit1'])){
		header('Location:login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="css/style.css">
	<title>Register Form</title>
</head>
<body>

    <div class= "shop_logo">
        <img src= "img/pile.png" alt="Pile of donuts">
        <h1 class="logo">Dropping Donuts</h1>
    </div>  

	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Register form</h2>
		<h4>Both fields are <span>required</span></h4>

		<label>Username</label>
		<input type="text" name="username" placeholder="Username">

		<label>Password</label>
		<input type="text" name="password" placeholder="Password">

		<button type="submit" name="submit">Register</button>
        <button type="submit" name="submit1" value="redirect">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>