<?php
session_start();

include "../settings/connection.php"; // Adjust the path as necessary

if (!isset($_GET['bookingid'])){
    header("Location: ../login/login.php");
    exit();
}
else{
    $bookingid = $_GET['bookingid'];
    //  $sql = "SELECT * FROM booking ORDER BY booking_id DESC LIMIT 1";
    //     $result = mysqli_query($conn, $sql);
    //    $bookingId = mysqli_fetch_assoc($result);

    $stmt = $conn->prepare("SELECT * FROM booking WHERE booking_id = ?");
	$stmt->bind_param("i", $bookingid);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	$conn->close();
	$booking = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking Confirmation - Hues Haven</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
  }
  .navbar {
    display: flex;
    justify-content: space-between;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1rem;
  }
  .logo {
    font-size: 1.5rem;
    color: #5d5d5d;
    text-decoration: none;
  }
  .confirmation-container {
    max-width: 800px;
    margin: 2rem auto;
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  .confirmation-header {
    font-size: 2rem;
    color: #4a90e2;
  }
  .confirmation-details {
    text-align: left;
    margin-top: 2rem;
  }
  .confirmation-details p {
    line-height: 1.6;
    color: #666;
  }
  .footer {
    text-align: center;
    padding: 1rem;
    background-color: #ffffff;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
  }
  .footer p {
    margin: 0;
    font-size: 0.9rem;
    color: #888;
  }
</style>
</head>
<body>

<div class="navbar">
  <a href="#" class="logo">Hues Haven</a>
  <nav>
    <a href="../Interior/index.php">Home</a> |
    <a href="#">Projects</a> |
    <a href="#">Contact</a>
  </nav>
</div>

<div class="confirmation-container">
  <h1 class="confirmation-header">Booking Confirmed!</h1>
  <div class="confirmation-details">
    <p>Thank you for booking a design session with us. Here are the details of your upcoming consultation:</p>
    <p><strong>Project Type:</strong> <?= $booking['project_type'] ?></p>
    <p><strong>Consultation Date:</strong> <?= $booking['consultation_date'] ?></p>
    <p><strong>Consultation Time:</strong> <?= $booking['consultation_time'] ?></p>
    <p><strong>Budget($):</strong> <?= $booking['budget'] ?></p>
    <p>We will reach out to you shortly with more information. If you have any questions in the meantime, please feel free to contact us.</p>
  </div>
</div>

<div class="footer">
  <p>&copy; 2024 Hues Haven. All rights reserved.</p>
  <p>Follow us on <a href="#">Instagram</a>, <a href="#">Facebook</a>, and <a href="#">Twitter</a>.</p>
</div>

<script>
  // Here you could add some JavaScript if needed, for example:
  // - Countdown timer until the consultation
  // - A dynamic greeting based on the time of day
  // - etc.
</script>

</body>
</html>
