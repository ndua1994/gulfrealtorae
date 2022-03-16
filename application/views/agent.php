<section class="agents-with-info">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border ht-breadcrumbs--b-margin">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Agent</span></li>
    </ul><!-- ht-breadcrumb -->

    <h2 class="section__title">Agents with Info</h2>

    <div class="row">
 
      <?php foreach($agent as $agents):?>

      <div class="col-lg-3 col-sm-6">
        <div class="famous-agents__single">
          <div class="famous-agents__header">
            <img src="<?=image_url().$agents->agnt_img?>" class="agents-img-cong" alt="<?=$agents->agnt_img_alt?>">
            <ul class="famous-agents__social">
              <li><a href="<?=$agents->agnt_fb_link?>"><i class="fa fa-facebook" aria-hidden="true"></i>
              </a></li>
              <li><a href="<?=$agents->agnt_twitter_link?>"><i class="fa fa-twitter" aria-hidden="true"></i>
              </a></li>
              <li><a href="<?=$agents->agnt_linkedin_link?>"><i class="fa fa-linkedin" aria-hidden="true"></i>
              </a></li>
              <li><a href="<?=$agents->agnt_pinterest_link?>"><i class="fa fa-pinterest" aria-hidden="true"></i>
              </a></li>
            </ul><!-- .famous_agents__social -->
          </div><!-- .famous-agents__header -->
          <div class="famous-agents__content">
            <h4 class="famous-agents__name"><a href="<?=base_url('agent/').$agents->agnt_slug?>"><?=$agents->agnt_name?></a></h4>
            <span class="famous-agents__position"><?=$agents->agnt_desg?></span>
            <ul class="famous-agents__contact">
              <li class="famous-agents__phone"><i class="fa fa-phone fa-fw" aria-hidden="true"></i><a href="tel:<?=$agents->agnt_offc_number?>">Office: <?=$agents->agnt_offc_number?></a></li>
              <li class="famous-agents__phone"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i><a href="tel:<?=$agents->agnt_mob_number?>">Mobile: <?=$agents->agnt_mob_number?></a></li>
            </ul>
          </div>
        </div>
      </div>

    <?php endforeach;?>


    </div>
  </div>
</section>