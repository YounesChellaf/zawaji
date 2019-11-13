@extends('dashboard.master-admin')
@section('css')
    {{--<link href="{{asset('assets/css/admin/dataTables.bootstrap.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('assets/css/client/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/smoothproducts.css')}}">
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
                    <h4 class="text-themecolor">جــــــدول الحجوزات</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الحجـــوزات</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <section class="clean-block clean-product ">
                            <div class="container">
                                <div class="block-content" style="margin-top: 6%">
                                    <div class="product-info" dir="ltr">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div >
                                                    <div class="sp-wrap">
                                                        <a href="{{asset('assets/images/salle1.jpg')}}">
                                                            <img class=" img-fluid d-block mx-auto" src="{{asset('assets/images/salle1.jpg')}}">
                                                        </a>
                                                        <a href="{{asset('assets/images/salle3.jpg')}}">
                                                            <img class="img-fluid d-block mx-auto" src="{{asset('assets/images/salle3.jpg')}}">
                                                        </a>
                                                        <a href="{{asset('assets/images/salle2.jpg')}}">
                                                            <img class="img-fluid d-block mx-auto" src="{{asset('assets/images/salle2.jpg')}}">
                                                        </a>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info row" dir="rtl">

                                                    <div class=" row col-md-6" style="text-align: right">
                                                        <h3 style="margin-right: 15%;margin-left: 10%">{{$room->name}}</h3>
                                                        <div style="margin-top: 2%">{{$room->status()}}</div>
                                                    </div>
                                                    {{--<div class="price">--}}
                                                    {{--<h3>$300.00</h3>--}}
                                                    {{--</div>--}}
                                                    <div class="col-md-6">
                                                        <a href="/admin/rooms/approuv/{{$room->id}}"><button class="btn btn-rounded btn-outline-success">  تاكيـــد القــــــاعـة</button></a>
                                                    </div>
                                                </div>
                                                <div class="summary" dir="rtl" style="padding-right: 10%">
                                                    <div class="row">
                                                        <i class="ti-home" style="margin-left: 3%"></i><h5 style="margin-left: 2%">المــدينة : </h5><p style="padding-right: 3%"> {{$room->city->name}}</p>
                                                    </div>
                                                    <div class="row">
                                                        <i class="ti-user" style="margin-left: 3%"></i><h5>اســـم صـاحب القــاعــة : </h5><p style="padding-right: 3%"> {{$room->owner->first_name}}</p>
                                                    </div>
                                                    <div class="row">
                                                        <i class="ti-location-pin" style="margin-left: 3%"></i><h5>العنــــــوان : </h5><p style="padding-right: 3%"> {{$room->location}}</p>
                                                    </div>
                                                    @if($room->type == 'double')
                                                        <div class="row">
                                                            <i class="ti-location-pin" style="margin-left: 3%"></i><h5>نـــوع القـــاعـة : </h5><p style="padding-right: 3%"> مـزدوجـــــة </p>
                                                        </div>
                                                        <div class="row">
                                                            <i class="ti-location-pin" style="margin-left: 3%"></i><h5>سعـــــة قاعـــة الرجـــال : </h5><p style="padding-right: 3%"> {{$room->capacity_men_room}} شخـــص </p>
                                                        </div>
                                                        <div class="row">
                                                            <i class="ti-location-pin" style="margin-left: 3%"></i><h5>سعـــــة قاعـــة النســــاء : </h5><p style="padding-right: 3%">  {{$room->capacity_women_room}}  شخـــص</p>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <i class="ti-location-pin" style="margin-left: 3%"></i><h5>نـــوع القـــاعـة : </h5><p style="padding-right: 3%"> احــــــادية </p>
                                                        </div>
                                                        <div class="row">
                                                            <i class="ti-location-pin" style="margin-left: 3%"></i><h5>سعـــــة القاعـــة الكليــــة : </h5><p style="padding-right: 3%">  {{$room->total_capacity}} شخـــص</p>
                                                        </div>
                                                    @endif
                                                    <div class="row">
                                                        <i class="ti-money" style="margin-left: 3%"></i><h5>تكلفـــة القــاعــة : </h5><p style="padding-right: 3%">  ريـــــال</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div>
                                            <ul class="nav nav-tabs" id="myTab">
                                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">التعريــف بالقـــاعة</a></li>
                                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" id="specifications-tabs" href="#specifications">الخصــــــائص</a></li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div dir="rtl" style="text-align: right" class="tab-pane active fade show description" role="tabpanel" id="description">
                                                    {{$room->description}}
                                                </div>
                                                <div class="tab-pane fade show specifications" role="tabpanel" id="specifications">
                                                    <div class="table-responsive table-bordered">
                                                        <table class="table table-bordered" style="text-align: right">
                                                            <thead>
                                                            <tr>
                                                                <td class="stat">الخـــــاصية</td>
                                                                <td class="stat">الحــــالة</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><i class="ti-home" style="margin-left: 3%"></i> المطعــــــــم </td>
                                                                <td><label class="label label-success">متوفـــــر</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="ti-car" style="margin-left: 3%"></i> موقف السيـــارات  </td>
                                                                <td><label class="label label-success">متوفـــــر</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="ti-home" style="margin-left: 3%"></i> المــــسرح  </td>
                                                                <td><label class="label label-danger">غيـــر متوفـــــر</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="ti-home" style="margin-left: 3%"></i> الواي فــاي  </td>
                                                                <td><label class="label label-danger">غيـــر متوفـــــر</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="ti-home" style="margin-left: 3%"></i> الحديــــــقة المرفقــة  </td>
                                                                <td><label class="label label-success">متوفـــــر</label></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>

@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('assets/js/smoothproducts.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
@endsection