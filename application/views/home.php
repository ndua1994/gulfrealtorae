
  <section>
          <div class="pxp-hero vh-100">
                <div class="pxp-hero-bg pxp-cover pxp-cover-bottom" style="background-image: url(<?=image_url().$search_content->home_img?>);"></div>
                <div class="pxp-hero-opacity"></div>
                <div class="pxp-hero-caption">
                    <div class="container-fluid">
                        <h1 class="text-white"><?=$search_content->home_heading?></h1>

                        <form class="pxp-hero-search mt-4" action="<?=base_url('property/search')?>" method="post">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control pxp-is-address" name="search_property" placeholder="Search Property">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                   <img src="<?=base_url('assets/images')?>/get-a-call-img.png"> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

</section>
  
<?php if(count($featured_listing)>0):?>  
<section class="featured-listing featured-listing--white">
  <div class="container">
    <h2 class="section__title">Featured Listing</h2>
    <div class="featured-listing__slider">
    <div class="row">
    <?php foreach($featured_listing as $featured):?>
    <div class="col-sm-6 item-grid__container">
    <div class="listing">
    <img src="<?=image_url().$featured->prop_img?>" href="<?=base_url('property-detail/'.$featured->prop_slug.'')?>" alt="<?=$featured->prop_img_alt?>" class="listing__img">
    <ul class="listing__stats listing__stats--absolute listing__stats--secondary">
    <li><span class="listing__figure"><?=$featured->prop_beds?></span> Beds</li>
    <li><span class="listing__figure"><?=$featured->prop_sqfeet?></span> Sq.ft</li>
    </ul>
    <div class="listing__content listing__content--absolute listing__content--bg listing__content--less-b-padding">
    <div class="listing__header listing__header--no-b-margin">
    <div class="listing__header-primary">
    <h3 class="listing__title listing__title--white"><a href="<?=base_url('property-detail/'.$featured->prop_slug.'')?>"><?=$featured->prop_name?></a></h3>
    <p class="listing__location listing__location--no-b-margin"><span class="ion-ios-location-outline listing__location-icon"></span> <?=$featured->prop_addr?></p>
    </div>
    <p class="listing__price listing__price--no-b-margin"><a href="<?=base_url('property-detail/'.$featured->prop_slug.'')?>">AED <?=number_format($featured->prop_price)?></p>
    </div>
    </div>
    </div>
    </div>
  <?php endforeach;?>
    </div>
    </div>
  </div>
</section>
<?php endif;?>

<section class="main-search main-search--static">
<div class="container">
  <div class="main-search__container">
   

    <section class="listing-sort">
      <div class="listing-sort__inner">
        <ul class="listing-sort__list">
          <li class="listing-sort__item"><a href="javascript:void(0)" class="listing-sort__link"><i class="fa fa-th-list" aria-hidden="true" class="listing-sort__icon"></i></a></li>
          <li class="listing-sort__item"><a href="javascript:void(0)" class="listing-sort__link"><i class="fa fa-th" aria-hidden="true" class="listing-sort__icon"></i></a></li>
          <li class="listing-sort__item"><a href="javascript:void(0)" class="listing-sort__link listing-sort__link--active"><i class="fa fa-th-large" aria-hidden="true" class="listing-sort__icon"></i></a></li>
        </ul>

        <p class="listing-sort__sort">
          <label for="sort-type" class="listing-sort__label"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Sort by </label>
          <select name="sort_home" id="sort-type" class="ht-field listing-sort__field">
            <option value="">Default</option>
            <option value="desc" <?=($this->session->userdata('sort_home')=='desc' ? 'selected' : '')?>>Price (Low to High)</option>
            <option value="asc" <?=($this->session->userdata('sort_home')=='asc' ? 'selected' : '')?>>Price (High to Low)</option>
            <option value="is_featured" <?=($this->session->userdata('sort_home')=='is_featured' ? 'selected' : '')?>>Featured</option>
          </select>
        </p>
      </div>
    </section>

  </div>
