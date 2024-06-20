<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="success-message">
            <h1>Thank You for Your Order!</h1>
            <p>Your order has been successfully placed.</p>
            <p>Order Number: <strong>#12345</strong></p> <!-- You can dynamically generate this number -->
            <a href="pesan.php" class="button">Continue Shopping</a>
        </div>
    </div>
</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #FFD0D0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    text-align: center;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.success-message h1 {
    color: #000000;
}

.success-message p {
    color: #555555;
}

.button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    color: #ffffff;
    background-color: #FF9EAA;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #7E8EF1;
}
</style>