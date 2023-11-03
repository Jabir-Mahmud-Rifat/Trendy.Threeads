<?php

require_once('..\Website\connection.php');

//code for connecting next page
session_start ();

  /*  // Database connection
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);*/

  // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get the search keyword from the GET parameter
    $search = $_GET['search'];
    
    // Prepare the SQL query
    $sql = "SELECT * FROM products WHERE product_name LIKE '%$search%'";
    
    // Execute the query and get the results
    $result = $conn->query($sql);
    
    // Display the search results
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["product_id"]. " - Product Name: " . $row["product_name"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>