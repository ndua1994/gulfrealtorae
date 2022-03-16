<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title><?=$tags->meta_title?></title>
		<meta name="description" content="<?=$tags->meta_description?>" />
		<meta name="keyword" content="<?=$tags->meta_keyword?>"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<?=link_tag('https://keenthemes.com/metronic')?>
		<!--begin::Fonts-->
		<?=link_tag('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')?>
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<?=link_tag('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')?>
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
	
        <?=link_tag('assets/css/pages/error/error-6.css')?>	

		<?=link_tag('assets/plugins/custom/datatables/datatables.bundle.css')?>
		<?=link_tag('assets/plugins/global/plugins.bundle.css')?>
		<?=link_tag('assets/plugins/custom/prismjs/prismjs.bundle.css')?>
		<?=link_tag('assets/css/style.bundle.css')?>
		<?=link_tag('assets/css/custom.css')?>
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<?=link_tag('assets/css/themes/layout/header/base/light.css')?>
		<?=link_tag('assets/css/themes/layout/header/menu/light.css')?>
		<?=link_tag('assets/css/themes/layout/brand/dark.css')?>
		<?=link_tag('assets/css/themes/layout/aside/dark.css')?>
		<!--end::Layout Themes-->
		<?=link_tag('assets/media/logos/favicon.ico','shortcut icon')?>
		<script type="text/javascript">	
			var base_url='<?=base_url()?>';
		</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		