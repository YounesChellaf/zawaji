@extends('dashboard.master-admin')
@section('css')
    <link href="{{asset('assets/css/admin/dashboard3.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="page-wrapper">
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
                                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small>المستخدمين المسجليـن</small>
                                    <h2><i class="ti-arrow-up text-success"></i>{{\App\User::all()->count()}}</h2>
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
                                    <h2><i class="ti-arrow-up text-danger"></i>{{\App\Reservation::accepted_invitation_rate()}}%</h2>
                                    <div id="sparklinedash4"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <canvas id="RoomChart"></canvas>
                                </div>
                                <div class="col-md-6">
                                    <canvas id="ReservationChart"></canvas>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5%">
                                <div class="col-md-6">
                                    <canvas id="RoleChart"></canvas>
                                </div>
                                <div class="col-md-6">
                                    <canvas id="statusChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column -->
            </div>
            {{--<!-- ============================================================== -->--}}
            {{--<!-- Campaign -->--}}
            {{--<!-- ============================================================== -->--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-6">--}}
                    {{--<div class="row">--}}
                        {{--<!-- column -->--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">المستخدمين العاديين</h5>--}}
                                    {{--<div class="d-flex m-t-30 m-b-20 no-block align-items-center">--}}
                                        {{--<span class="display-5 text-info"><i class="icon-people"></i></span>--}}
                                        {{--<a href="javscript:void(0)" class="link display-5 ml-auto">32</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- column -->--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">اصحاب القاعات</h5>--}}
                                    {{--<div class="d-flex m-t-30 m-b-20 no-block align-items-center">--}}
                                        {{--<span class="display-5 text-purple"><i class="icon-people"></i></span>--}}
                                        {{--<a href="javscript:void(0)" class="link display-5 ml-auto">169</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- column -->--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">OPEN PROJECTS</h5>--}}
                                    {{--<div class="d-flex m-t-30 m-b-20 no-block align-items-center">--}}
                                        {{--<span class="display-5 text-primary"><i class="icon-folder-alt"></i></span>--}}
                                        {{--<a href="javscript:void(0)" class="link display-5 ml-auto">311</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- column -->--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">NEW INVOICES</h5>--}}
                                    {{--<div class="d-flex m-t-30 m-b-20 no-block align-items-center">--}}
                                        {{--<span class="display-5 text-success"><i class="icon-wallet"></i></span>--}}
                                        {{--<a href="javscript:void(0)" class="link display-5 ml-auto">117</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- column -->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 col-md-12">--}}
                    {{--<div class="row">--}}
                        {{--<!-- Column -->--}}
                        {{--<!-- Column -->--}}
                        {{--<div class="col-md-12">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">VISIT STATASTICS</h5>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-6  m-t-30">--}}
                                            {{--<h1 class="text-info">$347</h1>--}}
                                            {{--<h1 class="text-info">$347</h1>--}}
                                            {{--<h1 class="text-info">$347</h1>--}}
                                            {{--<h1 class="text-info">$347</h1>--}}
                                            {{--<p class="light_op_text">APRIL 2017</p>--}}
                                            {{--<b class="">(150 Sales)</b> </div>--}}
                                        {{--<div class="col-6">--}}
                                            {{--<div id="sales2" class="text-right"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Column -->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- ============================================================== -->
            <!-- End Campaign -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Today's Schedule and sales overview -->
            <!-- ============================================================== -->
            {{--<!-- ============================================================== -->--}}
            {{--<!-- Sales Chart and browser state-->--}}
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        var room = document.getElementById('RoomChart').getContext('2d');
        var reservation = document.getElementById('ReservationChart').getContext('2d');
        var role = document.getElementById('RoleChart').getContext('2d');
        var stat = document.getElementById('statusChart').getContext('2d');
        var chart = new Chart(room, {
            type: 'bar',
            data: {
                labels: ['جانفي', 'فيفري', 'مارس', 'ابريل', 'ماي', 'جـوان','جويلية','اوت', 'سبتمبر', 'أكتوبر','نوفمبر','ديسمبر'],
                datasets: [{
                    label: 'احصائيات القاعات المسجـلة في {{\Carbon\Carbon::today()->year}}',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(0, 0, 0)',
                    data: [
                        {{Party_room::whereMonth('created_at',1)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',2)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',3)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',4)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',5)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',6)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',7)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',8)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',9)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',10)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',11)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Party_room::whereMonth('created_at',12)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                    ]
                }]
            },
            options: {}
        });
        var chart = new Chart(reservation, {
            type: 'line',
            data: {
                labels: ['جانفي', 'فيفري', 'مارس', 'ابريل', 'ماي', 'جـوان','جويلية','اوت', 'سبتمبر', 'أكتوبر','نوفمبر','ديسمبر'],
                datasets: [{
                    label: 'احصائيات الحجـوزات المسجـلة',
                    backgroundColor: 'rgb(60,179,113)',
                    borderColor: 'rgb(0,0,0)',
                    data: [
                        {{Reservation::whereMonth('created_at',1)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',2)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',3)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',4)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',5)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',6)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',7)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',8)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',9)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',10)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',11)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                        {{Reservation::whereMonth('created_at',12)->whereYear('created_at',\Carbon\Carbon::today()->year)->count()}},
                    ]
                }]
            },
            options: {}
        });
        var chart = new Chart(role, {
            type: 'doughnut',
            data: {
                labels: ['مستخدم عــادي', 'صـاحب قاعـة', 'ادمـــن'],
                datasets: [{
                    label: 'احصائيات القاعات المسجـلة',
                    backgroundColor: ['rgb(100,149,237)','rgb(60,179,113)','rgb(255,228,181)'],
                    borderColor: 'rgb(0,0,0)',
                    data: [ {{\Spatie\Permission\Models\Role::findByName('client')->users->count()}},
                        {{\Spatie\Permission\Models\Role::findByName('owner')->users->count()}},
                        {{\Spatie\Permission\Models\Role::findByName('admin')->users->count()}}]
                }]
            },
            options: {}
        });
        var chart = new Chart(stat, {
            type: 'pie',
            data: {
                labels: ['حجز غير مؤكد', 'حجز مؤكد', 'حجز مرفـوض'],
                datasets: [{
                    label: 'احصائيات القاعات المسجـلة',
                    backgroundColor: ['rgb(30,144,255)','rgb(60,179,113)','rgb(255, 99, 132)'],
                    borderColor: 'rgb(0,0,0)',
                    data: [
                        {{\App\Reservation::where('status','draft')->count()}},
                        {{\App\Reservation::where('status','approuved')->count()}},
                        {{\App\Reservation::where('status','disapproved')->count()}},
                    ]
                }]
            },
            options: {}
        });
    </script>
@endsection