@extends('dashboard.master')
@section('css')
    <link href="{{asset('assets/css/admin/steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/admin/bootstrap-wysihtml5.css')}}" />
    <link href="{{asset('assets/css/admin/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/form-icheck.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/dropify.min.css')}}" rel="stylesheet">
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
            <form action="/owner/party_room" method="post"  enctype="multipart/form-data" class="tab-wizard wizard-circle">
                <!-- Step 1 -->
                {!! csrf_field()!!}
                <h6>معلومات عامة</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="firstName1">اســــم القــاعة:</label>
                                <input type="text" class="form-control" id="firstName1" name="name" value="sfdfs"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="location1">المـــــدينة :</label>
                                <select class="custom-select form-control" id="location1" name="city">
                                    <option value="مكـــــــة"></option>
                                    <option value="تبــــوك">تبــــوك</option>
                                    <option value="جــــدة">جــــدة</option>
                                    <option value="مكـــــــة">مكـــــــة</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="firstName1">رقم الهاتف:</label>
                                <input type="text" class="form-control" id="firstName1" name="phone_number" value="234"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="firstName1">الايميـــــل:</label>
                                <input type="text" class="form-control" id="firstName1" name="email" value="younes@gmail.com"> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-material">
                                <label for="firstName1">عنـــــوان القاعـــة:</label>
                                <input type="text" class="form-control" id="firstName1" name="location" value="dsdsadas"> </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-material">
                            <label for="shortDescription1">مقال عن القـــــاعة :</label>
                            <textarea name="description" id="shortDescription1" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Step 2 -->
                <h6>معلــــومات اضافيـة</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="jobTitle1">السعـــة الكليــة :</label>
                                <input type="text" class="form-control" id="jobTitle1" name="total_capacity" value="23"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="jobTitle1">عـــدد القاعات :</label>
                                <input type="text" class="form-control" id="jobTitle1" name="number_room" value="234"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="jobTitle1">سعـــة قاعـة الرجــال :</label>
                                <input type="text" class="form-control" id="jobTitle1" name="capacity_men_room" value="234"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="jobTitle1">سعـــة قاعـة النســــاء :</label>
                                <input type="text" class="form-control" id="jobTitle1" name="capacity_women_room" value="2321"> </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-material">
                                    <div class="col-md-6 input-group" style="flex-direction: row">
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <input type="checkbox" class="check" name="kitchen">
                                                <label for="square-checkbox-1">مطعـــــــم</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="check" name="theatre">
                                                <label for="square-checkbox-1">مســـــرح</label>
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
                                                <input type="checkbox" class="check" name="restaurent">
                                                <label for="square-checkbox-1">قاعـــة مطعميـــة</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="check" name="parcking">
                                                <label for="square-checkbox-1">موقف سيــارات</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
                <!-- Step 3 -->
                <h6>صـــــور القاعــــة</h6>
                <section>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">اضف الصورة الرئيسية</h4>
                                    <input type="file" id="input-file-now" class="dropify" name="image1"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">الصورة 2</h4>
                                    <input type="file" id="input-file-now" class="dropify" name="image2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">الصورة 3</h4>
                                    <input type="file" id="input-file-now" class="dropify" name="image3" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">الصورة 4</h4>
                                    <input type="file" id="input-file-now" class="dropify" name="image4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 4 -->
                <h6>حـــــــدد سعـــــرك</h6>
                <section>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <label for="firstName1">السعـــــــر:</label>
                                <input type="text" class="form-control" id="firstName1" name="price1"> </div>
                        </div>
                        <div class="col-md-4">
                                    <label class="m-t-20">مـــــــن :</label>
                                    <input type="date" class="form-control" placeholder="2017-06-04" id="mdate" name="fromdate1">
                        </div>
                        <div class="col-md-4">
                            <label class="m-t-20">الـــــــى :</label>
                            <input type="date" class="form-control" placeholder="2017-06-04" id="mdate1" name="todate1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <label for="firstName1">السعـــــــر:</label>
                                <input type="text" class="form-control" id="firstName1" name="price2"> </div>
                        </div>
                        <div class="col-md-4">
                            <label class="m-t-20">مـــــــن :</label>
                            <input type="date" class="form-control" placeholder="2017-06-04" id="mdate2" name="fromdate2">
                        </div>
                        <div class="col-md-4">
                            <label class="m-t-20">الـــــــى :</label>
                            <input type="date" class="form-control" placeholder="2017-06-04" id="mdate3" name="todate2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <label for="firstName1">السعـــــــر:</label>
                                <input type="text" class="form-control" id="firstName1" name="price3"> </div>
                        </div>
                        <div class="col-md-4">
                            <label class="m-t-20">مـــــــن :</label>
                            <input type="date" class="form-control" placeholder="2017-06-04" id="mdate4" name="fromdate3">
                        </div>
                        <div class="col-md-4">
                            <label class="m-t-20">الـــــــى :</label>
                            <input type="date" class="form-control" placeholder="2017-06-04" id="mdate5" name="todate3">
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn btn-success" type="submit">submit</button>
                    </div>
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
    <script src="{{asset('assets/js/admin/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/admin/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('assets/js/admin/bootstrap-wysihtml5.js')}}"></script>

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
                finish: "Submit"
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

            }
        });


        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
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
@endsection