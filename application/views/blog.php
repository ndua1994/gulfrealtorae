<section class="blog">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Blog</span></li>
    </ul><!-- ht-breadcrumb -->

    <div class="blog__main">
      <div class="row">
        <main class="col-md-8 col-md-main">
          <div class="row">

            <?php foreach($blog as $blogs){?>
            <div class="col-md-6">
              <article class="news__single--v2 news__single--b-margin">
                <div class="news__thumbnail">
                  <a href="<?=base_url('/blog/'.$blogs->blog_slug.'')?>">
                    <div class="news__thumbnail-overlay"></div>
                    <img src="<?=image_url().$blogs->blog_img?>" alt="News">
                  </a>
                </div>
    
                <div class="news__content">
                  <div class="news__body">
                    <span class="news__meta news__meta-time"><span class="ion-ios-calendar-outline"></span> <?=date('M d, Y',strtotime($blogs->tstp))?></span>
                    <h3 class="news__title"><a href="<?=base_url('/blog/'.$blogs->blog_slug.'')?>"><?=$blogs->blog_heading?></a></h3>
                    <p class="news__excerpt news__excerpt--v2"><?=$blogs->blog_short_description?></p>
                  </div>
    
                  <div class="news__footer">
                    <span class="news__meta news__meta-comments"></span>
                    <a href="<?=base_url('/blog/'.$blogs->blog_slug.'')?>" class="news__readmore">&plus; Read More</a>
                  </div>
                </div>
              </article>
            </div>
          <?php }?>

          </div><!-- .row -->

          <div class="pagination"><?php echo $links; ?></div>

       <!--    <ul class="pagination pagination--t-margin pagination--b-margin">
            <li class="pagination__item">
              <a href="#" class="pagination__link pagination__link_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </li>
            <li class="pagination__item"><a href="#" class="pagination__link pagination__link--selected">1</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
            <li class="pagination__item"><a href="#" class="pagination__link pagination__link_next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
          </ul> --><!-- pagination -->
        </main><!-- .col -->
        <aside class="col-md-4 col-md-sidebar">

          <section class="widget widget_thumbnail">
            <h3 class="widget__title widget__title--uppercase">Newest</h3>
            <ul class="widget_thumbnail__list">
              <?php foreach($new_blog as $blog):?>
              <li class="widget_thumbnail__item">
                <div class="widget_thumbnail__img">
                  <a href="<?=base_url('/blog/'.$blog->blog_slug.'')?>">
                    <img src="<?=image_url().$blog->blog_img?>" alt="<?=$blog->blog_img_alt_tag?>" width='100'>
                  </a>
                </div><!-- .widget_thumbnail-img -->
                <div class="widget_thumbnail__content">
                  <h4 class="widget_thumbnail__title"><a href="<?=base_url('/blog/'.$blog->blog_slug.'')?>" class="widget_thumbnail__link"><?=$blog->blog_heading?></a></h4>
                  <span class="widget_thumbnail__date"><?=date('M d,Y',strtotime($blog->tstp))?></span>
                </div><!-- .widget_thumbnail__content --> 
              </li><!-- .widget_thumbnail__item -->
              <?php endforeach;?>
            
            </ul><!-- widget_thumbnail__list -->
          </section><!-- .widget -->


          <section class="widget widget_gallery">
            <h3 class="widget__title widget__title--uppercase">Flickr</h3>
            <ul>
              <?php foreach($img_blog as $blog):?>
              <li>
               <a href="<?=base_url('/blog/'.$blog->blog_slug.'')?>">
                    <img src="<?=image_url().$blog->blog_img?>" alt="<?=$blog->blog_img_alt_tag?>">
                  </a>
              </li>
            <?php endforeach;?>
              
            </ul>
          </section>
        </aside>
      </div>
    </div>
  </div>
</section>
<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 newsletter__content">
        <img src="<?=base_url('assets/images')?>/icon_mail.png" alt="Newsletter" class="newsletter__icon">
        <div class="newsletter__text-content">
          <h2 class="newsletter__title">Newsletter</h2>
          <p class="newsletter__desc">Sign up for our newsletter to get up-to-date from us</p>
        </div>
      </div><!-- .col -->

      <div class="col-md-6">
        <form action="http://boostifythemes.com/demo/html/realand/index.html" class="newsletter__form">
          <input type="email" class="newsletter__field" placeholder="Enter Your E-mail">
          <button type="submit" class="newsletter__submit">Subscribe</button>
        </form>
      </div>  
    </div>
  </div>
</section>