</div>
</section> 
<section class="item-grid">
  <div class="container">
    <div class="row">

      <?php foreach($latest_property as $prop):?>
      <div class="col-md-4 item-grid__container">

        <div class="listing">
          <div class="item-grid__image-container">
            <a href="<?=base_url('property-detail/'.$prop->prop_slug.'')?>">
              <div class="item-grid__image-overlay"></div>
              <img src="<?=image_url().$prop->prop_img?>" href="<?=base_url('property/off-plan/'.$prop->prop_slug.'')?>" alt="<?=$prop->prop_img_alt?>" class="listing__img">
            </a>
          </div>
          <div class="item-grid__content-container">
            <div class="listing__content">
              <div class="row"> 
                <div class="col-md-7 col-xs-6">
              <h3 class="listing__title"><a href="<?=base_url('property-detail/'.$prop->prop_slug.'')?>"><?=$prop->prop_name?></a></h3>
              <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> <?=$prop->prop_addr?></p>
              <p class="listing__price"><?=$prop->prop_price?></p>
              </div>
              <div class="col-md-5 col-xs-6">
              <img src="<?=image_url().$prop->prop_dev_img?>" alt="<?=image_url().$prop->prop_dev_img_alt?>" class="proj-dev-logo-h">
              </div>
              </div>
              <div class="listing__details">
                <div class="row">
                <div class="col-xs-6 col-md-6">
                <ul class="listing__stats">
                  <li><span class="listing__figure"><?=$prop->prop_beds?><sup>&plus;</sup></span> Beds</li>
                  <li><span class="listing__figure"><?=$prop->prop_sqfeet?></span> Sq.ft</li>
                </ul>
              </div>
               <div class="col-xs-6 col-md-6">
                <a href="<?=base_url('property-detail/'.$prop->prop_slug.'')?>" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  
      
    </div>
  </div>
</section>

  <section>
    <div class="virtual-tour">
    <div class="container">
      <h3 class="vir-header">360 Degrees Google Virtual Tour</h3>
      <p class="vir-p">Get a better perspective of the properties with our 360 degree views</p>
      <div class="row">
        <?php foreach($virtual_tour as $vt){?>
        <div class="col-md-3 vitual-main-div">
          <div class="upper-image-div">
            <a href="emaar-aseel-villas.php"><img src="<?=image_url().$vt->vt_img?>" alt="<?=$vt->vt_img_alt?>"></a>
          </div>
          <div class="lower-image-div">
            <a href="emaar-aseel-villas.php"><img src="<?=base_url('assets/images')?>/virtual-tour-w.png" class="vir-t"></a>
          </div>
          <a href="<?=$vt->vt_url?>"><h5 class="vtp-name"><?=$vt->vt_heading?></h5></a>
        </div>
      <?php }?>
        
      </div>
    <div class="item-grid--centered">
      <a href="<?=base_url('virtual-tour')?>" class="item-grid__load-more">Load More Tour</a>
    </div>

      </div>
    </div>
  </section>

<!-- .features -->
<section class="new-listing--b-border">
 
<div class="categories">
    <div class="container">
        <div class="main-title">
            <h1 class="categories-title">Popular Communities</h1>
        </div>
        <div class="clearfix"></div>
        <div class="row wow">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg" style="background-image:url(<?=image_url().$community_one->comm_img?>);">
                                <div class="category-overlay">
                                    <div class="category-content">
                                         <div class="category-subtitle"><?=$community_one->total_property?> Properties</div>
                                        <h3 class="category-title">
                                            <a href="<?=base_url('community/'.$community_one->comm_slug.'')?>"><?=$community_one->comm_heading?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg" style="background-image:url(<?=image_url().$community_two->comm_img?>);">
                                <div class="category-overlay">
                                    <div class="category-content">
                                         <div class="category-subtitle"><?=$community_two->total_property?> Properties</div>
                                        <h3 class="category-title">
                                            <a href="<?=base_url('community/'.$community_two->comm_slug.'')?>"><?=$community_two->comm_heading?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-pad wow fadeInUp delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg" style="background-image:url(<?=image_url().$community_three->comm_img?>);">
                                <div class="category-overlay">
                                    <div class="category-content">
                                         <div class="category-subtitle"><?=$community_three->total_property?>  Properties</div>
                                         <h3 class="category-title"><a href="<?=base_url('community/'.$community_three->comm_slug.'')?>"><?=$community_three->comm_heading?> </a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg"  style="background-image:url(<?=image_url().$community_four->comm_img?>);">
                        <div class="category-overlay">
                            <div class="category-content">
                                <div class="category-subtitle"><?=$community_four->total_property?> Properties</div>
                                <h3 class="category-title"><a href="<?=base_url('community/'.$community_four->comm_slug.'')?>"><?=$community_four->comm_heading?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    <div class="item-grid--centered">
      <a href="<?=base_url('community')?>" class="item-grid__load-more">View All Communities</a>
    </div>
  </div>
