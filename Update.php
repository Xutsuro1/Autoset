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



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['carId']) && isset($_POST['carType']) && isset($_POST['carmodel']) && isset($_POST['Year'])) {
    $carId = $_POST['carId'];
    $carType = $_POST['carType'];
    $carmodel = $_POST['carmodel'];
    $Year = $_POST['Year'];

    // Construct and execute SQL UPDATE query
    $sql = "UPDATE Car SET carType='$carType', carmodel='$carmodel', Year='$Year' WHERE carId=$carId";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML form for updating records -->
<form method="post" action="">
    <input type="number" name="carId" placeholder="Car ID to update">
    <input type="text" name="carType" placeholder="New Car Type">
    <input type="text" name="carmodel" placeholder="New Car Model">
    <input type="number" name="Year" placeholder="New Year">
    <input type="submit" value="Update">
</form>
