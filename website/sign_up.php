<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>ReaLand</title>
	<meta charset="UTF-8">
	<meta name="description" content="ReaLand - Real Estate HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone-no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,700,800|Roboto:400,500,700" rel="stylesheet"> 
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'common/header.php';?>
<section class="sign-up">
    <div class="container">
        <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Pages</span></a></li>
            <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Login/Signup</span></li>
        </ul><!-- .ht-breadcrumb -->

        <div class="sign-up__container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="sign-up__header">
                        <h1 class="sign-up__textcontent"><a href="#log-in" class="sign-up__tab is-active">Sign In</a> <span>or</span> <a href="#sign-up" class="sign-up__tab">Sign Up</a></h1>
                    </div><!-- .sign-up__header -->

                    <div class="sign-up__main">
                        <form action="http://boostifythemes.com/demo/html/realand/sign_up.html" class="sign-up__form is-visible" id="log-in">
                            <label for="log-in-email" class="sign-up__label">Email</label>
                            <input type="email" class="sign-up__field" id="log-in-email" placeholder="Your e-mail goes here">
                            <label for="log-in-password" class="sign-up__label">Password</label>
                            <input type="password" class="sign-up__field" id="log-in-password" placeholder="******">
                            <button type="submit" class="sign-up__submit">Sign In</button>
                            <a href="#" class="sign-up__link" style="margin-left: 10px;">Forgot Password?</a>
                        </form><!-- .sign-up__form -->

                        <form action="http://boostifythemes.com/demo/html/realand/sign_up.html" class="sign-up__form" id="sign-up">
                            <label for="sign-up-name" class="sign-up__label">Name</label>
                            <input type="text" class="sign-up__field" id="sign-up-name" placeholder="Enter your full name">
                            <label for="sign-up-email" class="sign-up__label">Email</label>
                            <input type="email" class="sign-up__field" id="sign-up-email" placeholder="Your email goes here">
                            <label for="sign-up-password" class="sign-up__label">Password</label>
                            <input type="password" class="sign-up__field" id="sign-up-password" placeholder="******">
                            <div class="sign-up__wrapper">
                                <input type="checkbox" for="sign-up-term" class="sign-up__checkbox">
                                <label for="sign-up-term" class="sign-up__desc">I agree all statements in <a href="#">Terms of Service</a></label>
                            </div>

                            <button type="submit" class="sign-up__submit">Sign Up</button>
                        </form><!-- .sign-up__form -->
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .sign-up__container -->
    </div><!-- .container -->
</section><!-- .sign-up -->
<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 newsletter__content">
        <img src="images/icon_mail.png" alt="Newsletter" class="newsletter__icon">
        <div class="newsletter__text-content">
          <h2 class="newsletter__title">Newsletter</h2>
          <p class="newsletter__desc">Sign up for our newsletter to get up-to-date from us</p>
        </div>
      </div><!-- .col -->

      <div class="col-md-6">
        <form action="http://boostifythemes.com/demo/html/realand/index.html" class="newsletter__form">
          <input type="email" class="newsletter__field" placeholder="Enter Your E-mail">
          <button type="submit" class="newsletter__submit">Subscribe</button>
        </form>
      </div> 
    </div>
  </div>
</section>
<?php include 'common/footer.php';?>
<a href="#" class="back-to-top"><span class="ion-ios-arrow-up"></span></a>

<!-- JS Files -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="js/infobox.js"></script>
<script src="js/custom.js"></script>
</body>

</html>