// Function to handle form submission and provide recommendation
document.getElementById("recommendation-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Retrieve user inputs
    let windSpeed = parseFloat(document.getElementById("wind-speed").value);
    let sunlightHours = parseFloat(document.getElementById("sunlight-hours").value);
    let riverSpeed = parseFloat(document.getElementById("river-speed").value);

    // Call function to determine recommendation based on user inputs
    let recommendations = getRecommendations(windSpeed, sunlightHours, riverSpeed);

    // Display recommendations in a pop-up dialog
    if (recommendations.length > 0) {
        alert("Recommended Solutions: " + recommendations.join(", "));
    } else {
        alert("No suitable recommendation based on provided inputs");
    }
});

// Function to determine recommendations based on user inputs
function getRecommendations(windSpeed, sunlightHours, riverSpeed) {
    let suitableRecommendations = [];

    // Check if the conditions are suitable for solar energy
    if (sunlightHours > 8) {
        suitableRecommendations.push("Solar Energy");
    }

    // Check if the conditions are suitable for wind energy
    if (windSpeed > 15) {
        suitableRecommendations.push("Wind Energy");
    }

    // Check if the conditions are suitable for hydroelectric power
    if (!isNaN(riverSpeed) && riverSpeed > 5.4) { // Check if river speed is provided and greater than 5.4 km/h
        suitableRecommendations.push("Hydroelectric Power");
    }

    return suitableRecommendations;
}

// Function to show or hide the river speed input based on user selection
function showRiverSpeed() {
    let riverSpeedInput = document.getElementById("river-speed-input");
    riverSpeedInput.style.display = "block"; // Always show the river speed input
}