</div>
</section>
<!-- <section class="featured-listing featured-listing--white">
  <div class="container">
    <h3 class="vir-header">Near Completion Projects</h3>
    <p class="vir-p">Looking for immediate possession - Here are some of newly built properties that are ready for occupation</p>

      <div class="row">
        <div class="col-sm-4 item-grid__container">
          <div class="listing">
            <img src="<?=base_url('assets/images')?>/featured-img/aseel-villas.jpg" alt="Aseel Villa by Emaar" class="listing__img">
            <span class="listing__favorite"><img src="<?=base_url('assets/images')?>/emaar.png"></span>
            <div class="listing__content listing__content--absolute listing__content--bg listing__content--less-b-padding">
              <div class="listing__header listing__header--no-b-margin">
                <div class="listing__header-primary">
                  <h3 class="listing__title listing__title--white"><a href="#">Aseel Villa</a></h3>
                  <p class="listing__location listing__location--no-b-margin"><span class="ion-ios-location-outline listing__location-icon"></span> Arabian Ranches, Dubai, UAE</p>
                </div>
                <p class="listing__price listing__price--no-b-margin">AED 8,574,888</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 item-grid__container">
          <div class="listing">
            <img src="<?=base_url('assets/images')?>/featured-img/expo-golf-v.jpg" alt="Emaar Expo Golf Villas – Phase V" class="listing__img">
            <span class="listing__favorite"><img src="<?=base_url('assets/images')?>/emaar.png"></span>
            <div class="listing__content listing__content--absolute listing__content--bg listing__content--less-b-padding">
              <div class="listing__header listing__header--no-b-margin">
                <div class="listing__header-primary">
                  <h3 class="listing__title listing__title--white"><a href="#">Expo Golf Villas – Phase V</a></h3>
                   <p class="listing__location listing__location--no-b-margin"><span class="ion-ios-location-outline listing__location-icon"></span> Emaar South, Dubai, UAE</p>
                </div>
                <p class="listing__price listing__price--no-b-margin">AED 635,888</p>
              </div>
            </div>
          </div>
        </div>
      <div class="col-sm-4 item-grid__container">
          <div class="listing">
            <img src="<?=base_url('assets/images')?>/featured-img/il-primo.jpg" alt="IL Primo at Downtown Dubai" class="listing__img">
            <span class="listing__favorite"><img src="<?=base_url('assets/images')?>/emaar.png"></span>
            <div class="listing__content listing__content--absolute listing__content--bg listing__content--less-b-padding">
              <div class="listing__header listing__header--no-b-margin">
                <div class="listing__header-primary">
                  <h3 class="listing__title listing__title--white"><a href="#">IL Primo Apartments</a></h3>
                  <p class="listing__location listing__location--no-b-margin"><span class="ion-ios-location-outline listing__location-icon"></span> Downtown Dubai, UAE</p>
                </div>
                <p class="listing__price listing__price--no-b-margin">AED 18,040,888</p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="item-grid--centered">
      <a href="near-completion-projects.php" class="item-grid__load-more">Load More</a>
    </div>

</div>
</section> -->
 <section class="offers-with-info">
  <div class="container offers-box">
  <h3 class="vir-header">Projects Special Offers</h3>
    <p class="vir-p">Looking for the best Home with Amazing Offers - here is the completed project information out of several developers and locations with attractive offers for you.</p>
    <div class="row">

      <?php foreach($special_offer as $offer):?>
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="famous-offers__single">
          <div class="famous-offers__header">
            <img src="<?=image_url().$offer->offer_img?>" alt="district1 diwali offers">
            <ul class="famous-offers__social">
              <button class="offer-btn"><a href="<?=$offer->project_url?>">Read More</a></button>
            </ul>
          </div>
            <a href="<?=$offer->project_url?>" class="agent-with-button__cta"><?=$offer->heading?></a>
        </div>
      </div>

    <?php endforeach;?>

    </div>
  </div>
   <div class="item-grid--centered">
      <a href="<?=base_url('special-offer')?>" class="item-grid__load-more">Explore More Offers</a>
    </div>
</section>
<div class="clearfix"></div>