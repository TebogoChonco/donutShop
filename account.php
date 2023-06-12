<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: login.php");	exit();
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="css/style.css">
	<title>User account</title>
</head>
<body>

    <div class= "shop_logo">
        <img src= "img/pile.png" alt="Pile of donuts">
        <h1 class="logo">Dropping Donuts</h1>
    </div>  

	<div class="account_content">
		<div= class="header">
			<h2>Welcome <?php echo $_SESSION['user']; ?><h2>
			<a href="?logout">Log out</a>	
        </div>

        <hr>
   <!--  <div class="menu">
    <button type="submit" name="submit1" value="redirect">Go to menu</button>
    </div> -->

	</div>

</body>
</html>

