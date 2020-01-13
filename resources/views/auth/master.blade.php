
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/login-register-lock.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <style>
        nav, body, a,label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, span, option,button{
            font-family: DroidArabicKufiRegular, 'sans-serif' !important;
        }
    </style>
</head>

<body class="skin-default fixed-layout rtl">
<div id="main-wrapper">
<header class="header fixed-header navbar-expand-lg navbar-dark flex-column flex-md-row bd-navbar">
    <nav class="navbar" style="color:#ffffff !important; background-color:#c74b6f; ">
        <a class="navbar-brand" href="{{route('zawaji.landing')}}" style="margin-left: 7%"><h3>حـفلتي</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <div class="col-md-8">
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item active" style="margin-left: 3%">
                        <a class="nav-link" href="{{route('zawaji.landing')}}">الرئيـسيــــة<span class="sr-only">(current)</span></a>
                    </li>
                    @if(auth()->user())
                        @if(auth()->user()->getRoleNames()[0] == 'owner')
                            {{--<li><a href="{{route('invitations.index')}}">ارسل دعوة</a></li>--}}
                            <li class="nav-item active" style="margin-left: 3%"><a class="nav-link" href="{{route('owner-party_room.index')}}"> لوحــة تحكـــم شركتك</a></li>
                        @elseif(auth()->user()->getRoleNames()[0] == 'admin')
                            <li class="nav-item active" style="margin-left: 3%"><a class="nav-link" href="{{route('admin.landing')}}">لوحــة تحكـــم الموقـع</a></li>
                        @else
                            <li class="nav-item active" style="margin-left: 3%"><a class="nav-link" href="{{route('zawaji.rooms')}}">احجـــــز قاعتك الآن</a></li>
                        @endif
                    @endif
                </ul>
            </div>
            <div class="row col-md-4">
                @if( auth()->guest())
                    <a class="nav-link" href="{{route('register')}}" ><button class="btn btn-outline-light">دخــــــول</button></a>
                    <a class="nav-link " href="{{route('login')}}"><button class="btn btn-outline-light">تسجيــل الدخــــــول</button></a>
                @else
                    <a class="nav-link" href="{{route('logout')}}" ><button class="btn btn-outline-light">الخــــروج</button></a>
                @endif
            </div>
        </div>
    </nav>
</header>
@yield('content')
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/js/admin/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/admin/bootstrap.min.js')}}"></script>
<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>

</body>

</html>