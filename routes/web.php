<?php
Route::get('/', function () {
    return view('zawaji.home');
});
Route::get('/reserve', function () {
    return view('zawaji.zawaji-master');
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
});