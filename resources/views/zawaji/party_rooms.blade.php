@extends('layouts.app')
@section('content')
    <section class="rsvp" id="rsvp">
        <div class="container">
            <div class="title row">
                <div class="col col-md-12">
                    <h1>اختـــــر قاعتـــــك</h1>
                    <h3 class="para-with-bg"> مبارك عليك اخي و اختي الكريمين لاجل زواجكما، الان مهمتنا لتوفير حجز قاعة لعرسكما</h3>
                </div>
            </div>
            <div class="form row" dir="rtl">
                <div class="col col-md-12">
                    <form method="post" action="/messages" >
                        @csrf
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">المدينــــة</label>
                                    <select name="" id="" class="form-control" style="background: #f2f2f2">
                                        <option value="">تبــــوك</option>
                                        <option value="">الريــــاض</option>
                                        <option value="">المدينــــة</option>
                                        <option value="">مكـــــــة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">نـــوع الحجـــــــــز</label>
                                    <select name="" id="" class="form-control" style="background: #f2f2f2">
                                        <option value="">عـــــــرس</option>
                                        <option value="">محاضـــــرة</option>
                                        <option value="">ختـــــــان</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">السعـــــــــر</label>
                                    <select name="" id="" class="form-control" style="background: #f2f2f2">
                                        <option value="">100ريال - 500ريال</option>
                                        <option value="">500ريال - 1000ريال</option>
                                        <option value="">1000ريال - 1500ريال</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">نوع القـــــــــاعة</label>
                                    <select name="" id="" class="form-control" style="background: #f2f2f2">
                                        <option value="">عـــــــادية</option>
                                        <option value="">مزدوجـــــــة</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>

                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of rsvp -->
    <section class="gallery" id="gallery">
        <div class="container">

            <div class="gallery-content row">
                @foreach(\App\Party_room::all() as $room)
                    <div class="col col-sm-6 col-md-4">
                        <div>
                            <img src="{{asset('assets/images/party_room/'.$room->image[0]->path)}}"  style="border-radius: 50%" alt class="thumb img img-responsive">
                            <button class="btn btn-default" dir="rtl">{{$room->name}}</button>

                            <div class="hover-content">
                                <div>
                                    <h4>{{$room->name}}</h4>
                                    <p>متواجدة في {{$room->city}}</p>
                                    <a  href="{{route('zawaji.room-details',$room->id)}}" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of gallery-content -->
        </div> <!-- end of container -->
    </section>
@endsection