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

Route::group(['namespace'=>'frontend'],function(){
    Route::get('/','HomeController@index');
    Route::get('about-us','HomeController@about_us');
    Route::get('our-doctors','HomeController@doctors');
    Route::get('news','HomeController@news');
    Route::get('book-an-appointment','HomeController@appointment');
    Route::post('book-an-appointment','AppointmentController@appointment_store');
    Route::group(['middleware'=>'guest'],function(){
        Route::get('login','ApplicationController@getLogin')->name('login');
        Route::post('login','ApplicationController@postLogin');
        Route::get('register','ApplicationController@getRegister')->name('register');
        Route::post('register','ApplicationController@postRegister');
    });
});
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['namespace'=>'backend'],function(){
    /* ================================================ Admin CONTROL Start============================================================== */
    Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function(){
        Route::get('','ApplicationController@index');
        Route::get('user-list','ApplicationController@user_list');
        Route::get('active-appointments','ApplicationController@active_appointments');
        Route::get('admin/active-appointments/{id}/edit','ApplicationController@active_appointments_edit');

        Route::get('inactive-appointments','ApplicationController@inactive_appointments');
        Route::get('inactive-appointments/{id}/edit','ApplicationController@edit_appointments');
        Route::post('inactive-appointments/{id}/edit','ApplicationController@update_appointments');
//        Message Controller
        Route::get('chat-with-patient','ApplicationController@chat_with_patient');
        Route::get('message-chat/{id}/chat','ApplicationController@message_chat');
        Route::post('message-chat/{id}/chat','ApplicationController@message_chat_store');
//        Slider Controller

    });
    /* ================================================ Admin CONTROL Start============================================================== */

    /* ================================================ Guest CONTROL Start============================================================== */
    Route::group(['middleware'=>'visitor','prefix'=>'guest','namespace'=>'Guest'],function(){
        Route::get('','GuestController@index');
    });
    /* ================================================ Guest CONTROL Start============================================================== */

});
Route::group(['namespace'=>'backend'],function(){
    /* ================================================ Patient CONTROL Start============================================================== */
    Route::group(['middleware'=>'patient','prefix'=>'patient','namespace'=>'Patient'],function(){
        Route::get('','ApplicationController@index');
        Route::get('{id}/edit-profile','ApplicationController@editProfile');
        Route::post('{id}/edit-profile','ApplicationController@update_profile');
        Route::get('report','ApplicationController@report');
        Route::get('appointment-list','ApplicationController@appointment');
        Route::get('make-an-appointment','ApplicationController@make_an_appointment');
        Route::post('make-an-appointment','ApplicationController@make_an_appointment_store');
        Route::get('new-appointment-list','ApplicationController@new_appointment_list');


        Route::get('list-appointments-report','ApplicationController@appointment_wise_report');
        Route::get('list-appointments-report/{id}/list','ApplicationController@appointment_wise_report_list');
//Chat
        Route::get('chat-with-hospital','ApplicationController@chat_with_hospital');
        Route::post('chat-with-hospital','ApplicationController@message_chat_store');


//        Application Controller

    });
    /* ================================================ Patient CONTROL Start============================================================== */
 /* ================================================ Patient CONTROL Start============================================================== */
    Route::group(['middleware'=>'staff','prefix'=>'staff','namespace'=>'Staff'],function(){
        Route::get('','ApplicationController@index');
//        Application Controller

    });
    /* ================================================ Patient CONTROL Start============================================================== */
 /* ================================================ Patient CONTROL Start============================================================== */
    Route::group(['middleware'=>'doctors','prefix'=>'doctors','namespace'=>'Doctor'],function(){
        Route::get('','ApplicationController@index');
        Route::get('{id}/edit-profile','ApplicationController@editProfile');
        Route::post('{id}/edit-profile','ApplicationController@update_profile');
        Route::get('patient-list','ApplicationController@patient_list');
        Route::get('patient-list/{id}/add-report','ApplicationController@patient_report');
        Route::post('patient-list/{id}/add-report','ApplicationController@patient_report_save');

    });
    /* ================================================ Patient CONTROL Start============================================================== */

    /* ================================================ Guest CONTROL Start============================================================== */
    Route::group(['middleware'=>'visitor','prefix'=>'guest','namespace'=>'Guest'],function(){
        Route::get('','GuestController@index');
    });
    /* ================================================ Guest CONTROL Start============================================================== */

});



Route::get('program/{slug}','frontend\HomeController@program_details');
Route::get('about-us/{slug}','frontend\HomeController@page_details');
Route::get('{slug}','frontend\HomeController@others_page_details');
Route::get('news/{slug}','frontend\HomeController@news_article_details');

