
<section class="property">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><a href="<?=base_url('property/sale')?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Sale Property</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page"><?=$property_detail->prop_name?></span></li>
    </ul>
  </div>

  <div class="property__slider">
    <div class="container">
      <div class="property__slider-container property__slider-container--vertical">
        <ul class="property__slider-nav property__slider-nav--vertical">


        <?php
        foreach($prop_inner_images as $prop_inner_img):?>
        <li class="property__slider-item">
        <img src="<?=image_url().$prop_inner_img?>"> 
        </li>
        <?php endforeach;?>


      
        </ul>

        <div class="property__slider-main property__slider-main--vertical">
          <div class="property__slider-images">

          <?php
        foreach($prop_inner_images as $prop_inner_img):?>
        <div class="property__slider-image">
        <img src="<?=image_url().$prop_inner_img?>"> 
        </div>
        <?php endforeach;?>


          </div>

          <ul class="image-navigation">
            <li class="image-navigation__prev">
              <span class="ion-ios-arrow-left"></span>
            </li>
            <li class="image-navigation__next">
              <span class="ion-ios-arrow-right"></span>
            </li>
          </ul>

          <span class="property__slider-info"><i class="ion-android-camera"></i><span class="sliderInfo"></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="property__container">
    <div class="container">
      <div class="row">
        
        <main class="col-md-9">
          <div class="property__feature-container">
            <div class="property__feature">
              <h3 class="property__feature-title"><?=$property_detail->prop_name?></h3>
                  <p class="listing__price listing__price--open-houses"><?='AED '.number_format($property_detail->prop_price)?></p>
              <div class="property__feature-schedule">
                <ul class="property__feature-time-list">
                  <li class="property__feature-time-item"><?=$property_detail->prop_addr?></li>
                </ul>
                <?php if(!empty($property_detail->prop_brochure)):?>
                <div class="download_bro">
              <a id="link" href=".pdf" class="" download="" hidden=""></a>
              <button type="button" data-bname=".pdf" onclick="document.getElementById('link').href=this.getAttribute('data-bname');  Dat()" class="theme-btn btn-style-one">&nbsp;Download Brochure</button>
              </div>
              <?php endif;?>
              </div>
            </div>

            <div class="property__feature">
              <h3 class="property__feature-title property__feature-title--b-spacing">Property Description</h3>
              <?=$property_detail->prop_descp?>
            </div><!-- .property__feature -->

            <div class="property__feature">
              <h3 class="property__feature-title property__feature-title--b-spacing">Property Details</h3>
              <?=$property_detail->prop_details?>
            </div><!-- .property__feature -->

            <div class="property__feature">
             <?=$property_detail->prop_feature?>
            </div>

            <?php if(count($floor_plan_detail)>0):?>

     <div class="property__feature">
              <h3 class="property__feature-title property__feature-title--b-spacing">Floor Plans (<?=count($floor_plan_detail)?>)</h3>
              <?php
              foreach($floor_plan_detail as $key=>$floor_plan):
              ?>
              <div class="property__accordion">
                <div class="property__accordion-header">
                  <div class="property__accordion-textcontent">
                    <span class="property__accordion-title"><?=$floor_plan->floor_name?></span>
                    <ul class="property__accordion-stats">
                      <li class="property__accordion-figure"><span class="property__accordion-figure--cat">Size:</span> <?=$floor_plan->floor_size?></li>
                      <li class="property__accordion-figure"><span class="property__accordion-figure--cat">Rooms:</span> <?=$floor_plan->floor_size?></li>
                      <li class="property__accordion-figure"><span class="property__accordion-figure--cat">Baths:</span> <?=$floor_plan->floor_bath?></li>
                      <li class="property__accordion-figure"><span class="property__accordion-figure--cat">Prices:</span> <?=$floor_plan->floor_price?></li>
                    </ul>
                  </div>
                  <i class="fa fa-caret-up property__accordion-expand" aria-hidden="true"></i> 
                </div>

               <div id="carouselExampleControls<?=$key?>" class="carousel slide" data-ride="carousel" style=<?=($key>0 ? 'display:none' : '')?>>
                   <div class="carousel-inner">
                    <?php
                    $floor_images=explode(',',$floor_plan->floor_imgs);
                    foreach($floor_images as $fp_images):
                    ?>
                     <div class="carousel-item active">
                       <img class="d-block w-100" src="<?=base_url('admin_HCSrRaVt58Ezffv/uploads/').$fp_images?>">
                     </div>             
                     <?php endforeach;?>
                   </div>
                   <a class="carousel-control-prev" href="#carouselExampleControls<?=$key?>" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                    <a class="carousel-control-next" href="#carouselExampleControls<?=$key?>" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
            <?php endforeach;?>
           
            </div>

          <?php endif;?>


          
         <div class="property__feature">
              <h3 class="property__feature-title property__feature-title--b-spacing">Location</h3>
              <p><?=$property_detail->prop_loc_descp?></p>
              <?=$property_detail->prop_loc_map?>
            </div>
          
        <!--<div class="property__feature">
              <h3 class="property__feature-title property__feature-title--b-spacing">Master Plan</h3>
              <p>Spacious and grand, 3 bedroom, 2 bath (one en-suite) condo boasts 1,752 Sq Ft. Middle unit of a beautiful three-unit 1890's Victorian designed by William Armitage. Period details: high ceilings, ornate moldings, 2 fireplaces, stained glass, beveled glass transoms, hardwood floors. Spacious dining room, remodeled kitchen and wonderful deeded walk-out deck. Convenient in-unit laundry room, deeded parking & storage space.</p>
            </div>--->

            <div class="property__feature">
              <h3 class="property__feature-title property__feature-title--b-spacing">Schedule A Visit</h3>
              <div class="prop_msg"></div>
              <form class="property__form" action="" method="post" id="property-form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="property__form-wrapper">
                      <input type="text" name="schedule_date" class="property__form-field property__form-date" placeholder="Monday" data-format="l, F d, Y"  data-min-year="2017"  data-max-year="2020" data-translate-mode="true" data-modal="true" data-large-mode="true">
                      <span class="ion-android-calendar property__form-icon"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="property__form-wrapper">
                      <input type="text" name="schedule_time" class="property__form-field property__form-time" placeholder="07:30 AM">
                      <span class="ion-android-alarm-clock property__form-icon"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="name" class="property__form-field" placeholder="Your Name" autocomplete="off">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="email_id" class="property__form-field" placeholder="Your Email ID" autocomplete="off">
                  </div>
                  <div class="col-sm-12">
                    <textarea rows="4" name="message" class="property__form-field" placeholder="Message"></textarea>
                  </div>
                  <div class="col-sm-12">
                    <input type="hidden" name="prop_id" value="<?=$property_detail->prop_id?>">
                    <input type="hidden" name="property_type" value="Sale">
                    <input name="schedule_submit" type="submit" class="property__form-submit" value="Submit"></input>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </main>
        <aside class="col-md-3">
          <div class="widget__container">
            <!--<section class="widget">
              <form class="contact-form contact-form--white">
                
                <div class="contact-form__body">
                  <input type="text" class="contact-form__field" placeholder="Name" name="name" required>
                  <input type="email" class="contact-form__field" placeholder="Email" name="email" required>
                  <input type="tel" class="contact-form__field" placeholder="Phone number" name="phone number">
                  <textarea class="contact-form__field contact-form__comment" cols="30" rows="5" placeholder="Comment" name="comment" required></textarea>
                </div>

                <div class="contact-form__footer">
                  <input type="submit" class="contact-form__submit" name="submit" value="Contact Agent">
                </div>
              </form>
            </section>-->

            <section class="widget widget--white widget--padding-20">
              <h3 class="widget__title">Similar Homes</h3>

              <?php foreach($similar_property as $sim_prop):?>
              <div class="similar-home">
                <a href="<?=base_url().'property-detail/'.$sim_prop->prop_slug.''?>">
                  <div class="similar-home__image">
                    <div class="similar-home__overlay"></div>
                    <img src="<?=image_url().$sim_prop->prop_img?>" alt="<?=$sim_prop->prop_img_alt?>">
                    <span class="similar-home__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                  </div>
                  <div class="similar-home__content">
                    <h3 class="similar-home__title"><?=$sim_prop->prop_name?></h3>
                    <span class="similar-home__price"><?='AED '.number_format($sim_prop->prop_price)?></span>
                  </div>
                </a>
              </div>

            <?php  endforeach;?>

            
            </section>
            <?php
            $key_high_arr=explode(',',$property_detail->prop_key_highlights);
            if(count($key_high_arr)>1){
            ?>
            <section class="widget widget--white widget--padding-20 widget__news">
              <h3 class="widget__title">Key Highlights</h3>
              <ul class="widget__news-list">
              <?php 
              foreach($key_high_arr as $key_high):
              ?>
              <li class="widget__news-item"><a href="#"><?=$key_high?></a></li>
              <?php endforeach;?>
              </ul>
            </section>
          <?php }?>

          </div>
        </aside>
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .property__container -->
</section><!-- .property -->
