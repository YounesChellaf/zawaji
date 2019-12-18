<!DOCTYPE html>
<html lang="ar" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Zawaji</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/theme-style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('assets/css/dashboard1.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/sub-header-style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    @yield('css')
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>

    {{--//bootstrap studio--}}
    <link rel="stylesheet" href="{{asset('assets/css/client/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/smoothproducts.css')}}">
    <link href="{{asset('assets/css/admin/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/daterangepicker.css')}}" rel="stylesheet">
{{--// end bootstrap studio--}}
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
</head>

<body class="skin-default fixed-layout rtl">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="header fixed-header navbar-expand-lg navbar-dark flex-column flex-md-row bd-navbar">
        <nav class="navbar" style="color:#ffffff !important; background-color:#c74b6f; ">
            <a class="navbar-brand" href="{{route('zawaji.landing')}}" style="margin-left: 7%"><h3>زواجـــــي</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <div class="col-md-8">
                <ul class="navbar-nav mr-auto" >
                    {{--<li class="nav-item active" style="margin-left: 3%">--}}
                        {{--<a class="nav-link" href="{{route('zawaji.landing')}}">الرئيـسيــــة<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item active" style="margin-left: 3%">--}}
                        {{--<a class="nav-link" href="{{route('zawaji.rooms')}}">قـــاعاتـنا</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item active" style="margin-left: 3%">--}}
                        {{--<a class="nav-link" href="{{route('zawaji.landing')}}">تواصـــل معنا</a>--}}
                    {{--</li>--}}
                </ul>
                </div>
                <div class="row col-md-4">
                    @if( auth()->guest())
                <a class="nav-link" href="#" ><button class="btn btn-outline-light">دخــــــول</button></a>
                <a class="nav-link " href="#"><button class="btn btn-outline-light">تسجيــل الدخــــــول</button></a>
                    @endif
                </div>
            </div>
        </nav>
    </header>


    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    @yield('content')
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
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
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
 {{--bootstrap studio--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{asset('assets/js/smoothproducts.min.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
@yield('js')
{{--bootstrap studio end--}}
{{--<script>--}}
    {{--$('.slider-for').slick({--}}
        {{--slidesToShow: 1,--}}
        {{--slidesToScroll: 1,--}}
        {{--arrows: false,--}}
        {{--fade: true,--}}
        {{--asNavFor: '.slider-nav'--}}
    {{--});--}}
    {{--$('.slider-nav').slick({--}}
        {{--slidesToShow: 3,--}}
        {{--slidesToScroll: 1,--}}
        {{--asNavFor: '.slider-for',--}}
        {{--dots: true,--}}
        {{--centerMode: true,--}}
        {{--focusOnSelect: true--}}
    {{--});--}}
    {{--$('.one-time').slick({--}}
        {{--dots: true,--}}
        {{--infinite: true,--}}
        {{--speed: 300,--}}
        {{--slidesToShow: 1,--}}
        {{--adaptiveHeight: true--}}
    {{--});--}}
    {{--$('.single-item').slick();--}}

{{--</script>--}}
</body>
</html>