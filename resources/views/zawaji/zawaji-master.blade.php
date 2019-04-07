<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Zawaji Admin</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    @yield('css')
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{asset('assets/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/theme-style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('assets/css/dashboard1.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/fullcalendar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/client/bootstrap-slider.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--style-->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <style>
        nav, body, a,label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, span, option,button{
            font-family: DroidArabicKufiRegular, 'sans-serif' !important;
        }
    </style>
    <!--endstyle-->
</head>

<body class="skin-default fixed-layout rtl">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="site-loder">
    <div class="lode-wrap">
        <span></span>
        <span></span>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" style="height: 11%; background-color:#c74b6f">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-left animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">لديك رسائل</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{asset('assets/images/admin/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">مضمـــــون الرسالة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{asset('assets/images/admin/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">مضمـــــون الرسالة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{asset('assets/images/admin/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">مضمـــــون الرسالة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <li class="nav-item left-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" style="width: 30% !important">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" >
            <div class="user-profile">
                <div class="user-pro-body">
                    <div class="dropdown text-lg-center" style="margin-top: 25%">
                        <h3>احـصـل على العـــرض المنــــاسب</h3>
                        <h6>باختيار الفلتر المناسب</h6>
                    </div>
                </div>
            </div>
            <nav class="sidebar-nav" >
                <ul id="sidebarnav">
                    <li class="nav-small-cap">--- بخصوص القـاعـة</li>
                    <li> <a class="waves-effect waves-dark" href="/owner/add_party_room" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">قـاعة الافراح</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="/owner/calendar" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">رزنامة الافراح </span></a></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">الطلبات<span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/owner/delivered-order">المـؤكدة</a></li>
                            <li><a href="/owner/undelivered-order">الغير المـؤكدة</a></li>
                        </ul>
                    </li>
                    <div class="range-slider">
                        <input id="ex2" data-slider-id='ex1Slider' type="range" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                    </div>
                    <li class="nav-small-cap">--- الاعـدادات</li>
                    <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">تسجيل الخروج</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    @yield('content');
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/js/admin/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/admin/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('assets/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{asset('assets/js/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/morris.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{asset('assets/js/jquery.toast.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('assets/js/dashboard1.js')}}"></script>
<script src="{{asset('assets/js/admin/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/admin/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/client/bootstrap-slider.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
@yield('script');

</body>

</html>