@extends('dashboard.master')
@section('css')
    <link href="{{asset('assets/css/admin/steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/admin/bootstrap-wysihtml5.css')}}" />
    <link href="{{asset('assets/css/admin/bootstrap-wysihtml5.css')}}../assets/node_modules/icheck/skins/all.css" rel="stylesheet">
    <link href="{{asset('assets/css/admin/form-icheck.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin/dropify.min.css')}}" rel="stylesheet">
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
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">File Upload1</h4>
                            <label for="input-file-now">Your so fresh input file — Default version</label>
                            <input type="file" id="input-file-now" class="dropify" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">File Upload2</h4>
                            <label for="input-file-now-custom-1">You can add a default value</label>
                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/node_modules/dropify/src/images/test-image-1.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="validation" >
                 <div class="col-12">
                     <div class="card">
        <div class="card-body wizard-content">
            <h4 class="card-title">قـــم باضافة قاعة افراحك ضمن مجموعاتنا</h4>
            <form action="#" class="tab-wizard wizard-circle">
                <!-- Step 1 -->
                <h6>معلومات عامة</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="firstName1">اســــم القــاعة:</label>
                                <input type="text" class="form-control" id="firstName1"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="location1">المـــــدينة :</label>
                                <select class="custom-select form-control" id="location1" name="location">
                                    <option value=""></option>
                                    <option value="Amsterdam">تبــــوك</option>
                                    <option value="Berlin">جــــدة</option>
                                    <option value="Frankfurt">الريــــاض</option>
                                    <option value="Frankfurt">المدينـــــة</option>
                                    <option value="Frankfurt">مكـــــــة</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                    </div>
                    <div class="col-md-12">
                        <div class="form-material">
                            <label for="shortDescription1">مقال عن القـــــاعة :</label>
                            <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Step 2 -->
                <h6>معلــــومات اضافيـة</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-material" style="padding-bottom: 20%">
                                <label for="jobTitle1">السعـــة الكليــة :</label>
                                <input type="text" class="form-control" id="jobTitle1"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material" style="padding-bottom: 20%">
                                <label for="jobTitle1">عـــدد القاعات :</label>
                                <input type="text" class="form-control" id="jobTitle1"> </div>
                        </div>
                        <div class="col-md-6 skin skin-square">
                            <div class="form-group">
                                <div class="input-group">
                                    <ul class="icheck-list">
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-1">Checkbox 1</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-2">Checkbox 2</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="check" id="square-checkbox-disabled" disabled data-checkbox="icheckbox_square-red">
                                            <label for="square-checkbox-disabled">Disabled</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <label for="videoUrl1">Company Name :</label>
                                <input type="text" class="form-control" id="videoUrl1">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-material">
                                <label for="shortDescription1">Job Description :</label>
                                <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 3 -->
                <h6>Interview</h6>
                <section>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">File Upload1</h4>
                                    <label for="input-file-now">Your so fresh input file — Default version</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 4 -->
                <h6>Remark</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="behName1">Behaviour :</label>
                                <input type="text" class="form-control" id="behName1">
                            </div>
                            <div class="form-group">
                                <label for="participants1">Confidance</label>
                                <input type="text" class="form-control" id="participants1">
                            </div>
                            <div class="form-group">
                                <label for="participants1">Result</label>
                                <select class="custom-select form-control" id="participants1" name="location">
                                    <option value="">Select Result</option>
                                    <option value="Selected">Selected</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Call Second-time">Call Second-time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="decisions1">Comments</label>
                                <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rate Interviwer :</label>
                                <div class="c-inputs-stacked">
                                    <label class="inline custom-control custom-checkbox block">
                                        <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                    <label class="inline custom-control custom-checkbox block">
                                        <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                    <label class="inline custom-control custom-checkbox block">
                                        <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                    <label class="inline custom-control custom-checkbox block">
                                        <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                    <label class="inline custom-control custom-checkbox block">
                                        <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                </div>
                            </div>
                        </div>
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
@endsection