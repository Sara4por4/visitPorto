<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.welcome');
});

Route::get('/regions', function () {
    return view('front.pages.regions.index');
});

Route::get('/searchfor', function () {
    return view('front.pages.searchfor.index');
});

Route::get('/experiences', function () {
    return view('front.pages.experiences.index');
});

Route::get('/experience-detail', function () {
    return view('front.pages.experiences.show');
});


Route::get('/poi', function () {
    return view('front.pages.poi.index');
});

Route::get('/itinerary', function () {
    return view('front.pages.itinerary.index');
});

Route::get('/itinerary-detail', function () {
    return view('front.pages.itinerary.show');
});
Route::get('/media', function () {
    return view('front.pages.media.index');
});
Route::get('/mediakit', function () {
    return view('front.pages.mediakit.index');
});
Route::get('/gallery', function () {
    return view('front.pages.gallery.index');
});

Route::get('/events', function () {
    return view('front.pages.events.index');
});
Route::get('/events-detail', function () {
    return view('front.pages.events.show');
});

Route::get('/news', function () {
    return view('front.pages.news.index');
});

Route::get('/news-detail', function () {
    return view('front.pages.news.show');
});

Route::get('/atp', function () {
    return view('front.pages.atp.index');
});

Route::get('/info', function () {
    return view('front.pages.info.index');
});

Route::get('/policies', function () {
    return view('front.pages.policies.index');
});

Route::get('/contacts', function () {
    return view('front.pages.contacts.index');
});

Route::get('/howtoarrive', function () {
    return view('front.pages.howtoarrive.index');
});
Route::get('/transports', function () {
    return view('front.pages.transports.index');
});

Route::get('/terms', function () {
    return view('front.pages.terms.index');
});

Route::get('/privacy', function () {
    return view('front.pages.privacy.index');
});

Route::get('/cookies', function () {
    return view('front.pages.cookies.index');
});

Route::get('/guide', function () {
    return view('front.pages.guide.index');
});

Route::get('/guide-2', function () {
    return view('front.pages.guide.guide-2');
});

Route::get('/guide-3', function () {
    return view('front.pages.guide.guide-3');
});

Route::get('/guide-4', function () {
    return view('front.pages.guide.guide-4');
});
