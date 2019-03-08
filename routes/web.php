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
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Auth::routes();


Route::get('/first', function () {
    return view('front.first');
});

Route::get('/resume3', function () {
    return view('form.form3');
});

Route::get('/log1', function () {
    return view('admin.login_admin');
});


Route::post('/insert','ResumeController@insertUsers');
Route::get('/login1','ResumeController@login');

Route::get('/userlogin','AdminController@showUserForm');
Route::get('/adminview','AdminController@adminView');
Route::get('/checklogin','AdminController@showLoginForm');

Route::get('/reg', function () {
    return view('front.reg');
});
Route::get('/log', function () {
    return view('front.login');
});

Route::get('/front', function () {
    return view('form.front');
});
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/new', function () {
//     return view('front.register');
// });
Route::get('admin', function () {
    return view('front.admin');
});
Route::post('/front','AdminController@insertdetail');

Route::get('displaydetails',function(){
    return view('form.displaydetails');
});

Route::post('/insert','Form1Controller@insertForm');
Route::get('/resume1', function () {
    return view('form.form1');
});
Route::get('display1','Form1Controller@userView1');
Route::get('/edit1/{id}','Form1Controller@edit1');
Route::get('/downloadAllPDF1/{id}','Form1Controller@downloadPDF');


Route::post('/insert3','Form2Controller@insertForm');
Route::get('/resume2', function () {
    return view('form.form2');
});
Route::get('display2','Form2Controller@userView2');
Route::get('/edit2/{id}','Form2Controller@edit2');
Route::get('/downloadAllPDF2/{id}','Form2Controller@downloadPDF');


Route::post('/insert4','Form3Controller@insertForm');
Route::get('/resume3', function () {
    return view('form.form3');
});
Route::get('display3','Form3Controller@userView3');
Route::get('/edit3/{id}','Form3Controller@edit3');
Route::get('/downloadAllPDF3/{id}','Form3Controller@downloadPDF');



Route::post('/insert1','FormController@insertForm');
Route::get('/resume4', function () {
    return view('form.form4');
});
Route::get('display4','FormController@userView4');
Route::get('/edit4/{id}','FormController@edit4');
Route::get('/downloadAllPDF4/{id}','FormController@downloadPDF');


Route::post('/insert2','FiveController@insertdetail');
Route::get('/resume5', function () {
    return view('form.form5');
});
Route::get('display5','FiveController@userView5');
Route::get('/edit5/{id}','FiveController@edit5');
Route::get('/downloadAllPDF5/{id}','FiveController@downloadPDF');


