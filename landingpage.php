
<?php
require_once('connection.php');  // database connection

session_start() ; //  code for connecting next page
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Our Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Landing Page</h1>
      

        // Assuming you have a session variable containing the user's ID after login
        // Replace 'userID' with the actual session variable that holds the user's ID
        $userID = $_SESSION['username'];

        // Fetch user data from the database based on the user's ID
        $sql = "SELECT name, username, email FROM users WHERE id = $userID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the user
            $row = $result->fetch_assoc();
            echo "<p>Hello " . $row["name"] . " (Username: " . $row["username"] . ", Email: " . $row["email"] . "),</p>";
            echo "<p>Thank you for signing up with us. We're excited to have you on board!</p>";
        } else {
            echo "User not found";
        }

        // Close the database connection
        $conn->close();
    
    </div>
</body>
</html>

?>
