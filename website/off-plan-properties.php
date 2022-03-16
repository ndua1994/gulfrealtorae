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
<section class="my-property">
    <div class="container">
        <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
            <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Pages</span></a></li>
            <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">My Property</span></li>
        </ul>

        <div class="my-property__container">
            <div class="row">
                <div class="col-md-4">
                  <section class="widget">
            <form class="contact-form contact-form--bordered contact-form--wild-sand">
              <div class="contact-form__header">
                <h3 class="contact-form__title">Drop Us a Line</h3>
              </div>
              
              <div class="contact-form__body">
                <input type="text" class="contact-form__field" placeholder="Name" name="name" required>
                <input type="email" class="contact-form__field" placeholder="Email" name="email" required>
                <input type="tel" class="contact-form__field" placeholder="Phone number" name="phone number">
                <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="Comment" name="comment" required></textarea>
              </div>

              <div class="contact-form__footer">
                <input type="submit" class="contact-form__submit" name="submit" value="Send Message">
              </div>
            </form>
          </section>  
                </div>

                <div class="col-md-8">
                    <ul class="manage-list manage-list--my-property">
                        <!--<li class="manage-list__header">
                            <span class="manage-list__title"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Property</span>
                            <span class="manage-list__title"><i class="fa fa-calendar-o" aria-hidden="true"></i> Expiration Date</span>
                        </li>--->
                        <li class="manage-list__item">
                            <div class="manage-list__item-container">
                                <div class="manage-list__item-img">
                                    <a href="single_property_1.html">
                                        <img src="images/featured-img/samana-green.jpg" alt="Weston Hightpointe Place" class="listing__img">
                                    </a>
                                </div>
                        
                                <div class="manage-list__item-detail">
                                    <h3 class="listing__title"><a href="single_property_1.html">Samana Greens</a></h3>
                                    <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Arjan</p>
                                    <p class="listing__price">AED 2,285,500</p>
                                    <div class="feature-pro-btn-div">
                                    <button class="feature-Pro-btn">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="manage-list__expire-date">Year Completed: 2020</div>
                        </li>

                        <li class="manage-list__item">
                            <div class="manage-list__item-container">
                                <div class="manage-list__item-img">
                                    <a href="single_property_1.html">
                                        <img src="images/featured-img/emerald-hills.jpg" alt="Weston Hightpointe Place" class="listing__img">
                                    </a>
                                </div>
                        
                                <div class="manage-list__item-detail">
                                    <h3 class="listing__title"><a href="single_property_1.html">Emerald Hills</a></h3>
                                    <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Dubai Hills Estate</p>
                                    <p class="listing__price">AED 2,285,500</p>
                                    <div class="feature-pro-btn-div">
                                    <button class="feature-Pro-btn">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="manage-list__expire-date">Upcoming</div>

                        </li>

                        <li class="manage-list__item">
                            <div class="manage-list__item-container">
                                <div class="manage-list__item-img">
                                    <a href="single_property_1.html">
                                        <img src="images/featured-img/noor.jpg" alt="Weston Hightpointe Place" class="listing__img">
                                    </a>
                                </div>
                        
                                <div class="manage-list__item-detail">
                                    <h3 class="listing__title"><a href="single_property_1.html">Noor Townhouses</a></h3>
                                    <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Emaar South</p>
                                    <p class="listing__price">AED 2,285,500</p>
                                    <div class="feature-pro-btn-div">
                                    <button class="feature-Pro-btn">Read More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="manage-list__expire-date">Year Completed: 2024</div>
                         </li>

                    </ul>
                </div>
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