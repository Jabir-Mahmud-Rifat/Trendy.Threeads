<?php
    include("..\Website\connection.php");
     session_start ();  
    // echo "Welcome  ". $_SESSION['username'] ;  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendy Threads | Shop</title>
    <link rel="icon" type="image/x-icon" href="..\Img\favicon.ico">

    <script src="https://kit.fontawesome.com/98e008cd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="..\css\shop_style.css">


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form id="paymentForm">
    <label for="paymentMethod">Select Payment Method:</label>
    <select id="paymentMethod" onchange="togglePaymentFields()">
        <option value="creditCard">Credit Card</option>
        <option value="bkash">bKash</option>
        <option value="nagad">Nagad</option>
    </select>

    <div id="creditCardFields">
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" placeholder="Enter card number" required>

        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" placeholder="MM/YY" required>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" placeholder="CVV" required>
    </div>

    <div id="bkashFields" style="display: none;">
        <!-- Add bKash-specific fields here -->
        <p>bKash specific fields go here.</p>
    </div>

    <div id="nagadFields" style="display: none;">
        <!-- Add Nagad-specific fields here -->
        <p>Nagad specific fields go here.</p>
    </div>

    <button type="button" onclick="processPayment()">Submit Payment</button>
</form>

<script>
    function togglePaymentFields() {
        var paymentMethod = document.getElementById("paymentMethod").value;
        var creditCardFields = document.getElementById("creditCardFields");
        var bkashFields = document.getElementById("bkashFields");
        var nagadFields = document.getElementById("nagadFields");

        creditCardFields.style.display = (paymentMethod === "creditCard") ? "block" : "none";
        bkashFields.style.display = (paymentMethod === "bkash") ? "block" : "none";
        nagadFields.style.display = (paymentMethod === "nagad") ? "block" : "none";
    }

    function processPayment() {
        // This is where you would typically send payment information to a server for processing.
        // Use the selected payment method to determine which fields to include in the request.
        alert("Payment processed successfully!");
        // You can redirect the user to a thank you page or perform other actions after successful payment.
    }
</script>

</body>
</html>

