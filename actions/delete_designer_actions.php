<?php
require_once('../settings/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cid'])) {
    $cid = $_POST['cid'];

    // Prepare and execute the delete query
    $query = "DELETE FROM designer_portfolio WHERE Portfolioid = ?";
    $stmt = $conn->prepare($query);
    
    if ($stmt) {
        $stmt->bind_param('i', $cid);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Chore was deleted successfully
            $_SESSION['message'] = "Designer deleted successfully.";
        } else {
            // There was an error deleting the chore
            $_SESSION['error'] = "Error deleting Designer";
        }
        $stmt->close();
    } else {
        // Handle the situation when the statement could not be prepared
        $_SESSION['error'] = "Error preparing the statement to delete chore.";
    }

    // Redirect back to the manage chores page
    header('Location: ../admin/manage_portfolio.php');
    exit;
} else {
    // Handle invalid request
    $_SESSION['error'] = "Invalid request.";
    echo "Invalid";
     header('Location: ../admin/adminpanel.php');
    exit;
}
?>

