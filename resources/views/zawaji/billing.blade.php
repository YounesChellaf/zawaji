@extends('layouts.app')
@section('css')
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        /**
 * PaymentFont Styles 1.1.2 by @vendocrat/@AMPoellmann
 * https://vendocr.at or @vendocrat
 * License Font: SIL OFL 1.1, CSS: MIT License
 */
        @font-face{font-family:PaymentFont;src:url(../fonts/paymentfont-webfont.eot);src:url(../fonts/paymentfont-webfont.eot?#iefix) format('embedded-opentype'),url('../fonts/paymentfont-webfont.woff') format('woff2'),url(../fonts/paymentfont-webfont.woff) format('woff'),url(../fonts/paymentfont-webfont.ttf) format('truetype'),url(../fonts/paymentfont-webfont.svg#paymentfont-webfont) format('svg');font-weight:400;font-style:normal}.pf{display:inline-block;font:normal normal normal 14px/1 PaymentFont;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.pf-amazon:before{content:"\f000"}.pf-american-express:before{content:"\f001"}.pf-american-express-alt:before{content:"\f002"}.pf-atm:before{content:"\f003"}.pf-bankomat:before{content:"\f004"}.pf-bank-transfer:before{content:"\f005"}.pf-bitcoin:before{content:"\f006"}.pf-bitcoin-sign:before{content:"\f007"}.pf-braintree:before{content:"\f008"}.pf-btc:before{content:"\f009"}.pf-card:before{content:"\f00a"}.pf-carta-si:before{content:"\f00b"}.pf-cash:before{content:"\f00c"}.pf-cash-on-delivery:before{content:"\f00d"}.pf-cb:before{content:"\f00e"}.pf-cirrus:before{content:"\f00f"}.pf-cirrus-alt:before{content:"\f010"}.pf-clickandbuy:before{content:"\f011"}.pf-credit-card:before{content:"\f012"}.pf-diners:before{content:"\f013"}.pf-discover:before{content:"\f014"}.pf-ec:before{content:"\f015"}.pf-eps:before{content:"\f016"}.pf-eur:before{content:"\f017"}.pf-facture:before{content:"\f018"}.pf-fattura:before{content:"\f019"}.pf-flattr:before{content:"\f01a"}.pf-giropay:before{content:"\f01b"}.pf-gittip:before,.pf-gratipay:before{content:"\f01c"}.pf-google-wallet:before{content:"\f01d"}.pf-google-wallet-alt:before{content:"\f01e"}.pf-gbp:before{content:"\f01f"}.pf-ideal:before{content:"\f020"}.pf-ils:before{content:"\f021"}.pf-inr:before{content:"\f022"}.pf-invoice:before{content:"\f023"}.pf-invoice-sign:before{content:"\f024"}.pf-invoice-sign-alt:before{content:"\f025"}.pf-invoice-sign-alt-o:before{content:"\f026"}.pf-invoice-sign-o:before{content:"\f027"}.pf-jcb:before{content:"\f028"}.pf-jpy:before{content:"\f029"}.pf-krw:before{content:"\f02a"}.pf-maestro:before{content:"\f02b"}.pf-maestro-alt:before{content:"\f02c"}.pf-mastercard:before{content:"\f02d"}.pf-mastercard-alt:before{content:"\f02e"}.pf-mastercard-securecode:before{content:"\f02f"}.pf-ogone:before{content:"\f030"}.pf-paybox:before{content:"\f031"}.pf-paylife:before{content:"\f032"}.pf-paypal:before{content:"\f033"}.pf-paypal-alt:before{content:"\f034"}.pf-paysafecard:before{content:"\f035"}.pf-postepay:before{content:"\f036"}.pf-quick:before{content:"\f037"}.pf-rechnung:before{content:"\f038"}.pf-ripple:before{content:"\f039"}.pf-rub:before{content:"\f03a"}.pf-skrill:before{content:"\f03b"}.pf-sofort:before{content:"\f03c"}.pf-square:before{content:"\f03d"}.pf-stripe:before{content:"\f03e"}.pf-truste:before{content:"\f03f"}.pf-try:before{content:"\f040"}.pf-unionpay:before{content:"\f041"}.pf-usd:before{content:"\f042"}.pf-verified-by-visa:before{content:"\f043"}.pf-verisign:before{content:"\f044"}.pf-visa:before{content:"\f045"}.pf-visa-electron:before{content:"\f046"}.pf-western-union:before{content:"\f047"}.pf-western-union-alt:before{content:"\f048"}.pf-wirecard:before{content:"\f049"}.pf-sepa:before{content:"\f04a"}.pf-sepa-alt:before{content:"\f04b"}.pf-apple-pay:before{content:"\f04c"}.pf-interac:before{content:"\f04d"}.pf-paymill:before{content:"\f04e"}.pf-dankort:before{content:"\f04f"}.pf-bancontact-mister-cash:before{content:"\f050"}.pf-moip:before{content:"\f051"}.pf-pagseguro:before{content:"\f052"}.pf-cash-on-pickup:before{content:"\f053"}.pf-sage:before{content:"\f054"}.pf-elo:before{content:"\f055"}.pf-elo-alt:before{content:"\f056"}.pf-payu:before{content:"\f057"}.pf-mercado-pago:before{content:"\f058"}.pf-mercado-pago-sign:before{content:"\f059"}.pf-payshop:before{content:"\f05a"}.pf-multibanco:before{content:"\f05b"}.pf-gratipay-sign:before{content:"\f05c"}.pf-six:before{content:"\f05d"}.pf-cashcloud:before{content:"\f05e"}
        /*
         * Finito!
         */
    </style>
    <style>
        form {
            width: 480px;
            margin: 20px 0;
        }

        .group {
            background: white;
            /*box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);*/
            border-radius: 4px;
            margin-bottom: 20px;
        }

        label {
            position: relative;
            color: #8898AA;
            font-weight: 300;
            height: 40px;
            line-height: 40px;
            margin-left: 20px;
            display: flex;
            flex-direction: row;
        }

        .group label:not(:last-child) {
            border-bottom: 1px solid #F0F5FA;
        }

        label > span {
            width: 120px;
            text-align: right;
            margin-right: 30px;
        }

        label > span.brand {
            width: 30px;
        }

        .field {
            background: transparent;
            font-weight: 300;
            border: 0;
            color: #31325F;
            outline: none;
            flex: 1;
            padding-right: 10px;
            padding-left: 10px;
            cursor: text;
        }

        .field::-webkit-input-placeholder {
            color: #CFD7E0;
        }

        .field::-moz-placeholder {
            color: #CFD7E0;
        }

        .card-btn {
            float: left;
            display: block;
            background: #c74b6f;
            color: white;
            box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
            border-radius: 4px;
            border: 0;
            margin-top: 20px;
            font-size: 15px;
            font-weight: 400;
            width: 100%;
            height: 40px;
            line-height: 38px;
            outline: none;
        }

        card-btn:focus {
            background: #c74b6f;
        }

        card-btn:active {
            background: #c74b6f;
        }

        .outcome {
            float: left;
            width: 100%;
            padding-top: 8px;
            min-height: 24px;
            text-align: center;
        }

        .success,
        .error {
            display: none;
            font-size: 13px;
        }

        .success.visible,
        .error.visible {
            display: inline;
        }

        .error {
            color: #E4584C;
        }

        .success {
            color: #666EE8;
        }

        .success .token {
            font-weight: 500;
            font-size: 13px;
        }

    </style>
@endsection
@section('content')
    <section class="rsvp" id="rsvp">
        <div class="container">
            {{--<div class="title row">--}}
                {{--<div class="col col-md-12">--}}
                    {{--<h1> احجـــــــــز الآن</h1>--}}
                    {{--<h4 class="para-with-bg">سيتـــــم معالجة عمليــة الحجز من طرف صـــاحب القـاعة و من ثم تاكيد الطلـب</h4>--}}
                {{--</div>--}}
            {{--</div>--}}
            <main class="page product-page" style="text-align: right" >
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
                                        <form method="post" action="{{route('reserve.store')}}" class="reserve-form" id="payment-form">
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
                                                        <option value="دفع جزئي"> دفـــع عربــــون</option>
                                                        <option value="كاش"> دفـــع المبلغ كاملا</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6" id="partial">
                                                    <label for="recipient-name" class="control-label">القيــــمة المدفوعــة</label>
                                                    <input name="price_partial" type="text" class="form-control">
                                                </div>
                                                <div class="col-md-6" id="cash">
                                                     <label for="recipient-name" class="control-label">القيــــمة المدفوعــة</label>
                                                     <input name="price_cash" type="text" value="{{$room->getPrice()}}" class="form-control" disabled>
                                                </div>
                                                </div>
                                                <div class="row" style="margin-top: 5%">
                                                    <div class="alert alert-info" role="alert">
                                                        <span>يمكنـك دفــع المستحـقات الى الحســاب البنكي المرفــق في الاسفل من اجــل الحجـز و من ثم التواصل مع صاحب القاعـة بوصل الدفع لتاكيــد حجـــزك</span>
                                                    </div>
                                                </div>
                                                <div class="row form-group" style="margin-top: 3%" >
                                                    <label >الحسـاب البنكي IBAN  </label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" value="{{$room->iban}}" disabled>
                                                    </div>

                                                </div>
                                            </div>
                                            <button class="card-btn" type="submit">احجــــــز الآن</button>
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
@endsection
@section('js')
    <script>

            // Create a Stripe client
            var stripe =  Stripe('pk_test_MDjRGhc6o0BLPvYjMJBkOK5r00OUbo3VgE');
            // Create an instance of Elements
            var elements = stripe.elements();
            var style = {
                base: {
                    iconColor: '#666EE8',
                    color: '#31325F',
                    lineHeight: '40px',
                    fontWeight: 300,
                    fontFamily: 'Helvetica Neue',
                    fontSize: '15px',

                    '::placeholder': {
                        color: '#CFD7E0',
                    },
                },
            };

            var cardNumberElement = elements.create('cardNumber', {
                style: style
            });
            cardNumberElement.mount('#card-number-element');

            var cardExpiryElement = elements.create('cardExpiry', {
                style: style
            });
            cardExpiryElement.mount('#card-expiry-element');

            var cardCvcElement = elements.create('cardCvc', {
                style: style
            });
            cardCvcElement.mount('#card-cvc-element');


            function setOutcome(result) {
                var successElement = document.querySelector('.success');
                var errorElement = document.querySelector('.error');
                successElement.classList.remove('visible');
                errorElement.classList.remove('visible');

                if (result.token) {
                    // In this example, we're simply displaying the token
                    successElement.querySelector('.token').textContent = result.token.id;
                    successElement.classList.add('visible');

                    // In a real integration, you'd submit the form with the token to your backend server
                    var form = document.querySelector('form');
                    form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
                    form.submit();

                } else if (result.error) {
                    errorElement.textContent = result.error.message;
                    errorElement.classList.add('visible');
                }
            }

            // var cardBrandToPfClass = {
            //     'visa': 'pf-visa',
            //     'mastercard': 'pf-mastercard',
            //     'amex': 'pf-american-express',
            //     'discover': 'pf-discover',
            //     'diners': 'pf-diners',
            //     'jcb': 'pf-jcb',
            //     'unknown': 'pf-credit-card',
            // }
            // function setBrandIcon(brand) {
            //     var brandIconElement = document.getElementById('brand-icon');
            //     var pfClass = 'pf-credit-card';
            //     if (brand in cardBrandToPfClass) {
            //         pfClass = cardBrandToPfClass[brand];
            //     }
            //     for (var i = brandIconElement.classList.length - 1; i >= 0; i--) {
            //         brandIconElement.classList.remove(brandIconElement.classList[i]);
            //     }
            //     brandIconElement.classList.add('pf');
            //     brandIconElement.classList.add(pfClass);
            // }

            cardNumberElement.on('change', function(event) {
                // Switch brand logo
                if (event.brand) {
                    setBrandIcon(event.brand);
                }
                setOutcome(event);
            });

            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();
                var options = {
                    address_zip: document.getElementById('postal-code').value,
                };
                stripe.createToken(cardNumberElement, options).then(setOutcome);
            });
    </script>
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
                if ( method == 'كاش'){
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