<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize user inputs to prevent email injection
    $name = htmlspecialchars($_POST["contact_name"]);
    $email = htmlspecialchars($_POST["contact_email"]);
    $mobile = htmlspecialchars($_POST["contact_mobile"]);
    $message = htmlspecialchars($_POST["contact_msg"]);

    // Set the recipient email address
    $to = "contact@naveenassociates.in"; // Replace with the actual recipient's email address

    // Set the email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email body
    $body = '<html><body>';
    $body .= "<p><strong>Name:</strong> ". $name. "</p>";
    $body .= "<p><strong>Email:</strong> ". $email. "</p>";
    $body .= "<p><strong>Mobile:</strong> ". $mobile. "</p>";
    $body .= "<p><strong>Message:</strong> ". $message. "</p>";
    $body .= "<p style='font-size:8px;'>Please note that this email is auto-generated and intended to notify you of the new submission. The information provided by the user is included above for your reference.</p>";
    
    $body .= '</body></html>';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    // Attempt to send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! We will contact you shortly')</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later')</script>";
    }
    header('Location: https://naveenassociates.in/contact.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Naveen Associates">
    <meta name="description" content="Naveen Associates, a trusted loan service provider and authorized channel partner of leading MNC banks and NBFCs, offers a seamless experience and expert assistance in obtaining personal loans, home loans, mortgage loans, and loans against property.">
    <meta name="author" content="Naveen Associates">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="favicon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>G-12, Data Arcade, Old Station Road, Alwar, Raj, 301001</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>
                    <a href="mailto:contact@naveenassociates.in">contact@naveenassociates.in</a>
                </small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:+918824491255">+91 8824491255</a>, <a href="tel:+918233120000"> +91 8233120000</a></small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">Naveen Associates</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="contact.php" class="nav-item nav-link active">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.facebook.com/profile.php?id=100086761719157&mibextid=ZbWKwL">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://instagram.com/naveen_associates?igshid=ZDc4ODBmNjlmNQ==">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.linkedin.com/company/financial-consultantt/">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding-top: 12rem; padding-bottom: 6rem; background: url(img/header2.jpg) top left no-repeat; background-size: cover;">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <form method="post">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact</p>
                        <h1 class="display-5 mb-4">If You Have Any Query, Please Contact Us</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="contact_name" required="">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="contact_email" required="">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Mobile" name="contact_mobile" required="">
                                        <label for="subject">Mobile</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="contact_msg" required=""
                                            style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                        <div class="position-relative rounded overflow-hidden h-100">
                            <iframe class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221.059940264616!2d76.61677088698093!3d27.56378151581511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39729989e30c966f%3A0x5256f8e3936d9d50!2sASC%20ACADEMY%20II%20Best%20Coaching%20in%20Alwar%20II%20SSC%2C%20BANK%2C%20POLICE%2C%20RAILWAY!5e0!3m2!1sen!2sin!4v1690527904066!5m2!1sen!2sin"
                                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact End -->


  
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ Floating Icon Start ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>


<a href="https://api.whatsapp.com/send?phone=+918824491255&text=Hello Naveen, Can we connect ?" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
    </a>
    <a href="tel: +918824491255" class="float2">
    <i class='fas fa-phone my-float' style='color: white'></i>
    </a>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ Floating Icon End -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->






    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="logo-bg-light-nobg.png" style="height:8rem;"><br> 
                    <span>Follow Us On: </span>
                    
                    <div class="d-flex pt-2" style="display: inline-flex !important;">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100086761719157&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://instagram.com/naveen_associates?igshid=ZDc4ODBmNjlmNQ=="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/company/financial-consultantt/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>G-12, Data Arcade, Old Station Road, Alwar, Raj, 301001</p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>
                        <a href="tel:+918824491255" style="color:white;">+91-8824491255</a>
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>
                        <a href="tel:+918233120000" style="color:white;"> +91-8233120000</a>
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                        <a href="mailto:nav.bhatiya@gmail.com" style="color:white;">nav.bhatiya@gmail.com</a>
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>
                        <a href="mailto:contact@naveenassociates.in" style="color:white;font-size: 0.92rem;">contact@naveenassociates.in</a>
                    </p>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link" href="service.php">Home Loan</a>
                    <a class="btn btn-link" href="service.php">Personal Loan</a>
                    <a class="btn btn-link" href="service.php">Mortgage Loan</a>
                    <a class="btn btn-link" href="service.php">Loan Against Property</a>
                    <a class="btn btn-link" href="service.php">Business Loan</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="service.php">Our Services</a>
                    <a class="btn btn-link" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSexfbksBozTZQuHb1mi4SPgLBdBtv7ObNgmmfKAFLZiv3aJiQ/viewform?usp=sf_link">Careers</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-2 offset"></div>
                <div class="col-md-8 text-center" style="text-align:  center;">
                    &copy; 2023 | <a class="border-bottom" href="index.php">Naveen Associates</a> All Right Reserved.
                </div>
                <div class="col-md-2 offset"></div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>