@extends('dashboard.master-admin')
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
                    <h4 class="text-themecolor">اعـــــدادات الحسـاب</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الحسـاب</li>
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
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="m-t-30">
                                            @if( ! $user->image_id)
                                            <img src="{{asset('assets/images/admin/avatar.png')}}" class="img-circle" width="150" />
                                            @else
                                                <img src="{{asset('assets/images/avatar/'.$user->image->path)}}" class="img-circle" width="150" />
                                            @endif
                                            <h4 class="card-title m-t-10">{{$user->last_name .' '.$user->first_name}}</h4>
                                            <h6 class="card-subtitle">{{$user->getRoleNames()[0]}}</h6>
                                        </center>
                                    </div>
                                    <div>
                                        <hr> </div>
                                    <div class="card-body">
                                        <small class="text-muted p-t-30 db">الحــــــــالة</small>
                                        <h6>{{$user->status()}}</h6>
                                        <small class="text-muted">الايـــميـل</small>
                                        <h6>{{$user->email}}</h6>
                                        <small class="text-muted p-t-30 db">رقــــم الهـاتف</small>
                                        <h6>{{$user->phone_number}}</h6>
                                        <small class="text-muted p-t-30 db">العنـــــوان</small>
                                        <h6>{{$user->address}}</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="card">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs profile-tab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">الاعــــــــــدادات</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="settings" role="tabpanel">
                                            <div class="card-body">
                                                <form method="post" action="{{route('profile.update',$user->id)}}" enctype="multipart/form-data" class="form-horizontal form-material" >
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="col-md-12">الاســـــــم</label>
                                                        <div class="col-md-12">
                                                            <input name="first_name" type="text" value="{{$user->first_name}}" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">اللقـــب</label>
                                                        <div class="col-md-12">
                                                            <input name="last_name" type="text" value="{{$user->last_name}}" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email" class="col-md-12">العنـــــــوان</label>
                                                        <div class="col-md-12">
                                                            <input type="text" value="{{$user->address}}" class="form-control form-control-line" name="address" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email" class="col-md-12">رقــــــم الهاتف</label>
                                                        <div class="col-md-12">
                                                            <input type="text" value="{{$user->phone_number}}" class="form-control form-control-line" name="phone_number" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email" class="col-md-12">الصــــــورة</label>
                                                        <div class="col-md-12">
                                                            <input type="file"  class="form-control form-control-line" name="photo" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-outline-danger">تعــــــديل الحسـاب</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
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
@endsection
