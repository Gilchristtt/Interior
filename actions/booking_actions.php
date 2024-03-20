<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../settings/connection.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting and sanitizing input data
    $projectType = $conn->real_escape_string($_POST['project_type']);
    $projectScope = $conn->real_escape_string($_POST['project_scope']);
    $budget = intval($_POST['budget']);
    $timeline = $conn->real_escape_string($_POST['timeline']);
    $consultationDate = $conn->real_escape_string($_POST['consultation_date']);
    $consultationTime = $conn->real_escape_string($_POST['consultation_time']);
    $existingFurniture = $conn->real_escape_string($_POST['existing_furniture']);
    $specificRequests = $conn->real_escape_string($_POST['specific_requests']);

    
    // Assume file uploads are optional
    // Handle file upload
    $filePaths = ''; // Initialize as empty string, you may want to process and store files differently

    session_start();

    $client_id = $_SESSION['client_id'];


    // Example file processing
    if (!empty($_FILES['uploads']['name'][0])) {
       
        $uploadDir = '../uploads/'; // Ensure this directory exists and is writable
        foreach ($_FILES['uploads']['tmp_name'] as $key => $tmpName) {
            // Generate a unique file name to prevent overwriting and potential security issues
            $newFileName = $uploadDir . uniqid() . '-' . $_FILES['uploads']['name'][$key];
            if (move_uploaded_file($tmpName, $newFileName)) {
                $filePaths .= $newFileName . ';'; // Separate file paths with semicolon
            } else {
                // Handle upload error
                echo "Error uploading file " . $_FILES['uploads']['name'][$key];
                exit;
            }
        }

    }
   

   
//     // Assuming all variables are sanitized and safe to use in the query
    $myquery = "INSERT INTO booking (project_type, project_scope, budget, timeline, consultation_date, consultation_time, existing_furniture, specific_requests, client_id, filepaths) VALUES ('$projectType', '$projectScope', $budget, '$timeline', '$consultationDate', '$consultationTime', '$existingFurniture', '$specificRequests','$client_id','$filePaths')";
    if ($conn->query($myquery) === TRUE) {
            
        //Booking successful
        $sql = "SELECT * FROM booking ORDER BY booking_id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
       $bookingId = mysqli_fetch_assoc($result)['booking_id'];
        header("Location: ../view/confirmationpage.php?bookingid=$bookingId");
        exit();
           
    } else {
        // Booking failed
        header("Location: ../view/booking/booking.php?error=Booking failed");
        exit();
    }
}
 else {
    // Redirect back to booking form if not a POST request
    header("Location: ../view/booking/booking.php");
    exit();
}

// // Close the database connection
// $conn->close();
?>
