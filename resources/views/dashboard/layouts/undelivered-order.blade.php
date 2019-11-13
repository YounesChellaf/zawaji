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
                                        <th>تأكيد الحـجز</th>
                                        <th>الــغاء</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( auth()->user()->getReservation()->where('status','draft') as $reservation )
                                    <tr>
                                        <td>{{$reservation->user->last_name.' '.$reservation->user->first_name }}</td>
                                        <td><img src="{{asset('assets/images/admin/avatar.png')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px"></td>
                                        <td>{{$reservation->weddingType->name}}</td>
                                        <td>{{$reservation->date_from}}</td>
                                        <td>{{$reservation->date_to}}</td>
                                        <td><button class="btn btn-rounded btn-outline-info">تفـاصيل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-success" data-toggle="modal" data-target="#model-confirmation-{{$reservation->id}}">تأكيد</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete-{{$reservation->id}}">الــغاء</button></td>
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
    @foreach(\App\Reservation::where('status','draft')->get() as $reservation )
    <div class="modal fade" id="model-delete-{{$reservation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a href="{{route('reservation.disapprouv',$reservation->id)}}"><button type="button" class="btn btn-outline-danger">حــذف</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="model-confirmation-{{$reservation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تـأكيد الطلب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    سيتم قبول الطلب و اضـافته ضمن الطلبـات المؤكـدة
                </div>
                <div class="modal-footer">
                    <a href="{{route('reservation.confirmation',$reservation->id)}}"><button type="button" class="btn btn-outline-success">تاكيد الطلب</button></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-md-4">
                <div id="modal-add-order" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">اضـافة طلـب</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">اسم الزبون</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">صورة الزبون (اختياري)</label>
                                        <input type="file" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">بداية الحجـز</label>
                                        <input type="date" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">نهاية الحجـز</label>
                                        <input type="date" class="form-control" id="message-text"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">المبلـغ المدفوع</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">الــغاء</button>
                                <button type="button" class="btn btn-outline-success waves-effect waves-light">اضــافة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/admin/datatables.min.js')}}"></script>
@endsection