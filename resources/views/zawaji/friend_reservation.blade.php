
    @if(! $reservations->count())
        <tr>
            <td style="text-align: center" colspan="3">لا يوجد اصدقـاء حجـزوا بالقرب من هذا التاريخ</td>
        </tr>
    @else
    @foreach($reservations as $reservation)
    <tr>
    @if( ! $reservation->user->image_id)
    <td style="width: 20%"><img src="{{asset('assets/images/admin/avatar.png')}}" alt="user-img" class="img-circle" style="width: 80%;height: 15%"/></td>
    @else
    <td><img src="{{asset('assets/images/avatar/'.auth()->user()->image->path)}}" alt="user-img" class="img-circle" /></td>
    @endif
    <td >{{$reservation->user->last_name.' '.$reservation->user->first_name}}</td>
    <td>{{$reservation->date_from->format('d-m-Y')}}</td>
    </tr>.
    @endforeach
    @endif