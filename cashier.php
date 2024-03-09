<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier Interface</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cashier Interface</h1>
        <div>
            <label for="product">Product:</label>
            <select id="product">
                <option value="product1">Product 1</option>
                <option value="product2">Product 2</option>
                <option value="product3">Product 3</option>
            </select>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" value="1">
        </div>
        <button id="add-to-cart">Add to Cart</button>
        <hr>
        <div id="cart">
            <!-- Cart items will be displayed here -->
        </div>
        <button id="checkout">Checkout</button>
    </div>
</body>
</html>
