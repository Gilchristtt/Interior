<?php
include "../settings/connection.php"; // Make sure the path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname']; // Ensure form field names are correctly referenced
    $lname = $_POST['lname'];
    $contact = $_POST['contact']; // Removed intval, consider validating as numeric instead
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retype_password = $_POST['Retype_Password'];
    $country = $_POST['client_country']; // Fixed missing underscore
    $city = $_POST['client_city']; // Fixed missing underscore

    if ($password != $retype_password) {
        header("Location: ../login/register.php?error=Difference in passwords");
        exit();
    }
  
    // Encrypt the password using password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection

    $my_query = "INSERT INTO clients (first_name, last_name, contact_number, email, password, country, city ) VALUES ('$fname', '$lname', '$contact', '$email', '$hashed_password', '$country', '$city')";
    $result = $conn->query($my_query);
    
    // $stmt = $conn->prepare("INSERT INTO clients (first_name, last_name, contact_number, email, password, country, city) VALUES (?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("sssssss", $fname, $lname, $contact, $email, $hashed_password, $country, $city);
    
    if ($result) {
        // Registration successful, redirect to login page
        header("Location: ../Interior/index.php?success = Sign Up Successful");
        exit();
    } else {
        // Display error on the register page
        header("Location: ../Interior/index.php?error= Sign Up Failed");
        exit();
    }
}

// Close the database connection
$conn->close();
?>