function calculateTotal() {
    var carType = $("#carType").val();
    var rentalDays = parseInt($("#rentalDays").val());
    var isSeniorCustomer = $("#seniorCustomer").prop("checked");
  
    var baseCosts = {
      Luxury: 90,
      sedan: 50,
      suv: 70,
      Off_Roads: 80,
      sports: 100,
      Economic: 30
    };
  
    var totalCost = baseCosts[carType] * rentalDays;
  
    if (isSeniorCustomer) {
      totalCost *= 0.9; // 10% discount for senior customers
    }
    $("#totalCost").html("Total Cost: $" + totalCost.toFixed(2));
  }
  
  $(document).ready(function () {
    $("#calculateButton").on("click", calculateTotal);
  });
  