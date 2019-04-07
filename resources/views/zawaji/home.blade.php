<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html template">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="themexriver">
    <title> Zawaji</title>
    <link href="images/favicon.png" rel="icon">

    <!-- Icon fonts -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,700italic,400" rel="stylesheet" type="text/css">

    <!-- Plugins -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nivo-lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nivo-default.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/invitation.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google map api -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <style>
        nav, body, a,label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, span, option,button{
            font-family: DroidArabicKufiRegular, 'sans-serif' !important;
        }
    </style>
</head>

<body>

<div class="site-loder">
    <div class="lode-wrap">
        <span></span>
        <span></span>
    </div>
</div> <!-- end of site-loder -->

<header class="main-header">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt></a>
            </div>
            <div class="navbar-wrapper">
                <div id="navbar" class="collapse navbar-collapse pull-right" dir="rtl">
                    <ul class="nav navbar-nav" dir="rtl">
                        <li><a href="#">التسجيل</a></li>
                        <li><a href="#">تسجيل الدخول</a></li>
                        <li><a href="#coming">ارسل دعوة</a></li>
                        <li><a href="/owner/add_party_room"> أضف شركتك</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >المدينــــة<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="/reserve">تبــــوك</a></li>
                                <li><a href="/reserve">جــــدة</a></li>
                                <li><a href="/reserve">الريــــاض</a></li>
                                <li><a href="/reserve">مكـــــــة</a></li>
                                <li><a href="/reserve">المدينـــــة</a></li>
                            </ul>
                        </li>
                        <li><a href="/">الرئيــسية</a></li>
                    </ul>
                </div>
                <button class="tog-nav btn btn-default">
                        <span>
                            <i class="fa fa-bars open" data-count="0"></i>
                            <i class="fa fa-times close"></i>
                        </span>
                </button>
                <div class="clearfix"></div>
            </div>
        </div>
    </nav> <!-- end of navigation -->
</header> <!-- end of header -->

<div class="hero">
    <div class="hero-slider">
        <div class="slider-1 item">
            <div class="overlay"></div>
        </div>
        <!--<div class="slider-2 item">
            <div class="overlay"></div>
        </div>
    </div> <!-- end of hero-slider -->
    </div>
    <div class="button-search container">
        <div class="row slogan"  dir="rtl">
            <h1>لنحجز معاً مكاناً لإقامة حفل زفافك في السعودية</h1>
            <h4>اختر من بين آلاف قاعات الزفاف المنتشرة  بجميع مناطق المملكة العربية </h4>
        </div>
        <div class="row">
            <div class="col col-md-9">
                <div class="button-group pull-left">
                    <a href="#coming"><i class="fa fa-paper-plane"></i></a>
                    <a href="/reserve" class="millde"><i class="fa fa-map-marker" style="width: 50%"></i></a>
                    <a href="#gallery"><i class="fa fa-heart"></i></a>
                </div>
                <div class="search pull-left">
                    <form dir="rtl" action="/reserve">
                        <div class="form-group" dir="rtl" >
                            <input type="text" class="form-control" placeholder="اختر مدينتك" style="background-color: #393939;opacity:0.5;color: white; ::placeholder:{color: #1b1e21 !important;} ">
                        </div>
                        <button type="submit" class="btn btn-default"><span> ابحث الان&nbsp;&nbsp; </span> <i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="col col-md-3"></div>
        </div>
    </div> <!-- end of button-search -->
</div> <!-- end of hero -->

<section class="couple" id="couple">
    <div class="container">
        <div class="section-title row" >
            <div class="col col-md-4 col-md-offset-5" dir="rtl" style="text-align: center">
                <h2>خدماتنا</h2>
                <p>قصور الافراح و القاعات متاحة عبر موقعنا</p>
            </div>
        </div> <!-- end of section-title -->

        <div class="content row">
            <div class="col col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" dir="rtl">
                <div class="groom col col-sm-6">
                    <div class="frame-wrapper">
                        <div class="frame">
                            <img src="{{asset('assets/images/landing3.jpg')}}" alt size="full">
                        </div>
                        <a href="" class="btn btn-default" data-lightbox-gallery="gallery1">ننظم لك فرحك</a>
                    </div>
                </div>
                <div class="bride col col-sm-6">
                    <div class="frame-wrapper">
                        <div class="frame">
                            <img src="{{asset('assets/images/landing3.jpg')}}" alt>
                        </div>
                        <a href="" class="btn btn-default" data-lightbox-gallery="gallery1">احجز عن بعد</a>
                    </div>
                </div>
                <div class="heart">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                </div>
            </div>
        </div> <!-- end of content -->

        <div class="para col col-md-8 col-md-offset-2" dir="rtl">
            <p class="para-with-bg">اختر من بين آلاف قاعات الزفاف و خدمات الافراح المنتشرة  بجميع مناطق المملكة العربية السعودية...موقعنا يقترح عليك قاعات باسعار خيالية مع حجز فوري و دفع اونلاين و نحن نستكلف بما تبقى من تنظيمات تخصك  </p>
        </div> <!-- end of para -->
    </div> <!-- end of container -->
