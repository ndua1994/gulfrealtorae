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
<section class="contact">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Pages</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Contact Us</span></li>
    </ul><!-- ht-breadcrumb -->

    <div class="contact__main">
      <div class="contact__map-container">
        <div id="contact-map"></div><!-- .contact__map -->
      </div><!-- .contact__map-container -->

      <div class="row">
        <div class="col-md-6">
          <h2 class="contact__title">Contact Us</h2>
          <div class="contact__desc">
            <p>You can contact us by a call, a message or visit us</p>
            <!--<p>From <strong>Monday</strong> to <strong>Friday, 8:00 am - 6:00 pm</strong></p>--->
          </div>
          <ul class="agency__contact">
            <li class="agency__contact-phone"><a href="tel:+3104326507">+971 55 837 7712</a></li>
            <li class="agency__contact-website"><a href="#">http://gulf-realtor.ae/</a></li>
            <li class="agency__contact-email"><a href="mailto:admin@gulf-realtor.ae">admin@gulf-realtor.ae</a></li>
            <!--<li class="agency__contact-address">200 East 65th Street 17NO, New York, NY 10065</li>--->
          </ul>
        </div><!-- .col -->
        <div class="col-md-6">
          <h2 class="contact__title">Send Us a Message</h2>
          <!--<div class="contact__desc">
            <p>Send us your question or feedbacks about our services or your plan, our consultant will solve the trouble. We look forward to serving your ideas!</p>
          </div>-->
           <form class="contact-form contact-form--no-padding">
              <div class="contact-form__body">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="contact-form__field contact-form__field--contact" placeholder="Name" name="name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="contact-form__field contact-form__field--contact" placeholder="Email" name="email" required>
                  </div>
                </div>
                <input type="tel" class="contact-form__field contact-form__field--contact" placeholder="Phone number" name="phone number">
                <textarea class="contact-form__field contact-form__comment contact-form__field--contact" cols="30" rows="4" placeholder="Comment" name="comment" required></textarea>
                
              </div><!-- .contact-form__body -->
              <div class="contact-form__footer">
                <input type="submit" class="contact-form__submit contact-form__submit--contact" name="submit" value="Send Message">
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section><!-- .contact -->
<!---<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 newsletter__content">
        <img src="images/icon_mail.png" alt="Newsletter" class="newsletter__icon">
        <div class="newsletter__text-content">
          <h2 class="newsletter__title">Newsletter</h2>
          <p class="newsletter__desc">Sign up for our newsletter to get up-to-date from us</p>
        </div>
      </div>

      <div class="col-md-6">
        <form action="http://boostifythemes.com/demo/html/realand/index.html" class="newsletter__form">
          <input type="email" class="newsletter__field" placeholder="Enter Your E-mail">
          <button type="submit" class="newsletter__submit">Subscribe</button>
        </form>
      </div>   
    </div>
  </div>
</section>-->
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