<div class="container">
    <div class="gallery-content row">
            @foreach($rooms->all() as $room)
                <div class="col col-sm-6 col-md-4">
                    <div>
                        <label class="label label-warning" id="price-btn">{{$room->getPrice()}} ريال</label>
                        <img src="{{asset('assets/images/party_room/'.$room->image[0]->path)}}"  style="border-radius: 50%" alt class="thumb img img-responsive">
                        <button class="btn btn-default" dir="rtl">{{$room->name}}</button>
                        <div class="hover-content">
                            <div>
                                <h4>{{$room->name}}</h4>
                                <p>متواجدة في {{$room->city->name}}</p>
                                <a  href="{{route('zawaji.room-details',[$room->id,$room->getName()])}}" class="btn btn-default" data-lightbox-gallery="gallery2">تفاصيل</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div> <!-- end of gallery-content -->
</div>