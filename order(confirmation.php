<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Order Confirmed<h1>
    <div class="pizza">
        <?php
        if($_server["request_method"] == "post"){
            $name = $_post["name"];
            $pizza-size = $_post["pizza-size"];
            $pizza-shape = $_post["pizza-shape"];
            $pizza-toppings = $_post["pizza-toppings"];
            $crust = $_post["crust"];
            $order-type = $_post["order-type"];
            $email = $_post["email"];
            $address = $_post["address"];
            $date = $_post["date"];

            echo"<h2>order details:<h2>";
            echo "<p>number of pizzas: $number_of_pizzas</p>";
            echo "<p>pizza-size: $pizza-size</p>";
            echo "<p>pizza-shape: $pizza-shape</p>";
            echo "<p>pizza-toppings: $pizza-toppings</p>";
            echo "<p>crust: $crust</p>";
            echo "<p>email: $email</p>";
            echo "<p>address: $address</p>";
            echo "<p>date: $date</p>";
        }
        ?>





        
    
</body>
</html>