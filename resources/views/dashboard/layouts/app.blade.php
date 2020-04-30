<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  $title?? '' }}</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" >
    <!--end::Fonts -->

    @yield('style')

</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
@include('dashboard.partials.header')

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->

        <!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="">
                        <img alt="Logo" src="{{asset('images/dashboard/yankadi2.png')}}" height="50px" width="170px" />
                    </a>
                </div>
                <div class="kt-aside__brand-tools">
                    <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
								<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
											<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
										</g>
									</svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
											<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
										</g>
									</svg></span>
                    </button>

                    <!--
			<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
			-->
                </div>
            </div>

            <!-- end:: Aside -->

            <!-- begin:: Aside Menu -->
             @yield('AsideMenu')
            <!-- end:: Aside Menu -->
        </div>

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
                  @yield('Header')
            <!-- end:: Header -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor " id="kt_content">

                <!-- begin:: Content Head -->
                      @yield('ContentHead')
                <!-- end:: Content Head -->

                <!-- begin:: Content -->
                  @yield('Content')
                <!-- end:: Content -->
            </div>

            <!-- begin:: Footer -->
                 @include('dashboard.partials.footer')
            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
    <div class="kt-quick-panel__nav">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>
    </div>
    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been received
                            </div>
                            <div class="kt-notification__item-time">
                                2 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-box-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-chart2 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Application has been approved
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-image-file kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New file has been uploaded
                            </div>
                            <div class="kt-notification__item-time">
                                5 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-drop kt-font-info"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New user feedback received
                            </div>
                            <div class="kt-notification__item-time">
                                8 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                System reboot has been successfully completed
                            </div>
                            <div class="kt-notification__item-time">
                                12 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been placed
                            </div>
                            <div class="kt-notification__item-time">
                                15 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item kt-notification__item--read">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Company meeting canceled
                            </div>
                            <div class="kt-notification__item-time">
                                19 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New report has been received
                            </div>
                            <div class="kt-notification__item-time">
                                23 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Finance report has been generated
                            </div>
                            <div class="kt-notification__item-time">
                                25 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-security kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer comment recieved
                            </div>
                            <div class="kt-notification__item-time">
                                2 days ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                                3 days ago
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                <div class="kt-notification-v2">
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-bell kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                5 new user generated report
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-box kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                2 new items submited
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                by Grog John
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-psd kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                79 PSD files generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-supermarket kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                $2900 worth producucts sold
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Total 234 items
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-paper-plane-1 kt-font-success"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-information kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                Database server is down
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                10 mins ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-mail-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                System report has been generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                <form class="kt-form">
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Notifications:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Case Tracking:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Support Portal:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Generate Reports:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Report Export:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Allow Data Collection:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Member singup:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Enable Customer Portal:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end::Quick Panel -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->


<!-- begin::Demo Panel -->
{{--<div id="kt_demo_panel" class="kt-demo-panel">--}}
{{--    <div class="kt-demo-panel__head">--}}
{{--        <h3 class="kt-demo-panel__title">--}}
{{--            Select A Demo--}}

