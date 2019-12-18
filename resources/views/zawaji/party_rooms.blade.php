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
            {{--<div class="title row">--}}
                {{--<div class="col col-md-12">--}}
                    {{--<h1>اختـــــر قاعتـــــك</h1>--}}
                    {{--<h3 class="para-with-bg"> مبارك عليك اخي و اختي الكريمين لاجل زواجكما، الان مهمتنا لتوفير حجز قاعة لعرسكما</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form row" dir="rtl">
                <div class="col col-md-12">
                    <form method="post" action="/messages" >
                        @csrf
                        <div class="row">
                            <div dir="rtl" class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group" >
                                    <label for="email">نوع الخدمــة</label>
                                    <select name="" id="cityID" class="form-control" style="background: #f2f2f2">
                                        <option value="">قــاعـة افراح</option>
                                        <option value="">كوافيــــر </option>
                                        <option value="">حلويـــات </option>
                                        {{--@foreach(\App\City::all() as $city)--}}
                                            {{--<option value="{{$city->id}}">{{$city->name}}</option>--}}
                                        {{--@endforeach--}}
                                    </select>
                                </div>
                            </div>
                            {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="email">السعـــــــــر</label>--}}
                                    {{--<select name="" id="price" class="form-control" style="background: #f2f2f2">--}}
                                        {{--<option value=""></option>--}}
                                        {{--<option value="250-0">250 ريال</option>--}}
                                        {{--<option value="500-250"> 250 ريال - 500 ريال</option>--}}
                                        {{--<option value="1000-500">500 ريال - 1000 ريال</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">نوع القـــــــــاعة</label>
                                    <select name="" id="roomType" class="form-control" style="background: #f2f2f2">
                                        <option value=""></option>
                                        <option value="single">عـــــــادية</option>
                                        <option value="double">مزدوجـــــــة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">التاريـــخ من</label>
                                    <input type="date" class="form-control from" placeholder="2017-06-04" id="mdate from" name="date_from" style="background: #f2f2f2">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email"> التاريـــخ الـى</label>
                                    <input type="date" class="form-control to" placeholder="2017-06-04" id="to" name="date_to" style="background: #f2f2f2">
                                </div>
                                <input type="hidden"  id="rooms" value="{{$party}}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>

                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of rsvp -->
    <section class="gallery rooms-filtered">
        <div class="container">
            <div class="gallery-content row">
                @if( $rooms->count())
                    @foreach($rooms as $room)
                        <div class="col col-sm-6 col-md-4">
                            <div>
                                <label class="label label-warning" id="price-btn">{{$room->getPrice()}} ريال</label>
                                <img src="{{asset('assets/images/party_room/'.$room->image[0]->path)}}"  style="border-radius: 50%" alt class="thumb img img-responsive">
                                <button class="btn btn-default" dir="rtl">{{$room->name}}</button>
                                <div class="hover-content">
                                    <div>
                                        <h4>{{$room->name}}</h4>
                                        <p>متواجدة في {{$room->city->name}}</p>
                                        <a  href="{{route('zawaji.room-details',$room->id)}}" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div> <!-- end of gallery-content -->
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/js/admin/bootstrap-material-datetimepicker.js')}}"></script>
    <script>
        $(document).ready(function () {
            var party_rooms = $("#rooms").val();
            $("#cityID,#roomType,#from,#to").change(function () {
                var city = $("#cityID").val();
                var type = $("#roomType").val();
                var date_from = $("#from").val();
                var date_to = $("#to").val();
                $("#cityID").val(city);
                $("#roomType").val(type);
                $.ajax({
                    type : 'get',
                    dataType : 'html',
                    url: '{{url('/filtered-room')}}',
                    data : 'city_id=' + city+'&type='+ type+'&date_from='+ date_from+'&date_to='+ date_to+'&rooms='+ party_rooms,
                    success:function (response) {
                        //console.log(party_rooms);
                         console.log(response);
                        $(".rooms-filtered").html(response);
                    }
                });
            });
        });
    </script>
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

        $('#min-date').bootstrapMaterialDatePicker({ format: 'rerw/MM/YYYY HH:mm', minDate: new Date() });
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