<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Form</title>
</head>
<body>
    <header>
        <h1>Pizza Palace</h1>
        <p>Your favorite pizza place!</p>
    </header>
    <main>
        <h2>Order Your Pizza</h2>
        <!-- Pizza Order Form -->
        <form action="order(confirmation.php" method="post">
            <!-- Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="mobile">mobile:</label>
                <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="1234567890" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
            </fieldset>

            <!-- Pizza Details -->
            <fieldset>
                <legend>Details of Pizza</legend>
                <label for="number-of-pizzas">Number of Pizzas:</label>
                <input type="number" id="number-of-pizzas" name="number-of-pizzas" min="1" required><br><br>

                <label for="pizza-size">Size:</label>
                <select id="pizza-size" name="pizza-size" required>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="ex-large">Ex-Large</option>
                </select><br><br>

                <label for="pizza-shape">Shape:</label>
                <input type="radio" id="square" name="pizza-shape" value="square" required>
                <label for="square">Square</label>
                <input type="radio" id="round" name="pizza-shape" value="round" required>
                <label for="round">Round</label><br><br>

                <label for="pizza-toppings">Toppings:</label>
                <input type="text" id="pizza-toppings" name="pizza-toppings" required><br><br>

                <label for="crust-type">Crust Type:</label>
                <select id="crust-type" name="crust-type" required>
                    <option value="deep-dish">Deep Dish</option>
                    <option value="thin-crust">Thin Crust</option>
                    <option value="stuffed-crust">Stuffed Crust</option>
                    <option value="gluten-free">Gluten-Free</option>
                </select><br><br>

                <label for="order-type">Order Type:</label>
                <input type="radio" id="takeout" name="order-type" value="takeout" required>
                <label for="takeout">Takeout</label>
                <input type="radio" id="delivery" name="order-type" value="delivery" required>
                <label for="delivery">Delivery</label>
                <input type="radio" id="eat-in" name="order-type" value="eat-in" required>
                <label for="eat-in">Eat-In</label><br><br>
            </fieldset>

            <!-- Additional Information -->
            <fieldset>
                <legend>Additional Information</legend>
                <label for="delivery-instructions">Delivery Instructions:</label><br>
                <textarea id="delivery-instructions" name="delivery-instructions" rows="4" cols="50"></textarea><br><br>
            </fieldset>

            <!-- Submit Button -->
            <button type="submit">Place Order</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2023 Pizza Palace</p>
        <address>
            Contact us at <a href="https://www.papajohns.ca/">info@pizzapalace.com</a>
        </address>
    </footer>

    <!-- Pizza Image with Alt Attribute -->
    <p><img src="" alt="Delicious Pizza"></p>
</body>
</html>
