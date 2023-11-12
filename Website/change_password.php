<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['message' => 'User not logged in']);
    exit();
}

// Include the database connection file
include("..\Website\connection.php");

$user_id = $_SESSION['user_id'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

// Validate current password (you may want to use password_hash() in a real-world scenario)
$query = "SELECT * FROM users WHERE id = $user_id AND password = '$current_password'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    // Update the password
    $update_query = "UPDATE users SET password = '$new_password' WHERE id = $user_id";
    $update_result = mysqli_query($conn, $update_query);

    if (!$update_result) {
        die("Update query failed: " . mysqli_error($conn));
    }

    echo json_encode(['message' => 'Password changed successfully']);
} else {
    echo json_encode(['message' => 'Incorrect current password']);
}

// Close the database connection
mysqli_close($conn);
?>
