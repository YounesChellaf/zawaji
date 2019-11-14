<?php
Route::get('/', function () {
    return view('zawaji.landing');
})->name('zawaji.landing');
Route::get('/reserve', function () {
    return view('client.search_parties');
});
Route::get('/room-details/{id}','Party_roomController@roomDetails')->name('zawaji.room-details');
Route::get('/autocomplete','Party_roomController@complete')->name('autocomplete');
Route::get('/filtered-room','Party_roomController@filter')->name('filter');
Route::post('/search-room','Party_roomController@search')->name('room.search');
Route::get('/rooms', 'Party_roomController@ShowRooms')->name('zawaji.rooms');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider')->name('auth.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookProviderCallback');
Route::get('auth/google', 'Auth\LoginController@redirectToGoogleProvider')->name('auth.google');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleProviderCallback');
Route::resource('/reserve','ReservationController');

Route::resource('invitations','InvitationController');

Route::get('/room-to-confirm/{id}','MessageController@showRoom')->name('room-to-confirm');

Route::group(['prefix'=>'/owner','middleware' => ['auth','role:owner']],function (){
    Route::resource('owner-party_room','Party_roomController');
    Route::get('/calendar','CalendarController@showCalendar')->name('owner.calendar');
    Route::get('/add-party_room','Party_roomController@index')->name('party_room.addRoom');
    Route::post('/calendar','CalendarController@CreateEvent');
    Route::post('/reserve','ReservationController@OwnerReservation')->name('owner.reservation');
    Route::resource('reservation','ReservationController');
    Route::get('reservation/confirm/{id}','ReservationController@confirm')->name('reservation.confirmation');
    Route::get('reservation/disapprouv/{id}','ReservationController@disapprouve')->name('reservation.disapprouv');
    Route::get('/profile/{id}','UserController@showOwnerProfile')->name('owner.profile');
    Route::post('/profile/{id}','UserController@updateProfile')->name('owner.profile.update');
    Route::get('/delivered-order',function (){
        return view('dashboard.layouts.delivered-order');
    })->name('owner.reservation.delivered');
    Route::get('/undelivered-order',function (){
        return view('dashboard.layouts.undelivered-order');
    })->name('owner.reservation.undelivered');
});
Route::group(['prefix'=>'/admin','middleware' => ['auth','role:admin']],function (){
    Route::resource('role','RoleController');
    //Test routes
    Route::get('/profile/{id}','UserController@showProfile')->name('admin.profile');
    Route::post('/profile/{id}','UserController@updateProfile')->name('profile.update');
    Route::resource('messages','MessageController');
    Route::get('message/{id}','MessageController@approuve')->name('message.approuve');
    Route::get('/assign', 'Controller@assignRole');

    Route::resource('/weddingType','WeedingTypeController');
    Route::resource('users','UserController');
    Route::resource('cities','CityController');

    Route::get('user-roles','UserController@show_users_role')->name('admin.users-roles');
    Route::get('/rooms/approuv/{id}','Party_roomController@approuv');
    Route::get('/rooms/bann/{id}','Party_roomController@bann');
    Route::get('/rooms','Party_roomController@showAll')->name('admin.showRooms');
    Route::get('/',function (){
        return view('dashboard.admin_layouts.home');
    })->name('admin.landing');
    Route::get('/orders',function (){
        return view('dashboard.admin_layouts.orders');
    })->name('admin.orders');
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
});
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');


