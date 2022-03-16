<section class="offers-with-info">
  <div class="container offers-box">
  <h3 class="vir-header">Projects Special Offers</h3>
    <p class="vir-p">Looking for the best Home with Amazing Offers - here is the completed project information out of several developers and locations with attractive offers for you.</p>
    <div class="row">

      <?php foreach($special_offer as $offer):?>
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="famous-offers__single">
          <div class="famous-offers__header">
            <img src="<?=image_url().$offer->offer_img?>" alt="<?=$offer->offer_img_alt?>">
            <ul class="famous-offers__social">
              <button class="offer-btn"><a href="<?=$offer->project_url?>">Read More</a></button>
            </ul>
          </div>
            <a href="<?=$offer->project_url?>" class="agent-with-button__cta"><?=$offer->heading?></a>
        </div>
      </div>
    <?php endforeach;?>

     


    </div>

 <div class="pagination"><?php echo $links; ?></div>
  </div>

</section> 
