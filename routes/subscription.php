<?php

Route::group(['middleware' => ['auth', 'activity'], 'prefix' => 'dashboard/subscription'], function () {
    Route::get('/', 'SubscriptionController@index')->name('subscription.index');
    Route::post('/create', 'SubscriptionController@create')->name('subscription.create');
    Route::get('/edit/{id}', 'SubscriptionController@edit')->name('subscription.edit');
    Route::post('/update/{id}', 'SubscriptionController@update')->name('subscription.update');
    Route::get('/deactivate/{id}', 'SubscriptionController@deactivate')->name('subscription.deactivate');
    Route::get('/popular/{id}', 'SubscriptionController@popular')->name('subscription.popular');
    Route::get('/requests', 'SubscriptionController@requests')->name('subscription.requests');
    Route::get('/requests/{fire}/{id}/{course_id}', 'SubscriptionController@request_fire')->name('subscription.request.fire');
    Route::get('/courses', 'SubscriptionController@courses')->name('subscription.courses');
    Route::get('/select/courses', 'SubscriptionController@selectCourses')->name('subscription.select.courses'); //ajax
    Route::get('/package/courses/{package}/{subscription_id}', 'SubscriptionController@packageCourse')->name('subscription.package.courses');
    Route::get('/settings', 'SubscriptionController@settings')->name('subscription.settings');
    Route::post('/settings/update', 'SubscriptionController@settingsUpdate')->name('subscription.settings.update');
    Route::get('/members', 'SubscriptionController@members')->name('subscription.members');
    Route::get('/payments', 'SubscriptionController@payments')->name('subscription.payments');
    Route::get('/instructor/earning', 'SubscriptionController@instructor_earning')->name('subscription.instructor.earning'); // storing earning automatic schedule 2
    Route::get('/instructor/earning/{id}', 'SubscriptionController@instructor_earning_view')->name('subscription.instructor.earning.view');
    Route::post('/earning', 'SubscriptionController@earning')->name('subscription.earning'); // storing earning automatic schedule 1
    Route::post('/changeEndAt', 'SubscriptionController@changeEndAt')->name('subscription.change_end_at');

});
Route::get('/subscription/{package}', 'SubscriptionController@frontend')->name('subscription.frontend');
Route::get('/subscription/cart/list', 'SubscriptionController@cartList')->name('subscription.cart');
Route::get('my/subscription', 'SubscriptionController@my_subscription')->name('my.subscription');
Route::get('my/subscription/{package}/{subscription_id}', 'SubscriptionController@my_subscription_package_course')->name('my.subscription.package.course');
Route::get('/subscription/lesson/{package}', 'SubscriptionController@subscription_lesson_details')->name('subscription.lesson.details');

//for payment
Route::group(['prefix' => 'payme', 'middleware' => 'auth'], function () {
    Route::any('checkout', 'PaymeController@checkout')->name('payment.course');
    Route::any('resend-code', 'PaymeController@resendCode')->name('resend_code');
});

Route::any('student/cards', 'PaymeController@cabinet')->name('my_cards');
