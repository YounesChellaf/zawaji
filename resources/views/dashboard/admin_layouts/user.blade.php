@extends('dashboard.master-admin')
@section('css')
    <link href="{{asset('assets/css/admin/dataTables.bootstrap.css')}}" rel="stylesheet">
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
                    <h4 class="text-themecolor">المستخدمين</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">المستخدمين</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>اضـــافة عضـو</button>
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
                        <div class="card-body">
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الايميل</th>
                                        <th>الصورة</th>
                                        <th>نوع العضو</th>
                                        <th>العنـوان</th>
                                        <th>تفاصيـل</th>
                                        <th>حـذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Zorita Serrano</td>
                                        <td><img src="{{asset('assets/images/admin/2.jpg')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                        <td>20-feb-2019</td>
                                        <td>1600</td>
                                        <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حـذف</button></td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Zorita Serrano</td>
                                        <td><img src="{{asset('assets/images/admin/2.jpg')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                        <td>20-feb-2019</td>
                                        <td>1600</td>
                                        <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حـذف</button></td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Zorita Serrano</td>
                                        <td><img src="{{asset('assets/images/admin/2.jpg')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                        <td>20-feb-2019</td>
                                        <td>1600</td>
                                        <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حـذف</button></td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Zorita Serrano</td>
                                        <td><img src="{{asset('assets/images/admin/2.jpg')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                        <td>20-feb-2019</td>
                                        <td>1600</td>
                                        <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حـذف</button></td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Zorita Serrano</td>
                                        <td><img src="{{asset('assets/images/admin/2.jpg')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                        <td>20-feb-2019</td>
                                        <td>1600</td>
                                        <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حـذف</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    <div class="modal fade" id="model-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تحذيــــــر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    هل تريد حــظر هذا العضو
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">الــغاء</button>
                    <a href="delete/"><button type="button" class="btn btn-outline-danger">حــذف</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection