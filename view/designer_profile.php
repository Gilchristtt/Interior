<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hues Haven Designer Profile | Virtual Portfolio</title>
    <!-- <link rel="stylesheet" href="../Interior/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/designer_profile.css">
    <link rel="stylesheet" href="../Interior/assets/css/style_profile.css">


<body>
</head>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> <!-- Use container-fluid to span full width -->
    <div class="navbar-header">
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="page-scroll" href="../Interior/index.php">ABOUT US</a></li>
        <li><a class="page-scroll" href="../Interior/index.php">Projects</a></li>
        <li><a class="page-scroll" href="../view/services1/services.html">Services</a></li>
        <li><a class="page-scroll" style="background:none" href="../login/login.php">Book Us</a></li>
        <li><a class="page-scroll" style="background:none" href="../actions/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<header style="text-align: center; padding: 80px 0 20px; background: rgba(255, 255, 255, 0.8); margin-bottom: 30px;">
    <h1>Hues Haven Designers</h1>
    <a href="../login/login.php" class="book-now-btn">Book Now</a>
</header>
    <div class="designers-container">
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include "../settings/connection.php"; 
    
    $select_query = "SELECT * FROM designer_portfolio";
    $result_query = mysqli_query($conn, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $fname = $row["FirstName"];
        $lname = $row["LastName"];
        $portfolio_desc = $row["PortfolioDescription"];
        $yoe = $row["YearsOfExperience"];
        $speciality = $row["Speciality"];
        $ed_and_ce = $row["EducationAndCertifications"];
        $link_to_projects = $row["LinkToProjects"];
        $awards = $row["AwardsAndRecognition"];
        $testimonials = $row["Testimonials"];
        $portfolioid = $row["Portfolioid"];
        $designer_image = $row["designer_image"];
        echo "   <!-- Designer Item 1 -->
        <div class='designer-item'>
            <div class='designer-inner'>
                <!-- Front Side -->
                <div class='designer-front'>
                    <img src='../img/uploads/$designer_image' alt='Profile Picture of $fname' class='profile-picture'>
                    <h2> $fname $lname</h2>
                    <button class='flip-btn'>More Info</button>
                </div>
                <!-- Back Side -->
                <div class='designer-back'>
                    <h3>$fname $lname</h3>
                    <p class='biography'> $portfolio_desc</p>
                    <p class='experience'>Years of Experience:$yoe years </p>
                    <p class='specialty'>Specialty:  $speciality </p>
                    <div class='more-info'>
                        <h4>Education & Certifications</h4>
                        <ul>
                            <li>$ed_and_ce</li>
                        </ul>
                        <h4>Previous Work</h4>
                        <a href='$link_to_projects'>Projects</a>
                        <h4>Awards & Recognition</h4>
                        <p> $awards</p>
                        <h4>Testimonials</h4>
                        <blockquote> $testimonials</blockquote>
                        <h4>Socials</h4>
                        <a href='https://www.linkedin.com/in/adildawood'>LinkedIn</a>
                        <a href='https://www.instagram.com/adildawood'>Instagram</a>
                        <h4>In The Press</h4>
                        <a href='https://www.interiordesignmagazine.com/adildawood-feature'>'Innovative Residential Designs by Adil Dawood' - Interior Design Magazine</a>
                        <button class='flip-btn'>Back</button>
                    </div>
                </div>
            </div>
            </div>";
    }
    ?>
       
 
        
    </div>
    <script>
      document.querySelectorAll('.flip-btn').forEach(button => {
    button.addEventListener('click', function() {
        var designerInner = this.closest('.designer-inner');
        // Toggle the flip class instead of directly manipulating the style
        designerInner.classList.toggle('flip');
    });
});

    </script>
</body>
</html>

