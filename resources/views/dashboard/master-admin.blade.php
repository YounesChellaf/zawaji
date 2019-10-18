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
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/theme-style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('assets/css/dashboard1.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/fullcalendar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
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
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">زواجي لوحة التحكم</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" style="background-color:#c74b6f">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('assets/images/admin/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{asset('assets/images/admin/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{asset('assets/images/admin/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="{{asset('assets/images/admin/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item">
                        <form class="app-search d-none d-md-block d-lg-block">
                            <input type="text" class="form-control" placeholder="ابحث"/>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">اشعـــــارات</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle"><i class="ti-agenda"></i></div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">لديك طلــــب حجز قاعـة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">لديك طلــــب حجز قاعـة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">لديك طلــــب حجز قاعـة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="btn btn-danger btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>شخـــص آ</h5> <span class="mail-desc">لديك طلــــب حجز قاعـة</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link" href="javascript:void(0);"> <strong>اظهــــار كل الاشعـــــارات</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">لديك رسائل</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        @foreach(\App\Message::all() as $message)
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="{{asset('assets/images/admin/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>{{$message->name}}</h5> <span class="mail-desc">{{$message->subject}}</span> <span class="time">{{$message->created_at->format('H:i')}}</span> </div>
                                        </a>
                                        @endforeach
                                        <!-- Message -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class=""></i></a></li>
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
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User Profile-->
            <div class="user-profile">
                <div class="user-pro-body">
                    <div><img src="{{asset('assets/images/admin/2.jpg')}}" alt="user-img" class="img-circle"></div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{auth()->user()->first_name.' '.auth()->user()->last_name}}<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY" dir="rtl" >
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> حسابي</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> رسائلي</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> اعدادات</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="pages-login.html" class="dropdown-item"><i class="fa fa-power-off"></i>تسجيل الخروج</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark" href="/admin" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">احصـاءات حول الموقع</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('cities.index')}}" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">اضــافة مناطق</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="/admin/rooms" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">القاعات المسجلــة</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('users.index')}}" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">المستخدميــن</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.users-roles')}}" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">انواع المستخدميـن </span></a></li>
                    <li> <a class="waves-effect waves-dark" href="/admin/orders" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">الحجـــوزات </span></a></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">اعـــدادات عــامة</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('weddingType.index')}}">انـــواع الافـراح</a></li>
                            <li><a href="/admin/social-links">روابط التواصل بالموقع</a></li>
                        </ul>
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
<script src="{{asset('assets/js/datatables.min.js')}}"></script>
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

<!-- Chart JS -->
<script src="{{asset('assets/js/dashboard1.js')}}"></script>
<script src="{{asset('assets/js/admin/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/admin/moment.js')}}"></script>
<script src='{{asset('assets/js/admin/fullcalendar.min.js')}}'></script>
<script src="{{asset('assets/js/admin/cal-init.js')}}"></script>
<script>
    $(function() {
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions:
                    {
                        columns: [0, 1, 3, 4, 5]
                    }
            }
        ],

        "language": {
            "sProcessing": "جارٍ التحميل...",
            "sLengthMenu": "أظهر MENU مدخلات",
            "sZeroRecords": "لم يعثر على أي معلومة",
            "sInfo": "",
            "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 معلومة",
            "sInfoFiltered": "(منتقاة من مجموع MAX مُدخل)",
            "sInfoPostFix": "",
            "sSearch": "ابحث:",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "الأول",
                "sPrevious": "السابق",
                "sNext": "التالي",
                "sLast": "الأخير"
            }
        }
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

</script>
</body>
</html>