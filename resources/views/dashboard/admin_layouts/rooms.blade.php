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
                        <div class="card-body">
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>اسم صاحب القاعة</th>
                                        <th>اسم القاعة</th>
                                        <th>عنوان القاعة</th>
                                        <th>موقع القاعـة</th>
                                        <th>هاتف صاحب القاعة</th>
                                        <th>الايميــل</th>
                                        <th>تاريخ الاشتراك</th>
                                        <th>الحـــالـة</th>
                                        <th>تفاصيـل</th>
                                        <th>تاكيـــد</th>
                                        <th>حـذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(App\Party_room::all() as $room)
                                    <tr>
                                        <td>{{$room->owner->first_name.' '.$room->owner->last_name}}</td>
                                        <td>{{$room->name}}</td>
                                        <td>{{$room->location}}</td>
                                        <td>{{$room->city->name}}</td>
                                        <td>{{$room->phone_number}}</td>
                                        <td>{{$room->email}}</td>
                                        <td>{{$room->created_at->format('Y-m-d')}}</td>
                                        <td>{{$room->status()}}</td>
                                        <td><a href="{{route('room-to-confirm',$room->id)}}"><button class="btn btn-rounded btn-outline-dark">تفاصيـل</button></a></td>
                                        <td><a href="/admin/rooms/approuv/{{$room->id}}"><button class="btn btn-rounded btn-outline-info">تاكيـــد</button></a></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حظـــــر</button></td>
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
    @foreach(App\Party_room::all() as $room)
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
                    هل تريد حــظـر هاته القاعـة
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">الــغاء</button>
                    <a href="/admin/rooms/bann/{{$room->id}}"><button type="button" class="btn btn-outline-danger">حــظـر</button></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection