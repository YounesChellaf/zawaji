<?php
Route::get('/', function () {
    return view('zawaji.home');
});
Route::get('/reserve', function () {
    return view('client.search_parties');
});

Route::resource('invitations','InvitationController');
Route::resource('messages','MessageController');


Route::group(['prefix'=>'/owner'],function (){
    Route::get('/calendar',function (){
        return view('dashboard.layouts.calender');
    });
    Route::get('/delivered-order',function (){
        return view('dashboard.layouts.delivered-order');
    });
    Route::get('/undelivered-order',function (){
        return view('dashboard.layouts.undelivered-order');
    });
    Route::get('/add_party_room',function (){
        return view('dashboard.layouts.room_party');
    });
});
Route::group(['prefix'=>'/admin'],function (){
    Route::get('/users',function (){
        return view('dashboard.admin_layouts.user');
    });
    Route::get('/',function (){
        return view('dashboard.admin_layouts.home');
    });
    Route::get('/user-roles',function (){
        return view('dashboard.admin_layouts.user-role');
    });
    Route::get('/orders',function (){
        return view('dashboard.admin_layouts.orders');
    });
    Route::get('/social-links',function (){
        return view('dashboard.admin_layouts.social-links');
    });

});