<?php
// Assume $user_role is set after user login with the role of the user

// // Check if the user is an admin
// $is_admin = ($user_role > 1);

// // Function to add "Admin Panel" link to navbar if the user is an admin
// function displayAdminPanelLink($is_admin) {
//     if ($is_admin) {
//         echo '<li><a class="page-scroll" href="../admin_panel.php">Admin Panel</a></li>';
//     }
// }
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>Hues &amp; Haven</title>
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
<!--css-->
<link href="assets/css/all-css.css" rel="stylesheet" type="text/css">
<link href="assets/css/set1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="services.css">
<!--css-->
</head>
<body id="page-top">
<div id="preloader"></div>
<!--navbar-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="page-scroll" href="#about">ABOUT US</a></li>
        <li><a class="page-scroll" href="#Projects">Projects</a></li>
        <li> <a class="page-scroll" href="../view/services1/services.html">Services</a></li>
        <li> <a class="page-scroll" href="../view/designer_profile.php">Designers Profile</a></li>
        <li><a class="page-scroll" style="background:none" href="#contact">Book Us</a></li>
        <li><a class="page-scroll" style="background:none" href="../actions/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->
<!--SLIDER-->
<header id="myCarousel" class="carousel slide ">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading" class="wow slideInDown"> Hues <span>Haven</span> </h1>
      <br>
      <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">We are Hues Haves, and we are here to transform your space into a reflection of your personal style and aspirations. As interior design visionaries, we specialize in creating environments that not only embody aesthetic beauty but also function seamlessly with your lifestyle.  </p>
      <a href="#about" class="btn btn-primary btn-xl page-scroll wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">Find Out More</a> </div>
  </div>
  <div class="carousel-inner carousel-fade">
    <div class="item active">
      <!-- Set the first background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design.jpg');"></div>
    </div>
    <div class="item">
      <!-- Set the second background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design-2.jpg');"></div>
    </div>
    <div class="item">
      <!-- Set the third background image using inline CSS below. -->
      <div class="fill" style="background-image:url('assets/img/interior-design-3.jpg');"></div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </header>
