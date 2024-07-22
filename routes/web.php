<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
});



// -----------------Shop Layouts-------------------

Route::get('/shopGrid_LeftSidebar', function () {
    return view('shop.shopLayouts.shopGrid_LeftSidebar');
});

Route::get('/shopGrid_RightSidebar', function () {
    return view('shop.shopLayouts.shopGrid_RightSidebar');
});

Route::get('/shopList_LeftSidebar', function () {
    return view('shop.shopLayouts.shopList_LeftSidebar');
});

Route::get('/shopList_RightSidebar', function () {
    return view('shop.shopLayouts.shopList_RightSidebar');
});

Route::get('/shopGrid_TopFilters', function () {
    return view('shop.shopLayouts.shopGrid_TopFilters');
});

Route::get('/shopList_TopFilters', function () {
    return view('shop.shopLayouts.shopList_TopFilters');
});


// -----------------Shop Pages-------------------
Route::get('/shopCart', function () {
    return view('shop.shopPages.shopCart');
});

Route::get('/shopCategories', function () {
    return view('shop.shopPages.shopCategories');
});

Route::get('/checkOut_Details', function () {
    return view('shop.shopPages.checkOut_Details');
});

Route::get('/checkOut_Shipping', function () {
    return view('shop.shopPages.checkOut_Shipping');
});

Route::get('/checkOut_Payment', function () {
    return view('shop.shopPages.checkOut_Payment');
});

Route::get('/checkOut_Review', function () {
    return view('shop.shopPages.checkOut_Review');
});

Route::get('/checkOut_Complete', function () {
    return view('shop.shopPages.checkOut_Complete');
});

Route::get('/orderTracking', function () {
    return view('shop.shopPages.orderTracking');
});

Route::get('/productComparison', function () {
    return view('shop.shopPages.productComparison');
});

Route::get('/productDetails', function () {
    return view('shop.shopPages.productDetails');
});


// -----------------Sign In----------------
Route::get('/signIn', function () {
    return view('shop.signIn');
});


// -----------------Sign Up----------------
Route::get('/signUp', function () {
    return view('shop.shopPages.signUp');
});


// --------------Forgot Password-------------
Route::get('/forgotPassword', function () {
    return view('shop.forgotPassword');
});


// -----------------Blog---------------------
Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/single', function () {
    return view('blog.single');
});

// -----------------About Us-------------------
Route::get('/aboutUs', function () {
    return view('aboutUs.aboutUs');
});


// -----------------Contact Us-------------------
Route::get('/contactUs', function () {
    return view('contactUs.contactUs');
});


// -----------------My Account-------------------
Route::get('/dashBoard', function () {
    return view('myAccount.dashBoard');
});

Route::get('/downLoads', function () {
    return view('myAccount.downLoads');
});

Route::get('/orders', function () {
    return view('myAccount.orders');
});

Route::get('/paymentMethod', function () {
    return view('myAccount.paymentMethod');
});

Route::get('/userDetails', function () {
    return view('myAccount.userDetails');
});

Route::get('/address', function () {
    return view('myAccount.address');
});


