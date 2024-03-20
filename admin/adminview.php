
<!-- admin_template.html -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Bookings</title>
<link rel="stylesheet" href="../css/admin-style.css">
</head>
<body>

<h1 style="text-align: center;">Admin Dashboard - Bookings Overview</h1>
<div class="admin-container">
        <nav id="sidebar">
            <button onclick="window.location.href='..//admin/adminview.php'">Bookings</button>
            <button onclick="window.location.href='..//admin/manage_portfolio.php'">Manage Designer</button>
            <button onclick="window.location.href='..//view/add_designer.php'">Add Designers</button>
            <button onclick="window.location.href='..//actions/logout.php'">Log out</button>
        </nav>
<table class="admin-table">
<?php
    session_start();

    // Check if 'success' key is set in the session and not empty
    if (isset($_SESSION['success']) && $_SESSION['success']){
        $message = $_SESSION['success'];
        echo $message; // Or handle the message however you need to
        $_SESSION['success'] = ''; // Clear the message if needed
    }
?>

  <tr>
    <th>Booking ID</th>
    <th>Project Type</th>
    <th>Consultation Date</th>
    <th>Consultation Time</th>
    <th>Client ID</th>
  </tr>
  <tbody>
                <?php
                require_once('../settings/connection.php');
                
                $query = "SELECT booking_id,project_type,consultation_date, consultation_time,client_id FROM booking;";
                $result = $conn->query($query);
               
                if ($result->num_rows > 0) {
                    // Fetch and display each row of results
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <tr>
                            <td><?php echo htmlspecialchars($row['booking_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['project_type']); ?></td>
                            <td><?php echo htmlspecialchars($row['consultation_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['consultation_time']); ?></td>
                            <td><?php echo htmlspecialchars($row['client_id']); ?></td>        
                             
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="2">No bookings found</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
  <!-- Booking Rows will go here -->

</table>

</body>
</html>
