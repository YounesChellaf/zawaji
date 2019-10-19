@extends('dashboard.master-admin')
@section('css')
    <link href="{{asset('assets/css/admin/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="page-wrapper" style="width: 85% !important;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid" >
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">المناطق</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">المناطق</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#model-add-role"><i class="fa fa-plus-circle"></i>اضـــافة منطقـة جديـدة</button>
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
                                        <th>المنطقــة</th>
                                        <th>تعــديل</th>
                                        <th>حـذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( App\City::all() as $city)
                                        <tr>
                                            <td>{{$city->name}}</td>
                                            <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update-{{$city->id}}">تعــديل</button></td>
                                            <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete-{{$city->id}}">حـذف</button></td>
                                        </tr>
                                    @endforeach
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
    @foreach(App\City::all() as $city)
        <div class="modal fade" id="model-delete-{{$city->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تحذيــــــر</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        هل تريد حــذف هذه المنطقــــة
                    </div>
                    <form method="post" action="{{route('cities.destroy',$city->id)}}">
                        @method('DELETE')
                        @csrf
                        <input type="hidden">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">الــغاء</button>
                            <button type="submit" class="btn btn-outline-danger">حــذف</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="model-update-{{$city->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">تعـديل اسم المنطقــــة</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('cities.update',$city->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">اسم المنطقــــة</label>
                                    <input type="text" name="name" value="{{$city->name}}" class="form-control" id="recipient-name">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-success waves-effect waves-light">تعديـــل</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-md-4">
        <div id="model-add-role" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضافـة اسم المنطقــــة</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('cities.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">اسم المنطقــــة</label>
                                <input type="text" name="name" class="form-control" id="recipient-name">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success waves-effect waves-light">حفــــــظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection