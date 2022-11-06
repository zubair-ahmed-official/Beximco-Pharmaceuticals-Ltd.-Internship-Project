<?php

use Illuminate\Support\Facades\Route;


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

use App\Http\Controllers\MedicalController;
use App\Http\Controllers\PhoneAuthController;
//use App\Http\Controllers\NexmoSMSController; 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageUploadController;


//Route::get('sendSMS', [NexmoSMSController::class, 'index']);
Route::get('/home', [PhoneAuthController::class, 'home']);

Route::get('/phone-auth', [PhoneAuthController::class, 'index']);
Route::post('/phone-auth', [PhoneAuthController::class, 'otp_store']);

//Route::get('login-otp', [PhoneAuthController::class, 'login_otp']);
Route::get('/main', [PhoneAuthController::class, 'login_otp'])->name('login_otp');
Route::post('/main',[PhoneAuthController::class, 'checkLogin'])->name('checkLogin');

Route::get('/logout', [PhoneAuthController::class, 'logout'])->name('logout');

Route::get('/register', [PhoneAuthController::class, 'register']);
Route::post('/register', [PhoneAuthController::class, 'register_store']);


Route::get('/admin_login', [PhoneAuthController::class, 'admin_login']);
Route::post('/admin_login',[PhoneAuthController::class, 'check_admin_login'])->name('check_admin_login');

Route::get('/manager_login', [PhoneAuthController::class, 'manager_login']);
Route::post('/manager_login',[PhoneAuthController::class, 'check_manager_login'])->name('check_manager_login');

Route::get('/salesman_login', [PhoneAuthController::class, 'salesman_login']);
Route::post('/salesman_login',[PhoneAuthController::class, 'check_salesman_login'])->name('check_salesman_login');


//Route::post('/login',[PhoneAuthController::class, 'checkLogin']);

Route::get('main/successlogin', [PhoneAuthController::class,'successlogin']);
//Route::get('main/logout', 'PhoneAuthController@logout');


Route::get('add-doctors', [MedicalController::class, 'create']);
Route::post('add-doctors', [MedicalController::class, 'store']);

Route::get('doctor_appointment', [MedicalController::class, 'doctor_appointment']); 


Route::get('book_doctor_appointment/{id}', [MedicalController::class, 'book_doctor_appointment']);
Route::post('book_doctor_appointment/{id}', [MedicalController::class, 'store_doctor_appointment']); 

Route::get('doctors', [MedicalController::class, 'index']);
Route::get('edit-doctors/{id}', [MedicalController::class, 'edit']);
Route::put('update-doctors/{id}', [MedicalController::class, 'update']);
Route::get('delete-doctors/{id}', [MedicalController::class, 'destroy']);

Route::get('index_medis', [MedicalController::class, 'index_medis']);

Route::get('cust_index_medis', [MedicalController::class, 'cust_index_medis'])->middleware('Auth');

Route::get('add-med', [MedicalController::class, 'create_med']);
Route::post('add-med', [MedicalController::class, 'store_med']);

Route::get('cust_med', [MedicalController::class, 'cust_med'])->middleware('Auth');

Route::get('med', [MedicalController::class, 'index_med']);
Route::get('edit-med/{id}', [MedicalController::class, 'edit_med']);
Route::put('update-med/{id}', [MedicalController::class, 'update_med']);
Route::get('delete-med/{id}', [MedicalController::class, 'destroy_med']);

Route::get('order-med/{id}', [MedicalController::class, 'ordering_med'])->middleware('Auth');
Route::post('order-med/{id}', [MedicalController::class, 'order_med'])->middleware('Auth');

Route::get('again_order_med/{id}', [MedicalController::class, 'again_ordering_med'])->middleware('Auth');
Route::post('again_order_med/{id}', [MedicalController::class, 'again_order_med'])->middleware('Auth');


Route::get('index_orders', [MedicalController::class, 'index_orders']); //deliver-order Deliver_index

Route::get('deliver_index', [MedicalController::class, 'deliver_index']);

Route::get('deliver-order/{id}', [MedicalController::class, 'delivering_order']);
Route::post('deliver-order/{id}', [MedicalController::class, 'deliver_order']);


Route::get('add-dis', [MedicalController::class, 'create_dis']);
Route::post('add-dis', [MedicalController::class, 'store_dis']);

Route::get('cust_dis', [MedicalController::class, 'cust_dis'])->middleware('Auth');

Route::get('dis', [MedicalController::class, 'index_dis']);
Route::get('edit-dis/{id}', [MedicalController::class, 'edit_dis']);
Route::put('update-dis/{id}', [MedicalController::class, 'update_dis']);
Route::get('delete-dis/{id}', [MedicalController::class, 'destroy_dis']);

Route::get('Med_Dis/{id}', [MedicalController::class, 'Medicines_Diseases']);

Route::get('Cust_Med_Dis/{id}', [MedicalController::class, 'Cust_Medicines_Diseases']);

Route::get('Med_Dis', [MedicalController::class, 'MeDis']);//dlist
Route::post('Med_Dis', [MedicalController::class, 'store_MeDis']);//dlist destroy_md 

Route::get('destroy_md/{id}', [MedicalController::class, 'destroy_md']);


Route::get('/search', [PhoneAuthController::class, 'find']);
Route::post('/search_result',[PhoneAuthController::class, 'findSearch'])->name('findSearch');

Route::get('/My_Orders',[PhoneAuthController::class, 'My_Orders'])->name('My_Orders')->middleware('Auth');

Route::get('/My_Appointments',[PhoneAuthController::class, 'My_Appointments'])->name('My_Appointments')->middleware('Auth');

Route::get('profile', [PhoneAuthController::class, 'profile'])->middleware('Auth');
Route::get('e-profile/{id}', [PhoneAuthController::class, 'edit_profile'])->middleware('Auth');
Route::put('edit-profile/{id}', [PhoneAuthController::class, 'update_profile'])->middleware('Auth');

//Route::get("delete", [PhoneAuthController::class, "deleteImage"]);

//Route::get('/search_result', [PhoneAuthController::class, 'search_result']); 

Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('Medical.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])->name('Medical.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('Medical.view');
Route::get('delete-pics/{id}', [ImageUploadController::class, 'destroyImage']);

//Route::get('yourmethod', 'YourController@yourmethod')->name('yourmethod'); 
Route::get('yourmethod', [PhoneAuthController::class, 'yourmethod'])->name('Medical.yourmethod');