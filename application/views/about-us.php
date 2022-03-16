
<section class="about-us">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">About Us</span></li>
    </ul><!-- ht-breadcrumb -->

    <div class="about-us__main">
      <div class="row">
        <main class="col-md-8 col-md-main">
          <div class="about-us__img">
            <img src="<?=image_url().$about_us->abt_img?>" alt="<?=$about_us->abt_img_alt?>?>">
          </div><!-- .about-us__img -->
          <?=$about_us->abt_description?>
        </main><!-- .col -->
        <aside class="col-md-4 col-md-sidebar">
          <section class="widget">

            <form action="" method="post" id="about-frm" class="contact-form contact-form--bordered contact-form--wild-sand">
              <div class="contact-form__header">
                <h3 class="contact-form__title">Drop Us a Line</h3>
              </div><!-- .contact-form__header -->
              
              <div class="contact-form__body">
                <input type="text" class="contact-form__field" placeholder="Name" name="name" autocomplete="off">
                <input type="text" class="contact-form__field" placeholder="Email" name="email" autocomplete="off">
                <input type="text" id="mobile" class="contact-form__field" placeholder="Phone number" name="mobile" autocomplete="off">
                <input type="hidden" name="mobile_hidden">
                <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="Comment" name="comment"></textarea>
              </div><!-- .contact-form__body -->

              <div class="contact-form__footer">
                <input type="submit" class="contact-form__submit" name="about_submit" value="Send Message">
              </div><!-- .contact-form__footer -->
              <div class="success_msg"></div>
            </form><!-- .contact-form -->
            
          </section><!-- .widget -->
        </aside>
      </div>
    </div>
  </div>
</section>