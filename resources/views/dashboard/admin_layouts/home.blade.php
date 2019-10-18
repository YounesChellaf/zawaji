@extends('dashboard.master-admin')
@section('css')
    <link href="{{asset('assets/css/admin/dashboard3.css')}}dist/css/pages/" rel="stylesheet">
@endsection
@section('content')
    <div class="page-wrapper" style="width: 85% !important;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">الرئـــــيسية</h4>
                </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>الـزوار</small>
                                    <h2><i class="ti-arrow-up text-success"></i> 1064</h2>
                                    <div id="sparklinedash"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>القاعـات المسجلـة</small>
                                    <h2><i class="ti-arrow-up text-purple"></i> {{\App\Party_room::all()->count()}}</h2>
                                    <div id="sparklinedash2"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>طلبات الحجـز</small>
                                    <h2><i class="ti-arrow-up text-info"></i>{{\App\Reservation::all()->count()}}</h2>
                                    <div id="sparklinedash3"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>الطلبات المقبولة</small>
                                    <h2><i class="ti-arrow-down text-danger"></i>{{\App\Reservation::accepted_invitation_rate()}}%</h2>
                                    <div id="sparklinedash4"></div>
                                </div>
                            </div>
                            <ul class="list-inline font-12 text-center">
                                <li><i class="fa fa-circle text-cyan"></i> Site A</li>
                                <li><i class="fa fa-circle text-primary"></i> Site B</li>
                                <li><i class="fa fa-circle text-purple"></i> Site C</li>
                            </ul>
                            <div id="morris-area-chart" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- Campaign -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <!-- column -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">المستخدمين العاديين</h5>
                                    <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                        <span class="display-5 text-info"><i class="icon-people"></i></span>
                                        <a href="javscript:void(0)" class="link display-5 ml-auto">23</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">اصحاب القاعات</h5>
                                    <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                        <span class="display-5 text-purple"><i class="icon-folder"></i></span>
                                        <a href="javscript:void(0)" class="link display-5 ml-auto">169</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">OPEN PROJECTS</h5>
                                    <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                        <span class="display-5 text-primary"><i class="icon-folder-alt"></i></span>
                                        <a href="javscript:void(0)" class="link display-5 ml-auto">311</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">NEW INVOICES</h5>
                                    <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                        <span class="display-5 text-success"><i class="icon-wallet"></i></span>
                                        <a href="javscript:void(0)" class="link display-5 ml-auto">117</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="news-slide m-b-15">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active carousel-item">
                                    <div class="overlaybg"><img src="../assets/images/news/slide1.jpg" class="img-fluid" /></div>
                                    <div class="news-content carousel-caption"><span class="label label-danger label-rounded">Primary</span>
                                        <h4>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)">Read More</a></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="overlaybg"><img src="../assets/images/news/slide1.jpg" /></div>
                                    <div class="news-content carousel-caption"><span class="label label-primary label-rounded">Primary</span>
                                        <h4>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)">Read More</a></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="overlaybg"><img src="../assets/images/news/slide1.jpg" /></div>
                                    <div class="news-content carousel-caption"><span class="label label-success label-rounded">Primary</span>
                                        <h4>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Campaign -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Today's Schedule and sales overview -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex m-b-40 align-items-center no-block">
                                <h5 class="card-title ">SALES DIFFERENCE</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12">
                                        <li><i class="fa fa-circle text-cyan"></i> SITE A</li>
                                        <li><i class="fa fa-circle text-primary"></i> SITE B</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart2" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">SALES DIFFERENCE</h5>
                                    <div class="row">
                                        <div class="col-6  m-t-30">
                                            <h1 class="text-primary">$647</h1>
                                            <p class="text-muted">APRIL 2017</p>
                                            <b>(150 Sales)</b> </div>
                                        <div class="col-6">
                                            <div id="sales1" class="text-right"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">VISIT STATASTICS</h5>
                                    <div class="row">
                                        <div class="col-6  m-t-30">
                                            <h1 class="text-info">$347</h1>
                                            <p class="light_op_text">APRIL 2017</p>
                                            <b class="">(150 Sales)</b> </div>
                                        <div class="col-6">
                                            <div id="sales2" class="text-right"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales Chart and browser state-->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection