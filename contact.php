<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rare Hyssop School - Contact</title>
    <link rel="icon" type="image/ico" href="assets/favicon_io/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="dist/css/lightboxgallery-min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        die("All fields are required.");
    }

    $to = "rarehyssopschools@gmail.com";
    $email_subject = !empty($subject) ? $subject : "New Contact Form Submission";
    $email_body = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Message: $message
    ";
    $headers = "From: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        $response= echo "Message sent successfully!";
    } else {
       $response= echo "Failed to send message. Please try again.";
    }
} else {
   $response = echo "Invalid request method.";
}
?>




<body>
    <!-- Start Header -->
    <header>
        <!-- Start Header Top -->
        <div class="header-top dark_2_bg">
            <div class="header-top-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="header-top-content"> -->
                            <div class="contact-info">
                                <ul>
                                    <!-- <li><i class="fas fa-map-marker-alt"></i> 7, Rock Word road, Elelenwo, Port Harcourt, Rivers State-Nigeria.</li> -->
                                    <li><i class="fas fa-mobile-alt"></i> 09063645423 </li>
                                    <a href="mailto:rarehyssopschools@gmail.com.com"><li><i class="fas fa-envelope"></i> rarehyssopschools@gmail.com</li></a>
                                    <li class="header-button">
                                        <a href="eschool-ng.com/login.php" class="button_two_plane">e-School Login</a>
                                    </li>
                                </ul>
                                
                            </div>
                            <!-- <div class="header-button">
                                <a href="apply_form.html" class="button_two_plane">Apply Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
        <div class="main-menu-area py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu-2">
                            <nav class="navbar navbar-expand-lg">
                                <div class="mobile_site_logo">
                                    <a href="index.html"><img src="assets/images/logo.png" alt="logo" class="img-fluid" style="height:80px; width:60px;"></a>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Contact</a>
                                        </li>
                                        <!-- <div class="header-button">
                                            <a href="eschool-ng.com/login.php" class="button_two_plane">e-School Login</a>
                                        </div> -->
                                        <!-- <li class="nav-item">
                                            <a href="#search_modal" data-toggle="modal" data-target="#search_modal" class="nav-link"><i class="fa fa-search"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="jumbotron jumbotron-fluid about-jumbotron jumbotron-bg" style="background-image: url(assets/images/ban03.png);background-position: center; background-size: cover;">
        <div class="container">
          <h1 class="display-4">Contact Us</h1>
         <!--<p class="lead">Hhis is a modified jumbotron that occupies the entire horizontal space of its parent.</p>--> 
        </div>
    </div>
      <!--End of Jumbotron-->   
    
    
    
    <!-- Start Page Wrapper-->
    <div class="page-wrapper section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-3d-5" data-aos="fade-up">
                    <div class="main-content">
                        <div class="contact-from-wrapper-2">
                            <h2 class="section-heading" id="contact">Get In Touch</h2>
                            <?php
							echo @$response;
							?>
                            <form action="contact.php" method="post" class="contact-form mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="subject" class="form-control" placeholder="Enter Subject" id="subject" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mx-auto text-center">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="highlights-section hover_bg text-white p-4">
                        <h4>Don’t Hesitate to contact with us for any kind of information</h4>
                        <ul>
                            <!-- <li><i class="fas fa-paper-plane"></i> 7, Rock Word road, Elelenwo, Port Harcourt, Rivers State-Nigeria.</li> -->
                            <li><i class="fas fa-mobile-alt"></i> +2349063645423</li>
                            <li><a href="mailto:rarehyssopschools@gmail.com"> <i class="fas fa-envelope"></i> rarehyssopschools@gmail.com</a></li>
                        </ul>
                        <!-- <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100083103287673"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area section-ptb-3" data-aos="fade-up"> 
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="embeded-map-area">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.5954597940436!2d7.065518114168338!3d4.839312241788976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd6bbb841759%3A0xf98f46fb1f5b5661!2sRock%20Word%20Dr%2C%20Elelenwo%20500102%2C%20Rumurolu!5e0!3m2!1sen!2sng!4v1660302573810!5m2!1sen!2sng" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div> -->
    </div>
        <!-- Start Footer -->
        <footer data-aos="fade-up" data-delay="400">
            <div class="footer-area dark_2_bg">
                <div class="footer-bottom-wrapper border-top py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 footer-container">
                                <div class="col-md-3">
                                    <div class="mobile_site_logo">
                                        <a href="index.html"><img src="assets/images/footlog.png" alt="logo" class="img-fluid footer" style="width: 30%;"></a>
                                    </div>
                                    <p>
                                        Our vision is to empower students to acquire, demonstrate, and value knowledge and skills that will support them, as life-long learners, to participate in and contribute to the global world and practise the core values of the school: respect, tolerance & inclusion, and excellence.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <div class="contact-container">
                                        <h4>Contact Info</h4>
                                            <ul>
                                                <!-- <li><i class="fas fa-map-marker-alt"></i> 7, Rock Word road, Elelenwo, Port Harcourt, Rivers State-Nigeria.</li> -->
                                                <li><i class="fas fa-mobile-alt"></i> +2349063645423 </li>
                                                <a href="mailto:rarehyssopschools@gmail.com"><li><i class="fas fa-envelope"></i> rarehyssopschools@gmail.com</li></a>
                                            </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="contact-container">
                                        <h4>Useful Links</h4>
                                        <a class="nav-link" href="index.html">Home</a>
                                        <a class="nav-link" href="about.html">About Us</a>
                                        <a class="nav-link" href="contact.html">Contact Us</a>
                                    </div>
                                </div>  
                                <!-- <div class="social-accounts-2 col-md-3">
                                    <h6>Follow us on our social media handles</h6>
                                    <ul>
                                        <li><a href="https://www.facebook.com/profile.php?id=100083103287673"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div> -->
    
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="copyright-text">
                                <p>Rare Hyssop School (2024). All Rights Reserved.</p>
                                <p>Developed by <a href="https://akisolutions.com.ng/" style="color:yellow">Aki Solutions</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-top option-2">
                <div class="scroll-icon">
                    <i class="fa fa-angle-up"></i>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <script src="assets/js/jquery-3.4.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.matchHeight-min.js"></script>
        <script src="assets/js/bootnavbar.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="dist/js/lightboxgallery-min.js"></script>
        <script type="text/javascript">
        jQuery(function($) {
          $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
            event.preventDefault();
            $(this).lightboxgallery({
              showCounter: true,
              showTitle: true,
              showDescription: true
            });
          });
        });
        </script>
    </body>
    
    </html>