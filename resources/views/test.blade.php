@include('layouts.header')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Home</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Index
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Kick start -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kick start your next project 🚀</h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p>
                            Getting start with your project custom requirements using a ready template which is quite difficult and time
                            taking process, Vuexy Admin provides useful features to kick start your project development with no efforts !
                        </p>
                        <ul>
                            <li>
                                Vuexy Admin provides you getting start pages with different layouts, use the layout as per your custom
                                requirements and just change the branding, menu &amp; content.
                            </li>
                            <li>
                                Every components in Vuexy Admin are decoupled, it means use use only components you actually need! Remove
                                unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Kick start -->

            <!-- Page layout -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">What is page layout?</h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p>
                            Starter kit includes pages with different layouts, useful for your next project to start development process
                            from scratch with no time.
                        </p>
                        <ul>
                            <li>Each layout includes required only assets only.</li>
                            <li>
                                Select your choice of layout from starter kit, customize it with optional changes like colors and branding,
                                add required dependency only.
                            </li>
                        </ul>
                        <div class="alert alert-primary" role="alert">
                            <div class="alert-body">
                                <strong>Info:</strong> Please check the &nbsp;<a class="text-primary" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layouts.html#layout-collapsed-menu" target="_blank">Layout documentation</a>&nbsp; for more layout options i.e collapsed menu, without menu, empty & blank.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Page layout -->

        </div>
    </div>
</div>
<!-- END: Content-->

<!-- BEGIN: Vendor JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/jquery/jquery.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/socket.io/socket.io.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/clipboard/clipboard.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/js/core/app-menu.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/components/components-alerts.js"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>


@include('layouts.footer')