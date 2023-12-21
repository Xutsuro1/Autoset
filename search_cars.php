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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_criteria'])) {
    $search_criteria = $_POST['search_criteria'];

    // Construct and execute SQL SELECT query based on search criteria
    $sql = "SELECT * FROM Car WHERE carType LIKE '%$search_criteria%' OR carmodel LIKE '%$search_criteria%' OR Year = '$search_criteria'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Car Type: " . $row["carType"]. " - Car Model: " . $row["carmodel"]. " - Year: " . $row["Year"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

$conn->close();
?>

<!-- HTML form for searching records -->
<form method="post" action="">
    <input type="text" name="search_criteria" placeholder="Search by Car Type, Model, or Year">
    <input type="submit" value="Search">
</form>
