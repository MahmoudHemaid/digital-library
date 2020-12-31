<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
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
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Metronic | Login Page 6</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/login/login-6.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<div class="justify-content-center align-items-center align-items-center align-self-center col-md-6">
    <form class="form-horizontal" action='{{route('do_register')}}' method="POST">
    @csrf
    <fieldset>
        <div id="legend">
            <legend class="">Register</legend>
        </div>
        @include('dashboard.layouts.messages')
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="name">Name</label>
            <div class="form-group">
                <input value="{{old("name")}}" class="form-control form-control-last col-md-12" type="text" placeholder="Name" name="name">
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="form-group">
                <input value="{{old("email")}}" class="form-control form-control-last" type="email" placeholder="Email" name="email">
            </div>
        </div>
        <div class="control-group">
            <!-- Phone -->
            <label class="control-label" for="phone_number">Phone</label>
            <div class="form-group">
                <input autocomplete="phone" value="{{old("phone_number")}}" class="form-control form-control-last" type="text" placeholder="Phone number" name="phone_number">
            </div>
        </div>
        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="form-group">
                <input class="form-control form-control-last" type="password" placeholder="Password" name="password">
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password_confirmation">Confirm Password</label>
            <div class="form-group">
                <input class="form-control form-control-last" type="password" placeholder="Password" name="password_confirmation">
            </div>
        </div>
        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <input type="submit" class="btn btn-success" value="Register" />
            </div>
        </div>
        <div class="kt-login__account" style="margin-top: 16px; align-self: center">
								<span class="kt-login__account-msg">
									Do you have an account?
								</span>&nbsp;&nbsp;
            <a href="{{route("login")}}"  class="kt-login__account-link">Login</a>
        </div>
    </fieldset>
</form>
</div>
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
