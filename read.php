<?php

if (isset($_GET["p"])) {
    $p = $_GET["p"];
    require ("connection.php");
    $query = mysqli_query($connection, "SELECT * FROM blog WHERE slug = '$p'") or die(mysqli_error($connection));
    $data = mysqli_fetch_assoc($query);
    ?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <!-- title -->
        <title><?php print $data["title"]; ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
        <meta name="author" content="Devslab">
        <!-- description -->
        <meta name="description" content="">
        <!-- keywords -->
        <meta name="keywords" content="">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicon.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicon.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>


    </head>
    <body>
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark  navbar-expand-lg">
            <div class="container-lg nav-header-container">
                <!-- start logo -->
                <div class="col-auto ps-0">
                    <a href="./" title="Top Notch Finance" class="logo"><img src="images/logo.png"
                                                                             data-at2x="images/logo.png"
                                                                             class="logo-dark" alt=""><img
                                src="images/logo-white.png" data-at2x="images/logo-white.png" alt="Top Notch Finacial"
                                class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-auto col-lg accordion-menu pe-0">
                    <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse"
                            data-bs-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                        <ul class="nav navbar-nav alt-font font-weight-700">
                            <li><a href="./" title="Home" class="inner-link">Home</a></li>
                            <li><a href="./#about" title="About" class="inner-link">About</a></li>
                            <li><a href="./#services" title="Services" class="inner-link">Services</a></li>
                            <li><a href="./#team" title="Team" class="inner-link">Team</a></li>
                            <li><a href="./#blog" title="Blog" class="inner-link">Blog</a></li>
                            <li><a href="./#contact" title="Contact" class="inner-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->


    <!-- start blog section -->
    <section id="blog" class="bg-light-gray wow animate__fadeIn">
        <div class="p-2 bg-deep-pink text-white justify-content-center">
            <h6 class="mt-3 pl-5 justify-content-center" style="text-align: center !important;"><?php print $data["title"]; ?></h6>
        </div>
        <div class="container">
            <!--                <div class="row justify-content-center">-->
            <!--                    <div class="col-lg-6 col-md-8 col-sm-10 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">-->
            <!--                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Related articles</h5>-->
            <!--                        <p>-->
            <!--                            Discover the latest updates and insights on insurance and financial planning. Our blog offers expert advice, industry news, and practical tips to help you secure your family's future.</p>-->
            <!--                    </div>  -->
            <!--                </div>-->
            <div class="row">
                <div class="col-12 blog-content ">
                    <div class="bg-white mt-4 p-4 m-2">
                        <?php print $data["description"]; ?>
                    </div>

                </div>
                <div class="col-12 blog-content">
                    <div class="m-2 mt-4"><h6>Related Articles</h6></div>

                    <ul class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col blog-post-style5 gutter-large">
                        <li class="grid-sizer"></li>
                        <!-- start post item -->
                        <?php
                        require("connection.php");
                        $query = mysqli_query($connection, "SELECT * FROM blog ORDER BY id DESC LIMIT 6") or die(mysqli_error($connection));
                        while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                            <li class="grid-item last-paragraph-no-margin wow animate__fadeInUp">
                                <div class="blog-post">
                                    <div class="blog-post-images overflow-hidden">
                                        <a href="#">
                                            <img src="<?php print $data["thumb_url"]; ?>" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font">
                                            <a href="#">#</a></div>
                                    </div>
                                    <div class="post-details padding-35px-all bg-white md-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="#"
                                           class="alt-font post-title text-medium text-extra-dark-gray w-90 d-block lg-w-100 margin-5px-bottom"><?php print $data["title"]; ?></a>
                                        <div class="author">
                                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a
                                                        href="#" class="text-medium-gray">Admin</a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php print $data["published_on"]; ?></span>
                                        </div>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                        <p>

                                            <?php
                                            $clean_description = strip_tags($data["description"]);
                                            $short_description = substr($clean_description, 0, 120);
                                            echo $short_description;
                                            ?>...
                                        </p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        <!-- end post item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- start contact section -->
    <section id="contact" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col cover-background md-h-550px sm-h-350px wow animate__fadeIn"
                     style="background: url(images/contactusbg.jpg)"></div>
                <div class="col padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-15px-lr wow animate__fadeIn">
                    <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom">Fill out the form
                        and we'll be in touch soon!
                    </div>
                    <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-600 text-uppercase md-margin-30px-bottom sm-margin-15px-bottom">
                        Ready to request a quote?</h5>
                    <div>
                        <form id="contact-form-2" action="#" method="post">
                            <div class="row justify-content-center">
                                <div class="col-12 wow animate__fadeIn text-center">
                                    <div class="form-results d-none"></div>
                                    <input type="text" name="name" id="name" placeholder="Name*"
                                           class="input-border-bottom text-white-2 required">
                                    <input type="email" name="email" id="email" placeholder="E-mail*"
                                           class="input-border-bottom  text-white-2 required">
                                    <input type="text" id="subject" name="subject" placeholder="Subject"
                                           class="input-border-bottom">
                                    <textarea name="comment" id="comment" placeholder="Your Message"
                                              class="input-border-bottom"></textarea>
                                    <button id="contact-us-button-2" type="submit"
                                            class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top submit">
                                        send message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
    <!-- start features section -->
    <section class="wow animate__fadeIn border-bottom border-color-extra-light-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                <!-- start features box item -->
                <div class="col text-center md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                    <i class="icon-map-pin icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                    <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                        Visit Our Office
                    </div>
                    <p class="w-70 lg-w-85 md-w-55 sm-w-75 sm-margin-10px-bottom mx-auto">Raleigh, North Carolina,
                        USA</p>
                    <a href="#"
                       class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">GET
                        DIRECTION</a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col text-center md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin"
                     data-wow-delay="0.2s">
                    <i class="icon-chat icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                    <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                        Let's Talk
                    </div>
                    <p class="w-70 lg-w-85 md-w-55 sm-w-75 sm-margin-10px-bottom mx-auto">Phone: +1(919) 593-2287<br>Fax:
                        +1(919) 593-2287</p>
                    <a href="contact-us-classic.html"
                       class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">call
                        us</a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col text-center sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin"
                     data-wow-delay="0.4s">
                    <i class="icon-envelope icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                    <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">
                        E-mail Us
                    </div>
                    <p class="w-70 lg-w-85 md-w-55 sm-w-75 sm-margin-10px-bottom mx-auto"><a
                                href="mailto:dios@tnfinancialsolutions.com">dios@tnfinancialsolutions.com</a><br><a
                                href="mailto:info@tnfinancialsolutions.com"> info@tnfinancialsolutions.com</a></p>
                    <a href="#"
                       class="margin-15px-top text-decoration-line-through-deep-pink d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">send
                        e-mail</a>
                </div>
                <!-- end features box item -->


            </div>
        </div>
    </section>
    <!-- end features section -->
    <!-- start footer -->
    <footer class="footer-strip bg-light-gray padding-50px-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start logo -->
                <div class="col-md-3 text-center text-lg-start sm-margin-20px-bottom">
                    <a href="index.html"><img class="footer-logo" src="images/logo-white.png"
                                              data-at2x="images/logo-white.png" alt="Top Notch Finacial"></a>
                </div>
                <!-- end logo -->
                <!-- start copyright -->
                <div class="col-md-6 text-center text-small alt-font sm-margin-10px-bottom">
                    &copy; <?php print date("Y"); ?> The Top Notch Financial, All rights reserved.
                </div>
                <!-- end copyright -->
                <!-- start social media -->
                <div class="col-md-3 text-center text-lg-end">
                    <div class="social-icon-style-8 d-inline-block align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook text-black" href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter text-black" href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="google text-black" href="https://plus.google.com/" target="_blank"><i
                                            class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootsnav.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/hamburger-menu.js"></script>
    <script type="text/javascript" src="js/theme-vendors.min.js"></script>
    <!-- setting -->
    <script type="text/javascript" src="js/main.js"></script>
    </body>
    </html>
    <?php
} else {
    print "<script>history.back();</script>";
}

?>