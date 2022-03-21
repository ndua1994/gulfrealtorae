
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<!-- Basic need -->
<title><?=$tags->meta_title?></title>
<meta charset="UTF-8">
<meta name="description" content="<?=$tags->meta_description?>">
<meta name="keywords" content="<?=$tags->meta_keyword?>">
<meta name="author" content="">
<link rel="profile" href="#">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="<?=base_url('assets/images')?>/favicon.ico" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone-no">
<?=link_tag('assets/css/plugins.css')?>
<?=link_tag('assets/css/style.css')?>
<?=link_tag('assets/css/auto_popup.css')?>
<!-- <?=link_tag('assets/css/intlTelInput.css')?> -->
<link rel="stylesheet" type="text/css" href="https://gulf-realtor.com/assist/css/intlTelInput.css">
<?=link_tag('assets/css/bootstrap.css')?>
<script type="text/javascript"> var base_url='<?=base_url()?>'</script>
</head>
<body>
<header class="header header--blue header--top">
  <div class="container">
    <div class="header__main">
      <div class="header__logo">
        <a href="<?=base_url()?>">
           <h1 class="screen-reader-text">Gulf Realtor</h1>
          <img src="<?=image_url().$header_details->logo_img?>" alt="<?=$header_details->logo_img_alt?>">
        </a>
        <span class="mobile-nub-icon"><i class="fa fa-phone" aria-hidden="true"></i> <?=$header_details->mobile_no?></span>
        <span class="mobile-nub-icon-2"><a href="tel:<?=$header_details->whatsapp_no?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></span>
      </div>
      <div class="nav-mobile">
        <a href="#" class="nav-toggle">
          <span></span>
        </a>
      </div>
      <div class="header__menu header__menu--v1">
        <ul class="header__nav">
          <li class="header__nav-item">
            <a href="<?=base_url()?>" class="header__nav-link">Home</a>
          </li>
          <li class="header__nav-item">
            <a href="<?=base_url('property')?>" class="header__nav-link">Property</a>
            <ul>
                <li><a href="<?=base_url('property/sale')?>">Sale Property</a></li>
                <li><a href="rent-properties.php">Rent Property</a></li>
                 <li><a href="off-plan-properties.php">Off-Plan Property</a></li>
              </ul>
          </li>
          <li class="header__nav-item">
           <a href="<?=base_url('community')?>" class="header__nav-link">Communities</a>
          </li>
          <li class="header__nav-item">
            <a href="javascript:void(0)" class="header__nav-link">About Us</a>
            <ul>
              <li><a href="<?=base_url('about-us')?>">About Us</a></li>
              <li><a href="<?=base_url('contact-us')?>">Contact</a></li>
            </ul>
          </li>
           <li class="header__nav-item"><a href="<?=base_url('agent')?>" class="header__nav-link">Agent</a></li>
            <li class="header__nav-item"><a href="<?=base_url('special-offer')?>" class="header__nav-link">Special Offer</a></li>
             <li class="header__nav-item"><a href="<?=base_url('virtual-tour')?>" class="header__nav-link">Virtual Tour</a></li>
            <li class="header__nav-item"><a href="<?=base_url('blog')?>" class="header__nav-link">Blog</a></li>
        </ul>
      </div>

      <a href="submit_property.php" class="header__cta">&plus; Submit Property</a>
    </div>
  </div>
</header>