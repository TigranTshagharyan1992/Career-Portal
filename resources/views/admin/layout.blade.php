<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Career Portal Admin')</title>

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/nav_sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/admin-interface-fix.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/form-controls.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/related-modal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/foldable-apps/foldable-apps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/list-filter-dropdown.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/modeltranslation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/sorl-thumbnail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/jquery.ui.tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/ckeditor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/tinymce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/json-widget.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive_rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_interface/css/admin-interface.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin-dashboard.css') }}">

    <!-- Inline styles stay as they are -->
    @yield('styles')

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body class="flat-theme admin-interface gt-administration-theme foldable-apps list-filter-sticky dashboard"
      data-admin-utc-offset="14400">

<!-- Header -->
<div id="header">
    <div id="branding">
        <h1 id="site-name">
            <a href="/admin/">
                <img class="logo" style="display:none;" src="{{ asset('images/GTlogo.png') }}">
            </a>
        </h1>
    </div>

    <div id="user-tools">
        <a href="{{route('admin.home')}}">Home</a>
        <a href="{{route('admin.about')}}">About</a>
        <a href="/">View webpage</a> /
        <a href="/admin/password_change/">Change password</a> /
        <a href="/admin/logout/">Log out</a>
    </div>
</div>

<!-- Main Content -->
@yield('content')

<!-- JS -->
<script src="{{ asset('admin/js/nav_sidebar.js') }}" defer></script>
<script src="{{ asset('admin_interface/foldable-apps/foldable-apps.js') }}"></script>
<script src="{{ asset('admin_interface/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('admin_interface/related-modal/related-modal.js') }}"></script>
@yield('scripts')

</body>
</html>
