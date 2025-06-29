document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    // Your form processing code goes here

    // Display a message indicating that the query has been sent
    alert('Your query has been sent!');
});
