<?php
Route::get('/', function () {
    return view('zawaji.home');
});
Route::get('/reserve', function () {
    return view('client.search_parties');
});

Route::resource('invitations','InvitationController');
Route::resource('messages','MessageController');


Route::group(['prefix'=>'/owner','middleware' => 'auth'],function (){
    Route::get('/calendar',function (){
        return view('dashboard.layouts.calender');
    });
    Route::get('/delivered-order',function (){
        return view('dashboard.layouts.delivered-order');
    });
    Route::get('/undelivered-order',function (){
        return view('dashboard.layouts.undelivered-order');
    });
    Route::resource('party_room','Party_roomController');
});
Route::group(['prefix'=>'/admin','middleware' => 'auth'],function (){
    Route::get('/users',function (){
        return view('dashboard.admin_layouts.user');
    });
    Route::get('/user-roles',function (){
        return view('dashboard.admin_layouts.user-role');
    });
    Route::get('/rooms',function (){
        return view('dashboard.admin_layouts.rooms');
    });
    Route::get('/rooms/approuv/{id}','Party_roomController@approuv');
    Route::get('/rooms/bann/{id}','Party_roomController@bann');
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

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test',function (\Illuminate\Http\Request $request){
    $user = $request->user();
    dd($user->can('delete'));
});
