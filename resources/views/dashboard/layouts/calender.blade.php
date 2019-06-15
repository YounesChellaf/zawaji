@extends('dashboard.master')
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
                    <h4 class="text-themecolor">رزنامة الافراح</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">رزنامة الافراح</li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card-body">
                                        <h4 class="card-title m-t-10">اسحب و الصق على الرزنامة</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="calendar-events" class="">
                                                    <div class="calendar-events" data-class="bg-info">
                                                        <i class="fa fa-circle text-info"></i> النوع الاول</div>
                                                    <div class="calendar-events" data-class="bg-success">
                                                        <i class="fa fa-circle text-success"></i> النوع الثاني</div>
                                                    <div class="calendar-events" data-class="bg-danger">
                                                        <i class="fa fa-circle text-danger"></i> النوع الثالث</div>
                                                    <div class="calendar-events" data-class="bg-warning">
                                                        <i class="fa fa-circle text-warning"></i>النوع الرابع</div>
                                                </div>
                                                <!-- checkbox -->
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-10 btn-info btn-block waves-effect waves-light">
                                                    <i class="ti-plus"></i> اضف حدث جديد
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card-body b-l calender-sidebar">
                                        {{--<div id="calendar"></div>--}}
                                        {!! $calendar->calendar() !!}
                                        {!! $calendar->script() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal none-border" id="my-event">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>اضف حدث</strong></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">اغلاق</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">انشاء حدث جديد</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">حذف</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-new-event">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>اضافة</strong> حدث</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">اسم الحدث</label>
                                        <input class="form-control form-white" placeholder="اسم الحدث" type="text" name="category-name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">اختر لونا</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">اخضر</option>
                                            <option value="danger">احمر</option>
                                            <option value="info">ازرق</option>
                                            <option value="primary">برتقالي</option>
                                            <option value="warning">اصفر</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">حفظ</button>
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">اغلاق</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection