@extends('zawaji.home')
@section('content')
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
                            @if( ! auth()->user() )
                                <li><a href="{{route('register')}}">التسجيل</a></li>
                                <li><a href="{{route('login')}}">تسجيل الدخول</a></li>
                            @else
                                @if(auth()->user()->getRoleNames()[0] == 'owner')
                                {{--<li><a href="{{route('invitations.index')}}">ارسل دعوة</a></li>--}}
                                <li><a href="{{route('owner-party_room.index')}}"> لوحــة تحكـــم شركتك</a></li>
                                @elseif(auth()->user()->getRoleNames()[0] == 'admin')
                                    <li><a href="{{route('admin.landing')}}">لوحــة تحكـــم الموقـع</a></li>
                                @else
                                    <li><a href="{{route('zawaji.rooms')}}">احجـــــز قاعتك الآن</a></li>
                                @endif
                            @endif
                            {{--<li><a href="#rsvp">تواصل معنـــا</a></li>--}}
                            {{--<li><a href="#gallery">قــــاعاتنــا</a></li>--}}
                            <li><a href="{{route('zawaji.landing')}}">الرئيــسية</a></li>
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
                        <a href="#rsvp"><i class="fa fa-paper-plane"></i></a>
                        <a href="{{route('zawaji.rooms')}}" class="millde"><i class="fa fa-map-marker" style="width: 50%"></i></a>
                        <a href="#gallery"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="search pull-left">
                        <form dir="rtl" method="post" action="{{route('room.search')}}">
                            @csrf
                            <div class="form-group" dir="rtl" >
                                <input id="search" name="city" type="text" class="form-control" placeholder=" اختـــــــــر مدينــــــــتك " style="background-color: #393939;opacity:0.5;color: white; ::placeholder:{color: #1b1e21 !important;} ">
                            </div>
                            <button type="submit" class="btn btn-default"><span> ابحث الان&nbsp;&nbsp; </span> <i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col col-md-3"></div>
            </div>
        </div> <!-- end of button-search -->
    </div> <!-- end of hero -->

    {{--<section class="couple" id="couple">--}}
        {{--<div class="container">--}}
            {{--<div class="section-title row" >--}}
                {{--<div class="col col-md-4 col-md-offset-5" dir="rtl" style="text-align: center">--}}
                    {{--<h2>خدماتنا</h2>--}}
                    {{--<p>قصور الافراح و القاعات متاحة عبر موقعنا</p>--}}
                {{--</div>--}}
            {{--</div> <!-- end of section-title -->--}}

            {{--<div class="content row">--}}
                {{--<div class="col col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" dir="rtl">--}}
                    {{--<div class="groom col col-sm-6">--}}
                        {{--<div class="frame-wrapper">--}}
                            {{--<div class="frame">--}}
                                {{--<img src="{{asset('assets/images/landing3.jpg')}}" alt size="full">--}}
                            {{--</div>--}}
                            {{--<a href="" class="btn btn-default" data-lightbox-gallery="gallery1">ننظم لك فرحك</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="bride col col-sm-6">--}}
                        {{--<div class="frame-wrapper">--}}
                            {{--<div class="frame">--}}
                                {{--<img src="{{asset('assets/images/landing3.jpg')}}" alt>--}}
                            {{--</div>--}}
                            {{--<a href="" class="btn btn-default" data-lightbox-gallery="gallery1">احجز عن بعد</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="heart">--}}
                        {{--<i class="fa fa-heart"></i>--}}
                        {{--<i class="fa fa-heart"></i>--}}
                        {{--<i class="fa fa-heart"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div> <!-- end of content -->--}}

            {{--<div class="para col col-md-8 col-md-offset-2" dir="rtl">--}}
                {{--<p class="para-with-bg">اختر من بين آلاف قاعات الزفاف و خدمات الافراح المنتشرة  بجميع مناطق المملكة العربية السعودية...موقعنا يقترح عليك قاعات باسعار خيالية مع حجز فوري و دفع اونلاين و نحن نستكلف بما تبقى من تنظيمات تخصك  </p>--}}
            {{--</div> <!-- end of para -->--}}
        {{--</div> <!-- end of container -->--}}
    {{--</section> <!-- end of couple -->--}}
    {{--<section class="gallery" id="gallery">--}}
        {{--<div class="container">--}}
            {{--<div class="section-title row">--}}
                {{--<div class="col col-md-4 col-md-offset-5" dir="rtl" style="text-align: center">--}}
                    {{--<h2 >قاعاتنا</h2>--}}
                    {{--<p>اليك باقة من قاعات الافراح المتوافد عليها</p>--}}
                {{--</div>--}}
            {{--</div> <!-- end of section-title -->--}}

            {{--<div class="gallery-content row">--}}
                {{--@foreach(\App\Party_room::getRoom() as $room)--}}
                    {{--<div class="col col-sm-6 col-md-4">--}}
                        {{--<div>--}}

                            {{--<img src="{{asset('assets/images/frame.png')}}" alt class="frame img img-responsive">--}}
                            {{--<label dir="rtl" class="label label-warning" id="landing-price-btn"> ريال {{$room->getPrice()}}  </label>--}}
                            {{--<img src="{{asset('assets/images/party_room/'.$room->image[0]->path)}}"  style="border-radius: 50%;" alt class="thumb img img-responsive">--}}
                            {{--<button class="btn btn-default" dir="rtl">{{$room->name}}</button>--}}

                            {{--<div class="hover-content">--}}
                                {{--<div>--}}
                                    {{--<h4>{{$room->name}}</h4>--}}
                                    {{--<p>متواجدة في {{$room->city->name}}</p>--}}
                                    {{--<a  href="{{route('zawaji.room-details',$room->id)}}" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}

            {{--</div> <!-- end of gallery-content -->--}}
            {{--<div class="gallery-content row" style="margin-left: -10%">--}}
                {{--<a href="{{route('zawaji.rooms')}}" class="btn btn-default">اظهار المزيد</a>--}}
            {{--</div>--}}
        {{--</div> <!-- end of container -->--}}
    {{--</section> <!-- end of gallery -->--}}
    {{--@if(App\Message::where('status','approved')->count())--}}
    {{--<section class="our-story">--}}
        {{--<div class="container">--}}
            {{--<div class="section-title row">--}}
                {{--<div class="col col-md-6 col-md-offset-5" style="margin-top: 2%">--}}
                    {{--<h2>قيل عن موقع زواجي</h2>--}}
                {{--</div>--}}
            {{--</div> <!-- end of section-title -->--}}


            {{--<div class="meet col">--}}
                {{--<div class="col col-md-8 col-md-offset-2">--}}
                    {{--<div class="meet-slider">--}}
                        {{--@foreach(\App\Message::where('status','approved')->get() as $message)--}}
                            {{--<div>--}}
                                {{--<div class="title">--}}
                                    {{--<span>{{$message->name}}</span>--}}
                                    {{--<h2>{{$message->subject}}</h2>--}}
                                {{--</div>--}}
                                {{--<p class="para-with-bg">{{$message->message}}</p>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        {{--</div> <!-- end of content -->--}}
        {{--</div> <!-- end of container -->--}}
    {{--</section> <!-- end of our-story -->--}}
    {{--@endif--}}
    {{--Invitation Section--}}
    {{--@if( auth()->user())--}}
        {{--<section class="coming-soon" id="coming">--}}
            {{--<div class="container">--}}
                {{--<div class="section-title row">--}}
                    {{--<div class="col col-md-4 col-md-offset-5" dir="rtl" style="text-align: center">--}}
                        {{--<span></span>--}}
                        {{--<h2>انت مدعو !</h2>--}}
                        {{--<p>يتشرف زوارنا بتقديم دعوة زفاف لك</p>--}}
                    {{--</div>--}}
                {{--</div> <!-- end of section-title -->--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-4">--}}
                            {{--<div class="evnt_card_container">--}}
                                {{--<div class="containers">--}}
                                    {{--<div class="cards" dir="rtl">--}}
                                        {{--<div class="card front evnt_prt evnt_prt_1" dir="rtl">--}}
                                            {{--<h2>موعد 1</h2>--}}
                                            {{--<img src="{{asset('assets/images/event_icon1.png')}}" alt="" />--}}
                                            {{--<p>منطقــة</p>--}}
                                            {{--<button class="btn btn-primary btn_evnt">ســــــــاعة 1</button>--}}
                                        {{--</div><!--.card .front .evnt_prt .evnt_prt_1-->--}}
                                        {{--<div class="card back evnt_prt_back evnt_prt_back_1" dir="rtl">--}}
                                            {{--<h2>انت مدعـو من طرف</h2>--}}
                                            {{--<div class="evnt_addres">--}}
                                                {{--<p>قاعــة الافراح 1</p>--}}
                                                {{--<p>العنـــوان 1</p>--}}
                                                {{--<p>يوم/شهر</p>--}}
                                                {{--<p>ســــــــاعة</p>--}}
                                            {{--</div>--}}
                                        {{--</div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->--}}
                                    {{--</div><!-- .cards-->--}}
                                {{--</div><!--.containers-->--}}
                            {{--</div><!-- .evnt_card_container-->--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<div class="evnt_card_container">--}}
                                {{--<div class="containers">--}}
                                    {{--<div class="cards" dir="rtl">--}}
                                        {{--<div class="card front evnt_prt evnt_prt_1" dir="rtl">--}}
                                            {{--<h2>موعد 2</h2>--}}
                                            {{--<img src="{{asset('assets/images/event_icon1.png')}}" alt="" />--}}
                                            {{--<p>منطقــة</p>--}}
                                            {{--<button class="btn btn-primary btn_evnt">ســــــــاعة 2</button>--}}
                                        {{--</div><!--.card .front .evnt_prt .evnt_prt_1-->--}}
                                        {{--<div class="card back evnt_prt_back evnt_prt_back_1" dir="rtl">--}}
                                            {{--<h2>انت مدعـو من طرف</h2>--}}
                                            {{--<div class="evnt_addres">--}}
                                                {{--<p>قاعــة الافراح 2</p>--}}
                                                {{--<p>العنـــوان 2</p>--}}
                                                {{--<p>يوم/شهر</p>--}}
                                                {{--<p>ســــــــاعة</p>--}}
                                            {{--</div>--}}
                                        {{--</div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->--}}
                                    {{--</div><!-- .cards-->--}}
                                {{--</div><!--.containers-->--}}
                            {{--</div><!-- .evnt_card_container-->--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<div class="evnt_card_container">--}}
                                {{--<div class="containers">--}}
                                    {{--<div class="cards" dir="rtl">--}}
                                        {{--<div class="card front evnt_prt evnt_prt_1" dir="rtl">--}}
                                            {{--<h2>موعد 3</h2>--}}
                                            {{--<img src="{{asset('assets/images/event_icon1.png')}}" alt="" />--}}
                                            {{--<p>منطقــة</p>--}}
                                            {{--<button class="btn btn-primary btn_evnt">ســــــــاعة 3</button>--}}
                                        {{--</div><!--.card .front .evnt_prt .evnt_prt_1-->--}}
                                        {{--<div class="card back evnt_prt_back evnt_prt_back_1" dir="rtl">--}}
                                            {{--<h2>انت مدعـو من طرف</h2>--}}
                                            {{--<div class="evnt_addres">--}}
                                                {{--<p>قاعــة الافراح3</p>--}}
                                                {{--<p>العنـــوان 3</p>--}}
                                                {{--<p>يوم/شهر</p>--}}
                                                {{--<p>ســــــــاعة</p>--}}
                                            {{--</div>--}}
                                        {{--</div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->--}}
                                    {{--</div><!-- .cards-->--}}
                                {{--</div><!--.containers-->--}}
                            {{--</div><!-- .evnt_card_container-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div> <!-- end of container -->--}}
        {{--</section> <!-- end of coming-soon -->--}}
    {{--@endif--}}
    {{--<section class="rsvp" id="rsvp">--}}
        {{--<div class="container">--}}
            {{--<div class="title row">--}}
                {{--<div class="col col-md-8 col-md-offset-2">--}}
                    {{--<h2>اترك لنا رسالة</h2>--}}
                    {{--<p class="para-with-bg"> مبارك عليك اخي و اختي الكريمين لاجل زواجكما، الان مهمتنا لتوفير حجز قاعة لعرسكما</p>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="form row" dir="rtl">--}}
                {{--<div class="col col-md-10 col-md-offset-1">--}}
                    {{--@if ($errors->any())--}}
                        {{--<div class="alert alert-danger">--}}
                            {{--<strong>تنويــــه</strong> لم يتم ارسال الرسالة بنجاح و ذلك بسبب--}}
                            {{--<br>--}}
                            {{--<ul class="t7wissa-errors-list">--}}
                                {{--@foreach ($errors->all() as $error)--}}
                                    {{--<li>{{ $error }}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--<form method="post" action="{{route('message.send')}}" id="rsvp-form">--}}
                        {{--@csrf--}}
                        {{--<div class="form-group col col-sm-6">--}}
                            {{--<label for="email">العنوان البريدي</label>--}}
                            {{--<input type="email" class="form-control" name="email" id="email">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col col-sm-6">--}}
                            {{--<label for="name">الاسم</label>--}}
                            {{--<input type="text" class="form-control" name="name" id="name">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col col-sm-12">--}}
                            {{--<label for="events">الموضوع</label>--}}
                            {{--<input type="text" class="form-control" name="subject" id="events">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col col-sm-12">--}}
                            {{--<label for="description">الرسالة</label>--}}
                            {{--<textarea class="form-control" id="description" name="message"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="form-group submit col col-sm-12" dir="ltr">--}}
                            {{--<button id="alert" class="btn btn-default" type="submit">ارسال</button>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</form>--}}
                    {{--<div class="bird"></div>--}}
                {{--</div>--}}
            {{--</div> <!-- end of form -->--}}
        {{--</div> <!-- end of container -->--}}
    {{--</section> <!-- end of rsvp -->--}}

    {{--<footer>--}}
        {{--<div class="footer-wrapper">--}}
            {{--<div class="container">--}}
                {{--<div class="title" dir="rtl">--}}
                    {{--<h2>موقع زواجي</h2>--}}
                    {{--<p>معا لنحجز لك احسن قاعات الافراح في المملكة</p>--}}
                {{--</div>--}}
                {{--<div class="social-links">--}}
                    {{--<ul class="nav">--}}
                        {{--@foreach(\App\Link::all() as $link)--}}
                        {{--<li><a href="{{$link->facebook}}"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="{{$link->instgram}}"><i class="fa fa-instagram"></i></a></li>--}}
                        {{--<li><a href="{{$link->youtube}}"><i class="fa fa-youtube"></i></a></li>--}}
                        {{--<li><a href="{{$link->twitter}}"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="copyright">--}}
                {{--<p>&copy; 2019 - Programmed by <a href="https://www.facebook.com/younes.chelaf" target="_blank"> Younes Chellaf</a></p>--}}
            {{--</div>--}}
        {{--</div> <!-- end of footer-wrapper -->--}}
    {{--</footer> <!-- end of footer -->--}}
@endsection