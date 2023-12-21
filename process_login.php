<?php
class User {
    public $name;
    public $email;
    public $password;
    public $number;

    public function __construct($name, $email, $password, $number) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->number = $number;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone']; 

    $user = new User($name, $email, $password, $phone);

    // prints
    echo "<h2>Thank you for registering!</h2>";
    echo "<p>Name: $user->name</p>";
    echo "<p>Email: $user->email</p>";
    echo "<p>Password: $user->password</p>";
    echo "<p>Phone: $user->number</p>"; 
} else {
    // If the form is not submitted properly, redirect to the login page
    header("Location: login.html");
    exit();
}


?>
