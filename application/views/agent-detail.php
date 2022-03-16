<section class="single agents-single">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border ht-breadcrumbs--b-margin">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><a href="<?=base_url('agent')?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Agent</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page"><?=$tags->agnt_name?></span></li>
    </ul>

    <div class="single__wrapper agents-single__wrapper">
      <div class="row">
        <div class="col-md-9">
          <div class="single__inner agents-single__inner">
            <div class="single__avatar agents-single__avatar">
              <img src="<?=image_url().$tags->agnt_img?>" class="agents-single-img" alt="<?=$tags->agnt_img_alt?>">
            </div>

            <div class="single__detail agents-single__detail">
              <h3 class="agents-single__name"><?=$tags->agnt_name?></h4>
              <span class="famous-agents__position"><?=$tags->agnt_desg?></span>
              <ul class="famous-agents__contact agents-single__contact">
                <li class="famous-agents__phone"><i class="fa fa-phone fa-fw" aria-hidden="true"></i><a href="tel:<?=$tags->agnt_offc_number?>">Office : <?=$tags->agnt_offc_number?></a></li>
                <li class="famous-agents__phone"><i class="fa fa-phone fa-fw" aria-hidden="true"></i><a href="tel:<?=$tags->agnt_mob_number?>">Mobile: <?=$tags->agnt_mob_number?></a></li>
                <li class="famous-agents__phone"><i class="fas fa-hashtag fa-fw" aria-hidden="true"></i><a href="tel:<?=$tags->agnt_brn?>">BRN: <?=$tags->agnt_brn?></a></li>
              </ul>
              <ul class="agency__social agents-single__social">
          <li><a href="<?=$tags->agnt_fb_link?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="<?=$tags->agnt_twitter_link?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="<?=$tags->agnt_linkedin_link?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="<?=$tags->agnt_pinterest_link?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
              <?=$tags->agnt_description?>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <form action="" method="post" id="agent-frm" class="contact-form contact-form--bordered agents-single__contact-from property-single-agent">
            <div class="contact-form__header">
              <h3 class="contact-form__title">Contact Me</h3>
            </div>
            <div class="contact-form__body">
              <input type="text" class="contact-form__field" placeholder="Name" name="name" >
              <input type="text" class="contact-form__field" placeholder="Email" name="email" >
              <input type="hidden" name="mobile_number_hidden" value="">
              <input type="text" class="contact-form__field" placeholder="Phone number" name="mobile" id="mobile">
              <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="Message" name="message" ></textarea>
            </div>
            <div class="contact-form__footer">
              <input type="hidden" name="agent_name" value="<?=$tags->agnt_name?>">

              <input type="submit" class="contact-form__submit" name="agent_submit" value="Contact Agent">
              <div class="agent_msg"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>