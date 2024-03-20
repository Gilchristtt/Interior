<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Designer Portfolio</title>
    <link rel="stylesheet" href="../interior/assets/css/add_designer.css">
</head>
<body>
<form action="../actions/add_designer_actions.php" method="POST" enctype="multipart/form-data">
    <label for="firstName"><strong>First Name:</strong></label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName"><strong>Last Name:</strong></label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="portfolioDescription"><strong>Portfolio Description:</strong></label>
    <textarea id="portfolioDescription" name="portfolioDescription" required></textarea>

    <label for="yearsOfExperience"><strong>Years of Experience:</strong></label>
    <input type="number" id="yearsOfExperience" name="yearsOfExperience" required>

    <label for="speciality"><strong>Speciality:</strong></label>
    <input type="text" id="speciality" name="speciality" required>

    <label for="educationAndCertifications"><strong>Education and Certifications:</strong></label>
    <textarea id="educationAndCertifications" name="educationAndCertifications" required></textarea>

    <label for="linkToProjects"><strong>Link to Projects:</strong></label>
    <input type="text" id="linkToProjects" name="linkToProjects" required>

    <label for="awardsAndRecognition"><strong>Awards and Recognition:</strong></label>
    <textarea id="awardsAndRecognition" name="awardsAndRecognition" required></textarea>

    <label for="testimonials"><strong>Testimonials:</strong></label>
    <textarea id="testimonials" name="testimonials" required></textarea>

    <label for="designerImage"><strong>Designer Image:</strong></label>
    <input type="file" id="designerImage" name="image" accept="image/*" required>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

</body>
</html>
