 // Function to handle form submission
 function handleFormSubmit(event) {
   event.preventDefault(); // Prevent the form from submitting
   
   // Get form values
   var name = document.getElementById("name").value;
   var flavor = document.getElementById("flavor").value;
   var toppings = [];
   var checkboxes = document.getElementsByName("toppings");
   for (var i = 0; i < checkboxes.length; i++) {
     if (checkboxes[i].checked) {
       toppings.push(checkboxes[i].value);
     }
   }
    
   // Calculate total price
   var totalPrice = basePrice;
   if (toppings.includes("sprinkles")) {
     totalPrice += sprinklesPrice;
   }
   if (toppings.includes("chocolate-chips")) {
     totalPrice += chocolateChipsPrice;
   }
   if (toppings.includes("caramel-drizzle")) {
     totalPrice += caramelDrizzlePrice;
   }
   
   // Process the order (replace with your own logic)
   console.log("Name: " + name);
   console.log("Flavor: " + flavor);
   console.log("Toppings: " + toppings.join(", "));
   console.log("Total Price: R" + "")
  };