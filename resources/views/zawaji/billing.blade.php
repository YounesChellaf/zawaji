@extends('layouts.app')
@section('content')
    <section class="rsvp" id="rsvp">
        <div class="container">
            {{--<div class="title row">--}}
                {{--<div class="col col-md-12">--}}
                    {{--<h1> احجـــــــــز الآن</h1>--}}
                    {{--<h4 class="para-with-bg">سيتـــــم معالجة عمليــة الحجز من طرف صـــاحب القـاعة و من ثم تاكيد الطلـب</h4>--}}
                {{--</div>--}}
            {{--</div>--}}
            <main class="page product-page" >
                <section class="clean-block clean-product ">
                    <div class="container" dir="ltr">
                        <div class="block-content">
                            <div class="product-info">
                                <div class="row" >
                                    <div class="col-md-6 container">
                                        <div class="center">
                                            <h3>اصدقائك ايضــا حجزوا في {{$room->name}}  </h3>
                                        </div>
                                        <table class="table table-striped"  dir="rtl">
                                            <thead>
                                            <tr>
                                                <th >الصــورة</th>
                                                <th>الاسم و اللقـب</th>
                                                <th>تاريخ الحجــز</th>
                                            </tr>
                                            </thead>
                                            <tbody id="reserver_user">
                                            {{--@foreach($room->reservations as $reservation)--}}
                                            {{--<tr>--}}
                                                {{--@if( ! $reservation->user->image_id)--}}
                                                    {{--<td style="width: 20%"><img src="{{asset('assets/images/admin/avatar.png')}}" alt="user-img" class="img-circle" style="width: 80%;height: 15%"/></td>--}}
                                                {{--@else--}}
                                                    {{--<td><img src="{{asset('assets/images/avatar/'.auth()->user()->image->path)}}" alt="user-img" class="img-circle" /></td>--}}
                                                {{--@endif--}}
                                                {{--<td >{{$reservation->user->last_name.' '.$reservation->user->first_name}}</td>--}}
                                                {{--<td>{{$reservation->date_from->format('d-m-Y')}}</td>--}}
                                            {{--</tr>--}}
                                            {{--@endforeach--}}
                                            {{--</tbody>--}}
                                            <tr>
                                                <td style="text-align: center" colspan="3">لم يتـم العثــــور بعـــــــد</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6" >
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
                                            <div class="form-group" dir="rtl">
                                                <label for="recipient-name" class="control-label">تاريخ  الحجــــــز</label>
                                                <input type="date" class="form-control" placeholder="2017-06-04" id="mdate" name="date_from">
                                            </div>
                                            <div class="form-group" dir="rtl">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <label for="recipient-name" class="control-label">طريقــة الدفـــع</label>
                                                    <select class="custom-select form-control" id="payment_method" name="payment_method">
                                                        <option value=""></option>
                                                        <option value="partial"> دفـــع عربــــون</option>
                                                        <option value="cash"> دفـــع المبلغ كاملا</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6" id="partial">
                                                    <label for="recipient-name" class="control-label">القيــــمة المدفوعــة</label>
                                                    <input name="price" type="text" class="form-control">
                                                </div>
                                                <div class="col-md-6" id="cash">
                                                     <label for="recipient-name" class="control-label">القيــــمة المدفوعــة</label>
                                                     <input name="price" type="text" value="{{$room->getPrice()}} ريــــال" class="form-control" disabled>
                                                </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="party_room_id" name="party_room_id" value="{{$room->id}}">
                                        </form>
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
            @if(auth()->user())
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
    <script>
        $(document).ready(function () {
            $('#cash').hide();
            $('#mdate').change(function () {
                var date = $('#mdate').val();
                var room_id = $('#party_room_id').val();
                $.ajax({
                   type: 'get',
                   dataType : 'html',
                   url : '{{url('/friend-reservation')}}',
                    data: 'date='+ date+'&room_id='+ room_id,
                    success:function (response) {
                        $("#reserver_user").html(response)
                    }
                });

                {{--$("#reserver_user").html(--}}
                    {{--'                @foreach($room->reservations as $reservation)\n' +--}}
                    {{--'                <tr>\n' +--}}
                    {{--'                @if( ! $reservation->user->image_id)\n' +--}}
                    {{--'                <td style="width: 20%"><img src="{{asset('assets/images/admin/avatar.png')}}" alt="user-img" class="img-circle" style="width: 80%;height: 15%"/></td>\n' +--}}
                    {{--'                @else\n' +--}}
                    {{--'                <td><img src="{{asset('assets/images/avatar/'.auth()->user()->image->path)}}" alt="user-img" class="img-circle" /></td>\n' +--}}
                    {{--'                @endif\n' +--}}
                    {{--'                <td >{{$reservation->user->last_name.' '.$reservation->user->first_name}}</td>\n' +--}}
                    {{--'                <td>{{$reservation->date_from->format('d-m-Y')}}</td>\n' +--}}
                    {{--'                </tr>\n' +--}}
                    {{--'                @endforeach\n'--}}
                {{--);--}}

            })
            $('#payment_method').change(()=>{
                var method = $('#payment_method').val();
                if ( method == 'cash'){
                    $('#cash').show();
                    $('#partial').hide();
                }
                else {
                    $('#cash').hide();
                    $('#partial').show();
                }
            })
        })
    </script>

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