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
    <link href="{{asset('assets/css/admin/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Page plugins css -->
    <!-- Color picker plugins css -->
    <!-- Date picker plugins css -->
    <link href="{{asset('assets/css/admin/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="{{asset('assets/css/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/daterangepicker.css')}}" rel="stylesheet">

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
                <ul class="navbar-nav my-lg-0" style="float: left !important;">
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
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
                <ul id="sidebarnav" style="margin-right: 10%">

                    <li>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-material">
                                    <label for="firstName1">المنطـــــــقة:</label>
                                    <input type="text" class="form-control" id="firstName1"> </div>
                            </div>
                        </div>
                    </li>
                    <div class="row">
                        <div class="col-md-10">
                            <label class="m-t-20">مـــــــن :</label>
                            <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label class="m-t-20">الـــــــى :</label>
                            <input type="text" class="form-control" placeholder="2017-06-04" id="mdate1">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3% ; margin-bottom: 15%">
                        <label class="m-t-20" style="margin-right: 3%">حـــــدد سعــــرك :</label>
                        <div class="range-slider col-md-10">
                            <input style="width: 100%" id="ex2" data-slider-id='ex1Slider' type="range" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                        </div>
                    </div>


                </ul>
                <div class="row" style="margin-right: 10%">
                    <button class="btn btn-danger" style="width: 80%"> ابحـــــــــث</button>
                </div>
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
<script type="text/javascript" src="{{asset('assets/js/client/range-slider.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="{{asset('assets/js/admin/bootstrap-datepicker.min.js')}}"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{asset('assets/js/admin/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/js/admin/daterangepicker.js')}}"></script>
<script src="{{asset('assets/js/admin/bootstrap-material-datetimepicker.js')}}"></script>
<!-- Clock Plugin JavaScript -->
<script>
    // MAterial Date picker
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#mdate1').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#mdate2').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#mdate3').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#mdate4').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#mdate5').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
@yield('script');

</body>

</html>