<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students_page', function () {
    return view('students_page');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/artical', function () {
    return view('artical');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/landlord_registration', function () {
    return view('landlord_registration');
});

Route::get('/property_management', function () {
    return view('property_management');
});

Route::get('/student_requests', function () {
    return view('student_requests');
});

Route::get('/add_property', function () {
    return view('add_property');
});

Route::get('/landing_page', function () {
    return view('landing_page');
});

Route::get('/warden_page', function () {
    return view('warden_page');
});

Route::get('all_post', function () {
    return view('all_post');
});

Route::get('admin_create_account', function () {
    return view('admin_create_account');
});

Route::get('share_article', function () {
    return view('share_article');
});