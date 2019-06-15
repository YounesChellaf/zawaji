@extends('dashboard.master-admin')
@section('css')
    <link href="{{asset('assets/css/admin/dataTables.bootstrap.css')}}" rel="stylesheet">
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
                    <h4 class="text-themecolor">انـــواع الافـــراح</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active"> انـــواع الافـــراح</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#model-add"><i class="fa fa-plus-circle"></i>اضـــافة نـــوع جديـد</button>
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
                                        <th>النــوع</th>
                                        <th>اللـون</th>
                                        <th>تعــديل</th>
                                        <th>حـــذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\WeedingType::all() as $wedding_type)
                                    <tr>
                                        <td>{{$wedding_type->name}}</td>
                                        <td><label class="label" style="height:20px;width: 50%; background-color: {{$wedding_type->color}} !important;"></label></td>
                                        <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update-{{$wedding_type->id}}">تعــديل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete-{{$wedding_type->id}}">حـــــذف</button></td>
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
    <div class="col-md-4">
        <div id="model-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضافـة نـوع جـديـد</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('weddingType.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">نــوع الفـرح</label>
                                <input type="text" class="form-control" id="recipient-name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">اللـــون</label>
                                <input type="color" class="form-control" id="recipient-name" name="color">
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
    @foreach(\App\WeedingType::all() as $weddingType)
    <div class="col-md-4">
        <div id="model-update-{{$wedding_type->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">تعـديل الرابـط</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('weddingType.update',$weddingType->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">نــوع الفرح</label>
                                <input type="text" name="name" class="form-control" id="recipient-name" value="{{$weddingType->name}}">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">اللـــون </label>
                                <input type="color" name="color" class="form-control" id="recipient-name" value="{{$weddingType->color}}">
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
    <div class="col-md-4">
        <div id="model-delete-{{$wedding_type->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">حــــذف النوع</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('weddingType.destroy',$weddingType->id)}}">
                            @method('delete')
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">هــل انت متاكد من حذف هذا النـــوع</label>
                                <input type="hidden">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-danger waves-effect waves-light">حــــذف</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection