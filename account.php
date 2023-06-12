
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
			<h2>Welcome to Dropping Donuts <?php echo $_SESSION['user']; ?><h2>
			<a href="?logout">Log out</a>	
        </div>

        <hr>
   <!--  <div class="menu">
    <button type="submit" name="submit1" value="redirect">Go to menu</button>
    </div> -->

	</div>

	<h1>Order Your Donut</h1>
    <div class="orderContainer">
      <form id="orderForm">
        <div class="form-group">
        
        <div class="form-group">
          <label for="flavor">Donut Filling:</label>
          <select id="flavor" name="flavor" required>
            <option value="">Select a filling</option>
			<option value="plain">Plain R4</option>
            <option value="chocolate">Chocolate R6</option>
            <option value="vanilla">Vanilla R6</option>
            <option value="strawberry">Strawberry R6</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="toppings">Toppings:</label>
        <div class="toppings">  

        <div class="toppingList">
          <input type="checkbox" id="blueDonut" name="toppings" value="blueDonut">
          <label for="blueDonut">Blue donut</label>
          <img src= "img/blueDonut.png" alt="blue donut" width="100px">  
          <p>R2</p>
          </div>

          <div class="toppingList">
          <input type="checkbox" id="pinkDonut" name="toppings" value="pinkDonut">
          <label for="pinkDonut">Pink donut</label>
          <img src= "img/pinkDonut.png" alt="pink donut" width="100px">  
          <p>R2</p>
          </div>

          <div class="toppingList">
          <input type="checkbox" id="greenDonut" name="toppings" value="greenDonut">
          <label for="greenDonut">Green donut</label>
          <img src= "img/greenDonut.png" alt="green donut" width="100px">  
          <p>R2</p>
          </div>

          <div class="toppingList">
          <input type="checkbox" id="sprinkles" name="toppings" value="sprinkles">
          <label for="sprinkles">Sprinkles</label>
          <img src= "img/sprinkles.png" alt="Sprinkles" width="100px">  
          <p>R2</p>
          </div>

          <div class="toppingList">
          <input type="checkbox" id="chocolate sprinkles" name="toppings" value="chocolate sprinkles">
          <label for="chocolate sprinkles">Chocolate Sprinkles</label>
          <img src= "img/chocolateSprinkles.png" alt="chocolate sprinkles" width="100px">  
          <p>R2</p>
          </div>

         
        </div>
        
        <button type="submit">Place Order</button>

</body>

<script src="js/script.js"></script>
<script src="js/data.js"></script>
</html>

