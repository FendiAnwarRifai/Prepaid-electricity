<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>@yield('title', 'APTL | Dashboard')</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Web font -->

	<!--begin:: Global Mandatory Vendors -->
	<link href="tampilan/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<link href="tampilan/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="tampilan/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Styles -->
	<link href="tampilan/assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Global Theme Styles -->

	<!--begin::Page Vendors Styles -->
	<link href="tampilan/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Page Vendors Styles -->
	<link rel="shortcut icon" href="tampilan/assets/demo/media/img/logo/favicon.ico" />

	<!-- form tambah token -->
	<link rel="stylesheet" type="text/css" href="form_tambahtoken/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_tambahtoken/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_tambahtoken/css/util.css">
	<link rel="stylesheet" type="text/css" href="form_tambahtoken/css/main.css">
	<!-- end form tambah token -->

	<link href="data_tabel/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">

		<!-- begin::Header -->
		<header id="m_header" class="m-grid__item		m-header " m-minimize="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
			<div class="m-header__top">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- begin::Brand -->
						<div class="m-stack__item m-brand">
							<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<!-- <a href="/" class="m-brand__logo-wrapper">
										<img alt="" src="tampilan/assets/demo/media/img/logo/logo.png" />
									</a> -->
									<div class="media">
										<div class="media-left media-middle">
											<img src="tampilan/assets/demo/media/img/logo/logo.png" class="media-object" style="width:60px">
										</div>
										<div class="media-body" id="juduls" style="color: black; margin-left: 20px; width: 400px; margin-top: 5px;">
											<h2 class="media-heading" id="judul">Aplikasi Penjualan Token Listrik</h2>
										</div>
									</div>

								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- begin::Responsive Header Menu Toggler-->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- end::Responsive Header Menu Toggler-->

									<!-- begin::Topbar Toggler-->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!--end::Topbar Toggler-->
								</div>
							</div>
						</div>

						<!-- end::Brand -->

						<!-- begin::Topbar -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										m-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-topbar__welcome">Hello,&nbsp;</span>
											<span class="m-topbar__username">{{ Auth::user()->name }}</span>
											<span class="m-topbar__userpic">
												<img src="tampilan/assets/app/media/img/users/user6.png" class="m--img-rounded m--marginless m--img-centered" alt="" />
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url(tampilan/assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
													<div class="m-card-user m-card-user--skin-dark">
														<div class="m-card-user__pic">
															<img src="tampilan/assets/app/media/img/users/user6.png" class="m--img-rounded m--marginless" alt="" />
														</div>
														<div class="m-card-user__details">
															<span class="m-card-user__name m--font-weight-500">{{ Auth::user()->name }}</span>
															<a href="" class="m-card-user__email m--font-weight-300 m-link">{{ Auth::user()->email }}</a>
														</div>
													</div>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav m-nav--skin-light">
															<li class="m-nav__section m--hide">
																<span class="m-nav__section-text">Section</span>
															</li>
															<li class="m-nav__item">
																<a href="profile{{ Auth::user()->id }}" class="m-nav__link">
																	<i class="m-nav__link-icon fa fa-user-cog"></i>
																	<span class="m-nav__link-title">
																		<span class="m-nav__link-wrap">
																			<span class="m-nav__link-text">My Profile</span>
																		</span>
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="change" class="m-nav__link">
																	<i class="m-nav__link-icon fas fa-key" aria-hidden="true"></i>
																	<span class="m-nav__link-text">Ganti Password</span>
																</a>
															</li>
															<li class="m-nav__separator m-nav__separator--fit">
															</li>
															<li class="m-nav__separator m-nav__separator--fit">
															</li>
															<li class="m-nav__item">
																<a href="{{ route('logout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">Logout</a>
																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	@csrf
																</form>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- end::Topbar -->
				</div>
			</div>
		</div>
		<div class="m-header__bottom">
			<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
				<div class="m-stack m-stack--ver m-stack--desktop">

					<!-- begin::Horizontal Menu -->
					<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
						<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
							<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
								
								<li class="m-menu__item  m-menu__item--active " aria-haspopup="true"><a href="/beranda" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text">Dashboard</span></a></li>

								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true">
									<a href="javascript:;" class="m-menu__link m-menu__toggle">
										@if($data->where('id_user','=',Auth::user()->id)->count() == 0)
										<span class="m-menu__item-here"></span>
										<span class="m-menu__link-text">Transaksi</span>
										@else
										<span class="m-menu__item-here"></span> 
										<span class="m-menu__link-title">
											<span class="m-menu__link-wrap">
												<span class="m-menu__link-text">Transaksi</span> 
												<span class="m-menu__link-badge">
													<span class="m-badge m-badge--danger">{{ $data->count() }}</span>
												</span>
											</span>
										</span>
										@endif
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
										<ul class="m-menu__subnav">
											<li class="m-menu__item " aria-haspopup="true">
												<a href="userpending" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-diagram"></i>
													<span class="m-menu__link-title"> 
														<span class="m-menu__link-wrap"> 
															<span class="m-menu__link-text"> Transaksi Pending</span>
															@if($data->count() == 0)

															@else
															<span class="m-badge m-badge--danger">{{$data->count()}}</span>
															@endif
														</span>
													</span>
												</a>
											</li>

											<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="detail_transaksi" class="m-menu__link "><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Detail Transaksi</span></a></li>

										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- end::Horizontal Menu -->
				</div>
			</div>
		</div>
	</header>

	<!-- end::Header -->

	<!-- begin::Body -->
	<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body" style="background-color: #e6e6e6;">
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
			<div class="m-content">
				@yield('content')
			</div>
		</div>
	</div>

	<!-- end::Body -->

	<!-- begin::Footer -->
	<footer class="m-grid__item m-footer ">
		<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
			<div class="m-footer__wrapper">
				<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
					<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
						<span class="m-footer__copyright">
							2019 Agustus &copy; Dibuat Oleh <a href="#" class="m-link">Fendi Anwar Rifa'i</a>
						</span>
					</div>
					<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
						<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">Dilarang Keras Mengcopy Atau Mencontoh Tanpa Seizin Pembuat</span>
								</a>
							</li>
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">Page User</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
	<i class="la la-arrow-up"></i>
</div>


<!-- end::Scroll Top -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<!--begin:: Global Mandatory Vendors -->
<script src="tampilan/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="tampilan/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="tampilan/vendors/moment/min/moment.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="tampilan/vendors/wnumb/wNumb.js" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="tampilan/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="tampilan/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="tampilan/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="tampilan/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="tampilan/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="tampilan/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="tampilan/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="tampilan/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="tampilan/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="tampilan/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="tampilan/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
<script src="tampilan/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="tampilan/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="tampilan/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="tampilan/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="tampilan/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="tampilan/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="tampilan/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="tampilan/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
<script src="tampilan/vendors/raphael/raphael.js" type="text/javascript"></script>
<script src="tampilan/vendors/morris.js/morris.js" type="text/javascript"></script>
<script src="tampilan/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
<script src="tampilan/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
<script src="tampilan/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="tampilan/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="tampilan/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="tampilan/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle -->
<script src="tampilan/assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="tampilan/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="tampilan/assets/app/js/dashboard.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
<!--end::Page Scripts -->
<!--begin::Page Vendors -->
<script src="data_tabel/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="data_tabel/assets/demo/custom/crud/datatables/basic/paginations.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<!-- form tambah token -->
<script src="form_tambahtoken/vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
<script src="form_tambahtoken/vendor/tilt/tilt.jquery.min.js"></script>
<!-- end form tambah token -->
</body>

<!-- end::Body -->
</html>