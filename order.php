<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form - Our Restaurant</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Place Your Order</h1>
        <form action="processorder.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="order">Order Details:</label>
            <textarea id="order" name="order" required></textarea>

            <button type="submit">Submit Order</button>
        </form>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
