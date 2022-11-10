<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminAuth;
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


Route::get('/admin_login', [PhoneAuthController::class, 'admin_login'])->name('admin_login');
Route::post('/admin_login',[PhoneAuthController::class, 'check_admin_login'])->name('check_admin_login');

Route::get('/manager_login', [PhoneAuthController::class, 'manager_login']);
Route::post('/manager_login',[PhoneAuthController::class, 'check_manager_login'])->name('check_manager_login');

Route::get('/salesman_login', [PhoneAuthController::class, 'salesman_login']);
Route::post('/salesman_login',[PhoneAuthController::class, 'check_salesman_login'])->name('check_salesman_login');


//Route::post('/login',[PhoneAuthController::class, 'checkLogin']);

Route::get('main/successlogin', [PhoneAuthController::class,'successlogin']);
//Route::get('main/logout', 'PhoneAuthController@logout');


Route::get('add-doctors', [MedicalController::class, 'create'])->middleware('AdminAuth');
Route::post('add-doctors', [MedicalController::class, 'store'])->middleware('AdminAuth');

Route::get('doctor_appointment', [MedicalController::class, 'doctor_appointment']); 


Route::get('book_doctor_appointment/{id}', [MedicalController::class, 'book_doctor_appointment']);
Route::post('book_doctor_appointment/{id}', [MedicalController::class, 'store_doctor_appointment']); 

Route::get('doctors', [MedicalController::class, 'index'])->middleware('AdminAuth');
Route::get('edit-doctors/{id}', [MedicalController::class, 'edit'])->middleware('AdminAuth');
Route::put('update-doctors/{id}', [MedicalController::class, 'update'])->middleware('AdminAuth');
Route::get('delete-doctors/{id}', [MedicalController::class, 'destroy'])->middleware('AdminAuth');

Route::get('index_medis', [MedicalController::class, 'index_medis'])->middleware('AdminAuth');

Route::get('cust_index_medis', [MedicalController::class, 'cust_index_medis'])->middleware('Auth');

Route::get('add-med', [MedicalController::class, 'create_med'])->middleware('AdminAuth');
Route::post('add-med', [MedicalController::class, 'store_med'])->middleware('AdminAuth');

Route::get('cust_med', [MedicalController::class, 'cust_med'])->middleware('Auth');

Route::get('med', [MedicalController::class, 'index_med'])->middleware('AdminAuth');
Route::get('edit-med/{id}', [MedicalController::class, 'edit_med'])->middleware('AdminAuth');
Route::put('update-med/{id}', [MedicalController::class, 'update_med'])->middleware('AdminAuth');
Route::get('delete-med/{id}', [MedicalController::class, 'destroy_med'])->middleware('AdminAuth');

Route::get('order-med/{id}', [MedicalController::class, 'ordering_med'])->middleware('Auth');
Route::post('order-med/{id}', [MedicalController::class, 'order_med'])->middleware('Auth');

Route::get('again_order_med/{id}', [MedicalController::class, 'again_ordering_med'])->middleware('Auth');
Route::post('again_order_med/{id}', [MedicalController::class, 'again_order_med'])->middleware('Auth');


Route::get('index_orders', [MedicalController::class, 'index_orders'])->middleware('AdminAuth');

Route::get('deliver_index', [MedicalController::class, 'deliver_index'])->middleware('AdminAuth');

Route::get('index_events', [MedicalController::class, 'index_events']);

Route::get('add-notice', [MedicalController::class, 'create_notice']);

Route::post('add-notice', [MedicalController::class, 'store_notice']);

Route::get('update_notice/{id}', [MedicalController::class, 'edit_notice']);
Route::put('update_notice/{id}', [MedicalController::class, 'update_notice']);
Route::get('delete-notice/{id}', [MedicalController::class, 'destroy_notice']);

Route::get('notices', [MedicalController::class, 'index_notice']);

Route::get('delete-event/{id}', [MedicalController::class, 'destroy_event'])->middleware('AdminAuth');

Route::get('deliver-order/{id}', [MedicalController::class, 'delivering_order'])->middleware('AdminAuth');
Route::post('deliver-order/{id}', [MedicalController::class, 'deliver_order'])->middleware('AdminAuth');


Route::get('add-dis', [MedicalController::class, 'create_dis'])->middleware('AdminAuth');
Route::post('add-dis', [MedicalController::class, 'store_dis'])->middleware('AdminAuth');


Route::get('add-event', [MedicalController::class, 'create_event'])->middleware('AdminAuth');
Route::post('add-event', [MedicalController::class, 'store_event'])->middleware('AdminAuth');

Route::get('cust_dis', [MedicalController::class, 'cust_dis'])->middleware('Auth');

Route::get('dis', [MedicalController::class, 'index_dis'])->middleware('AdminAuth');
Route::get('edit-dis/{id}', [MedicalController::class, 'edit_dis'])->middleware('AdminAuth');
Route::put('update-dis/{id}', [MedicalController::class, 'update_dis'])->middleware('AdminAuth');
Route::get('delete-dis/{id}', [MedicalController::class, 'destroy_dis'])->middleware('AdminAuth');

Route::get('Med_Dis/{id}', [MedicalController::class, 'Medicines_Diseases'])->middleware('AdminAuth');

Route::get('Cust_Med_Dis/{id}', [MedicalController::class, 'Cust_Medicines_Diseases']);

Route::get('Med_Dis', [MedicalController::class, 'MeDis'])->middleware('AdminAuth');
Route::post('Med_Dis', [MedicalController::class, 'store_MeDis'])->middleware('AdminAuth');

Route::get('destroy_md/{id}', [MedicalController::class, 'destroy_md'])->middleware('AdminAuth');


Route::get('/search', [PhoneAuthController::class, 'find']);
Route::post('/search_result',[PhoneAuthController::class, 'findSearch'])->name('findSearch');

Route::get('/My_Orders',[PhoneAuthController::class, 'My_Orders'])->name('My_Orders')->middleware('Auth');

Route::get('/My_Appointments',[PhoneAuthController::class, 'My_Appointments'])->name('My_Appointments')->middleware('Auth'); 

Route::get('/All_Booked_Appointments',[PhoneAuthController::class, 'All_Booked_Appointments'])->name('All_Booked_Appointments'); //

Route::get('/delete_appointment/{id}',[MedicalController::class, 'destroy_appointment'])->middleware('AdminAuth');

Route::get('/delete-order/{id}',[MedicalController::class, 'destroy_order'])->middleware('AdminAuth');


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