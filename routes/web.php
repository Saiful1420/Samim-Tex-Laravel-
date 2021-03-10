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




//Admin singin and singup Area
Route::get('/admin-login', 'adminloginController@login_form');
Route::post('/admin-login', 'adminloginController@login_form_action');

Route::get('/admin-password-reset', 'adminloginController@admin_password_reset_page');
Route::post('/admin-password-reset', 'adminloginController@admin_password_reset');

Route::get('/admin-reset-code', 'adminloginController@admin_reset_code');
Route::post('/admin-reset-code', 'adminloginController@admin_reset_verify_code');

Route::get('/admin-update-password', 'adminloginController@admin_update_password_page');
Route::post('/admin-update-password', 'adminloginController@admin_update_password');

Route::get('/logout', 'adminloginController@logout');



///Admin Dashboard Page
Route::get('/admin-dashboard', 'HomeController@home');



// Master Setup Controller
Route::get('/text', 'FrontEnd\Homecontroller@home');
Route::get('/', 'FrontEnd\Homecontroller@index');

//aboutus................................................
Route::get('/about', 'FrontEnd\AboutController@about');


//product................................................
Route::get('/product', 'FrontEnd\ProductController@product');

//career...................................................
Route::get('/career', 'FrontEnd\CareerController@career');

//customer...............................................
Route::get('/customer', 'FrontEnd\CustomerController@customer');


//contact.......................................................
Route::get('/contact', 'FrontEnd\ContactController@contact');

//ProductMan..............................................
Route::get('/ProductMan', 'FrontEnd\ProductManController@ProductMan');




//careers..............................................................
Route::get('/careers', 'CarrersController@carrers');
Route::post('/careers/store', 'CarrersController@store');
Route::get('/careers/delete/{id}', 'CarrersController@delete');
Route::get('/careers/edit/{id}', 'CarrersController@edit');
Route::post('/careers/update', 'CarrersController@update');




//department.......................................................
// Route::get('/department', 'DepartmentController@department');
// Route::post('/department/store', 'DepartmentController@store');
// Route::get('/department/delete/{id}', 'DepartmentController@delete');


//product...............................................................
Route::get('/products', 'ProductController@product');
Route::post('/products/store', 'ProductController@store');
Route::get('/products/delete/{id}', 'ProductController@delete');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::post('/products/update', 'ProductController@update');



//customer.........................................................
Route::get('/customers', 'CustomerController@customer');
Route::post('/customers/store', 'CustomerController@store');
Route::get('/customers/delete/{id}', 'CustomerController@delete');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update', 'CustomerController@update');








