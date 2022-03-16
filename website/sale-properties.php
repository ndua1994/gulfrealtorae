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
<section class="main-listing">
  <div class="section__header">
    <div class="section__header-overlay">
      <div class="container">
        <h1 class="section__title section__title--centered">Property For Sale</h1>
        <ul class="ht-breadcrumbs ht-breadcrumbs--centered">
          <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
          <li class="ht-breadcrumbs__item"><a href="#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Listing</span></a></li>
          <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">List View V3</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main-listing__main">
    <div class="container">
      <div class="row">
        <!--- <aside class="col-md-4">
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
          
         <section class="widget main-listing__widget widget__news">
            <h3 class="widget__title">Get to Know</h3>
            <ul class="widget__news-list">
              <li class="widget__news-item"><a href="#">Outer Sunset Real Estate: <span>San Francisco Neighborhood Guide</span></a></li>
              <li class="widget__news-item"><a href="#">Pacific Heights Real Estate: <span>San Francisco CA Neighborhood</span></a></li>
              <li class="widget__news-item"><a href="#">Mission District San Francisco: <span>Authentic Community</span></a></li>
              <li class="widget__news-item"><a href="#">Hayes Valley Real Estate: <span>San Francisco CA Neighborhood</span></a></li>
            </ul>
          </section>
        </aside>-->

        <!--<main class="col-md-8">-->
          <div class="listing-sort listing-sort--main-listing">
            <div class="listing-sort__inner">
              <ul class="listing-sort__list">
                <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-list" aria-hidden="true" class="listing-sort__icon"></i></a></li>
                <li class="listing-sort__item"><a href="#" class="listing-sort__link listing-sort__link--active"><i class="fa fa-th-large" aria-hidden="true" class="listing-sort__icon"></i></a></li>
              </ul>
        
              <span class="listing-sort__result">1-10 of 25 results</span>
        
              <p class="listing-sort__sort">
                <label for="sort-type" class="listing-sort__label"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Sort by </label>
                <select name="sort-type" id="sort-type" class="ht-field listing-sort__field">
                  <option value="default">Default</option>
                  <option value="low-price">Price (Low to High)</option>
                  <option value="high-price">Price (High to Low)</option>
                  <option value="featured">Featured</option>
                </select>
              </p>
            </div>
          </div>

          <!--<div class="main-listing__tags">
            <span class="main-listing__result">25 items found</span>
            <ul class="main-listing__list">
              <li class="main-listing__tag">
                <span class="main-listing__tag-label">Property Type:</span>House
                <a href="#" class="main-listing__tag-close">&times;</a>
              </li>

              <li class="main-listing__tag">
                <span class="main-listing__tag-label">City:</span>New York
                <a href="#" class="main-listing__tag-close">&times;</a>
              </li>
            </ul>
            <a href="#" class="main-listing__clear">Clear All</a>
          </div>--->

   <section class="item-grid">
  <div class="container">
    <div class="row">
      <div class="col-md-4 item-grid__container">
        <div class="listing">
          <div class="item-grid__image-container">
            <a href="single_property_1.html">
              <div class="item-grid__image-overlay"></div>
              <img src="images/featured-img/aseel-villas.jpg" href="emaar-aseel-villas.php" alt="Aseel Villas at Arabian Ranches" class="listing__img">
              <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            </a>
          </div>
          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7 col-xs-6">
              <h3 class="listing__title"><a href="emaar-aseel-villas.php">Aseel Villa</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Arabian Ranches</p>
              <p class="listing__price">AED 6,336,888</p>
              </div>
              <div class="col-md-5 col-xs-6">
              <img src="images/emaar.png" class="proj-dev-logo-h">
              </div>
              </div>
              <div class="listing__details">
                <div class="row">
                <div class="col-xs-6 col-md-6">
                <ul class="listing__stats">
                  <li><span class="listing__figure">4, 5, 6<sup>&plus;</sup></span> Beds</li>
                  <li><span class="listing__figure">4,622</span> Sq.ft</li>
                </ul>
              </div>
               <div class="col-xs-6 col-md-6">
                <a href="emaar-aseel-villas.php" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 item-grid__container">
        <div class="listing">
          <div class="item-grid__image-container">
            <a href="single_property_1.html">
              <div class="item-grid__image-overlay"></div>
              <img src="images/featured-img/urbana.jpg" href="emaar-urbana-III.php" alt="Urbana III Townhouses" class="listing__img">
              <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            </a>
          </div>

          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7 col-xs-6">
              <h3 class="listing__title"><a href="emaar-urbana-III.php">Urbana III Townhouses</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Emaar South</p>
              <p class="listing__price">AED 1,015,888<span class="listing__price--small"></span></p>
            </div>
               <div class="col-md-5 col-xs-6">
                  <img src="images/emaar.png" class="proj-dev-logo-h">
               </div>
              </div>
              <div class="listing__details">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                <ul class="listing__stats">
                  <li><span class="listing__figure">2, 3</span> Beds</li>
                  <li><span class="listing__figure">1,159</span> Sq.ft</li>
                </ul>
              </div>
              <div class="col-md-6 col-xs-6">
                <a href="emaar-urbana-III.php" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 item-grid__container">
        <div class="listing">
          <div class="item-grid__image-container">
            <a href="single_property_1.html">
              <div class="item-grid__image-overlay"></div>
              <img src="images/featured-img/zada.jpg" alt="Zada Apartments" class="listing__img">
              <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            </a>
          </div>

          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7 col-xs-6">
              <h3 class="listing__title"><a href="single_property_1.html">Zada Residences</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Business Bay, Dubai</p>
              <p class="listing__price"><a href="#">AED 699,999</a></p>
            </div>
               <div class="col-md-5 col-xs-6">
                  <img src="images/emaar.png" class="proj-dev-logo-h">
               </div>
            </div>
              <div class="listing__details">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                <ul class="listing__stats">
                  <li><span class="listing__figure">1</span> Beds</li>
                  <li><span class="listing__figure">529</span> Sq.ft</li>
                </ul>
              </div>
              <div class="col-md-6 col-xs-6">
                <a href="single_property_1.html" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

          <ul class="pagination pagination--t-margin">
            <li class="pagination__item">
              <a href="#" class="pagination__link pagination__link_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </li>
            <li class="pagination__item"><a href="#" class="pagination__link pagination__link--selected">1</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link pagination__link_next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
          </ul>
        </main>
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