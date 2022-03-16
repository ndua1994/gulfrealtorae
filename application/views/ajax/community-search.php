<section>
            <?php foreach($comm_search_view as $comm):?>
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
          <?php endforeach;?>
          </section>

          <div class="pagination"><?php echo $links; ?></div>