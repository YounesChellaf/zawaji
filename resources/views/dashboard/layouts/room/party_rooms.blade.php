@extends('dashboard.master')
@section('css')
    <link href="{{asset('assets/css/admin/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid" >
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">قـــاعة الافــــراح</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">قـــاعة الافــــراح</li>
                        </ol>
                        <a href="{{route('party_room.addRoom')}}"><button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>اضـــافة قــاعـة جديـــدة</button></a>
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
                                        <th>الاســـم</th>
                                        <th>المديـنة</th>
                                        <th>النــوع</th>
                                        <th>الحــــالة</th>
                                        <th>تعــديل</th>
                                        <th>حـذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( auth()->user()->party_room as $room)
                                        <tr>
                                            <td>{{$room->name}}</td>
                                            <td>{{$room->city->name}}</td>
                                            <td>{{$room->type()}}</td>
                                            <td>{{$room->status()}}</td>
                                            <td><a href="{{route('party_room.edit',$room->id)}}"><button class="btn btn-rounded btn-outline-info">تعــديل</button></a></td>
                                            <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete-{{$room->id}}">حـذف</button></td>
                                        </tr>
                                        <div class="col-md-4">
                                            <div id="model-delete-{{$room->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title">حـــــذف القاعــة</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route('party_room.deleteRoom',$room->id)}}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label">هل تريـــد حقا حـذف {{ $room->name }} من المـــوقع بصـفــة نهائيـة ؟ </label>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-outline-danger waves-effect waves-light">حفــــــظ</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection