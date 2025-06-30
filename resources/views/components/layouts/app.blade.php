<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<!-- Mirrored from template.codexshaper.com/admin/dashkit/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jun 2025 05:54:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet House || Dashboard</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="web development agency">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jsvectormap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- choose one -->
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>


</head>

<body
    class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-3">
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="assets/pre-loader/bar-loader.gif" alt="loader">
    </div>


    <!-- End App Menu -->

    @if (request()->is('admin/*'))
        <livewire:admin.inc.header/>
        <livewire:admin.inc.sidebar/>
    @else
        <livewire:user.inc.header/>
        <livewire:user.inc.sidebar/> @endif


    {{ $slot }}

    <script data-cfasync="false"
        src="https://template.codexshaper.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/vendor/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jsvectormap/world-merc.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/flowbite.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.js') }}"></script>
    <script src="{{ asset('assets/js/component/app-menu-bar.js') }}"></script>
    <script src="{{ asset('assets/js/component/tab.js') }}"></script>
    <script src="{{ asset('assets/js/switcher.js') }}"></script>
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
