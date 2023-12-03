<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    // Add other fields accordingly

    // Your email where you want to receive messages
    $to = "MarcoGonzalezMG99@gmail.com"; 
    $subject = "New Contact From Website";

    $message = "Name: " . $name . "\n";
    // Add other fields to the message

    // Send email
    mail($to, $subject, $message);

    // Redirect to a new page or display a success message
    echo "Thank you for contacting us!";
}
?>
