<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Your Design Session - Hues Haven</title>
  <link rel="stylesheet" href="style.css"> 
</head>

<body>
<form action="../../actions/booking_actions.php" method="POST" id="booking-form">
  <h2>Book Your Design Session with Hues Haven</h2>
  <h5 style="display: flex; justify-content: center;">To streamline our scheduling and ensure the best service for everyone, <br> we kindly request that all bookings be made on the hour or half-hour (e.g., 13:00 or 13:30)</h5>

  <!-- Project Details -->
  <fieldset>
    <legend>Project Details</legend>
    <label for="project_type">Project Type:</label>
    <select id="project_type" name="project_type">
      <option value="full_renovation">Full Renovation</option>
      <option value="specific_room">Specific Room</option>
      <option value="consultation">Consultation</option>
    </select>
    
    <label for="project_scope">Project Scope:</label>
    <textarea id="project_scope" name="project_scope" required></textarea>
    
    <label for="budget">Budget($):</label>
    <input type="number" id="budget" name="budget" required>
    
    <label for="timeline">Timeline:</label>
    <input type="text" id="timeline" name="timeline" required>
  </fieldset>
  
  <!-- Consultation Scheduling -->
  <fieldset>
    <legend>Consultation Scheduling</legend>
    <label for="consultation_date">Consultation Date:</label>
    <input type="date" id="consultation_date" name="consultation_date" required>
    
    <label for="consultation_time">Consultation Time:</label>
    <input type="time" id="consultation_time" name="consultation_time" required>
  </fieldset>
  
  <!-- Additional Information -->
  <fieldset>
    <label for="existing_furniture">Existing Furniture:</label>
    <select id="existing_furniture" name="existing_furniture">
      <option value="keep">Keep Existing</option>
      <option value="replace">Replace All</option>
      <option value="mix">Mix of Both</option>
    </select>
    
    <label for="specific_requests">Preferred Designer:</label>
    <select id="specific_designer" name="specific_designer">
        <?php
        // Include the file that establishes the database connection
        include "../../settings/connection.php";

        // Query to fetch designers from the database
        $sql = "SELECT Portfolioid, FirstName, LastName FROM designer_portfolio";
        $results = $conn->query($sql);

        // Check if query was successful
        if ($results->num_rows > 0) {
            // Output data of each row
            while($row = $results->fetch_assoc()) {
                echo "<option value='" . $row['Portfolioid'] . "'>" . $row['FirstName'] . " " . $row['LastName'] . "</option>";
            }
        } else {
            echo "<option value=''>No designers available</option>";
        }
        ?>
    </select>
  </fieldset>
  
  <!-- Optional -->
  <fieldset>
    <!-- <legend>Optional</legend>
    <label for="uploads">Upload Photos or Floor Plans:</label>
    <input type="file" id="uploads" name="uploads[]" multiple> -->
    
    <!-- Submission Button -->
    <button type="submit" name= "submit" class="submit-btn">Book Now</button>
  </fieldset>
</form>
</body>
</html>
