

<section class="blog-single">
  <div class="container">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <li class="ht-breadcrumbs__item"><a href="<?=base_url()?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
      <li class="ht-breadcrumbs__item"><a href="<?=base_url('blog')?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Blog</span></a></li>
      <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page"><?=$blog_detail->blog_heading?></span></li>
    </ul><!-- ht-breadcrumb -->

    <div class="blog-single__main">
      <article>
        <div class="news__thumbnail--single">
          <img src="<?=image_url().$blog_detail->blog_img?>" alt="<?=$blog_detail->blog_img_alt_tag?>">
        </div><!-- .news__thumbnail--single -->

        <div class="news__wrapper">
          <div class="news__share">
            <span class="news__share-text">Share on</span>
            <ul class="news__share-list">
            <li class="news__share-item">
            <a href="javascript:void(0)"  onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=<?=$encoded_url?>')"  title="Facebook" class="news__share-link"><i class="ion-social-facebook"></i></a>
            </li>  
            <li class="news__share-item">
            <a href="javascript:void(0)"  onclick="javascript:genericSocialShare('http://twitter.com/share?text=<?=$blog_detail->meta_title?>&url=<?=$nonencoded_url?>')" title="Twitter"  class="news__share-link"><i class="ion-social-twitter"></i></a>
            </li>
            <li class="news__share-item">
            <a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$encoded_url?>')"  class="news__share-link"><i class="ion-social-linkedin"></i></a>
            </li>
            </ul><!-- .news__share-list -->
          </div><!-- .news__share -->
          <div class="news__inner">
            <div class="news__header">
              <h1 class="news__title--single"><?=$blog_detail->blog_heading?></h1>
              <!-- <span class="news__desc"><?=$blog_detail->blog_short_description?></span> -->
              <span class="news__meta news__meta-time news__meta-time--single">
                <span class="ion-ios-calendar-outline"></span> <?=date('M d, Y',strtotime($blog_detail->tstp))?>
              </span>
              <span class="news__meta news__meta-comment--single">
                <span class="ion-ios-chatboxes-outline"></span> 02 Comments
              </span>
            </div><!-- .news__header -->
            <div class="news__entry">
              <?=$blog_detail->blog_long_description?>
            </div><!-- .news__entry -->

            <div class="news__author">
              <div class="news__author-image">
                <img src="<?=image_url().$blog_detail->blog_author_img?>" alt="<?=$blog_detail->blog_author_img_alt?>">
              </div><!-- .news__author-image -->
              <div class="news__author-content">
                <h4 class="news__author-name"><?=$blog_detail->blog_author_name?></h4>
                <p class="news__author-desc"><?=$blog_detail->blog_author_descp?></p>
              </div><!-- .news__author-content -->
            </div><!-- .news__author -->
<?php
$blog_tag = json_decode( $blog_detail->blog_tags, true );
if(!empty($blog_tag)):
?>
<div class="news__tags">
<span><i class="ion-pricetags news__tags-icon"></i> Tags : </span>
<?php

foreach($blog_tag as $tags)
{
  $tag_val[]=ucfirst($tags['value']);
}
?>
<?=implode( ', ', $tag_val );?>

            </div><!-- news__tags -->
<?php endif;?>

          </div><!-- .news__inner -->
        </div><!-- news__wrapper -->

        <!-- <div id="respond" class="comment-respond">
          <h3 class="comment-respond-title">Leave Your Comment</h3>
          <form method="post" action="http://boostifythemes.com/demo/html/realand/blog_single.html" class="comment-form">
            <p class="comment-form-author">
              <input type="text" id="author" name="author" required placeholder="Name *" aria-required="true" class="comment-form-field">
            </p>
            <p class="comment-form-email">
              <input type="email" id="email" name="email" required placeholder="Email *" aria-required="true" class="comment-form-field">
            </p>
            <p class="comment-form-comment">
              <textarea name="" id="" cols="30" rows="4" required placeholder="Comment" aria-required="true" class="comment-form-field"></textarea>
            </p>
            <p class="form-submit">
              <button type="submit" class="comment-form-submit">Submit Now</button>
            </p>
          </form>
        </div> -->
      </article>
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
      </div>

      <div class="col-md-6">
        <form action="http://boostifythemes.com/demo/html/realand/index.html" class="newsletter__form">
          <input type="email" class="newsletter__field" placeholder="Enter Your E-mail">
          <button type="submit" class="newsletter__submit">Subscribe</button>
        </form>
      </div> 
    </div>
  </div>
</section>