<!DOCTYPE html>

<html lang="en">

<!-- Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Stay - Rivertern Lodge Bhadra </title>
    <meta name="description"
        content="Experience River Tern Lodge Bhadra, a serene Karnataka retreat blending nature and comfort.">
    <meta name="keywords" content="River Tern Lodge Bhadra, Karnataka, Eco-Lodge, Nature Retreat, Booking">
    <meta name="author" content="Rivertern Lodge Bhadra">
    <link href="assets/img/logos/favicon.webp" rel="shortcut icon" type="image/png">
    <link href="assets/css/theme-1.min.css" rel="stylesheet">
    <link href="assets/css/theme-2.min.css" rel="stylesheet">
    <link href="assets/css/theme-3.min.css" rel="stylesheet">

    <!-- Booking Page -->
    <link rel="canonical" href="https://riverternlodgebhadra.com/booking.php">

    <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<!-- /Head -->

<body>



    <!-- Including the header file -->
    <?php include_once 'header.php'; ?>

    <!-- Main -->
    <main>
        <!-- Title -->
        <section class=" hero sub-page-hero">
            <div class="hero-bg">
                <div class="image-cover"></div>
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Plan Your Trip</span>
                    <h1 class="display-3 hero-title">
                        Book A Tour
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Book A Tour</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

        <!-- Tour details -->

        <section class=" p-top-50 p-bottom-50 bg-gray-gradient">
            <div class="container">
                <div class="card border-0 shadow-sm p-xl-2 mb-5 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">Your Adventure Starts Here</h2>
                        </div>
                        <div class="d-lg-flex border-bottom pb-3 mb-4">
                            <div class="mnw-200 guest-icon">
                                <i class="hicon hicon-instant-booking"></i>
                            </div>
                            <p>
                                Experience a fantastic adventure at River Tern Lodge in the beautiful Bhadra
                                Wildlife
                                Sanctuary in Karnataka. Please share your travel plans below!
                            </p>

                        </div>


                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 mt-2 sticky-top sticky-top-120 z-0 aos-init aos-animate">
                    <div class="card-body">
                        <div class="border-bottom pb-4 mb-4">
                            <h3 class="h3 text-center ff-primary mb-0 text-body-emphasis"> Plan Your Trip At River Tern
                            </h3>
                        </div>
                        <form method="post" id="bookingForm" action="thankyou.php">
                            <div class="border-bottom pb-4 mb-4">
                                <h3 class="h4 mb-4">Your Information</h3>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="input-icon-group">
                                                <label class="input-icon hicon hicon-topic-user" for="txtName"></label>
                                                <input type="text" class="form-control shadow-sm" id="txtName"
                                                    name="txtName" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="input-icon-group">
                                                <label class="input-icon hicon hicon-telephone hicon-bold"
                                                    for="txtPhone"></label>
                                                <input type="tel" class="form-control shadow-sm" id="txtPhone"
                                                    name="txtPhone" placeholder="Mobile Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="input-icon-group">
                                                <label class="input-icon hicon hicon-email-envelope hicon-bold"
                                                    for="txtEmail"></label>
                                                <input type="email" class="form-control shadow-sm" id="txtEmail"
                                                    name="txtEmail" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="h4 mb-4">Additional Information</h3>

                                    <div class="col-12 col-md-6">
                                        <div class="mb-2">
                                            <div class="input-icon-group">
                                                <input id="checkIn" type="text" class="form-control shadow-sm"
                                                    name="checkIn" placeholder="Check-in" required>
                                                <label class="input-icon hicon hicon-menu-calendar hicon-bold"
                                                    for="checkIn"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-2">
                                            <div class="input-icon-group">
                                                <input id="checkOut" type="text" class="form-control shadow-sm"
                                                    name="checkOut" placeholder="Check-out" required>
                                                <label class="input-icon hicon hicon-menu-calendar hicon-bold"
                                                    for="checkOut"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-icon-group">
                                            <label class="input-icon hicon hicon-adults-one" for="selAdults"></label>
                                            <input type="number" class="form-control shadow-sm" id="selAdults"
                                                name="selAdults" placeholder="Adults" min="1" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-icon-group">
                                            <label class="input-icon hicon hicon-child-line hicon-bold"
                                                for="selchildren"></label>
                                            <input type="number" class="form-control shadow-sm" id="selchildren"
                                                name="selchildren" placeholder="Children" min="0" required>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 col-md-12 d-flex justify-content-center align-items-center mt-4 pb-2">
                                        <div class="g-recaptcha"
                                            data-sitekey="6Lc2vcoqAAAAAKIJAOEq-i52UQ2DmuuliLmA1Otq"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 col-12  d-flex flex-row justify-content-center ">
                                <button style="margin-inline: auto;" type="submit"
                                    class="btn btn-primary  btn-uppercase w-50">
                                    <i class="hicon hicon-bold hicon-menu-bookings"></i>
                                    <span>PLAN YOUR TRIP</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

            <div class="container mt-4 pt-2">
                <div class="card border-0 mt-4 pt-4 shadow-sm p-xl-2 aos-init">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h3 class="text-body-emphasis mb-0">Discover the Hidden Gems of River Tern Lodge Bhadra</h3>
                        </div>
                        <div class="d-lg-flex border-bottom pb-3 mb-4">
                            <div class="mnw-200 guest-icon">
                                <i class="hicon  hicon-family-special-deal"></i>
                            </div>
                            <p>Embark on a visual journey through our gallery, which beautifully captures the essence of
                                River Tern Lodge Bhadra. Our collection of images showcases the lodge's breathtaking
                                natural surroundings, its diverse and thriving wildlife, and the unique experiences that
                                await you amidst the serene and picturesque Bhadra Reservoir in Karnataka's Western
                                Ghats. From the majestic trees that tower above to the sparkling waters that reflect the
                                beauty of nature, every moment at River Tern Lodge Bhadra is a testament to the wonders
                                of the natural world.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Tour details -->


    </main>
    <!-- /Main -->

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
                                    <a href="loghut.php
">Loghut Package</a>
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
                                    <a href="mailto: book@riverternlodgebhadra.com 
"> book@riverternlodgebhadra.com
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
    <!-- /Footer -->
    <script defer src="assets/js/theme-1.min.js"></script>
    <script defer src="assets/js/theme-2.min.js"></script>
    <script defer src="assets/js/theme-3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const checkInPicker = flatpickr("#checkIn", {
            dateFormat: "d-m-Y",
            minDate: "today",
            onChange: function(selectedDates) {

                checkOutPicker.set('minDate', selectedDates[0] ? new Date(selectedDates[0].getTime() + 86400000) : "today");
            }
        });

        const checkOutPicker = flatpickr("#checkOut", {
            dateFormat: "d-m-Y",
            minDate: "today"
        });
    </script>

</body>


</html>