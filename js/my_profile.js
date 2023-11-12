document.addEventListener("DOMContentLoaded", function () {
    // Check if the user is logged in (you need to implement this part)

    // Dummy user data (replace this with data from your authentication system)
    const userData = {
        username: "JohnDoe",
        email: "john.doe@example.com",
        address: "123 Main St, Cityville"
        // Add more user data as needed
    };

    // Populate the profile information
    document.getElementById("username").innerText = userData.username;
    document.getElementById("email").innerText = userData.email;
    document.getElementById("address").innerText = userData.address;

    // Logout button functionality
    const logoutButton = document.getElementById("logout-btn");
    logoutButton.addEventListener("click", function () {
        // Implement logout functionality (clear session, redirect to login page, etc.)
        alert("Logout clicked. Implement logout functionality here.");
    });
});