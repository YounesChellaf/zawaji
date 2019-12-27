@extends('dashboard.master-admin')
@section('css')
    <link href="{{asset('assets/css/admin/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="page-wrapper" >
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">الفئــــات السعريـــة</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الفئــــات السعريـة</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#model-add-price"><i class="fa fa-plus-circle"></i>اضـــافة فئــــة سعريـــة جديـدة</button>
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
                                        <th>الفئــــة السعريـــة</th>
                                        <th>تعــديل</th>
                                        <th>حــــذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\PriceCategory::all() as $priceCategory)
                                    <tr>
                                        <td>{{$priceCategory->from.' - '.$priceCategory->to}}</td>
                                        <td><button class="btn btn-rounded btn-outline-info" data-toggle="modal" data-target="#model-update-{{$priceCategory->id}}">تعــديل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-remove-{{$priceCategory->id}}">حــــذف</button></td>
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
    @foreach(\App\PriceCategory::all() as $priceCategory)
        <div class="col-md-4">
            <div id="model-update-{{$priceCategory->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">تعـديل الفئـة السعريـة</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('priceCategory.update',$priceCategory->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">السعــــر ( مــن )</label>
                                    <input type="text" name="from" value="{{$priceCategory->from}}" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">السعــــر (الــــى )</label>
                                    <input type="text" name="to" value="{{$priceCategory->to}}" class="form-control" id="recipient-name">
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
        <div class="col-md-4">
            <div id="model-remove-{{$priceCategory->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">  حـذف الفئـة السعريـة</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('priceCategory.destroy',$priceCategory->id)}}">
                                @method('DELETE')
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">هــــل تريد حقا حـذف هاته الفئـة السعريـة</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-danger waves-effect waves-light">حــــــــذف</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-md-4">
        <div id="model-add-price" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضافـة الفئــــة السعريــــة</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('priceCategory.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">السعــــر ( مــن )</label>
                                <input type="text" name="from" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">السعــــر (الــــى )</label>
                                <input type="text" name="to" class="form-control" id="recipient-name">
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