function redirectToConfigurator(service) {
    // Redirect to the configurator page based on the selected service
    switch (service) {
        case 'solar':
            window.location.href = "solar-configurator.html";
            break;
        case 'hydro':
            window.location.href = "hydro-configurator.html";
            break;
        case 'wind':
            window.location.href = "wind-configurator.html";
            break;
        default:
            // Handle any other cases or errors
            break;
    }
}
