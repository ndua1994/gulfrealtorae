<section class="main-listing">
  <div class="section__header">
    <div class="section__header-overlay">
      <div class="container">
        <h1 class="section__title section__title--centered">Property For Offplan</h1>
        <ul class="ht-breadcrumbs ht-breadcrumbs--centered">
          <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
          <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Offplan Property</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main-listing__main">
    <div class="container">
      <div class="row">
          <div class="listing-sort listing-sort--main-listing">
            <div class="listing-sort__inner">
              <ul class="listing-sort__list">
                <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-list" aria-hidden="true" class="listing-sort__icon"></i></a></li>
                <li class="listing-sort__item"><a href="#" class="listing-sort__link listing-sort__link--active"><i class="fa fa-th-large" aria-hidden="true" class="listing-sort__icon"></i></a></li>
              </ul>
        
              <!--<span class="listing-sort__result">1-10 of 25 results </span>-->
        
              <p class="listing-sort__sort">
                <label for="sort-type" class="listing-sort__label"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Sort by </label>
                <select name="offplan_prop_sort"  class="ht-field listing-sort__field">
                  <option value="">Default</option>
                  <option value="desc" <?=($this->session->userdata('sort_rec')=='desc' ? 'selected' : '')?>>Price (Low to High)</option>
                  <option value="asc" <?=($this->session->userdata('sort_rec')=='asc' ? 'selected' : '')?>>Price (High to Low)</option>
                  <option value="is_featured" <?=($this->session->userdata('sort_rec')=='is_featured' ? 'selected' : '')?>>Featured</option>
                </select>
              </p>
            </div>
          </div>

         

   <section class="item-grid">
  <div class="container">
    <div class="row">

      <?php

        if(count($offplan)>0){
            foreach($offplan as $prop):?>
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
    <?php endforeach;
  }else{?>
<h2>No record found</h2>
<?php }?>




  
  
      
    </div>
       <div class="pagination"><?=$links?></div>
  </div>
</section>
</div>
</div>
</div>