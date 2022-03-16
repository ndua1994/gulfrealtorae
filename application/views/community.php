 


 <div class="community-main-img">
      <img src="<?=base_url('assets/images')?>/community-hero-img.jpg">
    </div>
    <!--<div class="container-fluid">--->
     <div class="community-form-div">
      <form action="" method="post" class="community-form" action="" id="comm-search-frm">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="form-group">
             <input type="text" value="<?=(!empty($_SESSION['comm_name']) ? $_SESSION['comm_name'] : '')?>" id="comm" name="comm_search" class="form-control pxp-is-address" placeholder="Search Community">
              </div>
          </div>
       </div>
    </form>
  </div>
  </div>
<section class="main-listing">
  <div class="main-listing__main">
    <div class="container">
      <div class="row">
        <h1 class="section__title section__title--centered section__title--b-margin-40">Our Communities</h1>
        <aside class="col-md-4">
          <section class="widget main-listing__widget">
            <form id="community-frm" action="" method="post" class="contact-form contact-form--bordered contact-form--wild-sand">
              <div class="contact-form__header">
                <h3 class="contact-form__title">Drop Us a Line</h3>
              </div>
              
              <div class="contact-form__body">
                <input type="text" class="contact-form__field" placeholder="Name" name="name" autocomplete="off">
                <input type="text" class="contact-form__field" placeholder="Email" name="email" autocomplete="off">
                <input type="hidden" name="community_hidden">
                <input type="text" id="mobile" class="contact-form__field" placeholder="Mobile" name="mobile" autocomplete="off">
                <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="Comment" name="comment"></textarea>
              </div>

              <div class="contact-form__footer">
                <input type="submit" class="contact-form__submit" name="comm_submit" value="Send Message">
              </div>
              <div class="comm_msg"></div>
            </form>
          </section>
       <!--    <section class="widget main-listing__widget widget__news">
            <h3 class="widget__title">Dubai Top Communities</h3>
            <div class="row">
            <ul class="col-md-6 col-xs-6">
              <li class="top-com-name"><a href="#">Downtown Dubai</span></a></li>
              <li class="top-com-name"><a href="#">Dubai Hills Estate</span></a></li>
              <li class="top-com-name"><a href="#">Damac Hills</span></a></li>
              <li class="top-com-name"><a href="#">Dubai South</span></a></li>
              <li class="top-com-name"><a href="#">JBR</span></a></li>
            </ul>
            <ul class="col-md-6 col-xs-6">
              <li class="top-com-nub"><a href="#">50 Projects</span></a></li>
              <li class="top-com-nub"><a href="#">26 Projects</span></a></li>
              <li class="top-com-nub"><a href="#">32 Projects</span></a></li>
              <li class="top-com-nub"><a href="#">9 Projects</span></a></li>
              <li class="top-com-nub"><a href="#">6 Projects</span></a></li>
            </ul>
          </div>
          </section> -->
        </aside>

        <main class="col-md-8 comm_sec">
          <section>
            <?php
             if(count($community)>0):
             foreach($community as $comm):?>
            <div class="item-grid__container">
              <div class="listing listing--v2">
                <div class="item-grid__image-container item-grid__image-container--open-houses">
                  <a href="<?=base_url('/community/'.$comm->comm_slug.'')?>">
                    <div class="item-grid__image-overlay"></div>
                    <img src="<?=image_url().$comm->comm_img?>" alt="<?=$comm->comm_img_alt?>" class="listing__img">
                  </a>
                </div>

                <div class="item-grid__content-container item-grid__content-container--open-houses">
                  <div class="listing__content--open-houses">
                    <div class="listing__header">
                      <div class="listing__header-primary">
                        <h3 class="listing__title"><a href="<?=base_url('/community/'.$comm->comm_slug.'')?>"><?=$comm->comm_heading?></a></h3>
                        <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> <?=$comm->comm_loc?></p>
                        <p><?=$comm->comm_short_descp?></p>
                        </div>
                      <a href="<?=base_url('/community/'.$comm->comm_slug.'')?>"><button class="listing__logo" alt="Emaar Logo">Read More</button></a>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach;else:?>
          <h2>No record found</h2>

        <?php endif;?>

           

          </section>

         <div class="pagination"><?php echo $links; ?></div>

        </main>
      </div>
    </div>
  </div>
</section>