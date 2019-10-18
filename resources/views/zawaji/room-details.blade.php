@extends('layouts.app')
@section('content')
    <section class="rsvp" id="rsvp">
        <div class="container">
            <div class="title row">
                <div class="col col-md-12">
                    <h1> احجـــــــــز الآن</h1>
                    <h4 class="para-with-bg">سيتـــــم معالجة عمليــة الحجز من طرف صـــاحب القـاعة و من ثم تاكيد الطلـب</h4>
                </div>
            </div>
            <div class="form row" dir="rtl">
                <div class="details col-md-12 container">
                    <div class="row container">
                        <div class="col-md-8"><h2>  {{$room->name}}</h2></div>
                        <div class="col-md-4"><button class="btn reserve-btn btn-outline-danger" data-toggle="modal" data-target="#modal-reserve" > احجـــــــــز الآن</button></div>
                    </div>

                    <div class="">
                        <div>
                            <img src="{{asset('assets/images/party_room/'.$room->image[0]->path)}}" alt="" />
                        </div>
                    </div>
                    <div class="row">
                    <p>
                        {{$room->description}}
                    </p>
                    </div>

                    <div class="bird"></div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of rsvp -->
    <div class="col-md-8">
        <div id="modal-reserve" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">احجــــــز قــاعتك الآن</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('reserve.store')}}">
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
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">تاريخ بدايــة الحجــــــز</label>
                                <input name="date_from" type="date" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">تاريخ نهــاية الحجــــــز</label>
                                <input name="date_to" type="date" class="form-control" id="recipient-name">
                            </div>
                            <input type="hidden" name="party_room_id" value="{{$room->id}}">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-danger waves-effect waves-light">حجــــــــــــــــز</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection