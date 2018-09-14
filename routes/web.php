<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});

Route::get('register', 'PhotoAfrica\ContestantController@registrationForm')->name('contest-registration');
Route::post('register', 'PhotoAfrica\ContestantController@processRegistration')->name('process-registration');
//Route::post('payment-start', 'PhotoAfrica\ContestantController@paymentOne')->name('payment-one');

Route::get('gallery', 'PhotoAfrica\ContestantController@gallery')->name('contestants-gallery');
Route::get('contact', 'Frontend\HomeController@contactPage')->name('contact');
Route::get('about', 'Frontend\HomeController@aboutPage')->name('about');

Route::post('/pay', 'RaveController@initialize')->name('pay');
Route::match(['get', 'post'], '/rave/callback', 'RaveController@callback')->name('callback');

Route::get('vote-for/{pageant_id}', 'PhotoAfrica\ContestantController@contestantProfile')->name('contestant-profile');
