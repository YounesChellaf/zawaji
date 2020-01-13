<?php
Route::get('/', function () {
    return view('zawaji.landing');
})->name('zawaji.landing');
Route::get('/{id}/{name}/قاعات-زفاف-المملكة-العربية-السعودية','Party_roomController@roomDetails')->name('zawaji.room-details');
Route::get('/autocomplete','Party_roomController@complete')->name('autocomplete');
Route::get('/filtered-room','Party_roomController@filter')->name('filter');
Route::post('قاعات-زفاف-المملكة-العربية-السعودية/','Party_roomController@search')->name('room.search');
Route::get('/rooms', 'Party_roomController@ShowRooms')->name('zawaji.rooms');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider')->name('auth.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookProviderCallback');
Route::get('auth/google', 'Auth\LoginController@redirectToGoogleProvider')->name('auth.google');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleProviderCallback');
Route::resource('/reserve','ReservationController');
//Route::post('messages/send','MessageController@store')->name('message.send');
//Route::resource('invitations','InvitationController');
Route::get('/room-to-confirm/{id}','MessageController@showRoom')->name('room-to-confirm');

Route::group(['middleware' => ['auth','verified']],function (){
    Route::get('/{id}/حجــز-قاعة-زفاف','Party_roomController@reservationBilling')->name('zawaji.reservation-billing');
    Route::get('/friend-reservation','Party_roomController@friendReservation')->name('friend_reservation');
    Route::get('حجـــــوزاتي/','ReservationController@index')->name('client_reservations');
});

Route::group(['prefix'=>'/owner','middleware' => ['auth','verified','role:owner']],function (){
    Route::resource('owner-party_room','Party_roomController');
    Route::get('رزنامة-الافراح/','CalendarController@showCalendar')->name('owner.calendar');
    Route::get('اضافة-قـاعة-جديدة/','Party_roomController@create')->name('party_room.addRoom');
    Route::get('قاعـة-الافـراح/','Party_roomController@index')->name('party_room.showRoom');
    Route::get('/تعديـل-قاعـة-الافـراح/{id}','Party_roomController@edit')->name('party_room.edit');
    Route::get('/حذف-قاعـة-الافـراح/{id}','Party_roomController@destroy')->name('party_room.deleteRoom');
    Route::post('/calendar','CalendarController@CreateEvent');
    Route::post('/reserve','ReservationController@OwnerReservation')->name('owner.reservation');
    Route::resource('reservation','ReservationController');
    Route::get('تأكيد-حجــز/{id}','ReservationController@confirm')->name('reservation.confirmation');
    Route::get('إلغــاء-حجـز/{id}','ReservationController@disapprouve')->name('reservation.disapprouv');
    Route::get('/حســــابي/{id}','UserController@showOwnerProfile')->name('owner.profile');
    Route::post('/حســــابي/{id}','UserController@updateProfile')->name('owner.profile.update');
    Route::get('الحجوزات-المقبولــة/',function (){
        return view('dashboard.layouts.delivered-order');
    })->name('owner.reservation.delivered');
    Route::get('الحجوزات-المرفــوضة/',function (){
        return view('dashboard.layouts.undelivered-order');
    })->name('owner.reservation.undelivered');
});
Route::group(['prefix'=>'/admin','middleware' => ['auth','verified','role:admin']],function (){
    Route::resource('role','RoleController');
    //Test routes
    Route::get('/حســــابي/{id}','UserController@showProfile')->name('admin.profile');
    Route::post('/حســــابي/{id}','UserController@updateProfile')->name('profile.update');
    Route::get('message/{id}','MessageController@approuve')->name('message.approuve');
    Route::get('/assign', 'Controller@assignRole');

    Route::resource('/weddingType','WeedingTypeController');
    Route::resource('/priceCategory','PriceCategoryController');
    Route::resource('users','UserController');
    Route::resource('cities','CityController');
    Route::resource('messages','MessageController');

    Route::get('user-roles','UserController@show_users_role')->name('admin.users-roles');
    Route::get('/تأكيد-اضافة-قاعة-زفاف/{id}','Party_roomController@approuv');
    Route::get('/حظر-قاعة-زفاف/{id}','Party_roomController@bann');
    Route::get('قاعــات-الزفاف/','Party_roomController@showAll')->name('admin.showRooms');
    Route::get('/',function (){
        return view('dashboard.admin_layouts.home');
    })->name('admin.landing');
    Route::get('طلــبات-الحجــز/',function (){
        return view('dashboard.admin_layouts.orders');
    })->name('admin.orders');

//    Disabled For Now
    Route::get('/social-links',function (){
        return view('dashboard.admin_layouts.social-links');
    });
    Route::post('social-link/facebook/update/{id}','LinkController@facebookUpdate')->name('link.facebook');
    Route::post('social-link/youtube/update/{id}','LinkController@youtubeUpdate')->name('link.youtube');
    Route::post('social-link/instgram/update/{id}','LinkController@instgramUpdate')->name('link.instgram');
    Route::post('social-link/twitter/update/{id}','LinkController@twitterUpdate')->name('link.twitter');
    Route::resource('admin-party_room','Party_roomController');
    Route::post('user/{id}','UserController@bann')->name('admin.user.bann');
    Route::post('user/activate/{id}','UserController@activate')->name('admin.user.activate');
//    ====================
});


Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', function () {
    return view('zawaji.landing');
})->name('home');


