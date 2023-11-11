<?php

include("..\Website\connection.php");
 session_start ();  
// echo "Welcome  ". $_SESSION['username'] ;  

$search_term = $_GET['search_term'];
$sql = "SELECT * FROM products
WHERE product_name LIKE '%$search_term%'
OR product_description LIKE '%$search_term%';";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row

    
  while($row = $result->fetch_assoc()) {
      echo "Product Name: " . $row["product_name"] . "<br>";
      echo "Product Description: " . $row["product_description"] . "<br>";
      echo "Product Price: $" . $row["product_price"] . "<br>";
      echo "<br>";
    }
  } else {
    echo "0 results";
  }

$conn->close();
?>