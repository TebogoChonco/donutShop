<?php require("login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}

	if(isset($_POST['submit1'])){
		header('Location:index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="css/style.css">
	<title>Log in form</title>
</head>
<body>

<div class= "shop_logo">
        <img src= "img/pile.png" alt="Pile of donuts">
        <h1 class="logo">Dropping Donuts</h1>
    </div>  
    
	<form class="welcome" action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Login Form</h2>
		<h4>Both fields are <span>required</span></h4>

		<label>Username</label>
		<input type="text" name="username" placeholder="Username">

		<label>Password</label>
		<input type="text" name="password" placeholder="Password">

		<button type="submit" name="submit">Log in</button>
        <button type="submit" name="submit1">Register</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>