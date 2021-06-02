<?php


Route::get('x', function () {
    return couponDiscount('demo');
});

Route::group(['middleware' => ['check.frontend', 'demo', 'activity']], function () {
    Route::get('/', 'FrontendController@homepage')
        ->name('homepage');

    if (env('BLOG_ACTIVE') == "YES") {
        Route::get('blog/posts', 'FrontendController@blogPosts')->name('blog.all');
        Route::get('blog/details/{id}', 'FrontendController@singleBlog')->name('blog.details');
        Route::get('blog/category/{id}', 'FrontendController@categoryBlog')->name('blog.category');
        Route::get('blog/tag/{tag}', 'FrontendController@tagBlog')->name('blog.tag');
    }

    Route::get('search', 'FrontendController@searchCourses')->name('search.courses');
    Route::get('password/reset', 'FrontendController@password_reset')
        ->name('student.password.reset');

    Route::get('courses/{slug}', 'FrontendController@courseCat')
        ->name('course.category');

    Route::get('course/{slug}', 'FrontendController@singleCourse')
        ->name('course.single');

    Route::post('currencies/change', 'FrontendController@currenciesChange')
        ->name('frontend.currencies.change')->middleware('demo');

    Route::post('languages/change', 'FrontendController@languagesChange')
        ->name('frontend.languages.change')->middleware('demo');

    Route::get('instructor/details/{slug}', 'FrontendController@instructorDetails')
        ->name('single.instructor');

    Route::get('/courses', 'FrontendController@courseFilter')
        ->name('course.filter');

    Route::get('content/preview/{id}', 'FrontendController@contentPreview')
        ->name('content.video.preview');

    Route::get('instructor/register', 'FrontendController@registerView')
        ->name('instructor.register');

    Route::post('instructor/create', 'FrontendController@registerCreate')
        ->name('instructor.create')->middleware('demo');

    Route::get('instructor/payment/{slug}', 'FrontendController@insPayment')
        ->name('instructor.payment');

    Route::get('page/{slug}', 'FrontendController@page')
        ->name('pages');

    Route::post('instructor/stripe/payment', 'PaymentController@instructorStripe')
        ->name('instructor.stripe.payment')->middleware('demo')->middleware('demo');

    Route::post('instructor/paypal/payment', 'PaymentController@instructorPaypal')
        ->name('instructor.paypal.payment')->middleware('demo');

    Route::get('student/login', 'FrontendController@login')
        ->name('student.login');

    Route::post('student/create', 'FrontendController@create')
        ->name('student.create')->middleware('demo');

    Route::get('signup', 'FrontendController@signup')
        ->name('student.register');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/mark-as-all-read', 'FrontendController@mark_as_all_read')->name('mark_as_all_read');

        Route::post('paypal/payment', 'PaymentController@paypalPayment')
            ->name('paypal.paymnet')->middleware('demo');

        Route::post('stripe', 'PaymentController@stripePost')
            ->name('stripe.post')->middleware('demo');

        Route::get('free/payment', 'PaymentController@freePayment')
            ->name('free.payment');

        Route::get('class/content/{id}', 'FrontendController@singleContent')
            ->name('class.content');

        Route::get('message/create/{id}', 'FrontendController@messageCreate')
            ->name('message.create');
        Route::get('message/create/{id}', 'FrontendController@messageSubCreate')
            ->name('message.sub.create');
        Route::post('message/send', 'FrontendController@sendMessage')
            ->name('message.sent')->middleware('demo');

        Route::get('my/courses', 'FrontendController@my_courses')
            ->name('my.courses');

        Route::get('my/wishlist', 'FrontendController@my_wishlist')
            ->name('my.wishlist');

        Route::get('enroll/courses', 'FrontendController@enrollCourses')
            ->name('enroll.courses');
        Route::get('cart/list', 'FrontendController@cartList')
            ->name('cart.list');

        Route::get('add/to/cart', 'FrontendController@addToCart')
            ->name('add.to.cart');

        Route::get('remove/cart/{id}', 'FrontendController@removeCart')
            ->name('cart.remove');

        Route::get('wish/list', 'FrontendController@wishList')
            ->name('wish.list');

        Route::get('add/to/wishlist', 'FrontendController@addToWishlist')
            ->name('add.to.wishlist');

        Route::get('remove/wishlist/{id}', 'FrontendController@removeWishlist')
            ->name('remove.wishlist');

        Route::get('shopping/cart', 'FrontendController@shoppingCart')
            ->name('shopping.cart');

        Route::get('cart/checkout', 'FrontendController@checkout')
            ->name('checkout');

        Route::get('student/dashboard', 'FrontendController@dashboard')
            ->name('student.dashboard');

        Route::get('student/profile', 'FrontendController@my_profile')
            ->name('student.profile');
        Route::get('student/profile/edit', 'FrontendController@student_edit')
            ->name('student.edit');

        Route::post('student/profile/update/{std_id}', 'FrontendController@update')
            ->name('student.update')->middleware('demo');

        Route::get('student/enrolled/course', 'FrontendController@enrolled_course')
            ->name('student.enrolled.course');

        Route::get('student/message', 'FrontendController@inboxMessage')
            ->name('student.message');

        Route::get('student/purchase/history', 'FrontendController@purchase_history')
            ->name('student.purchase.history');

        Route::get('lesson/{slug}', 'FrontendController@lesson_details')
            ->name('lesson_details');

        Route::post('comment', 'FrontendController@comments')
            ->name('comments')->middleware('demo');

        Route::get('seen/content/remove/{id}', 'FrontendController@seenRemove')->name('seen.remove');

        Route::post('summernote-upload', 'FrontendController@uploadImage')->name('summernote.upload');

        Route::get('seen/list/{id}', 'FrontendController@seenList')->name('seen.list');
        if (affiliateStatus()) {
            Route::get('student/affiliate/area', 'FrontendController@affiliateCreate')->name('affiliate.area');
            Route::get('student/affiliate/request', 'FrontendController@affiliateRequest')->name('student.affiliate.request');
            Route::post('student/affiliate/update', 'FrontendController@affiliateStore')->name('student.account.update');
            Route::get('student/payment/request', 'FrontendController@affiliatePaymentRequest')->name('student.payment.request');
            Route::post('student/payment/store', 'FrontendController@affiliatePaymentStore')->name('student.payments.store');
        }
    });
});
