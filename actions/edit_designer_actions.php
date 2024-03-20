<?php
// edit_portfolio_actions.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../settings/connection.php');

session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Portfolioid']) && isset($_POST['edit'])) {
    // Retrieve form data
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $portfolio_desc = $_POST["portfolioDescription"];
    $yoe = $_POST["yearsOfExperience"];
    $speciality = $_POST["speciality"];
    $ed_and_ce = $_POST["educationAndCertifications"];
    $link_to_projects = $_POST["linkToProjects"];
    $awards = $_POST["awardsAndRecognition"];
    $testimonials = $_POST["testimonials"];
    // Designer ID to identify the designer to be updated
    $Portfolioid = $_POST["Portfolioid"];


    // Update the database with the new values
    $query = "UPDATE designer_portfolio SET FirstName=?, LastName=?, PortfolioDescription=?, YearsOfExperience=?, Speciality=?, EducationAndCertifications=?, LinkToProjects=?, AwardsAndRecognition=?, Testimonials=?, designer_image=? WHERE Portfolioid=?";
    $stmt = $conn->prepare($query);
    
    // Process image upload if provided
    if ($_FILES['image']['size'] > 0) {
        // Process image upload
        $target_dir = "../img/uploads";
        $file = $_FILES["image"];
        $fileName = $file["name"];
        $fileTmpName = $file["tmp_name"];
        $newImageName = time() . '-' . $fileName; // Generating new image name
        $target_file = $target_dir . $newImageName;
        
        // Move uploaded file to designated directory
        if (move_uploaded_file($fileTmpName, $target_file)) {
            // Image uploaded successfully, continue with the database update
            $stmt->bind_param("ssssssssssi", $fname, $lname, $portfolio_desc, $yoe, $speciality,$ed_and_ce,$link_to_projects,$awards,$testimonials,$target_file,$Portfolioid);
            $stmt->execute();
            // Check if the query was successful
            
            if ($stmt) {
                $_SESSION['success'] = "Update Successful";
                header('Location: ../admin/manage_portfolio.php');
                // Redirect to the manage chore page
            }
    
        } 
    // Close the statement
    $stmt->close();
        }}
?>
