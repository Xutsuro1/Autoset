// Define CarType object type
function CarType(type, description, price) {
    this.type = type;
    this.description = description;
    this.price = price;
}

// Define Car object type
function Car(carModel, carType, carYear) {
    this.carModel = carModel;
    this.carType = carType;
    this.carYear = carYear;
}

// Initialize arrays with actual information
var carTypesArray = [
    new CarType("Sedan", "Comfortable seating", 50),
    new CarType("SUV", "Spacious", 70),
    // Add more car types as needed
];

var availableCarsArray = [
    new Car("Toyota Camry", "Sedan", 2022),
    new Car("Ford Explorer", "SUV", 2021),
    // Add more available cars as needed
];

// Function to dynamically display information in the tables
function displayCarTypes() {
    var carTypesTable = document.getElementById("carTypesTable").getElementsByTagName('tbody')[0];
    carTypesTable.innerHTML = "";

    carTypesArray.forEach(function(carType) {
        var row = carTypesTable.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);

        cell1.textContent = carType.type;
        cell2.textContent = carType.description;
        cell3.textContent = carType.price;
    });
}

function displayAvailableCars() {
    var availableCarsTable = document.getElementById("availableCarsTable").getElementsByTagName('tbody')[0];
    availableCarsTable.innerHTML = "";

    availableCarsArray.forEach(function(car) {
        var row = availableCarsTable.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);

        cell1.textContent = car.carModel;
        cell2.textContent = car.carType;
        cell3.textContent = car.carYear;
    });
}

// Function to add a new car
function addCar() {
    var carModel = document.getElementById("carModel").value;
    var carType = document.getElementById("carType").value;
    var carYear = document.getElementById("carYear").value;

    var newCar = new Car(carModel, carType, carYear);
    availableCarsArray.push(newCar);

    // Update the table after adding a new car
    displayAvailableCars();
}

// Function to search for information
function searchInformation() {
    var searchTerm = document.getElementById("searchTerm").value;

    // Implement your search logic here based on the searchTerm
    // Display the search results as needed
}

// Initial display of information
displayCarTypes();
displayAvailableCars();
