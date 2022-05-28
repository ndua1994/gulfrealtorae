<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
<!--begin::Logo-->
<a href="index.html">
<img alt="Logo" src="<?=base_url('assets/media/logos/logo-light.png')?>" />
</a>
<!--end::Logo-->
<!--begin::Toolbar-->
<div class="d-flex align-items-center">
<!--begin::Aside Mobile Toggle-->
<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
<span></span>
</button>
<!--end::Aside Mobile Toggle-->
<!--begin::Header Menu Mobile Toggle-->
<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
<span></span>
</button>
<!--end::Header Menu Mobile Toggle-->
<!--begin::Topbar Mobile Toggle-->
<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
<span class="svg-icon svg-icon-xl">
<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
</button>
<!--end::Topbar Mobile Toggle-->
</div>
<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
<!--begin::Page-->
<div class="d-flex flex-row flex-column-fluid page">
<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
<!--begin::Brand-->
<div class="brand flex-column-auto" id="kt_brand">
<!--begin::Logo-->
<a href="<?=base_url('login/dashboard')?>" class="brand-logo">
<img alt="Logo" src="<?=base_url('assets/media/logos/logo-light.png')?>" />
</a>
<!--end::Logo-->
<!--begin::Toggle-->
<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
<span class="svg-icon svg-icon svg-icon-xl">
<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
</button>
<!--end::Toolbar-->
</div>
<!--end::Brand-->
<!--begin::Aside Menu-->

<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
<!--begin::Menu Container-->
<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
<!--begin::Menu Nav-->
<ul class="menu-nav">
<li class="menu-item <?=active_method_single('dashboard')?>" aria-haspopup="true">

<a href="<?=base_url('login/dashboard')?>" class="menu-link">
<span class="svg-icon menu-icon">
	<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			<polygon points="0 0 24 0 24 24 0 24" />
			<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
			<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
		</g>
	</svg>
	<!--end::Svg Icon-->
</span>
<span class="menu-text">Dashboard</span>
</a>
</li>

<?php if($this->session->userdata('login_type_id')==1){?>
<li class="menu-item menu-item-submenu <?=active_class('user')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">User</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('user','add')?>" aria-haspopup="true">
<a href="<?=base_url('user/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('user','manage')?>" aria-haspopup="true">
<a href="<?=base_url('user/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>
<?php }?>


<li class="menu-item menu-item-submenu <?=active_class('meta_tag')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Meta Tag</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('meta_tag','add')?>" aria-haspopup="true">
<a href="<?=base_url('meta-tag/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('meta_tag','manage')?>" aria-haspopup="true">
<a href="<?=base_url('meta-tag/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>


</ul>
</div>
</li>



<li class="menu-item menu-item-submenu <?=active_class('property')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Property</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('property','add')?>" aria-haspopup="true">
<a href="<?=base_url('property/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('property','manage')?>" aria-haspopup="true">
<a href="<?=base_url('property/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>



<li class="menu-item menu-item-submenu <?=active_class('blog')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Blog</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('blog','add')?>" aria-haspopup="true">
<a href="<?=base_url('blog/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('blog','manage')?>" aria-haspopup="true">
<a href="<?=base_url('blog/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>



<li class="menu-item menu-item-submenu <?=active_class('agent')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Agent</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('agent','add')?>" aria-haspopup="true">
<a href="<?=base_url('agent/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('agent','manage')?>" aria-haspopup="true">
<a href="<?=base_url('agent/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>



<li class="menu-item menu-item-submenu <?=active_class('community')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Community</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('community','add')?>" aria-haspopup="true">
<a href="<?=base_url('community/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('community','manage')?>" aria-haspopup="true">
<a href="<?=base_url('community/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>


<li class="menu-item menu-item-submenu <?=active_class('virtual_tour')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Virtual Tour</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('virtual_tour','add')?>" aria-haspopup="true">
<a href="<?=base_url('virtual-tour/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('virtual_tour','manage')?>" aria-haspopup="true">
<a href="<?=base_url('virtual-tour/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>


<li class="menu-item menu-item-submenu <?=active_class('special_offer')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Special Offer</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('special_offer','add')?>" aria-haspopup="true">
<a href="<?=base_url('special-offer/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('special_offer','manage')?>" aria-haspopup="true">
<a href="<?=base_url('special-offer/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>

<li class="menu-item menu-item-submenu <?=active_class('pages')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
<!--end::Svg Icon-->
</span>
<span class="menu-text">Pages</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('pages','home')?>" aria-haspopup="true">
<a href="<?=base_url('pages/home')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Home</span>
</a>
</li>
<li class="menu-item <?=active_method('pages','about_us')?>" aria-haspopup="true">
<a href="<?=base_url('pages/about-us')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">About Us</span>
</a>
</li>
<li class="menu-item <?=active_method('pages','contact_us')?>" aria-haspopup="true">
<a href="<?=base_url('pages/contact-us')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Contact Us</span>
</a>
</li>
<li class="menu-item <?=active_method('pages','header_section')?>" aria-haspopup="true">
<a href="<?=base_url('pages/header-section')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Header Section</span>
</a>
</li>
<li class="menu-item <?=active_method('pages','footer_section')?>" aria-haspopup="true">
<a href="<?=base_url('pages/footer-section')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Footer Section</span>
</a>
</li>
</ul>
</div>
</li>




<li class="menu-item menu-item-submenu <?=active_class('upload_image')?>" aria-haspopup="true" data-menu-toggle="hover">
<a href="javascript:;" class="menu-link menu-toggle">

<span class="svg-icon menu-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"></rect>
<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
<rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1"></rect>
<path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero"></path>
</g>
</svg>
</span>
<span class="menu-text">Upload Image</span>
<i class="menu-arrow"></i>
</a>
<div class="menu-submenu">
<i class="menu-arrow"></i>
<ul class="menu-subnav">
<li class="menu-item <?=active_method('upload_image','add')?>" aria-haspopup="true">
<a href="<?=base_url('upload-image/add')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Add</span>
</a>
</li>
<li class="menu-item <?=active_method('upload_image','manage')?>" aria-haspopup="true">
<a href="<?=base_url('upload-image/manage')?>" class="menu-link">
<i class="menu-bullet menu-bullet-line">
<span></span>
</i>
<span class="menu-text">Manage</span>
</a>
</li>
</ul>
</div>
</li>



</ul>
<!--end::Menu Nav-->
</div>
<!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside-->
