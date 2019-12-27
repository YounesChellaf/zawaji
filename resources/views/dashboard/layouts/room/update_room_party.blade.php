@extends('dashboard.master')
@section('css')
    <link href="{{asset('assets/css/admin/steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/admin/bootstrap-wysihtml5.css')}}" />
    <link href="{{asset('assets/css/admin/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/form-icheck.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/dropify.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/daterangepicker.css')}}" rel="stylesheet">
    {{--DropZone multiFiles Css--}}
    <link href="{{asset('assets/css/admin/dropzone.css')}}" rel="stylesheet" type="text/css" />
    {{--End--}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">قـــاعة الافراح</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">الرئيسية</a></li>
                            <li class="breadcrumb-item active">قـــاعة الافراح</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row" id="validation" >
                <div class="col-12">
                    <div class="card">
                        <div class="card-body wizard-content">
                            <h4 class="card-title">قـــم باضافة قاعة افراحك ضمن مجموعاتنا</h4>
                            <form action="{{route('owner-party_room.store')}}" method="post"  enctype="multipart/form-data" class="tab-wizard wizard-circle" >
                                <!-- Step 1 -->{!! csrf_field()!!}
                                <h6>معلومات عامة</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <label for="firstName1">اســــم القــاعة:</label>
                                                <input type="text" class="form-control" id="firstName1" value="{{$room->name}}" name="name" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <label for="location1">المـــــدينة :</label>
                                                <select class="custom-select form-control" id="location1" name="city_id">
                                                    <option value="{{$room->city->id}}">{{$room->city->name}}</option>
                                                    @foreach(\App\City::all() as $city)
                                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <label for="firstName1">رقم الهاتف:</label>
                                                <input type="text" class="form-control" id="firstName1" name="phone_number" value="{{$room->phone_number}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <label for="firstName1">الايميـــــل:</label>
                                                <input type="text" class="form-control" id="firstName1" name="email" value="{{$room->email}}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-material">
                                                <label for="firstName1">عنـــــوان القاعـــة:</label>
                                                <input type="text" class="form-control" id="firstName1" name="location" value="{{$room->location}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-material">
                                            <label for="shortDescription1">مقال عن القـــــاعة :</label>
                                            <textarea name="description" id="shortDescription1" rows="6" class="form-control">{{$room->description}}</textarea>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h6>معلــــومات اضافيـة</h6>
                                <section>
                                    <div style="margin-top: 5%">
                                        <div class="row" style="margin-bottom: 7%">
                                            <div class="col-md-3">
                                                <div class="form-material">
                                                    <label for="email">نوع القـــــــــاعة</label>
                                                    <select name="type" id="roomType" class="form-control" >
                                                        <option value=""></option>
                                                        <option value="single">عـــــــادية</option>
                                                        <option value="double">مزدوجـــــــة</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="single">
                                                <div class="col-md-3">
                                                    <div class="form-material">
                                                        <label for="jobTitle1">الســـــــعة الكليـــة :</label>
                                                        <input type="text" class="form-control" id="jobTitle1" name="total_capacity" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="double" class="row">
                                                <div class="col-md-3">
                                                    <div class="form-material">
                                                        <label for="jobTitle1">سعـــة قاعـة الرجــال :</label>
                                                        <input type="text" class="form-control" id="jobTitle1" name="capacity_men_room" >
                                                    </div>
                                                </div>
                                                <div class="col-md-3" >
                                                    <div class="form-material">
                                                        <label for="jobTitle1">سعـــة قاعـة النســــاء :</label>
                                                        <input type="text" class="form-control" id="jobTitle1" name="capacity_women_room">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>الخصــــــائص </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-material">
                                                    <div class="col-md-6 input-group" style="flex-direction: row">
                                                        <ul style="list-style-type: none;">
                                                            <li>
                                                                <input type="checkbox" class="check" name="kitchen" value="1">
                                                                <label for="square-checkbox-1">مطعـــــــم</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" name="theatre" value="1">
                                                                <label for="square-checkbox-1">مســـــرح</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" name="jardin" value="1">
                                                                <label for="square-checkbox-1">حديـــــقة مرفقــة</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-material">
                                                    <div class="col-md-6 input-group" style="flex-direction: row">
                                                        <ul style="list-style-type: none;">
                                                            <li>
                                                                <input type="checkbox" class="check" name="wifi" value="1">
                                                                <label for="square-checkbox-1">واي فــاي</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" name="parcking" value="1">
                                                                <label for="square-checkbox-1">موقف سيــارات</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="check" name="auditorium" value="1">
                                                                <label for="square-checkbox-1">قاعــة محاضــرات</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                <h6>صـــــور القاعــــة</h6>
                                <section>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-10">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">اضف الصورة الرئيسية</h4>
                                                            <input class="dropify" type="file" name="image[]">
                                                            <input type="hidden" name="nb" value="">
                                                            {{--<div class="">--}}
                                                            {{--<input name="file" type="file" multiple />--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-10">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">اضف الصورة الفرعية الاولى</h4>
                                                            <input class="dropify" type="file" name="image[]">
                                                            <input type="hidden" name="nb" value="">
                                                            {{--<div class="">--}}
                                                            {{--<input name="file" type="file" multiple />--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-10">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">اضف الصورة الفرعية الثانية</h4>
                                                            <input class="dropify" type="file" name="image[]">
                                                            <input type="hidden" name="nb" value="">
                                                            {{--<div class="">--}}
                                                            {{--<input name="file" type="file" multiple />--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-10">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">اضف الصورة الفرعية الثـالثـة</h4>
                                                            <input class="dropify" type="file" name="image[]">
                                                            <input type="hidden" name="nb" value="">
                                                            {{--<div class="">--}}
                                                            {{--<input name="file" type="file" multiple />--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 4 -->
                                <h6>حـــــــدد سعـــــرك</h6>
                                <section>
                                    <div class="row">
                                        <fieldset id="buildyourform" style="margin-bottom: 5%">
                                            <legend></legend>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-material">
                                                        <label for="firstName1">السعـــــــر:</label>
                                                        <input type="text" class="form-control" id="firstName1" name="price[]"> </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="m-t-20">مـــــــن :</label>
                                                    <input type="date" class="form-control" placeholder="2017-06-04" id="mdate" name="fromdate[]">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="m-t-20">الـــــــى :</label>
                                                    <input type="date" class="form-control" placeholder="2017-06-04" id="mdate1" name="todate[]">
                                                </div>
                                                <div class="col-md-3" style="margin-top: 6%">
                                                    <button  type="button" class="btn btn-success" id="add2">اضـــافة سعــر آخـــر</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    {{--<input type="button" value="Add a field" class="add" id="add" />--}}
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#add2").click(function() {
                var intId = $("#buildyourform div").length + 1;
                var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
                var fName = $("<div class=\"row\">\n" +
                    "                                         <div class=\"col-md-3\">\n" +
                    "                                             <div class=\"form-material\">\n" +
                    "                                                 <label for=\"firstName1\">السعـــــــر:</label>\n" +
                    "                                                 <input type=\"text\" class=\"form-control\" id=\"firstName1\" name=\"price[]\"> </div>\n" +
                    "                                         </div>\n" +
                    "                                         <div class=\"col-md-3\">\n" +
                    "                                             <label class=\"m-t-20\">مـــــــن :</label>\n" +
                    "                                             <input type=\"date\" class=\"form-control\" placeholder=\"2017-06-04\" id=\"mdate\" name=\"fromdate[]\">\n" +
                    "                                         </div>\n" +
                    "                                         <div class=\"col-md-3\">\n" +
                    "                                             <label class=\"m-t-20\">الـــــــى :</label>\n" +
                    "                                             <input type=\"date\" class=\"form-control\" placeholder=\"2017-06-04\" id=\"mdate1\" name=\"todate[]\">\n" +
                    "                                         </div>\n" +
                    "                                     </div>");
                // var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
                var removeButton = $("<button   style='position: relative; margin-left' type=\"button\" class=\"remove btn btn-danger\" value='\-\'>حــــذف الخانـة</button>");
                removeButton.click(function() {
                    $(this).parent().remove();
                });
                fieldWrapper.append(fName);

                fieldWrapper.append(removeButton);
                $("#buildyourform").append(fieldWrapper);
            });
        });

    </script>
    <script src="{{asset('assets/js/admin/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('assets/js/admin/bootstrap-wysihtml5.js')}}"></script>
    {{--DropZone multiFiles--}}
    <script src="{{asset('assets/js/admin/dropzone.js')}}"></script>
    {{--End--}}
    <script src="{{asset('assets/js/admin/icheck.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/icheck.init.js')}}"></script>
    <script src="{{asset('assets/js/admin/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.textarea_editor').wysihtml5();
        });
    </script>
    <script>
        //Custom design form example
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "ارســــــال"
            },

            onFinished: function (event, currentIndex) {
                // swal({
                //     title:"ارسال المحتــوى",
                //     text: "سيتم النظــر في طلب اضــافـة قاعتكـم من طرف الادمــن لجعلهــا ظاهرة للمستخدميــن من اجل الحجــز، نرجــوا منكم الانتظـار من اجـل معالجـة الطلـب",
                // });
                setTimeout(function () {
                    $(".tab-wizard").submit()
                },swal({
                    title:"ارسال المحتــوى",
                    text: "سيتم النظــر في طلب اضــافـة قاعتكـم من طرف الادمــن لجعلهــا ظاهرة للمستخدميــن من اجل الحجــز، نرجــوا منكم الانتظـار من اجـل معالجـة الطلـب",
                    timer : 5000
                }));
            }
        });
    </script>
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
    <script>
        $(document).ready(function(){
            var i=1;
            $("input[name=nb]:hidden").val(i);
            $("#add_row").click(function(){b=i-1;
                $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
                $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                i++;
                $("input[name=nb]:hidden").val(i);
            });
            $("#delete_row").click(function(){
                if(i>1){
                    $("#addr"+(i-1)).html('');
                    i--;
                    $("input[name=nb]:hidden").val(i);
                }
            });
            i= $('#tab_logic1').children().length;
            $("#add_row1").click(function(){b=i-1;
                $('#add'+i).html($('#add'+b).html()).find('td:first-child').html(i+1);
                $('#tab_logic1').append('<tr id="add'+(i+1)+'"></tr>');
                i++;
                $("input[name=nb]:hidden").val(i);
            });
            $("#delete_row1").click(function(){
                if(i>1){
                    $("#add"+(i-1)).html('');
                    i--;
                    $("input[name=nb]:hidden").val(i);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#single').hide();
            $('#double').hide();
            $("#roomType").change(function () {
                var roomtype = $("#roomType").val()
                if (roomtype == "double"){
                    $('#double').show();
                }
                else $('#single').show();
            })
        })
    </script>
@endsection
