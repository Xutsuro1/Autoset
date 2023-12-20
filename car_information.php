<?php
class CarType {
    public $type;
    public $description;
    public $price;

    public function __construct($type, $description, $price) {
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
    }
}

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

// Initialize arrays with actual information
$carTypesArray = [
    new CarType("Sedan", "Comfortable seating", 50),
    new CarType("SUV", "Spacious", 70),
    new CarType("Luxury", "Advanced Features", 90),
    new CarType("OFF_ROADS", "Suitable for trips and hard roads", 80),
    new CarType("Economic", "Cheap and used daily", 30),
    new CarType("Sports", "Powerful engine with aggressive looking", 100),
    // Add more car types as needed
];

$availableCarsArray = [
    new Car("Toyota Camry", "Economic", 2022),
    new Car("Lexus RX350", "SUV", 2020),
    new Car("Mercedes Benz S550", "Luxury", 2018),
    new Car("Honda Accord", "Sedan", 2017),
    new Car("GMC Sierra", "OFF_ROADS", 2015),
    new Car("Lamborghini Huracan", "Sports", 2016),
    // Add more available cars as needed
];

// Function to display car types
function displayCarTypes($carTypesArray) {
    echo "<h2>Car Types</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Type</th><th>Description</th><th>Price</th></tr>";
    foreach ($carTypesArray as $carType) {
        echo "<tr>";
        echo "<td>".$carType->type."</td>";
        echo "<td>".$carType->description."</td>";
        echo "<td>".$carType->price."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Function to display available cars
function displayAvailableCars($availableCarsArray) {
    echo "<h2>Available Cars</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Car Model</th><th>Type</th><th>Year</th></tr>";
    foreach ($availableCarsArray as $car) {
        echo "<tr>";
        echo "<td>".$car->carModel."</td>";
        echo "<td>".$car->carType."</td>";
        echo "<td>".$car->carYear."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Call functions to display car information
displayCarTypes($carTypesArray);
displayAvailableCars($availableCarsArray);
?>
