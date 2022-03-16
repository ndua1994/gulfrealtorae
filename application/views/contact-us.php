
<section class="contact">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Contact Us</span></li>
    </ul><!-- ht-breadcrumb -->

    <div class="contact__main">
      <div class="contact__map-container">
       <iframe src="<?=$contact_detail->contct_gmap?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div><!-- .contact__map-container -->

      <div class="row">
        <div class="col-md-6">
          <h2 class="contact__title"><?=$contact_detail->contct_heading?></h2>
          <div class="contact__desc">
            <p><?=$contact_detail->contct_short_descp?></p>
            <!--<p>From <strong>Monday</strong> to <strong>Friday, 8:00 am - 6:00 pm</strong></p>--->
          </div>
          <ul class="agency__contact">
            <li class="agency__contact-phone"><a href="tel:<?=$contact_detail->contct_number?>"><?=$contact_detail->contct_number?></a></li>
            <li class="agency__contact-website"><a href="<?=$contact_detail->contct_website?>"><?=$contact_detail->contct_website?></a></li>
            <li class="agency__contact-email"><a href="mailto:<?=$contact_detail->contct_email?>"><?=$contact_detail->contct_email?></a></li>
            <!--<li class="agency__contact-address">200 East 65th Street 17NO, New York, NY 10065</li>--->
          </ul>
        </div><!-- .col -->
        <div class="col-md-6">
          <h2 class="contact__title">Send Us a Message</h2>
          <!--<div class="contact__desc">
            <p>Send us your question or feedbacks about our services or your plan, our consultant will solve the trouble. We look forward to serving your ideas!</p>
          </div>-->
           <form id="contact-frm" class="contact-form contact-form--no-padding" action="" method="post">
              <div class="contact-form__body">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" class="contact-form__field contact-form__field--contact" placeholder="Name" autocomplete="off" >
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="email" class="contact-form__field contact-form__field--contact" placeholder="Email" autocomplete="off">
                  </div>
                </div>
                <input type="hidden" name="mobile_number_hidden">
                <input type="text" id="mobile" name="mobile" class="contact-form__field contact-form__field--contact" placeholder="Phone number" autocomplete="off">
                <textarea name="comment" class="contact-form__field contact-form__comment contact-form__field--contact" cols="30" rows="4" placeholder="Comment"></textarea>
                
              </div><!-- .contact-form__body -->
              <div class="contact-form__footer">
                <input type="submit" name="contact_submit" class="contact-form__submit contact-form__submit--contact" value="Send Message">
              </div>
              <div class="contact_msg"></div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>