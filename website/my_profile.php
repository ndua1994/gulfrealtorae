<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>ReaLand</title>
	<meta charset="UTF-8">
	<meta name="description" content="ReaLand - Real Estate HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">
   <?php include 'common/header_link_index.php';?>
</head>

<body>
<?php include 'common/header.php';?>
<section class="my-profile">
    <div class="container">
        <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Pages</span></a></li>
            <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">My Profile</span></li>
        </ul><!-- .ht-breadcrumb -->

        <div class="my-profile__container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="bookmarked-listing__headline">Howdy, <strong>FelixDG!</strong></h2>
                    <div class="settings-block">
                        <span class="settings-block__title">Manage Account</span>
                        <ul class="settings">
                            <li class="setting setting--current"><a href="my_profile.html" class="setting__link"><i class="ion-ios-person-outline setting__icon"></i>My Profile</a></li>
                            <li class="setting"><a href="bookmarked_listing.html" class="setting__link"><i class="ion-ios-heart-outline setting__icon"></i>Bookmarked Listings</a></li>
                        </ul><!-- settings -->
                    </div><!-- .settings-block -->

                    <div class="settings-block">
                        <span class="settings-block__title">Manage Listing</span>
                        <ul class="settings">
                            <li class="setting"><a href="my_property.html" class="setting__link"><i class="ion-ios-home-outline setting__icon"></i>My Property</a></li>
                            <li class="setting"><a href="submit_property.html" class="setting__link"><i class="ion-ios-upload-outline setting__icon"></i>Submit New Property</a></li>
                            <li class="setting"><a href="package.html" class="setting__link"><i class="ion-ios-cart-outline setting__icon"></i>My Packages</a></li>
                        </ul><!-- settings -->
                    </div><!-- .settings-block -->

                    <div class="settings-block">
                        <ul class="settings">
                            <li class="setting"><a href="change_password.html" class="setting__link"><i class="ion-ios-unlocked-outline setting__icon"></i>Change Password</a></li>
                            <li class="setting"><a href="index-2.html" class="setting__link"><i class="ion-ios-undo-outline setting__icon"></i>Log Out</a></li>
                        </ul><!-- settings -->
                    </div><!-- .settings-block -->
                </div><!-- .col -->
                <form action="http://boostifythemes.com/demo/html/realand/my_profile.html">
                    <div class="col-md-4">
                        <label for="profile-first-name" class="my-profile__label">First Name</label>
                        <input type="text" value="FelixDG" class="my-profile__field" id="profile-first-name">

                        <label for="profile-last-name" class="my-profile__label">Last Name</label>
                        <input type="text" value="Haintheme" class="my-profile__field" id="profile-last-name">

                        <label for="profile-title" class="my-profile__label">Agent Title</label>
                        <input type="text" value="Haintheme" class="my-profile__field" id="profile-title">

                        <label for="profile-number" class="my-profile__label">Phone Number</label>
                        <input type="text" value="(222) 123-456" class="my-profile__field" id="profile-number">

                        <label for="profile-email" class="my-profile__label">Email</label>
                        <input type="email" value="haintheme@domain.com" class="my-profile__field" id="profile-email">

                        <label for="profile-twitter" class="my-profile__label">Twitter Address</label>
                        <input type="text" value="https://www.twitter.com/@haintheme" class="my-profile__field" id="profile-twitter">

                        <label for="profile-facebook" class="my-profile__label">Facebook Address</label>
                        <input type="text" value="https://www.facebook.com/haintheme" class="my-profile__field" id="profile-facebook">

                        <label for="profile-linkedin" class="my-profile__label">Linkedin Address</label>
                        <input type="text" value="https://www.linkedin.com/haintheme" class="my-profile__field" id="profile-linkedin">
                    </div><!-- .col -->
                        
                    <div class="col-md-5">
                        <label for="profile-introduce" class="my-profile__label">About Me</label>
                        <textarea id="profile-introduce" rows="20" class="my-profile__field">FelixDG is a handsome boy!</textarea>

                        <label for="profile-avatar" class="my-profile__label">Avatar</label>
                        <div class="my-profile__wrapper">
                            <input type="file">
                            <span><i class="ion-image"></i> Upload Avatar</span>
                        </div>

                        <button type="submit" class="my-profile__submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="js/infobox.js"></script>
<script src="js/custom.js"></script>
</body>
</html>