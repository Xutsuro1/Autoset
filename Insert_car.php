<?php
//  database connection configuration
$servername = "localhost";
$username = "root";
$dbname = "car";

// Create connection
$conn = new mysqli($servername, $username, '', $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['carType']) && isset($_POST['carmodel']) && isset($_POST['Year'])) {
    $carType = $_POST['carType'];
    $carmodel = $_POST['carmodel'];
    $Year = $_POST['Year'];

    // Construct and execute SQL INSERT query
    $sql = "INSERT INTO Car (carType, carmodel, Year) VALUES ('$carType', '$carmodel', '$Year')";

    if ($conn->query($sql) === TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML form for inserting records -->
<form method="post" action="">
    <input type="text" name="carType" placeholder="Car Type">
    <input type="text" name="carmodel" placeholder="Car Model">
    <input type="number" name="Year" placeholder="Year">
    <input type="submit" value="Insert">
</form>
