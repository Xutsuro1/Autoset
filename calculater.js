// Function to calculate the total cost based on user input
function calculateTotal() {
    // Get values from the form
    var carType = document.getElementById("carType").value;
    var rentalDays = parseInt(document.getElementById("rentalDays").value);
    var isSeniorCustomer = document.getElementById("seniorCustomer").checked;

    // Define base rental costs per car type
    var baseCosts = {
        Luxury: 90,
        sedan: 50,
        suv: 70,
        Off_Roads: 80,
        sports: 100,
        Economic: 30
    };

    // Calculate total cost based on car type and rental days
    var totalCost = baseCosts[carType] * rentalDays;

    // Apply discount for senior customers
    if (isSeniorCustomer) {
        totalCost *= 0.9; // 10% discount for senior customers
    }

    // Display the total cost on the page
    document.getElementById("totalCost").innerHTML = "Total Cost: $" + totalCost.toFixed(2);
}

// Add any additional functions or logic as needed
