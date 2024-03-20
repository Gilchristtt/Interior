<?php
include "../settings/connection.php"; 
include "../functions/select_role.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
	
    $stmt = $conn->prepare("SELECT user_role, first_name, `password` FROM clients WHERE email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->store_result(); // Store the result for later use
	$stmt->bind_result($user_role, $fname, $hashed_password);
	$stmt->fetch();
	
	if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
		session_start();
		$_SESSION['username'] = $fname;
		$_SESSION['user_role'] = $user_role;
		$conn->close();
		echo json_encode(array("success" => true,  "user_role"=> $user_role)); // Return success response
		
	} else {
		$conn->close();
		echo json_encode(array("success" => false, "message" => "Invalid credentials")); // Return error response
	}
}
?>
