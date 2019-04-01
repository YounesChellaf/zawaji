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
                    <h4 class="text-themecolor">روابط التواصل بالموقع</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">روابط التواصل</li>
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
                        <div class="card-body">
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>الموقع</th>
                                        <th>الرابط</th>
                                        <th>تعــديل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>facebook</td>
                                        <td>https://www.facebook.com/alshareef2007</td>
                                        <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update">تعــديل</button></td>
                                    </tr>
                                    <tr>
                                        <td>facebook</td>
                                        <td>https://www.facebook.com/alshareef2007</td>
                                        <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update">تعــديل</button></td>
                                    </tr>
                                    <tr>
                                        <td>facebook</td>
                                        <td>https://www.facebook.com/alshareef2007</td>
                                        <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update">تعــديل</button></td>
                                    </tr>
                                    <tr>
                                        <td>facebook</td>
                                        <td>https://www.facebook.com/alshareef2007</td>
                                        <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update">تعــديل</button></td>
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
    <div class="col-md-4">
        <div id="model-update" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">تعـديل الرابـط</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">الرابــط الجديـد</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success waves-effect waves-light">تعديـــل</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div id="model-add-role" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضافـة صنف المستخدم</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">صنف المستخدم</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success waves-effect waves-light">حفــــــظ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection