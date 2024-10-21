<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $order = htmlspecialchars($_POST['order']);

    echo "<h1>Order Received</h1>";
    echo "<p>Thank you, $name, for your order.</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Order Details: $order</p>";
} else {
    echo "<p>Error: Form not submitted correctly.</p>";
}
?>
