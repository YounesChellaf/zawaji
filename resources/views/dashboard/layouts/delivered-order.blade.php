@extends('dashboard.master')
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
                    <h4 class="text-themecolor">جــــــدول الطلبات</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الطلبات المؤكدة</li>
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
                                        <th>اسم الزبون</th>
                                        <th>صورة الزبون</th>
                                        <th>المناسبــــة</th>
                                        <th>بداية الحجز</th>
                                        <th>نهاية الحجز</th>
                                        <th>تفاصيـل</th>
                                        <th>حـذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( auth()->user()->getReservation()->where('status','approuved') as $reservation )
                                        <tr>
                                            @if($reservation->user)
                                            <td>{{$reservation->user->last_name.' '.$reservation->user->first_name }}</td>
                                            <td><img src="{{asset('assets/images/admin/avatar.png')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                            @else
                                                <td>{{$reservation->reserver_name}}</td>
                                                <td></td>
                                            @endif
                                            <td>{{$reservation->weddingType->name}}</td>
                                            <td>{{$reservation->date_from}}</td>
                                            <td>{{$reservation->date_to}}</td>
                                            <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                            <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete">حـذف</button></td>
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
                    هل تريد حــذف هذا الحجز
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">الــغاء</button>
                    <a href="delete/"><button type="button" class="btn btn-outline-danger">حــذف</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div id="modal-add-order2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضـافة طلـب</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('owner.reservation')}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">اسم الزبون</label>
                                <input type="text" name="reserver_name" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="location1" class="control-label">القاعـــــــــة</label>
                                <select class="custom-select form-control" id="location1" name="party_room_id">
                                    <option value=""></option>
                                    @foreach(\App\Party_room::all() as $room)
                                        <option value="{{$room->id}}">{{$room->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location1" class="control-label">نـــــــوع المناسبـــة</label>
                                <select class="custom-select form-control" id="location1" name="wedding_type_id">
                                    <option value=""></option>
                                    @foreach(\App\WeedingType::all() as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">بداية الحجـز</label>
                                <input type="date" name="date_from" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">نهاية الحجـز</label>
                                <input type="date" name="date_to" class="form-control" id="message-text"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">الــغاء</button>
                                <button type="submit" class="btn btn-outline-success waves-effect waves-light">اضــافة</button>
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