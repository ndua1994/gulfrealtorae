<section class="about-us">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Virtual Tour</span></li>
    </ul>

    <div class="about-us__main">
      <div class="row">
        <main class="col-md-8 col-sm-12 col-md-main">
         <section>
      <div class="row">
      <?php foreach($view_virtualtour as $vt){?>
      <div class="col-md-6 col-sm-6 col-xs-12 vitual-main-div">
      <div class="upper-image-div">
        <img src="<?=image_url().$vt->vt_img?>">
      </div>
      <div class="lower-image-div-2">
        <a href="<?=$vt->vt_url?>"><img src="<?=base_url()?>assets/images/virtual-tour-w.png" class="vir-t"></a>
      </div>
      <a href="<?=$vt->vt_url?>"><h5 class="vtp-name"><?=$vt->vt_heading?></h5></a>
      </div>
      <?php }?>



        
      </div>

      <div class="pagination"><?php echo $links; ?></div>
      
  </section>
        </main>
        <aside class="col-md-4 col-xs-12 col-md-sidebar">
          <section class="widget">
           <form id="virtual-tour-frm" action="" method="post" class="contact-form contact-form--bordered contact-form--wild-sand">
              <div class="contact-form__header">
                <h3 class="contact-form__title">Drop Us a Line</h3>
              </div><!-- .contact-form__header -->
              
              <div class="contact-form__body">
                <input type="text" class="contact-form__field" placeholder="Name" name="name" autocomplete="off">
                <input type="text" class="contact-form__field" placeholder="Email" name="email" autocomplete="off">
                <input type="hidden" name="virtual_tour_hidden">
                <input type="text" id="mobile" class="contact-form__field" placeholder="Mobile" name="mobile" autocomplete="off">
                <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="Comment" name="comment"></textarea>
              </div>

              <div class="contact-form__footer">
                <input type="submit" class="contact-form__submit" name="vt_submit" value="Send Message">
              </div>
              <div class="vt_msg"></div>
            </form>
          </section><!-- .widget -->

         <!-- <section class="widget widget--wild-sand widget--padding-20 widget__news">
            <h3 class="widget__title">Get to Know</h3>
            <ul class="widget__news-list">
              <li class="widget__news-item"><a href="#">Outer Sunset Real Estate: <span>San Francisco Neighborhood Guide</span></a></li>
              <li class="widget__news-item"><a href="#">Pacific Heights Real Estate: <span>San Francisco CA Neighborhood</span></a></li>
              <li class="widget__news-item"><a href="#">Mission District San Francisco: <span>Authentic Community</span></a></li>
              <li class="widget__news-item"><a href="#">Hayes Valley Real Estate: <span>San Francisco CA Neighborhood</span></a></li>
            </ul>
          </section>--->
        </aside>
      </div>
    </div>
  </div>
</section>