<?php
// Connect to  MySQL database
$servername = "localhost";
$username = "root";
$dbname = "car";

$conn = new mysqli($servername, $username, '', $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'contacts' table
$sql = "SELECT  name, email, message FROM contacts";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Information</title>
   
</head>
<body>
    <div class="container">
        <h1>Contact Information</h1>
        <table border="1">
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                       
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
