<?php
class User {
    public $name;
    public $email;
    public $password;
    public $phone;

    public function __construct($name, $email, $password, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $user = new User($name, $email, $password, $phone);

    // Here, you can perform operations like storing user data in a database
    // For example, you might insert this data into a users table in your database

    // For demonstration, let's echo the submitted data:
    echo "<h2>Thank you for registering!</h2>";
    echo "<p>Name: $user->name</p>";
    echo "<p>Email: $user->email</p>";
    echo "<p>Password: $user->password</p>";
    echo "<p>Phone: $user->phone</p>";
} else {
    // If the form is not submitted properly, redirect to the login page
    header("Location: login.html");
    exit();
}
?>
