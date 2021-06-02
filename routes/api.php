<?php

Route::group(['namespace' => 'API\V1', 'prefix' => 'v1'],
    function () {
        Route::get('/', function () {
            return view('docs.api');
        });

        Route::get('/categories', 'CategoryController@index');

        Route::get('/category/courses/{id}', 'CourseApiController@catCourses');

        Route::get('/sliders', 'SettingApiController@sliders');

        Route::get('/site/setting', 'SettingApiController@siteSetting');

        Route::get('/currencies', 'SettingApiController@currencies');

        Route::get('packages', 'InstructorApiController@packages');

        Route::get('top/courses', 'CourseApiController@topCourses');

        Route::get('free/courses', 'CourseApiController@freeCourses');

        Route::get('search/courses', 'CourseApiController@searchCourses');

        Route::post('instructor/register', 'InstructorApiController@instructorRegister');

        Route::get('instructors', 'InstructorApiController@instructors');

        Route::get('instructor/{id}/courses/', 'InstructorApiController@instructorCourses');

        Route::post('/student/register', 'StudentApiController@studentRegister');

        Route::get('student/verify/{token}', 'StudentApiController@verifyUser');

        Route::post('/student/login', 'StudentApiController@studentLogin');

        Route::post('password/create', 'PasswordResetController@create');

        Route::get('password/find/{token}', 'PasswordResetController@find');

        Route::post('password/reset', 'PasswordResetController@reset');

        Route::post('student/update', 'StudentApiController@studentUpdate')->middleware(['auth:api']);

        Route::post('wishlist/create', 'WishlistApiController@wishlistStore')->middleware('auth:api');

        Route::get('wishlist/remove/{id}', 'WishlistApiController@deleteWishlist')->middleware('auth:api');

        Route::get('student/{id}/wishlist', 'WishlistApiController@allWishlist')->middleware('auth:api');

        Route::post('add/to/cart', 'WishlistApiController@addCart')->middleware('auth:api');

        Route::get('allCart/{id}', 'WishlistApiController@allCart')->middleware('auth:api');

        Route::get('remove/cart/{id}', 'WishlistApiController@removeCart')->middleware('auth:api');

        Route::post('enrollment', 'EnrollmentApiController@enrollment')->middleware('auth:api');

        Route::get('enrollment/index/{id}', 'EnrollmentApiController@enrollmentCourses')->middleware('auth:api');

        Route::post('message/send', 'EnrollmentApiController@sendMessage')->middleware('auth:api');

        Route::get('message/inbox/{id}', 'EnrollmentApiController@inboxMessage')->middleware('auth:api');

        Route::post('course/comment', 'EnrollmentApiController@comments');

        Route::get('all/comments/{id}', 'EnrollmentApiController@allComments');

        Route::post('/course/seen', 'CourseApiController@seenCourseListed')->middleware('auth:api');

        Route::post('/seen/history', 'CourseApiController@seenHistory')->middleware('auth:api');

        Route::get('all/courses', 'CourseApiController@allCourses');

        Route::get('course/{id}', 'CourseApiController@singleCourse');

        Route::get('class/{id}', 'CourseApiController@singleClass');

        Route::get('content/{id}', 'CourseApiController@singleContent');

        Route::get('languages', 'SettingApiController@languages');

        Route::get('all/pages', 'SettingApiController@allPages');

        Route::get('single/page/{id}', 'SettingApiController@singlePage');

    });
