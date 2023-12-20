<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    
    $to = "ii3llawiii@gmail.com"; 
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $email_body)) {
        echo "Thank you for your message. We will get in touch soon!";
    } else {
        echo "Oops! Something went wrong, please try again later.";
    }

    // You can perform other actions here like saving data to a database
} else {
    // Redirect to the form page if accessed directly without POST data
    header("Location: contact_form.php"); // Replace with your form page URL
    exit;
}
?>
