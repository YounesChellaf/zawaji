<?php
Route::get('/', function () {
    return view('zawaji.home');
});
Route::get('/reserve', function () {
    return view('zawaji.zawaji-master');
});
Route::get('/admin', function () {
    return view('dashboard.master');
});
Route::resource('invitations','InvitationController');
Route::resource('messages','MessageController');