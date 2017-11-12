<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Uber Beer</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/vendor.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- Modernizr
    =================================================== -->
    <script src="./assets/js/modernizr.js"></script>

    <!-- Favicons
    =================================================== -->
    <link rel="shortcut icon" href="favicon.png">

</head>

<body>

<!--[if lt IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- content-wrap -->
<div id="content-wrap">

    <!-- main  -->
    <main class="row">

        <header class="site-header">
            <div class="logo">
                <a href="index.html">Advent.</a>
            </div>
        </header>

        <div id="main-content" class="twelve columns">

            <h1>Comming Soon ! </h1>

            <p> 9:00 pm. Last Beer? Oh no ! <br>
                Think UBER BEER and the party goes on. <br>
                Leave your email here. We are waiting your next party !
            </p>

            <hr>

            <div id="counter" class="group">
                <span id='days'>7 <em>days</em></span>
                <span id='hours'>18 <em>hours</em></span>
                <span id='minutes'>50 <em>minutes</em></span>
                <span id='seconds'>15 <em>seconds</em></span>
            </div>

            <!-- MailChimp Signup Form -->
            <div id="mc-signup">

                <form id="mc-form" class="group" action="./app/insert.php" method="post">
                    <input type="email" value="" name="mail" class="email" id="mce-EMAIL" placeholder="email address"
                           required>
                    <input type="submit" value="Get Notified" name="subscribe" class="button">
                    <label for="mce-EMAIL" class="subscribe-message"></label>
                </form>

            </div> <!-- /sign-up form -->
            <h1><?= isset($_GET['message']) ? $_GET['message'] : ""; ?></h1>

        </div><!-- /main-content form -->

    </main>

</div><!-- /content-wrap -->


<footer class="group">

    <ul class="footer-social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-skype"></i></a></li>
    </ul>

    <ul class="footer-copyright">
        <li>&copy; Copyright 2015 Advent</li>
        <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>
    </ul>

</footer>

<!-- <div id="preloader">
     <div id="loader">
      </div>
</div> -->

<!-- Script
=================================================== -->
<script src="./assets/js/count_down.js"></script>
<script src="./assets/js/jquery-1.11.3.min.js"></script>
<script src="./assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false"></script>
<script src="./assets/js/jquery.fittext.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/jquery.placeholder.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>
