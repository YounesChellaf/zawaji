@extends('layouts.app')
@section('css')
    <link href="{{asset('assets/css/admin/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/daterangepicker.css')}}" rel="stylesheet">
@endsection
@section('content')
    <section class="rsvp" id="rsvp">
        <div class="container">
            <div class="title row">
                <div class="col col-md-12">
                    <h1> احجـــــــــز الآن</h1>
                    <h4 class="para-with-bg">سيتـــــم معالجة عمليــة الحجز من طرف صـــاحب القـاعة و من ثم تاكيد الطلـب</h4>
                </div>
            </div>
            <main class="page product-page" >
                <section class="clean-block clean-product ">
                    <div class="container">
                        <div class="block-content" style="margin-top: 6%">
                            <div class="product-info" dir="ltr">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div >
                                            <div class="sp-wrap">
                                                <a href="{{asset('assets/images/salle1.jpg')}}">
                                                    <img class=" img-fluid d-block mx-auto" src="{{asset('assets/images/salle1.jpg')}}">
                                                </a>
                                                <a href="{{asset('assets/images/salle3.jpg')}}">
                                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/images/salle3.jpg')}}">
                                                </a>
                                                <a href="{{asset('assets/images/salle2.jpg')}}">
                                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/images/salle2.jpg')}}">
                                                </a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info row" dir="rtl">

                                                <div class="col-md-6" style="text-align: right">
                                                    <h3 style="margin-right: 15%">{{$room->name}}</h3>
                                                </div>
                                                {{--<div class="price">--}}
                                                {{--<h3>$300.00</h3>--}}
                                                {{--</div>--}}
                                                <div class="col-md-6">
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#model-reserve" > احجـــــــــــز الآن</button>
                                                </div>
                                        </div>
                                        <div class="summary" dir="rtl" style="padding-right: 10%">
                                            <div class="row">
                                                <i class="ti-home" style="margin-left: 3%"></i><h5 style="margin-left: 2%">المــدينة : </h5><p style="padding-right: 3%"> {{$room->city->name}}</p>
                                            </div>
                                            <div class="row">
                                                <i class="ti-user" style="margin-left: 3%"></i><h5>اســـم صـاحب القــاعــة : </h5><p style="padding-right: 3%"> {{$room->owner->first_name}}</p>
                                            </div>
                                            <div class="row">
                                                <i class="ti-location-pin" style="margin-left: 3%"></i><h5>العنــــــوان : </h5><p style="padding-right: 3%"> {{$room->location}}</p>
                                            </div>
                                            @if($room->type == 'double')
                                                <div class="row">
                                                    <i class="ti-location-pin" style="margin-left: 3%"></i><h5>نـــوع القـــاعـة : </h5><p style="padding-right: 3%"> مـزدوجـــــة </p>
                                                </div>
                                                <div class="row">
                                                    <i class="ti-location-pin" style="margin-left: 3%"></i><h5>سعـــــة قاعـــة الرجـــال : </h5><p style="padding-right: 3%"> {{$room->capacity_men_room}} شخـــص </p>
                                                </div>
                                                <div class="row">
                                                    <i class="ti-location-pin" style="margin-left: 3%"></i><h5>سعـــــة قاعـــة النســــاء : </h5><p style="padding-right: 3%">  {{$room->capacity_women_room}}  شخـــص</p>
                                                </div>
                                                @else
                                                <div class="row">
                                                    <i class="ti-location-pin" style="margin-left: 3%"></i><h5>نـــوع القـــاعـة : </h5><p style="padding-right: 3%"> احــــــادية </p>
                                                </div>
                                                <div class="row">
                                                    <i class="ti-location-pin" style="margin-left: 3%"></i><h5>سعـــــة القاعـــة الكليــــة : </h5><p style="padding-right: 3%">  {{$room->total_capacity}} شخـــص</p>
                                                </div>
                                                @endif
                                            <div class="row">
                                                <i class="ti-money" style="margin-left: 3%"></i><h5>تكلفـــة القــاعــة : </h5><p style="padding-right: 3%"> {{$room->getPrice()}} ريـــــال</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-info">
                                <div>
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">التعريــف بالقـــاعة</a></li>
                                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" id="specifications-tabs" href="#specifications">الخصــــــائص</a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div dir="rtl" style="text-align: right" class="tab-pane active fade show description" role="tabpanel" id="description">
                                            {{$room->description}}
                                        </div>
                                        <div class="tab-pane fade show specifications" role="tabpanel" id="specifications">
                                            <div class="table-responsive table-bordered">
                                                <table class="table table-bordered" style="text-align: right">
                                                    <thead>
                                                    <tr>
                                                        <td class="stat">الخـــــاصية</td>
                                                        <td class="stat">الحــــالة</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><i class="ti-home" style="margin-left: 3%"></i> المطعــــــــم </td>
                                                        <td>{{$room->room_service($room->kitchen)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="ti-car" style="margin-left: 3%"></i> موقف السيـــارات  </td>
                                                        <td>{{$room->room_service($room->parcking)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="ti-home" style="margin-left: 3%"></i> المــــسرح  </td>
                                                        <td>{{$room->room_service($room->theatre)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="ti-home" style="margin-left: 3%"></i> قــــاعة محاضـــرات</td>
                                                        <td>{{$room->room_service($room->auditorium)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="ti-home" style="margin-left: 3%"></i> الواي فــاي  </td>
                                                        <td>{{$room->room_service($room->wifi)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="ti-home" style="margin-left: 3%"></i> الحديــــــقة المرفقــة  </td>
                                                        <td>{{$room->room_service($room->jardin)}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div> <!-- end of container -->
    </section> <!-- end of rsvp -->
    <div class="col-md-8">
        <div id="model-reserve" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            @if(auth())
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">احجــــــز قــاعتك الآن</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('reserve.store')}}" class="reserve-form">
                                @csrf
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
                                    <label for="recipient-name" class="control-label">تاريخ بدايــة الحجــــــز</label>
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="mdate" name="date_from">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">تاريخ نهــاية الحجــــــز</label>
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="mdate1" name="date_to">
                                </div>

                                <input type="hidden" name="party_room_id" value="{{$room->id}}">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-danger waves-effect waves-light">حجــــــــــــــــز</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            @else
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">عليك التسجيــــــل للحجـــــز</h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <p>لا يمكنــك الحجــــز على هاته القـاعة الا بعـد تسجيــــل الدخــول</p>
                            </div>
                            <div class="modal-footer">
                                <a href="{{route('login')}}"><button  class="btn btn-outline-danger waves-effect waves-light">تسجيــــل الدخــول</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
@section('js')


    <script src="{{asset('assets/js/admin/sweetalert.min.js')}}"></script>
    <script>
        //Custom design form example
        $(".reserve-form").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "ارســــــال"
            },
            onFinished: function (event, currentIndex) {
                swal("ارسال المحتــوى", "سيتم النظــر في طلب اضــافـة قاعتكـم من طرف الادمــن لجعلهــا ظاهرة للمستخدميــن من اجل الحجــز، نرجــوا منكم الانتظـار من اجـل معالجـة الطلـب");
                $(".tab-wizard").submit()
            }
        });
    </script>
    <script src="{{asset('assets/js/admin/bootstrap-datepicker.min.js')}}"></script>
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
@endsection