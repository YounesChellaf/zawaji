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
                            <div dir="rtl" class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group" >
                                    <label for="email">المدينــــة</label>
                                    <select name="" id="cityID" class="form-control" style="background: #f2f2f2">
                                        <option value=""></option>
                                        @foreach(\App\City::all() as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
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
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="email">نوع القـــــــــاعة</label>
                                    <select name="" id="roomType" class="form-control" style="background: #f2f2f2">
                                        <option value=""></option>
                                        <option value="single">عـــــــادية</option>
                                        <option value="double">مزدوجـــــــة</option>
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
    <section class="gallery" id="rooms-filtered">
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
    <script>
        $(document).ready(function () {
            $("#cityID,#roomType").change(function () {
                var city = $("#cityID").val();
                var type = $("#roomType").val();
                $("#cityID").val(city);
                $("#roomType").val(type);
                $.ajax({
                    type : 'get',
                    dataType : 'html',
                    url: '{{url('/filtered-room')}}',
                    data : 'city_id=' + city+'&type='+ type,
                    success:function (response) {
                        // console.log(response);
                        $("#rooms-filtered").html(response);
                    }
                });
            });
        });
    </script>
@endsection