<!--SLIDER-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Residential Design</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>We provide bespoke residential interior design services that turn your house into a home. Tailored to your personal style and functional needs, our designs offer a sanctuary of comfort and elegance. From cozy apartments to expansive estates, we ensure every room reflects your individuality while maximizing space, light, and flow. Our commitment to detail transforms living spaces into personalized retreats where every corner is curated to your taste and lifestyle </p>
            <p>We provide bespoke residential interior design services that turn your house into a home. Tailored to your personal style and functional needs, our designs offer a sanctuary of comfort and elegance.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Office Design</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>We specialize in crafting dynamic office spaces that foster creativity, productivity, and wellbeing. Our office design solutions are rooted in the latest ergonomic research and tailored to reflect your company's brand and culture. From startups to corporate headquarters, we create environments that promote efficiency and collaboration, ensuring your workspace is not only functional but also a powerful tool in attracting and retaining top talent. </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Commercial Design</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Our commercial design expertise extends to creating captivating spaces that resonate with your clientele and enhance their customer experience. Whether it's a boutique, restaurant, or any other retail environment, we deliver innovative designs that capture the essence of your brand, encourage customer engagement, and increase foot traffic. We focus on creating inviting atmospheres that speak to the hearts of your customers, making every visit memorable. </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Project Sankofa </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7   text-center"><img src="assets/img/demo-img2.jpg"  alt="" title="" class="img-responsive"></div>
          <div class="col-md-5">
            <p>Project Sankofa, a kitchen remodeling project, was successfully executed by Nelz Decor, transforming an empty space into a culinary haven in East Legon Hills. The project involved a comprehensive overhaul, enhancing both functionality and aesthetics. Situated amidst the tranquil surroundings of East Legon Hills, the project benefited from its serene environment. With meticulous attention to detail and a dedication to excellence, Nelz Decor executed the design, bringing the client's vision to life with precision and creativity.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hospitaly Design </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p> </p>
            <p></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<main>
  <!--about-us-->
  <section class="what-we" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" >
          <h2 class="wow fadeInDown"> What We Do</h2>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay=".5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-1.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Residential Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Residential Design</h6>
                  <p> We provide bespoke residential interior design services that turn your house into a home. Tailored to your personal style and functional needs, our designs offer a sanctuary of comfort and elegance.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay="1s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-2.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Office Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Office Design</h6>
                  <p> We specialize in crafting dynamic office spaces that foster creativity, productivity, and wellbeing. Our office design solutions are rooted in the latest ergonomic research and tailored to reflect your company's brand and culture.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft div-n2"  data-wow-delay="1.5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-3.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Commercial Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Commercial Design</h6>
                  <p> Our commercial design expertise extends to creating captivating spaces that resonate with your clientele and enhance their customer experience. Whether it's a boutique, restaurant, or any other retail environment, we deliver innovative designs that capture the essence of your brand, encourage customer engagement, and increase foot traffic. </p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal3">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about-us-->
  <!--Projects-->
  <h2 class ="projects">PROJECTS</h2>
    <section class="no-padding" id="Projects">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6 wow fadeIn" >
            <div class="grid">
              <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/1.jpg" alt="" title="" />
                <figcaption>
                  <h2> Project Sankofa</h2>
                  <p>From an empty space to a gourmet utopia :Kitchen makeover.<br>
                    Project Scope: Kitchen Remodelling
                    <br>
                    Project Location: East Legon Hills
                    <br>
                    Designed & Executed By: Nelz Decor.
                  </p>
                  <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeIn" >
            <div class="grid">
              <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/2.jpg" alt="" title="" />
                <figcaption>
                  <h2> Project Adjaye</h2>
                  <p>
                    Living space interior renovation executed to elevate the overall quality and design aesthetics. 
                    <br>
                    Project Scope: living room renovation
                    <br>
                    Project Location: Borteyman
                    <br>
                    Designed & Executed By: Yak Decor.
                  </p>
                  <a data-toggle="modal" data-target="#myModal4"> View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6  wow fadeIn" >
            <div class="grid">
              <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/3.jpg" alt="" title="" />
                <figcaption>
                  <h2> Project Boakye</h2>
                  <p>
                    Living space interior renovation executed to elevate the overall quality and design aesthetics. 
                    <br>
                    Project Scope: living room renovation
                    <br>
                    Project Location: Airport Hills
                    <br>
                    Designed & Executed By: Avond Interiors.
                  <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6  wow fadeIn">
            <div class="grid">
              <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/4.jpg" alt="" title="" />
                <figcaption>
                  <h2> Project Ahenkan</h2>
                  <p>Contemporary Bathroom vanity unit.
                    Project Scope: living room renovation
                    <br>
                    Project Location: Dansoman
                    <br>
                    Designed & Executed By:Purple Square Interior.
                  </p>
                  <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6  wow fadeIn">
            <div class="grid">
              <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/5.jpg" alt="" title="" />
                <figcaption>
                  <h2> Project Jewel </h2>
                  <p>Turning blank spaces into extraordinary sanctuaries. 'Jewel' is where comfort and style intertwine seamlessly.
                    Project Scope: Bedroom renovation
                    <br>
                    Project Location: Spintex 
                    <br>
                    Designed & Executed By: Decor_Ghana.
                  </p>
                  <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6  wow fadeIn">
            <div class="grid">
              <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/6.jpg" alt="" title="" />
                <figcaption>
                  <h2> Project Tenkorang</h2>
                  <p>
                    Project Scope: Bedroom renovation
                    <br>
                    Project Location: Spintex 
                    <br>
                    Designed & Executed By: Decor_Ghana.
                  
                  </p>
                  <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Projects-->
  
  <!--contact-->
  <section id="contact" class="contact-us">
    <div class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-10 col-center">
            <h2 class="wow fadeInDown"> Book Us</h2>
            <p class="wow fadeInDown">Book us if you are looking for the most recent and fresh designs </p>
          </div>
        </div>
        <div class="contact-form" >
          <div class="row">
            <div class="col-sm-6 wow fadeIn">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row">
                  <div class="col-sm-6">
                  
                <div>
                  <a href="../login/login.php " class="submit-bt2">Book Now</a>
                </div>
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact-->
</main>
<!--main-->
<footer>
  <!--footer-div-->
  <div class="footer">
    <div class="container">
      <div class="col-md-4  col-sm-4 footer-c text-right">
        <div class="social-icons"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-twitter fa-lg"></i></a><a href="#"><i class="fa fa-rss fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href="#"><i class="fa fa-skype fa-lg"></i></a><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></div>
      </div>
    </div>
  </div>
  <!--footer-div-->
</footer>
<!-- jQuery -->
<script  src="assets/js/jquery-2.2.4.js"></script>
<script  src="assets/js/scrolltopcontrol.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/creative.min.js"></script>
<script src="scripts.js"></script>
<!-- jQuery -->
</body>


</html>
