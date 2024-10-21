<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    echo "<h1>Message Received</h1>";
    echo "<p>Thank you, $name, for reaching out to us.</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Your Message: $message</p>";
} else {
    echo "<p>Error: Form not submitted correctly.</p>";
}
?>
