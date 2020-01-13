@extends('layouts.app')
@section('css')
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        @font-face{font-family:PaymentFont;src:url(../fonts/paymentfont-webfont.eot);src:url(../fonts/paymentfont-webfont.eot?#iefix) format('embedded-opentype'),url('../fonts/paymentfont-webfont.woff') format('woff2'),url(../fonts/paymentfont-webfont.woff) format('woff'),url(../fonts/paymentfont-webfont.ttf) format('truetype'),url(../fonts/paymentfont-webfont.svg#paymentfont-webfont) format('svg');font-weight:400;font-style:normal}.pf{display:inline-block;font:normal normal normal 14px/1 PaymentFont;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.pf-amazon:before{content:"\f000"}.pf-american-express:before{content:"\f001"}.pf-american-express-alt:before{content:"\f002"}.pf-atm:before{content:"\f003"}.pf-bankomat:before{content:"\f004"}.pf-bank-transfer:before{content:"\f005"}.pf-bitcoin:before{content:"\f006"}.pf-bitcoin-sign:before{content:"\f007"}.pf-braintree:before{content:"\f008"}.pf-btc:before{content:"\f009"}.pf-card:before{content:"\f00a"}.pf-carta-si:before{content:"\f00b"}.pf-cash:before{content:"\f00c"}.pf-cash-on-delivery:before{content:"\f00d"}.pf-cb:before{content:"\f00e"}.pf-cirrus:before{content:"\f00f"}.pf-cirrus-alt:before{content:"\f010"}.pf-clickandbuy:before{content:"\f011"}.pf-credit-card:before{content:"\f012"}.pf-diners:before{content:"\f013"}.pf-discover:before{content:"\f014"}.pf-ec:before{content:"\f015"}.pf-eps:before{content:"\f016"}.pf-eur:before{content:"\f017"}.pf-facture:before{content:"\f018"}.pf-fattura:before{content:"\f019"}.pf-flattr:before{content:"\f01a"}.pf-giropay:before{content:"\f01b"}.pf-gittip:before,.pf-gratipay:before{content:"\f01c"}.pf-google-wallet:before{content:"\f01d"}.pf-google-wallet-alt:before{content:"\f01e"}.pf-gbp:before{content:"\f01f"}.pf-ideal:before{content:"\f020"}.pf-ils:before{content:"\f021"}.pf-inr:before{content:"\f022"}.pf-invoice:before{content:"\f023"}.pf-invoice-sign:before{content:"\f024"}.pf-invoice-sign-alt:before{content:"\f025"}.pf-invoice-sign-alt-o:before{content:"\f026"}.pf-invoice-sign-o:before{content:"\f027"}.pf-jcb:before{content:"\f028"}.pf-jpy:before{content:"\f029"}.pf-krw:before{content:"\f02a"}.pf-maestro:before{content:"\f02b"}.pf-maestro-alt:before{content:"\f02c"}.pf-mastercard:before{content:"\f02d"}.pf-mastercard-alt:before{content:"\f02e"}.pf-mastercard-securecode:before{content:"\f02f"}.pf-ogone:before{content:"\f030"}.pf-paybox:before{content:"\f031"}.pf-paylife:before{content:"\f032"}.pf-paypal:before{content:"\f033"}.pf-paypal-alt:before{content:"\f034"}.pf-paysafecard:before{content:"\f035"}.pf-postepay:before{content:"\f036"}.pf-quick:before{content:"\f037"}.pf-rechnung:before{content:"\f038"}.pf-ripple:before{content:"\f039"}.pf-rub:before{content:"\f03a"}.pf-skrill:before{content:"\f03b"}.pf-sofort:before{content:"\f03c"}.pf-square:before{content:"\f03d"}.pf-stripe:before{content:"\f03e"}.pf-truste:before{content:"\f03f"}.pf-try:before{content:"\f040"}.pf-unionpay:before{content:"\f041"}.pf-usd:before{content:"\f042"}.pf-verified-by-visa:before{content:"\f043"}.pf-verisign:before{content:"\f044"}.pf-visa:before{content:"\f045"}.pf-visa-electron:before{content:"\f046"}.pf-western-union:before{content:"\f047"}.pf-western-union-alt:before{content:"\f048"}.pf-wirecard:before{content:"\f049"}.pf-sepa:before{content:"\f04a"}.pf-sepa-alt:before{content:"\f04b"}.pf-apple-pay:before{content:"\f04c"}.pf-interac:before{content:"\f04d"}.pf-paymill:before{content:"\f04e"}.pf-dankort:before{content:"\f04f"}.pf-bancontact-mister-cash:before{content:"\f050"}.pf-moip:before{content:"\f051"}.pf-pagseguro:before{content:"\f052"}.pf-cash-on-pickup:before{content:"\f053"}.pf-sage:before{content:"\f054"}.pf-elo:before{content:"\f055"}.pf-elo-alt:before{content:"\f056"}.pf-payu:before{content:"\f057"}.pf-mercado-pago:before{content:"\f058"}.pf-mercado-pago-sign:before{content:"\f059"}.pf-payshop:before{content:"\f05a"}.pf-multibanco:before{content:"\f05b"}.pf-gratipay-sign:before{content:"\f05c"}.pf-six:before{content:"\f05d"}.pf-cashcloud:before{content:"\f05e"}
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
    </style>
@endsection
@section('content')
    <section class="rsvp" id="rsvp">
        <div class="container">
            <div class="title row">
            <div class="col col-md-12">
            <h1> حجــــــوزاتي </h1>
            <h4 class="para-with-bg">اليــك مجمـــوع الحجـوزات التي قمـت بها على مستوى القاعات المتواجدة في موقعـنا </h4>
            </div>
            </div>
            <main class="page product-page" style="text-align: right;margin-top: 2%" >
                <section class="clean-block clean-product ">
                    <div class="container" dir="ltr">
                        <div class="block-content">
                            <div class="product-info">
                                <div class="row" >
                                    <div class="col-md-12 container">
                                        <table class="table table-striped"  dir="rtl">
                                            <thead>
                                            <tr>
                                                <th >القـــاعـة</th>
                                                <th> نوع الفـرح</th>
                                                <th>تاريخ الحجــز</th>
                                                <th> الحالــــة</th>
                                            </tr>
                                            </thead>
                                            @if($reservations)
                                            <tbody>
                                            @foreach($reservations as $reservation)
                                            <tr>
                                            <td ><a href="{{route('zawaji.room-details',[$reservation->party_room->id,$reservation->party_room->name])}}">{{$reservation->party_room->name}}</a></td>
                                            <td >{{$reservation->weddingType->name}}</td>
                                            <td>{{$reservation->date_from->format('d-m-Y')}}</td>
                                            <td>{{$reservation->status()}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            @else
                                            <tr>
                                                <td style="text-align: center" colspan="4">لم يـــوجد لك حجــوزات سابقـــة</td>
                                            </tr>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </section>
@endsection
