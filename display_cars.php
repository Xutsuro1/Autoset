<?php
// Define Car class
class Car {
    public $carModel;
    public $carType;
    public $carYear;

    public function __construct($carModel, $carType, $carYear) {
        $this->carModel = $carModel;
        $this->carType = $carType;
        $this->carYear = $carYear;
    }
}

// Check if form data is submitted and process it
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['carModel']) && isset($_POST['carType']) && isset($_POST['carYear'])) {
    // Retrieve form data
    $carModel = $_POST['carModel'];
    $carType = $_POST['carType'];
    $carYear = $_POST['carYear'];

    // Create a new Car object
    $newCar = new Car($carModel, $carType, $carYear);

    // Display the submitted information
    echo "<h2>Information Received:</h2>";
    echo "<p>Car Model: $newCar->carModel</p>";
    echo "<p>Car Type: $newCar->carType</p>";
    echo "<p>Year: $newCar->carYear</p>";
}
?>
