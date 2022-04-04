<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="FT Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />
    <!-- Title -->
    <title> قالب مدیریتی ولکس    </title> 
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />
    <!-- Icons css -->
    <link href="assets/css/icons.css" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <!--  Sidebar css -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="assets/css-rtl/sidemenu.css">
    <!--- Style css -->
    <link href="assets/css-rtl/style.css" rel="stylesheet">
    <!--- Dark-mode css -->
    <link href="assets/css-rtl/style-dark.css" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="assets/css-rtl/skin-modes.css" rel="stylesheet">

    <!---Switcher css-->
    <link href="assets/switcher/css/switcher-rtl.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="main-body app sidebar-mini dark-theme">
    @include('admin.layouts.menu')

    <div class="main-content app-content">

        @include('admin.layouts.header')



        @yield('content')

       
    </div>
    @include('admin.layouts.footer')
    <!-- Footer closed -->
    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
    <!-- JQuery min js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ionicons js -->
    <script src="assets/plugins/ionicons/ionicons.js"></script>
    <!-- Moment js -->
    <script src="assets/plugins/moment/moment.js"></script>

    <!-- Rating js-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="assets/plugins/rating/jquery.barrating.js"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>
    <!--Internal Sparkline js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Scroll bar Js-->
    <script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- right-sidebar js -->
    <script src="assets/plugins/sidebar/sidebar-rtl.js"></script>
    <script src="assets/plugins/sidebar/sidebar-custom.js"></script>
    <!-- Eva-icons js -->
    <script src="assets/js/eva-icons.min.js"></script>
    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script><!-- Left-menu js-->
    <script src="assets/plugins/side-menu/sidemenu.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher-rtl.js"></script>

</body>

</html>
