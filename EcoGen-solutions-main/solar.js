document.getElementById("quotation-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Retrieve user inputs
    let region = document.getElementById("region").value;
    let area = parseFloat(document.getElementById("area").value);
    let powerNeeded = parseFloat(document.getElementById("power-needed").value);

    // Define base prices for each region
    const basePrices = {
        western: 15000, // Rupees per square meter
        central: 12000, // Rupees per square meter
        vidarbha: 10000 // Rupees per square meter
    };

    // Calculate quote based on area and power needed
    let basePricePerSquareMeter = basePrices[region];
    let totalPrice = area * basePricePerSquareMeter * powerNeeded;

    // Adjust quote based on region
    switch (region) {
        case 'western':
            totalPrice *= 1.2; // Increase by 20% for Western region
            break;
        case 'central':
            totalPrice *= 1.1; // Increase by 10% for Central region
            break;
        case 'vidarbha':
            totalPrice *= 1.05; // Increase by 5% for Vidarbha region
            break;
        default:
            // Handle any other cases or errors
            break;
    }

    // Display quotation in alert dialog
    alert("Your quotation is: " + totalPrice.toFixed(2) + " INR");
});
