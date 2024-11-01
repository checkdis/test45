<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userChoice = $_POST['choice'];

    // Email settings
    $to = "hallo.titty@gmail.com"; // Replace with your email
    $subject = "User Choice";
    $message = "User selected: " . $userChoice;
    $headers = "From: noreply@example.com"; // Change as needed

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
