<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get(
    '/contact/messages/{id}/delete', 
    'ContactController@deleteMessageSubmit'
)->name('contact_delete');

Route::get(
    '/contact/messages/{id}/update', 
    'ContactController@updateOneMessage'
)->name('contact_update');

Route::post(
    '/contact/messages/{id}/update', 
    'ContactController@updateMessageSubmit'
)->name('contact_update_submit');

Route::get(
    '/contact/messages/{id}', 
    'ContactController@showOneMessage'
)->name('message_one');

Route::get(
    '/contact/messages', 
    'ContactController@allDate'
)->name('messages_all');

Route::post(
    '/contact/submit', 
    'ContactController@submit'
)->name('contact_submit');

