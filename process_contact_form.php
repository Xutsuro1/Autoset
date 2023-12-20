<?php
class ContactMessage {
    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }
}

// Initialize an array to store ContactMessage objects
$contactMessages = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create ContactMessage object and store it in the array
    $contactMsg = new ContactMessage($name, $email, $message);
    $contactMessages[] = $contactMsg;

    // Redirect back to contact page after submission
    header("Location: contact.html");
    exit();
}

// Function to display contact messages in table format
function displayContactMessages($contactMessages) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Message</th></tr>";
    foreach ($contactMessages as $msg) {
        echo "<tr>";
        echo "<td>".$msg->name."</td>";
        echo "<td>".$msg->email."</td>";
        echo "<td>".$msg->message."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display contact messages 
displayContactMessages($contactMessages);
?>
