function calculateTotal() {
    var carType = $("#carType").val();
    var rentalDays = parseInt($("#rentalDays").val());
    var isSeniorCustomer = $("#seniorCustomer").prop("checked");
  
    var baseCosts = {
      compact: 30,
      sedan: 50,
      suv: 70
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
  