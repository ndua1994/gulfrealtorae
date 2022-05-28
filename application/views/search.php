<section class="main-listing">
  <div class="section__header">
    <div class="section__header-overlay">
      <div class="container">
        <h1 class="section__title section__title--centered">Search Result for : <?=$search_property?></h1>
        <ul class="ht-breadcrumbs ht-breadcrumbs--centered">
          <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
          <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Search</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main-listing__main">
    <div class="container">
      <div class="row">
    
         

   <section class="item-grid">
  <div class="container">
    <div class="row">

 

      <?php
      if($search_count[0]->total>0){
      foreach($search_prop as $prop):?>
      <div class="col-md-4 item-grid__container">

      <div class="listing">
      <div class="item-grid__image-container">
      <a href="<?=base_url('property-detail/'.$prop->prop_slug.'')?>">
      <div class="item-grid__image-overlay"></div>
      <img src="<?=image_url().$prop->prop_img?>" href="<?=base_url('property/rent-property/'.$prop->prop_slug.'')?>" alt="<?=$prop->prop_img_alt?>" class="listing__img">
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
      }
      else{?>
      <h2>No record found</h2>
      <?php }?>




  
  
      
    </div>
      
  </div>
</section>
</div>
</div>
</div>