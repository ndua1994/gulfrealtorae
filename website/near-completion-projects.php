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
  <section class="map-container">
    <div id="map" class="map--default"></div>
    <ul class="map-controls">
      <li class="map-control map-reset"><i class="ion-ios-loop-strong map-control__icon"></i></li>
      <li class="map-control map-expand"><i class="ion-arrow-expand map-control__icon"></i></li>
      <li class="map-control map-prev"><i class="ion-ios-arrow-left map-control__icon"></i></li>
      <li class="map-control map-next"><i class="ion-ios-arrow-right map-control__icon"></i></li>
    </ul>
  </section>

  <section class="listing-search">
    <div class="container">
      <form action="http://boostifythemes.com/demo/html/realand/index.html" method="get" class="listing-search__form">
        <div class="row">
          <div class="col-sm-3">
            <label for="listing-type" class="listing-search__label">Listing Types</label>
            <select name="listing-type" id="listing-type" class="ht-field">
              <option value="All" selected>All Listing Type</option>
              <option value="For Rent">For Rent</option>
              <option value="For Sale">For Sale</option>
              <option value="Open House">Open House</option>
            </select>
          </div><!-- .col -->

          <div class="col-sm-3">
            <label for="offer-type" class="listing-search__label">Offer Type</label>
            <select name="offer-type" id="offer-type" class="ht-field">
              <option value="All" selected>All Offer Type</option>
              <option value="For Rent">For Rent</option>
              <option value="For Sale">For Sale</option>
              <option value="Open House">Open House</option>
            </select>
          </div><!-- .col -->

          <div class="col-sm-3">
            <label for="city" class="listing-search__label">Select Your City</label>
            <select name="city" id="city" class="ht-field">
              <option value="All" selected>All City</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
            </select>
          </div><!-- .col -->

          <div class="col-sm-3">
            <label for="listing-btn" class="listing-search__label listing-search__label--hidden">Advanced Search</label>
            <a href="#" id="listing-btn" class="listing-search__btn">Advanced Search</a>
          </div><!-- .col -->
        </div><!-- row -->

        <div class="listing-search__advance">
          <div class="row">
            <div class="col-sm-3">
              <label for="keywords" class="listing-search__label">Keyword</label>
              <input type="text" id="keywords" class="listing-search__field" placeholder="Type your keywords...">
            </div><!-- .col -->

            <div class="col-sm-3">
              <label for="min-price" class="listing-search__label">Min Price</label>
              <select name="min-price" id="min-price" class="ht-field">
                <option value="Unlimited" selected>Unlimited</option>
                <option value="$1,000">$1,000</option>
                <option value="$10,000">$10,000</option>
                <option value="$20,000">$20,000</option>
                <option value="$50,000">$50,000</option>
                <option value="$100,000">$100,000</option>
              </select>
            </div><!-- .col -->

            <div class="col-sm-3">
              <label for="bedrooms" class="listing-search__label">Bedrooms</label>
              <select name="bedrooms" id="bedrooms" class="ht-field">
                <option value="Any" selected>Any</option>
                <option value="1">01 bedroom(s)</option>
                <option value="2">02 bedroom(s)</option>
                <option value="3">03 bedroom(s)</option>
                <option value="4">04 bedroom(s)</option>
                <option value="5">05 bedroom(s)</option>
                <option value="6">06 bedroom(s)</option>
                <option value="7">07 bedroom(s)</option>
              </select>
            </div><!-- .col -->

            <div class="col-sm-3">
              <label for="bathrooms" class="listing-search__label">Bathrooms</label>
              <select name="bathrooms" id="bathrooms" class="ht-field">
                <option value="Any" selected>Any</option>
                <option value="1">01 bathroom(s)</option>
                <option value="2">02 bathroom(s)</option>
                <option value="3">03 bathroom(s)</option>
                <option value="4">04 bathroom(s)</option>
                <option value="5">05 bathroom(s)</option>
                <option value="6">06 bathroom(s)</option>
                <option value="7">07 bathroom(s)</option>
              </select>
            </div><!-- .col -->

            <div class="col-sm-3">
              <label for="property-size" class="listing-search__label">Property Size</label>
              <div class="listing-search__amount">
                <label for="property-amount">Sq.Ft</label>
                <span id="property-amount"></span>
              </div><!-- listing-search__amount -->
              <div id="property-size" class="listing-search__slider listing-search__property-size"></div>
            </div><!-- .col -->

            <div class="col-sm-3">
              <label for="lot-size" class="listing-search__label">Lot Size</label>
              <div class="listing-search__amount">
                <label for="lot-amount">Sq.Ft</label>
                <span id="lot-amount"></span>
              </div><!-- .listing-search__amount -->
              <div id="lot-size" class="listing-search__slider listing-search__lot-size"></div>
            </div><!-- .col -->

            <div class="col-sm-3">
              <label for="garages" class="listing-search__label">Garages</label>
              <select name="garages" id="garages" class="ht-field">
                <option value="Any" selected>Any</option>
                <option value="1">01 garage(s)</option>
                <option value="2">02 garage(s)</option>
                <option value="3">03 garage(s)</option>
                <option value="4">04 garage(s)</option>
              </select>
            </div><!-- .col --> 
            
            <div class="col-sm-3">
              <label for="tenure" class="listing-search__label">Tenure</label>
              <select name="tenure" id="tenure" class="ht-field">
                <option value="Any" selected>Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div><!-- .col --> 
          </div><!-- .row -->

          <div class="listing-search__more">
            <a class="listing-search__more-btn" href="#">Additional Features</a>

            <div class="listing-search__more-inner">
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="parking-garage" id="parking-garage" class="listing-search__more-field">
                    <label for="parking-garage" class="listing-search__more-label">Parking/Garage (26)</label>
                  </div><!-- .listing-search__more-wrapper -->

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="balcony-terrace" id="balcony-terrace" class="listing-search__more-field">
                    <label for="balcony-terrace" class="listing-search__more-label">Balcony/Terrace (24)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="garden" id="garden" class="listing-search__more-field">
                    <label for="garden" class="listing-search__more-label">Garden (26)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="porter-security" id="porter-security" class="listing-search__more-field">
                    <label for="porter-security" class="listing-search__more-label">Porter/Security (24)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="fireplace" id="fireplace" class="listing-search__more-field">
                    <label for="fireplace" class="listing-search__more-label">Fireplace (23)</label>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3">
                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="rural-secluded" id="rural-secluded" class="listing-search__more-field">
                    <label for="rural-secluded" class="listing-search__more-label">Rural/Secluded (21)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="air-conditioning" id="air-conditioning" class="listing-search__more-field">
                    <label for="air-conditioning" class="listing-search__more-label">Air Conditioning (22)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="lawn" id="lawn" class="listing-search__more-field">
                    <label for="lawn" class="listing-search__more-label">Lawn (4)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="swimming-pool" id="swimming-pool" class="listing-search__more-field">
                    <label for="swimming-pool" class="listing-search__more-label">Swimming Pool (4)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="barbecue" id="barbecue" class="listing-search__more-field">
                    <label for="barbecue" class="listing-search__more-label">Barbecue (23)</label>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3">
                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="microwave" id="microwave" class="listing-search__more-field">
                    <label for="microwave" class="listing-search__more-label">Microwave (24)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="tv-cable" id="tv-cable" class="listing-search__more-field">
                    <label for="tv-cable" class="listing-search__more-label">TV Cable (5)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="washer" id="washer" class="listing-search__more-field">
                    <label for="washer" class="listing-search__more-label">Washer (24)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="outdoor-shower" id="outdoor-shower" class="listing-search__more-field">
                    <label for="outdoor-shower" class="listing-search__more-label">Outdoor Shower (22)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="gym" id="gym" class="listing-search__more-field">
                    <label for="gym" class="listing-search__more-label">Gym (4)</label>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3">
                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="window-coverings" id="window-coverings" class="listing-search__more-field">
                    <label for="window-coverings" class="listing-search__more-label">Window Coverings (21)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="dryer" id="dryer" class="listing-search__more-field">
                    <label for="dryer" class="listing-search__more-label">Dryer (21)</label>
                  </div>

                  <div class="listing-search__more-wrapper">
                    <input type="checkbox" name="laundry" id="laundry" class="listing-search__more-field">
                    <label for="laundry" class="listing-search__more-label">Laundry (24)</label>
                  </div>
                </div>
              </div><!-- .row -->
            </div><!-- .listing-search__more-inner -->
          </div><!-- .listing-search__more -->
        </div><!-- .listing-search__advance -->
      </form><!-- .listing-search__form -->
    </div><!-- .container -->
  </section><!-- .listing-search -->

  <section class="listing-sort">
    <div class="container">
      <div class="listing-sort__inner">
        <ul class="listing-sort__list">
          <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-list" aria-hidden="true" class="listing-sort__icon"></i></a></li>
          <li class="listing-sort__item"><a href="#" class="listing-sort__link listing-sort__link--active"><i class="fa fa-th" aria-hidden="true" class="listing-sort__icon"></i></a></li>
          <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-large" aria-hidden="true" class="listing-sort__icon"></i></a></li>
        </ul>

        <span class="listing-sort__result">1-9 of 25 results</span>

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
  </section>

  <section class="main-listing__grid">
    <div class="container">
      <div class="row">
        <div class="col-md-4 item-grid__container">
        <div class="listing">
          <div class="item-grid__image-container">
            <a href="single_property_1.html">
              <div class="item-grid__image-overlay"></div>
              <img src="images/featured-img/aseel-villas.jpg" alt="Aseel Villas at Arabian Ranches" class="listing__img">
              <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            </a>
          </div>
          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7">
              <h3 class="listing__title"><a href="single_property_1.html">Aseel Villa</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Arabian Ranches</p>
              <p class="listing__price">AED 6,336,888</p>
              </div>
              <div class="col-md-5">
              <img src="images/emaar.png" class="proj-dev-logo-h">
              </div>
              </div>
              <div class="listing__details">
                <ul class="listing__stats">
                  <li><span class="listing__figure">4, 5, 6<sup>&plus;</sup></span> Beds</li>
                  <li><span class="listing__figure">4,622</span> Sq.ft</li>
                </ul>
                <a href="single_property_1.html" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
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
              <img src="images/featured-img/urbana.jpg" alt="Urbana III Townhouses" class="listing__img">
              <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            </a>
          </div>

          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7">
              <h3 class="listing__title"><a href="single_property_1.html">Urbana III Townhouses</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Emaar South</p>
              <p class="listing__price">AED 1,015,888<span class="listing__price--small"></span></p>
            </div>
               <div class="col-md-5">
                  <img src="images/emaar.png" class="proj-dev-logo-h">
               </div>
              </div>
              <div class="listing__details">
                <ul class="listing__stats">
                  <li><span class="listing__figure">2, 3</span> Beds</li>
                  <li><span class="listing__figure">1,159</span> Sq.ft</li>
                </ul>
                <a href="single_property_1.html" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
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
                <div class="col-md-7">
              <h3 class="listing__title"><a href="single_property_1.html">Zada Residences</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Business Bay, Dubai</p>
              <p class="listing__price"><a href="#">AED 699,999</a></p>
            </div>
               <div class="col-md-5">
                  <img src="images/emaar.png" class="proj-dev-logo-h">
               </div>
            </div>
              <div class="listing__details">
                <ul class="listing__stats">
                  <li><span class="listing__figure">1</span> Beds</li>
                  <li><span class="listing__figure">529</span> Sq.ft</li>
                </ul>
                <a href="single_property_1.html" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
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
              <img src="images/featured-img/samana-green.jpg" alt="Samana Greens at Arjan" class="listing__img">
              <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            </a>
          </div>

          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7">
              <h3 class="listing__title"><a href="single_property_1.html">Samana Greens</a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> Arjan, Dubai</p>
              <p class="listing__price"><a href="#">Call Us</a></p>
            </div>
               <div class="col-md-5">
                  <img src="images/emaar.png" class="proj-dev-logo-h">
               </div>
            </div>
              <div class="listing__details">
                <ul class="listing__stats">
                  <li><span class="listing__figure">Studios, 1 & 2</span> Beds</li>
                  <li><span class="listing__figure">424 - 1300</span> Sq.ft</li>
                </ul>
                <a href="single_property_1.html" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>

      <div class="item-grid--centered">
        <ul class="pagination">
          <li class="pagination__item">
            <a href="#" class="pagination__link pagination__link_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
          </li>
          <li class="pagination__item"><a href="#" class="pagination__link pagination__link--selected">1</a></li>
          <!--<li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
          <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>-->
          <li class="pagination__item"><a href="#" class="pagination__link pagination__link_next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
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