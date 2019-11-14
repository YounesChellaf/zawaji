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
                                        <th>اللقـب</th>
                                        <th>الايميل</th>
                                        <th>الصورة</th>
                                        <th>نوع العضو</th>
                                        <th>العنـوان</th>
                                        <th>رقم الهـاتف</th>
                                        <th>حالة المستخـدم</th>
                                        <th>تفعيــــل</th>
                                        <th>حــظر</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\User::all() as $user)
                                    <tr>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if( ! $user->image_id)
                                                <img src="{{asset('assets/images/admin/avatar.png')}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px" />
                                            @else
                                                <img src="{{asset('assets/images/avatar/'.$user->image->path)}}" alt="user-img" class="img-circle" style="width: 80px; height: 80px" />
                                            @endif
                                        </td>
                                        <td>{{$user->getRoleNames()[0]}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->status()}}</td>
                                        <td><button class="btn btn-rounded btn-outline-success" data-toggle="modal" data-target="#model-activate-{{$user->id}}">تفعيـــل</button></td>
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#model-delete-{{$user->id}}">حــظر</button></td>
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
    @foreach(\App\User::all() as $user)
    <div class="modal fade" id="model-delete-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="{{route('admin.user.bann',$user->id)}}" method="post">
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">الــغاء</button>
                        <button type="submit" class="btn btn-outline-danger">حــظر</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="model-activate-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تحذيــــــر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    هل تريد تفعيل هذا العضو من جديــد
                </div>
                <form action="{{route('admin.user.activate',$user->id)}}" method="post">
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">الــغاء</button>
                        <button type="submit" class="btn btn-outline-success">تفعيـــل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-md-4">
        <div id="modal-add-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضـافة عضو جـديد</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">الاســــم</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">الايميـــــل</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">الصــورة</label>
                                <input type="file" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">العنــوان</label>
                                <input type="text" class="form-control" id="message-text"/>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">صنـف العضـو</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success waves-effect waves-light">اضــافة</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection