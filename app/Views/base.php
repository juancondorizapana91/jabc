<!DOCTYPE html>
<html lang="es">

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Posgrado | Bolivia</title>
	<meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords" content="Craft, bootstrap, Angular 10, Vue, React, Laravel, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
	<link rel="canonical" href="Https://preview.keenthemes.com/start" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="metronic/assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url('metronic/assets/plugins/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('metronic/assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('metronic/assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />

	<!--end::Global Stylesheets Bundle-->
	<?php $js = str_replace('\\', '/', FCPATH . 'css/' . strtolower(explode('\\', (\Config\Services::router())->controllerName())[3]) . '/' . (\Config\Services::router())->methodName() . '.css');
	if (is_file($js)) : ?>
		<link rel="stylesheet" href="<?php echo base_url('css/' . strtolower(explode('\\', (\Config\Services::router())->controllerName())[3]) . '/' . (\Config\Services::router())->methodName() . '.css'); ?>">
	<?php endif; ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?= $menu ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" style="" class="header align-items-stretch">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Aside mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1" data-bs-toggle="tooltip" title="Show aside menu">
							<div class="btn btn-icon btn-active-light-primary" id="kt_aside_mobile_toggle">
								<!--begin::Svg Icon | path: icons/stockholm/Text/Menu.svg-->
								<span class="svg-icon svg-icon-2x mt-1">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
											<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::Aside mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="index.html" class="d-lg-none">
								<img alt="Logo" src="metronic/assets/media/logos/logo-3.svg" class="h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Wrapper-->
						<?= $header ?>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<?= $content ?>
				<!--end::Content-->
				<!--begin::Footer-->
				<?= $footer ?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/stockholm/Navigation/Up-2.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
					<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<script src="<?= base_url('metronic/assets/plugins/global/plugins.bundle.js') ?>"></script>
	<script src="<?= base_url('metronic/assets/js/scripts.bundle.js') ?>"></script>
	<script src="<?= base_url('js/pb.js') ?>"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<!-- <script src="?= base_url('metronic/assets/js/custom/widgets.js') ?>"></script>
	<script src="?= base_url('metronic/assets/js/custom/apps/chat/chat.js') ?>"></script>
	<script src="?= base_url('metronic/assets/js/custom/modals/create-app.js') ?>"></script>
	<script src="?= base_url('metronic/assets/js/custom/modals/upgrade-plan.js') ?>"></script> -->

	<script src="<?= base_url('metronic/assets/plugins/custom/datatables/datatables.bundle.js') ?>"></script>
	<script src="<?= base_url('metronic/assets/plugins/custom/form/jquery.form.min.js') ?>"></script>







	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
	<?php $js = str_replace('\\', '/', FCPATH . 'js/' . strtolower(explode('\\', (\Config\Services::router())->controllerName())[3]) . '/' . (\Config\Services::router())->methodName() . '.js');
	if (is_file($js)) : ?>
		<script src="<?php echo base_url('js/' . strtolower(explode('\\', (\Config\Services::router())->controllerName())[3]) . '/' . (\Config\Services::router())->methodName() . '.js'); ?>"></script>
	<?php endif; ?>
	<script type="text/javascript">
		$(function() {
			"use strict";
			<?php foreach ((\Config\Services::session())->getFlashdata() as $kmsg => $msg) : ?>
				$.toast({
					icon: `<?php echo ((is_numeric($kmsg) || empty($kmsg)) ? 'error' : $kmsg); ?>`,
					heading: `<?php echo ((is_numeric($kmsg) || empty($kmsg)) ? 'ERROR [' . $kmsg . ']' : 'INFORMACIÓN'); ?>`,
					text: `<?php echo $msg ?>`,
					position: `top-right`,
					showHideTransition: `plain`,
					allowToastClose: true,
					loaderBg: `#FFF`,
					hideAfter: 5000,
					stack: 5
				});
			<?php endforeach; ?>
		});
	</script>
</body>
<!--end::Body-->

</html>