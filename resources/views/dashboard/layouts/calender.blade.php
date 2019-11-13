@extends('dashboard.master')
@section('css')
    <link href="{{asset('assets/css/admin/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Page plugins css -->
    <!-- Color picker plugins css -->
    <!-- Date picker plugins css -->
    <link href="{{asset('assets/css/admin/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="{{asset('assets/css/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/daterangepicker.css')}}" rel="stylesheet">
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
                                <div class="col-lg-8">
                                    <div class="card-body b-l ">
                                        {{--<div id="calendar"></div>--}}
                                        @if($calendar)
                                        {!! $calendar->calendar() !!}
                                        {!! $calendar->script() !!}
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
        </div>
    </div>
    <div class="col-md-4">
        <div id="model-add-reservation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">اضافـة حدث جـديـد</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('reservation.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">اسـم الحــاجز</label>
                                <input type="text" class="form-control" id="recipient-name" name="reserver_name">
                            </div>
                            <div class="form-group">
                                <select name="wedding_type_id" class="form-control">
                                    <option value="">اختــــر نوع الفـرح</option>
                                    @foreach(\App\WeedingType::all() as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="m-t-20">مـــــــن :</label>
                                <input type="date" class="form-control" placeholder="2017-06-04" id="mdate" name="date_from">
                            </div>
                            <div class="form-group">
                                <label class="m-t-20">الــــى :</label>
                                <input type="date" class="form-control" placeholder="2017-06-04" id="mdate" name="date_to">
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
            <div id="model-update-{{$weddingType->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
            <div id="model-delete-{{$weddingType->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
    <script src="{{asset('assets/js/admin/bootstrap-datepicker.min.js')}}"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{asset('assets/js/admin/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/js/admin/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Clock Plugin JavaScript -->
    <script>
        // MAterial Date picker
        $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        $('#mdate1').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        $('#mdate2').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        $('#mdate3').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        $('#mdate4').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        $('#mdate5').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
        $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

        $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function() {
            console.log(this.value);
        });
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true,
            format: 'MM/DD/YYYY h:mm A',
            timePickerIncrement: 30,
            timePicker12Hour: true,
            timePickerSeconds: false,
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'MM/DD/YYYY',
            minDate: '06/01/2015',
            maxDate: '06/30/2015',
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse',
            dateLimit: {
                days: 6
            }
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src='{{asset('assets/js/lang/ar-sa.js')}}'></script>
    <script>
        $(function() {
            $('#calendar').fullCalendar({
                lang: 'arSa'
            });
        });
    </script>
@endsection