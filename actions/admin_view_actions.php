<?php
include "../settings/connection.php"; 

// Fetch all booking information
$query = "SELECT booking_id, project_type, consultation_date, consultation_time, client_id FROM booking ORDER BY consultation_date, consultation_time ASC";
$result = $conn->query($query);

// Buffer the output to a variable
ob_start();
include 'admin_template.html'; // Ensure the path to the template is correct
$template = ob_get_clean();

// Placeholder for booking rows
$bookingRowsPlaceholder = '<!-- Booking Rows will go here -->';

// Prepare booking rows content
$bookingRowsContent = '';

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $bookingRowsContent .= "<tr>";
        $bookingRowsContent .= "<td>" . htmlspecialchars($row["booking_id"]) . "</td>";
        $bookingRowsContent .= "<td>" . htmlspecialchars($row["project_type"]) . "</td>";
        $bookingRowsContent .= "<td>" . htmlspecialchars($row["consultation_date"]) . "</td>";
        $bookingRowsContent .= "<td>" . htmlspecialchars($row["consultation_time"]) . "</td>";
        $bookingRowsContent .= "<td>" . htmlspecialchars($row["client_id"]) . "</td>";
        $bookingRowsContent .= "</tr>";
    }
} else {
    $bookingRowsContent = "<tr><td colspan='5'>No bookings found</td></tr>";
}

// Insert booking rows into template
$template = str_replace($bookingRowsPlaceholder, $bookingRowsContent, $template);

// Output the final template
echo $template;

$conn->close();
?>