</section> <!-- end of couple -->
<section class="gallery" id="gallery">
    <div class="container">
        <div class="section-title row">
            <div class="col col-md-4 col-md-offset-5" dir="rtl" style="text-align: center">
                <h2 >قاعاتنا</h2>
                <p>اليك باقة من قاعات الافراح المتوافد عليها</p>
            </div>
        </div> <!-- end of section-title -->

        <div class="gallery-content row">
            <div class="col col-sm-6 col-md-4">
                <div>
                    <img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">
                    <img src="{{asset('assets/images/salle1.jpg')}}"  style="height: 350px;" alt class="thumb img img-responsive">
                    <button class="btn btn-default" dir="rtl">اسم القاعة</button>

                    <div class="hover-content">
                        <div>
                            <h4>اسم القاعة</h4>
                            <p>متواجدة في المنطقة آ</p>
                            <a  href="/reserve" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-4">
                <div>
                    <img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">
                    <img src="{{asset('assets/images/salle1.jpg')}}"  style="height: 350px;" alt class="thumb img img-responsive">
                    <button class="btn btn-default" dir="rtl">اسم القاعة</button>

                    <div class="hover-content">
                        <div>
                            <h4>اسم القاعة</h4>
                            <p>متواجدة في المنطقة آ</p>
                            <a  href="/reserve" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-4">
                <div>
                    <img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">
                    <img src="{{asset('assets/images/salle1.jpg')}}"  style="height: 350px;" alt class="thumb img img-responsive">
                    <button class="btn btn-default" dir="rtl">اسم القاعة</button>

                    <div class="hover-content">
                        <div>
                            <h4>اسم القاعة</h4>
                            <p>متواجدة في المنطقة آ</p>
                            <a  href="/reserve" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-4">
                <div>
                    <img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">
                    <img src="{{asset('assets/images/salle1.jpg')}}"  style="height: 350px;" alt class="thumb img img-responsive">
                    <button class="btn btn-default" dir="rtl">اسم القاعة</button>

                    <div class="hover-content">
                        <div>
                            <h4>اسم القاعة</h4>
                            <p>متواجدة في المنطقة آ</p>
                            <a  href="/reserve" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-4">
                <div>
                    <img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">
                    <img src="{{asset('assets/images/salle1.jpg')}}"  style="height: 350px;" alt class="thumb img img-responsive">
                    <button class="btn btn-default" dir="rtl">اسم القاعة</button>

                    <div class="hover-content">
                        <div>
                            <h4>اسم القاعة</h4>
                            <p>متواجدة في المنطقة آ</p>
                            <a  href="/reserve" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-6 col-md-4">
                <div>
                    <img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">
                    <img src="{{asset('assets/images/salle1.jpg')}}"  style="height: 350px;" alt class="thumb img img-responsive">
                    <button class="btn btn-default" dir="rtl">اسم القاعة</button>

                    <div class="hover-content">
                        <div>
                            <h4>اسم القاعة</h4>
                            <p>متواجدة في المنطقة آ</p>
                            <a  href="/reserve" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>



            <a href="#" class="btn btn-default">اظهار المزيد</a>
        </div> <!-- end of gallery-content -->
    </div> <!-- end of container -->
</section> <!-- end of gallery -->