{{--            <!--<small>5</small>-->--}}
{{--        </h3>--}}
{{--        <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>--}}
{{--    </div>--}}
{{--    <div class="kt-demo-panel__body">--}}
{{--        <div class="kt-demo-panel__item kt-demo-panel__item--active">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 1--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo1.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo1/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 2--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo2.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 3--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo3.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 4--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo4.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 5--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo5.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 6--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo6.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 7--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo7.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 8--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo8.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 9--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo9.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 10--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo10.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 11--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo11.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo11/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 12--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo12.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>--}}
{{--                    <a href="https://keenthemes.com/metronic/preview/demo12/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 13--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo13.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 14--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo14.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 15--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo15.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 16--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo16.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 17--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo17.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 18--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo18.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 19--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo19.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 20--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo20.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 21--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo21.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="kt-demo-panel__item ">--}}
{{--            <div class="kt-demo-panel__item-title">--}}
{{--                Demo 22--}}
{{--            </div>--}}
{{--            <div class="kt-demo-panel__item-preview">--}}
{{--                <img src="assets/media//demos/preview/demo22.jpg" alt="" />--}}
{{--                <div class="kt-demo-panel__item-preview-overlay">--}}
{{--                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">--}}
{{--            Buy Metronic Now!--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- end::Demo Panel -->

<!--Begin:: Chat-->
{{--<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="kt-chat">--}}
{{--                <div class="kt-portlet kt-portlet--last">--}}
{{--                    <div class="kt-portlet__head">--}}
{{--                        <div class="kt-chat__head ">--}}
{{--                            <div class="kt-chat__left">--}}
{{--                                <div class="kt-chat__label">--}}
{{--                                    <a href="#" class="kt-chat__title">Jason Muller</a>--}}
{{--                                    <span class="kt-chat__status">--}}
{{--												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active--}}
{{--											</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="kt-chat__right">--}}
{{--                                <div class="dropdown dropdown-inline">--}}
{{--                                    <button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="flaticon-more-1"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">--}}

{{--                                        <!--begin::Nav-->--}}
{{--                                        <ul class="kt-nav">--}}
{{--                                            <li class="kt-nav__head">--}}
{{--                                                Messaging--}}
{{--                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>--}}
{{--                                            </li>--}}
{{--                                            <li class="kt-nav__separator"></li>--}}
{{--                                            <li class="kt-nav__item">--}}
{{--                                                <a href="#" class="kt-nav__link">--}}
{{--                                                    <i class="kt-nav__link-icon flaticon2-group"></i>--}}
{{--                                                    <span class="kt-nav__link-text">New Group</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="kt-nav__item">--}}
{{--                                                <a href="#" class="kt-nav__link">--}}
{{--                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>--}}
{{--                                                    <span class="kt-nav__link-text">Contacts</span>--}}
{{--                                                    <span class="kt-nav__link-badge">--}}
{{--																<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>--}}
{{--															</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="kt-nav__item">--}}
{{--                                                <a href="#" class="kt-nav__link">--}}
{{--                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>--}}
{{--                                                    <span class="kt-nav__link-text">Calls</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="kt-nav__item">--}}
{{--                                                <a href="#" class="kt-nav__link">--}}
{{--                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>--}}
{{--                                                    <span class="kt-nav__link-text">Settings</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="kt-nav__item">--}}
{{--                                                <a href="#" class="kt-nav__link">--}}
{{--                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>--}}
{{--                                                    <span class="kt-nav__link-text">Help</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="kt-nav__separator"></li>--}}
{{--                                            <li class="kt-nav__foot">--}}
{{--                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>--}}
{{--                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}

{{--                                        <!--end::Nav-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">--}}
{{--                                    <i class="flaticon2-cross"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="kt-portlet__body">--}}
{{--                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="225">--}}
{{--                            <div class="kt-chat__messages kt-chat__messages--solid">--}}
{{--                                <div class="kt-chat__message kt-chat__message--success">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--												<span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/100_12.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>--}}
{{--                                        <span class="kt-chat__datetime">2 Hours</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        How likely are you to recommend our company<br> to your friends and family?--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--                                        <span class="kt-chat__datetime">30 Seconds</span>--}}
{{--                                        <a href="#" class="kt-chat__username">You</span></a>--}}
{{--                                        <span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/300_21.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--success">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--												<span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/100_12.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>--}}
{{--                                        <span class="kt-chat__datetime">30 Seconds</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        Ok, Understood!--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--                                        <span class="kt-chat__datetime">Just Now</span>--}}
{{--                                        <a href="#" class="kt-chat__username">You</span></a>--}}
{{--                                        <span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/300_21.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        You’ll receive notifications for all issues, pull requests!--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--success">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--												<span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/100_12.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>--}}
{{--                                        <span class="kt-chat__datetime">2 Hours</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--                                        <span class="kt-chat__datetime">30 Seconds</span>--}}
{{--                                        <a href="#" class="kt-chat__username">You</span></a>--}}
{{--                                        <span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/300_21.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--success">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--												<span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/100_12.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>--}}
{{--                                        <span class="kt-chat__datetime">30 Seconds</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">--}}
{{--                                    <div class="kt-chat__user">--}}
{{--                                        <span class="kt-chat__datetime">Just Now</span>--}}
{{--                                        <a href="#" class="kt-chat__username">You</span></a>--}}
{{--                                        <span class="kt-media kt-media--circle kt-media--sm">--}}
{{--													<img src="assets/media/users/300_21.jpg" alt="image">--}}
{{--												</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-chat__text">--}}
{{--                                        Most purchased Business courses during this sale!--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="kt-portlet__foot">--}}
{{--                        <div class="kt-chat__input">--}}
{{--                            <div class="kt-chat__editor">--}}
{{--                                <textarea placeholder="Type here..." style="height: 50px"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="kt-chat__toolbar">--}}
{{--                                <div class="kt_chat__tools">--}}
{{--                                    <a href="#"><i class="flaticon2-link"></i></a>--}}
{{--                                    <a href="#"><i class="flaticon2-photograph"></i></a>--}}
{{--                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="kt_chat__actions">--}}
{{--                                    <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@yield('script')
</body>

<!-- end::Body -->
</html>
