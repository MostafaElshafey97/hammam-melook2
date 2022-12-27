<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Dashboard\RoomController;
use App\Http\Controllers\Dashboard\ServiceCategoryController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\ProductCategoryController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SittingController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\Offrescontroller;









use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


   //################################ dashboard user ##########################################
    Route::get('/dashboard/user', function () {
        return view('Dashboard.User.dashboard');
    })->middleware(['auth'])->name('dashboard.user');
    //################################ end dashboard user #####################################



    //################################ dashboard admin ########################################
    Route::get('/dashboard/admin', function () {
        return view('Dashboard.Admin.dashboard');
    })->middleware(['auth:admin'])->name('dashboard.admin');

    //################################ end dashboard admin #####################################

//---------------------------------------------------------------------------------------------------------------
Route::get('/print', 'App\Http\Controllers\Dashboard\ClientController@print')->name('clients.print');
Route::get('/rendez_vous', 'App\Http\Controllers\Dashboard\ServiceController@rendezvous')->name('rendez_vous');

Route::get('/clientsprint/{$id}', 'App\Http\Controllers\Dashboard\ServiceController@clientsprint')->name('clientsprint');
Route::post('/save_invoice', 'App\Http\Controllers\Dashboard\ServiceController@saveInvoice')->name('save_invoice');
Route::get('autocomplete', [ClientController::class, 'autocomplete'])->name('autocomplete');
       
    Route::middleware(['auth:admin'])->group(function () {

        //############################# sections route ##########################################

        Route::resource('Sections', SectionController::class);

        //############################# end sections route ######################################


         //############################# Employees route ##########################################

         Route::resource('Employees', EmployeeController::class);
         Route::post('update_status', [EmployeeController::class, 'update_status'])->name('update_status');

 		

         //############################# end Employees route ######################################

           //############################# Rooms route ##########################################

           Route::resource('rooms', RoomController::class);
           Route::post('update_status', [RoomController::class, 'update_status'])->name('update_status');
  
   
           //############################# end Rooms route ######################################

           Route::resource('serviceCategory', ServiceCategoryController::class);
           Route::get('category_service_status', [ServiceCategoryController::class, 'category_service_status'])->name('category_service_status');

           Route::resource('services', ServiceController::class);
           Route::get('update_status', [ServiceController::class, 'update_status'])->name('update_status');

           Route::resource('productCategory', ProductCategoryController::class);
           Route::get('category_status', [ProductCategoryController::class, 'category_status'])->name('category_status');

           Route::resource('products', ProductController::class);
           Route::get('product_status', [ProductController::class, 'product_status'])->name('product_status');

           Route::resource('clients', ClientController::class);
           Route::get('client_status', [ClientController::class, 'client_status'])->name('client_status');
           Route::get('show1', [ClientController::class, 'show1'])->name('show1');
         
           Route::resource('offres', Offrescontroller::class);
           Route::get('setting', [SittingController::class, 'SiteSetting'])->name('site.setting');


Route::post('sitesetting', [SittingController::class, 'UpdateSiteSetting'])->name('update.sitesetting');








    });


    require __DIR__.'/auth.php';


});