<section class="our-story">
    <div class="container">
        <div class="section-title row">
            <div class="col col-md-6 col-md-offset-5" style="margin-top: 2%">
                <h2>قيل عن موقع زواجي</h2>
            </div>
        </div> <!-- end of section-title -->


            <div class="meet col">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="meet-slider">
                        @foreach(\App\Message::all() as $message)
                            <div>
                                <div class="title">
                                    <span>{{$message->name}}</span>
                                    <h2>{{$message->subject}}</h2>
                                </div>
                                <p class="para-with-bg">{{$message->message}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of our-story -->

<section class="coming-soon" id="coming">
    <div class="container">
        <div class="section-title row">
            <div class="col col-md-4 col-md-offset-5" dir="rtl" style="text-align: center">
                <span></span>
                <h2>انت مدعو !</h2>
                <p>يتشرف زوارنا بتقديم دعوة زفاف لك</p>
            </div>
        </div> <!-- end of section-title -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="evnt_card_container">
                        <div class="containers">
                            <div class="cards" dir="rtl">
                                <div class="card front evnt_prt evnt_prt_1" dir="rtl">
                                    <h2>موعد 1</h2>
                                    <img src="{{asset('assets/images/event_icon1.png')}}" alt="" />
                                    <p>منطقــة</p>
                                    <button class="btn btn-primary btn_evnt">ســــــــاعة 1</button>
                                </div><!--.card .front .evnt_prt .evnt_prt_1-->
                                <div class="card back evnt_prt_back evnt_prt_back_1" dir="rtl">
                                    <h2>انت مدعـو من طرف</h2>
                                    <div class="evnt_addres">
                                        <p>قاعــة الافراح 1</p>
                                        <p>العنـــوان 1</p>
                                        <p>يوم/شهر</p>
                                        <p>ســــــــاعة</p>
                                    </div>
                                </div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
                            </div><!-- .cards-->
                        </div><!--.containers-->
                    </div><!-- .evnt_card_container-->
                </div>
                <div class="col-md-4">
                    <div class="evnt_card_container">
                        <div class="containers">
                            <div class="cards" dir="rtl">
                                <div class="card front evnt_prt evnt_prt_1" dir="rtl">
                                    <h2>موعد 2</h2>
                                    <img src="{{asset('assets/images/event_icon1.png')}}" alt="" />
                                    <p>منطقــة</p>
                                    <button class="btn btn-primary btn_evnt">ســــــــاعة 2</button>
                                </div><!--.card .front .evnt_prt .evnt_prt_1-->
                                <div class="card back evnt_prt_back evnt_prt_back_1" dir="rtl">
                                    <h2>انت مدعـو من طرف</h2>
                                    <div class="evnt_addres">
                                        <p>قاعــة الافراح 2</p>
                                        <p>العنـــوان 2</p>
                                        <p>يوم/شهر</p>
                                        <p>ســــــــاعة</p>
                                    </div>
                                </div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
                            </div><!-- .cards-->
                        </div><!--.containers-->
                    </div><!-- .evnt_card_container-->
                </div>
                <div class="col-md-4">
                    <div class="evnt_card_container">
                        <div class="containers">
                            <div class="cards" dir="rtl">
                                <div class="card front evnt_prt evnt_prt_1" dir="rtl">
                                    <h2>موعد 3</h2>
                                    <img src="{{asset('assets/images/event_icon1.png')}}" alt="" />
                                    <p>منطقــة</p>
                                    <button class="btn btn-primary btn_evnt">ســــــــاعة 3</button>
                                </div><!--.card .front .evnt_prt .evnt_prt_1-->
                                <div class="card back evnt_prt_back evnt_prt_back_1" dir="rtl">
                                    <h2>انت مدعـو من طرف</h2>
                                    <div class="evnt_addres">
                                        <p>قاعــة الافراح3</p>
                                        <p>العنـــوان 3</p>
                                        <p>يوم/شهر</p>
                                        <p>ســــــــاعة</p>
                                    </div>
                                </div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
                            </div><!-- .cards-->
                        </div><!--.containers-->
                    </div><!-- .evnt_card_container-->
                </div>
            </div>
        </div>
    </div> <!-- end of container -->
</section> <!-- end of coming-soon -->




<section class="rsvp" id="rsvp">
    <div class="container">
        <div class="title row">
            <div class="col col-md-8 col-md-offset-2">
                <h2>اترك لنا رسالة</h2>
                <p class="para-with-bg"> مبارك عليك اخي و اختي الكريمين لاجل زواجكما، الان مهمتنا لتوفير حجز قاعة لعرسكما</p>
            </div>
        </div>

        <div class="form row" dir="rtl">
            <div class="col col-md-10 col-md-offset-1">
                <form method="post" action="/messages" id="rsvp-form">
                    @csrf
                    <div class="form-group col col-sm-6">
                        <label for="email">العنوان البريدي</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group col col-sm-6">
                        <label for="name">الاسم</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group col col-sm-12">
                        <label for="events">الموضوع</label>
                        <input type="text" class="form-control" name="subject" id="events">
                    </div>
                    <div class="form-group col col-sm-12">
                        <label for="description">الرسالة</label>
                        <textarea class="form-control" id="description" name="message"></textarea>
                    </div>
                    <div class="form-group submit col col-sm-12" dir="ltr">
                        <button id="alert" class="btn btn-default" type="submit">ارسال</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                <div class="bird"></div>
            </div>
        </div> <!-- end of form -->
    </div> <!-- end of container -->
</section> <!-- end of rsvp -->

<footer>
    <div class="footer-wrapper">
        <div class="container">
            <div class="title" dir="rtl">
                <h2>موقع زواجي</h2>
                <p>معا لنحجز لك احسن قاعات الافراح في المملكة</p>
            </div>
            <div class="social-links">
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2019 - Programmed by <a href="https://www.facebook.com/younes.chelaf" target="_blank"> Younes Chellaf</a></p>
        </div>
    </div> <!-- end of footer-wrapper -->
</footer> <!-- end of footer -->


<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!--  Plugins for this template -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.lwtCountdown-1.0.js')}}"></script>
<script src="{{asset('assets/js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>

<!-- Custom script for this pages -->
<script src="{{asset('assets/js/index-script.js')}}"></script>
<script src="{{asset('assets/js/common-script.js')}}"></script>
</body>
</html>
