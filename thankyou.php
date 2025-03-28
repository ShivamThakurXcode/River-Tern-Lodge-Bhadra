<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta tags for the document -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - River Tern Bhadra </title>
    <meta name="description" content="Thank you for choosing Rivertern Lodge Bhadra, a serene getaway in Karnataka's Chikmagalur district.">
    <meta name="keywords" content="Rivertern Lodge Bhadra, Thank You, Karnataka, Chikmagalur, Eco-Lodge, Nature Retreat, Adventure, Wildlife Sanctuary">
    <meta name="author" content="Rivertern Lodge Bhadra">
    <!-- Favicon and CSS files -->
    <link href="assets/img/logos/favicon.webp" rel="shortcut icon" type="image/png">
    <link href="assets/css/theme-1.min.css" rel="stylesheet">
    <link href="assets/css/theme-2.min.css" rel="stylesheet">
    <link href="assets/css/theme-3.min.css" rel="stylesheet">




</head>

<body>

    <!-- Including the header file -->
    <?php include_once 'header.php'; ?>

    <main>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];

            // Collect form data
            $name = isset($_POST["txtName"]) ? htmlspecialchars($_POST["txtName"]) : "";
            $email = isset($_POST["txtEmail"]) ? htmlspecialchars($_POST["txtEmail"]) : "";
            $phone = isset($_POST["txtPhone"]) ? htmlspecialchars($_POST["txtPhone"]) : "";
            $message = isset($_POST["txtMessage"]) ? htmlspecialchars($_POST["txtMessage"]) : "";
            $checkIn = isset($_POST["checkIn"]) ? htmlspecialchars($_POST["checkIn"]) : "";
            $checkOut = isset($_POST["checkOut"]) ? htmlspecialchars($_POST["checkOut"]) : "";
            $adults = isset($_POST["selAdults"]) ? (int)$_POST["selAdults"] : 0;
            $children = isset($_POST["selchildren"]) ? (int)$_POST["selchildren"] : 0;

            // Validate required fields
            if (empty($name)) {
                $errors[] = "Full Name is required.";
            }
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Valid Email Address is required.";
            }
            if (empty($phone) || !preg_match('/^\d{10}$/', $phone)) {
                $errors[] = "Valid Mobile Number is required.";
            }

            // If this is a booking form, validate additional fields
            if (!empty($checkIn) || !empty($checkOut)) {
                if (empty($checkIn) || empty($checkOut)) {
                    $errors[] = "Check-in and Check-out dates are required.";
                }
                if ($adults < 1) {
                    $errors[] = "At least one adult must be selected.";
                }
            }

            if (empty($errors)) {
                // Admin email
                $admin_email = " book@riverternlodgebhadra.com";

                // Subject based on the form type
                $subject = !empty($message) ? "New Contact Form Submission" : "New Booking Request";

                // Admin email content
                $admin_message = "You have received a new " . (!empty($message) ? "message" : "booking request") . ".\n\n";
                $admin_message .= "Name: $name\n";
                $admin_message .= "Email: $email\n";
                $admin_message .= "Phone: $phone\n";

                if (!empty($message)) {
                    $admin_message .= "Message:\n$message\n";
                } else {
                    $admin_message .= "Check-in: $checkIn\n";
                    $admin_message .= "Check-out: $checkOut\n";
                    $admin_message .= "Adults: $adults\n";
                    $admin_message .= "Children: $children\n";
                }
                // Send email to Admin
                $adminEmailSent = mail($admin_email, $subject, $admin_message, "From: $email\nReply-To: $email");

                // Confirmation email to the user
                $user_subject = "Thank You for " . (!empty($message) ? "Contacting Us" : "Your Booking Request");
                $user_message = "Dear $name,\n\n";
                $user_message .= "Thank you for " . (!empty($message) ? "reaching out to us." : "your booking request.") . "\n";
                $user_message .= "We will get back to you shortly.\n\nBest Regards,\nRivertern Lodge Bhadra";

                $userEmailSent = mail($email, $user_subject, $user_message, "From: $admin_email\nReply-To: $admin_email");


                if ($adminEmailSent && $userEmailSent) {
                    echo '
              <section class=" hero mt-4 p-top-40 p-bottom-50 sub-page-hero">

            <div id="thank-you-bg" style=" 
            background-image: url(assets/img/background/thankyou-svg.svg);
            background-repeat: no-repeat;
            object-fit: cover;
            background-repeat: no-repeat; padding-inline: 1rem;
            background-position: center center; 
            background-size: cover; height: max-content;" class="bg-content  card container">
                <div class="p-top-80 d-flex flex-column text-center text-white">
                    <span class=" hero-sub-title">Rivertern Lodge Bhadra</span>
                    <h1 class="display-5  hero-title">
                        Thank you for reaching out to us!
                    </h1>
                    <div class="m-xxl-auto">Hello,<span style="text-transform: capitalize; font-size: 1.2rem;">  '  . htmlspecialchars($name) . ' </span>. We have received your message and will respond
                        promptly. </div>
                </div>


                <div style="width: 95%;" class="d-flex flex-row col-12 flex-wrap  m-xxl-auto  justify-content-between gap-3  ">

                    <div class="col-12 mt-5 col-xl-4 col-lg-4">
                        <!-- Review summary -->
                        <div class="rounded text-white  ">
                            <h3 class="fs-6  review-title">Important:</h3>
                            <p class="fs-6 text-start fw-light ">
                                We\'ve sent an email with package options and activity details to your email address.
                                If you don\'t see it, check your spam folder. Adding  book@riverternlodgebhadra.com to your
                                address book can also help ensure you receive our messages.
                            </p>

                        </div>
                        <!-- /Review summary -->
                    </div>
                    <div class="col-12 mt-5 col-xl-3 col-lg-3">
                        <div
                            class="rounded text-white text-center d-flex align-items-center justify-content-center p-top-50 ">
                            <h3>Talk to you soon!</h3>
                        </div>
                    </div>

                    <div class="col-12 mt-5 col-xl-4 col-lg-4">
                        <!-- Review summary -->
                        <div class="rounded  text-white p-bottom-50  ">
                            <h3 class="fs-6  review-title"> You can call to our Travel Advisor:</h3>


                            <ul class="highlight-list checked ">
                                <li class="mb-0 "><a href="tel:+919480022108">+91-94800-22108</a> - Mr. Ramnath</li>
                                <li class="mb-0 "><a href="tel:+919902474761">+91-99024-74761</a> - Mr. Sanjay </li>

                            </ul>
                            <p class="fs-6 text-start fw-light ">
                                We will get back to you by phone or email as soon as possible.
                            </p>
                        </div>
                        <!-- /Review summary -->
                    </div>
                </div>

            </div>
        </section>';
                }
            } else {
                // Show error messages
                echo "<script>alert('" . implode("\\n", $errors) . "'); window.history.back();</script>";
            }
        } else {
            header("Location: index.php");
            exit;
        }

        ?>


    </main>



    <!-- Footer -->
    <footer class="footer">

        <!-- Footer top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-4 me-5  col-md-6 ">
                        <!-- Brand -->
                        <div class="footer-widget ">
                            <a href="index.php" class="brand-img">
                                <!-- <img  width="100%" height="100%"    sizes="(max-width: 600px) 480px, (max-width: 992px) 768px, 1200px"  class="me-4" src="assets/img/logos/footer-Logo.webp" alt="RiverTern"> -->
                                <h4 class="h2">River Tern Lodge Bhadra</h4>
                            </a>
                            <p class="brand-desc text-white ">Reconnect with nature at Rivertern Lodge, Bhadra. Peaceful surroundings, exciting adventures, and cozy comfort—your perfect escape is here.
                            </p>
                            <h4 class="text-white">Secure Online Booking</h4>
                            <ul class="social-list">
                                <li class="social-item">
                                    <img width="100%" height="100%" sizes="(max-width: 600px) 480px, (max-width: 992px) 768px, 1200px" src="assets/img/FooteSVG/paypal.svg" alt="payment-icons">
                                </li>
                                <li class="social-item">
                                    <img width="100%" height="100%" sizes="(max-width: 600px) 480px, (max-width: 992px) 768px, 1200px" src="assets/img/FooteSVG/mastercard.svg" alt="payment-icons">
                                </li>
                                <li class="social-item">
                                    <img width="100%" height="100%" sizes="(max-width: 600px) 480px, (max-width: 992px) 768px, 1200px" src="assets/img/FooteSVG/visa.svg" alt="payment-icons">
                                </li>
                                <li class="social-item">
                                    <img width="100%" height="100%" sizes="(max-width: 600px) 480px, (max-width: 992px) 768px, 1200px" src="assets/img/FooteSVG/american-express.svg" alt="payment-icons">
                                </li>
                                <li class="social-item">
                                    <img width="100%" height="100%" sizes="(max-width: 600px) 480px, (max-width: 992px) 768px, 1200px" src="assets/img/FooteSVG/rupay.svg" alt="payment-icons">
                                </li>
                            </ul>
                        </div>
                        <!-- /Brand -->
                    </div>

                    <div class="col-12 col-xl-2  col-md-6">
                        <!-- Quick Links -->
                        <div class="footer-widget">
                            <h4 class="h4 text-white pb-2">Navigation</h4>
                            <ul class="footer-link">
                                <li class="link-item">
                                    <a href="about.php">About River Tern</a>
                                </li>
                                <li class="link-item">
                                    <a href="gallery.php">Photo Gallery</a>
                                </li>
                                <li class="link-item">
                                    <a href="things-to-do.php">Things To Do </a>
                                </li>
                                <li class="link-item">
                                    <a href="reach.php">How To Reach</a>
                                </li>

                            </ul>
                        </div>
                        <!-- /Quick Links -->
                    </div>
                    <div class="col-12 col-xl-2 me-5 col-md-6  ">
                        <!-- Quick Links -->
                        <div class="footer-widget">
                            <h4 class="h4 text-white pb-2">Accommodation</h4>
                            <ul class="footer-link">
                                <li class="link-item">
                                    <a href="loghut.php">Loghut Package</a>
                                </li>
                                <li class="link-item">
                                    <a href="cottage.php">Cottage Package</a>
                                </li>
                                <li class="link-item">
                                    <a href="contact-us.php">Contact Us</a>
                                </li>
                                <li class="link-item">
                                    <a href="cancellation.php">Cancellation Policy</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Quick Links -->
                    </div>
                    <div class="col-12 col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="h4 text-white pb-2"> Get In Touch </h4>
                            <!-- Mobile App -->

                            <div class="footer-local">

                                <div class="col-1">
                                    <i class="hicon hicon-map-entry"></i>

                                </div>
                                <div class="col-10">
                                    <p class="text-white">Rivertern Lodge Bhadra, <br>
                                        Behind Ranganathaswamy <br>
                                        Temple, Tarikere, Lakkavalli,<br>
                                        Karnataka 577115</p>
                                </div>

                            </div>


                            <!-- /Mobile App -->
                            <!-- Social -->
                            <div class="footer-local ">

                                <div class="col-1 footer-contact-main ">
                                    <i class="hicon hicon-telephone "></i>
                                    <i class="hicon hicon-email-envelope "></i>
                                </div>
                                <div class=" footer-contact  col-8">
                                    <a href="tel:+9480022108">+91-9480022108</a>
                                    <a href="mailto: book@riverternlodgebhadra.com"> book@riverternlodgebhadra.com
                                    </a>
                                </div>

                            </div>
                            <!-- /Social -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-md-6">
                        <p class="mb-lg-0">© <span class="me-2" id="currentYear"></span> <span id="footer-mark"><a
                                    href="index.php">RiverternLodgeBhadra.com.</a></span> All rights reserved.</p>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="text-start text-md-end">
                            <ul class="list-inline mb-lg-0">
                                <li class="list-inline-item">
                                    <a href="terms.php">Terms and Conditions</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="privacy.php">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>

    <script defer src="assets/js/theme-1.min.js"></script>
    <script defer src="assets/js/theme-2.min.js"></script>
    <script defer src="assets/js/theme-3.min.js"></script>
    <script>



    </script>


</body>

</html>