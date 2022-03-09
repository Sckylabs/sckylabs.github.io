<!DOCTYPE html>
<html lang="en">

<?php

$id = $_GET['id'];
$id2 = $_GET['id2'];

?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sckylabs</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="footer/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="footer/css/style.css">


    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contactUs/css/util.css">
    <link rel="stylesheet" type="text/css" href="contactUs/css/main.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>&nbsp;Sckylabs</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="aboutus.html">About us</a></li>
                    <li><a class="nav-link scrollto" href="services.html">Services</a></li>
                    <li><a class="nav-link scrollto" href="pricing.html">Pricing</a></li>
                    <li><a class="nav-link scrollto active" href="contactUs.php?id=0&id2=0">Contact us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="padding-top: 100px">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="container-contact100" style="background-color: white">
                    <div class="wrap-contact100">
                        <form class="contact100-form validate-form" action="mail_handler.php" method="post">


                            <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                <span class="section-header"><strong>Full Name *</strong></span>
                                <input class="input100" type="text" name="name" placeholder="Enter Your Name" required>
                            </div>

                            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
                                <span class="section-header"><strong>Email *</strong></span>
                                <input class="input100" type="text" name="email" placeholder="Enter Your Email" required>
                            </div>

                            <div class="wrap-input100 bg1 rs1-wrap-input100">
                                <span class="section-header"><strong>Phone</strong></span>
                                <input class="input100" type="text" name="phone" placeholder="Enter Your Phone Number" required>
                            </div>

                            <div class="wrap-input100 input100-select bg1">
                                <span class="section-header"><strong>Needed Services *</strong></span>
                                <div>
                                    <?php
                                    if ($id == 0 && $id2 == 0) {
                                    ?>

                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option value="0">Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2">Web solutions</option>
                                            <option value="3">Logo designing</option>
                                            <option value="4">Brochure & flyer designing</option>
                                            <option value="5">Intro and outro videos</option>
                                            <option value="6">Video editing</option>
                                        </select>

                                    <?php
                                    } else if ($id == 2 && $id2 == 1 || $id == 2 && $id2 == 2 || $id == 2 && $id2 == 3) {
                                    ?>

                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option>Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2" selected>Web solutions</option>
                                            <option value="3">Logo designing</option>
                                            <option value="4">Brochure & flyer designing</option>
                                            <option value="5">Intro and outro videos</option>
                                            <option value="6">Video editing</option>
                                        </select>

                                    <?php
                                    } else if ($id == 1 && $id2 == 0) {
                                    ?>
                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option>Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2" selected>Web solutions</option>
                                            <option value="3">Logo designing</option>
                                            <option value="4">Brochure & flyer designing</option>
                                            <option value="5">Intro and outro videos</option>
                                            <option value="6">Video editing</option>
                                        </select>
                                    <?php
                                    } else if ($id == 3 && $id2 == 0) {
                                    ?>
                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option>Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2">Web solutions</option>
                                            <option value="3" selected>Logo designing</option>
                                            <option value="4">Brochure & flyer designing</option>
                                            <option value="5">Intro and outro videos</option>
                                            <option value="6">Video editing</option>
                                        </select>
                                    <?php
                                    } else if ($id == 4 && $id2 == 0) {
                                    ?>
                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option>Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2">Web solutions</option>
                                            <option value="3">Logo designing</option>
                                            <option value="4" selected>Brochure & flyer designing</option>
                                            <option value="5">Intro and outro videos</option>
                                            <option value="6">Video editing</option>
                                        </select>
                                    <?php
                                    } else if ($id == 5 && $id2 == 0) {
                                    ?>
                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option>Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2">Web solutions</option>
                                            <option value="3">Logo designing</option>
                                            <option value="4">Brochure & flyer designing</option>
                                            <option value="5" selected>Intro and outro videos</option>
                                            <option value="6">Video editing</option>
                                        </select>
                                    <?php
                                    } else if ($id == 6 && $id2 == 0) {
                                    ?>
                                        <select class="js-select2" name="service" onchange="serviceChanged(this)">
                                            <option>Please choose</option>
                                            <option value="1">Software solutions</option>
                                            <option value="2">Web solutions</option>
                                            <option value="3">Logo designing</option>
                                            <option value="4">Brochure & flyer designing</option>
                                            <option value="5">Intro and outro videos</option>
                                            <option value="6" selected>Video editing</option>
                                        </select>
                                    <?php
                                    }
                                    ?>

                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>

                            <div class="w-full dis-none js-show-service">
                                <div class="wrap-contact100-form-radio">
                                    <span class="section-header"><strong>What type of products do you sell?</strong></span>

                                    <div class="contact100-form-radio m-t-15">
                                        <input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
                                        <label class="label-radio100" for="radio1">
                                            Phycical Products
                                        </label>
                                    </div>

                                    <div class="contact100-form-radio">
                                        <input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
                                        <label class="label-radio100" for="radio2">
                                            Digital Products
                                        </label>
                                    </div>

                                    <div class="contact100-form-radio">
                                        <input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
                                        <label class="label-radio100" for="radio3">
                                            Services Consulting
                                        </label>
                                    </div>
                                </div>

                                <div class="wrap-contact100-form-range">
                                    <span class="section-header"><strong>Budget *</strong></span>

                                    <div class="contact100-form-range-value">
                                        $<span id="value-lower"></span> - $<span id="value-upper"></span>
                                        <input type="text" name="from-value">
                                        <input type="text" name="to-value">
                                    </div>

                                    <div class="contact100-form-range-bar">
                                        <div id="filter-bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                                <span class="section-header"><strong>Message</strong></span>
                                <textarea class="input100" name="message" placeholder="Your message here..." required></textarea>
                            </div>

                            <div class="container-contact100-form-btn">
                                <button class="contact100-form-btn" type="submit">
                                    <span>
                                        Submit
                                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </section>
        <!-- End Contact Section -->

        <footer class="section" id="footer">
            <div class="overlay footer-overlay"></div>
            <!--Content -->
            <div class="container">
                <div class="row justify-content-start">
                <div class="col-lg-4f col-sm-12f">
                        <div class="footer-widget">
                            <!-- Brand -->
                            <a href="#" onclick="return false;" class="footer-brand text-white">
                                    Sckylabs
                                </a>
                            <p>Sckylabs provides our customers with modern and elegant solutions tailor made for their specific needs and requirements.</p>
                        </div>
                    </div>

                    <div class="col-lg-3f ml-lg-auto col-sm-12f">
                        <div class="footer-widget">
                            <h3>Terms and conditions</h3>
                            <!-- Links -->
                            <ul class="footer-links ">
                                <li>
                                    <a href="#" onclick="return false;">
                                          Terms and conditions
                                      </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-2f col-sm-6f">
                        <div class="footer-widget">
                            <h3>About</h3>
                            <!-- Links -->
                            <ul class="footer-links ">
                                <li>
                                    <a href="aboutus.html">
                                          About us
                                      </a>
                                </li>
                                <li>
                                    <a href="contactUs.php?id=0&id2=0">
                                          Contact
                                      </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2f col-sm-6f">
                        <div class="footer-widget">
                            <h3>Socials</h3>
                            <!-- Links -->
                            <ul class="list-unstyled footer-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i>Twitter
                                    </a>
                                </li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest
                                    </a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i>Instagram
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- / .row -->


                <div class="row text-right pt-5">
                    <div class="col-lg-12f">
                        <!-- Copyright -->
                        <p class="footer-copy">
                            &copy; Copyright <span class="current-year">Sckylabs</span> All rights reserved.
                        </p>
                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </footer>

    </main>
    <!-- End #main -->



    <a href="#contact" class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js "></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="assets/vendor/purecounter/purecounter.js "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
    <!--===============================================================================================-->
    <script src="contactUs/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="contactUs/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="contactUs/vendor/bootstrap/js/popper.js"></script>
    <script src="contactUs/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="contactUs/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });

            $(".js-select2").each(function() {
                $('.js-show-service').slideDown();
            });
        })
    </script>

    <script>
        function serviceChanged(selectObject) {
            var id3 = selectObject.value;

            var filterBar = document.getElementById('filter-bar');

            if (id3 == 2) {
                filterBar.noUiSlider.set([0, 200]);
                filterBar.noUiSlider.updateOptions({
                    range: {
                        'min': 0,
                        'max': 4000
                    }
                });
            } else if (id3 == 1) {
                filterBar.noUiSlider.set([0, 400]);
                filterBar.noUiSlider.updateOptions({
                    range: {
                        'min': 0,
                        'max': 1000
                    }
                });
            } else if (id3 == 3 || id3 == 4) {
                filterBar.noUiSlider.set([0, 200]);
                filterBar.noUiSlider.updateOptions({
                    range: {
                        'min': 0,
                        'max': 1000
                    }
                });
            } else if (id3 == 5 || id3 == 6) {
                filterBar.noUiSlider.set([0, 350]);
                filterBar.noUiSlider.updateOptions({
                    range: {
                        'min': 0,
                        'max': 1000
                    }
                });

            }

            var skipValues = [
                document.getElementById('value-lower'),
                document.getElementById('value-upper')
            ];

            filterBar.noUiSlider.on('update', function(values, handle) {
                skipValues[handle].innerHTML = Math.round(values[handle]);
                $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
                $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
            });

        }
    </script>

    <!--===============================================================================================-->
    <script src="contactUs/vendor/daterangepicker/moment.min.js"></script>
    <script src="contactUs/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="contactUs/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="contactUs/vendor/noui/nouislider.min.js"></script>

    <script>
        var filterBar = document.getElementById('filter-bar');

        <?php
        if ($id == 2 && $id2 == 1) {
        ?>

            noUiSlider.create(filterBar, {
                start: [0, 200],
                connect: true,
                range: {
                    'min': 0,
                    'max': 349
                }
            });

        <?php
        } else if ($id == 2 && $id2 == 2) {
        ?>
            noUiSlider.create(filterBar, {
                start: [350, 450],
                connect: true,
                range: {
                    'min': 350,
                    'max': 499
                }
            });
        <?php
        } else if ($id == 2 && $id2 == 3) {
        ?>
            noUiSlider.create(filterBar, {
                start: [500, 1000],
                connect: true,
                range: {
                    'min': 500,
                    'max': 4000
                }
            });
        <?php
        } else if ($id == 1 && $id2 == 0) {
        ?>
            noUiSlider.create(filterBar, {
                start: [0, 400],
                connect: true,
                range: {
                    'min': 0,
                    'max': 1000
                }
            });
        <?php
        } else if ($id == 3 && $id2 == 0 || $id == 4 && $id2 == 0) {
        ?>
            noUiSlider.create(filterBar, {
                start: [0, 200],
                connect: true,
                range: {
                    'min': 0,
                    'max': 1000
                }
            });
        <?php
        } else if ($id == 5 && $id2 == 0 || $id == 6 && $id2 == 0) {
        ?>
            noUiSlider.create(filterBar, {
                start: [0, 350],
                connect: true,
                range: {
                    'min': 0,
                    'max': 1000
                }
            });
        <?php
        } else {
        ?>
            noUiSlider.create(filterBar, {
                start: [0, 1000],
                connect: true,
                range: {
                    'min': 0,
                    'max': 4000
                }
            });

        <?php
        }
        ?>

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function(values, handle) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>

    <!--===============================================================================================-->

    <script src="assets/js/main.js "></script>

</body>

</html>