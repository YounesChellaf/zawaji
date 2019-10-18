<?php
Route::get('/', function () {
    return view('zawaji.landing');
})->name('zawaji.landing');
Route::get('/reserve', function () {
    return view('client.search_parties');
});
Route::get('/room-details/{id}','Party_roomController@roomDetails')->name('zawaji.room-details');
Route::get('/rooms', function () {
    return view('zawaji.party_rooms');
})->name('zawaji.landing');

Route::resource('/reserve','ReservationController');
Route::resource('invitations','InvitationController');
Route::resource('messages','MessageController');


Route::group(['prefix'=>'/owner','middleware' => 'auth'],function (){
    Route::resource('party_room','Party_roomController');
    Route::get('/calendar','CalendarController@showCalendar');
    Route::post('/calendar','CalendarController@CreateEvent');
    Route::resource('reservation','ReservationController');
    Route::get('/delivered-order',function (){
        return view('dashboard.layouts.delivered-order');
    });
    Route::get('/undelivered-order',function (){
        return view('dashboard.layouts.undelivered-order');
    });
});
Route::group(['prefix'=>'/admin','middleware' => 'auth'],function (){
    Route::resource('role','RoleController');
    //Test routes
    Route::get('/assign', 'Controller@assignRole');

    Route::resource('/weddingType','WeedingTypeController');
    Route::resource('users','UserController');
    Route::resource('cities','CityController');

    Route::get('user-roles','UserController@show_users_role')->name('admin.users-roles');
    Route::get('/rooms/approuv/{id}','Party_roomController@approuv');
    Route::get('/rooms/bann/{id}','Party_roomController@bann');
    Route::get('/rooms','Party_roomController@showAll');
    Route::get('/',function (){
        return view('dashboard.admin_layouts.home');
    });
    Route::get('/orders',function (){
        return view('dashboard.admin_layouts.orders');
    });
    Route::get('/social-links',function (){
        return view('dashboard.admin_layouts.social-links');
    });
    Route::resource('party_room','Party_roomController');
    Route::post('user/{id}','UserController@bann')->name('admin.user.bann');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test',function (\Illuminate\Http\Request $request){
    $user = $request->user();
    dd($user->can('delete'));
});


Route::get('/home', 'HomeController@index')->name('home');

