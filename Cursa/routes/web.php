<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InsurerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\RacetrackRecordController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\PDFController;

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



//Home
Route::get('', [App\Http\Controllers\HomeController::class, 'index']);

//Home Admin
Route::get('/home-admin', [App\Http\Controllers\HomeController::class, 'homeAdmin'])->name('home-admin')->middleware('auth');

//Race
Route::resource('races', RaceController::class)->middleware('auth');
Route::get('racePage/{id}', [App\Http\Controllers\RaceController::class, 'racePage'])->name('racePage');
Route::get('allRaces', [App\Http\Controllers\RaceController::class, 'allRace']);
Route::get('finishedRaces', [App\Http\Controllers\RaceController::class, 'finishedRaces']);
Route::get('racesToStart', [App\Http\Controllers\RaceController::class, 'racesToStart']);
Route::post('search/races', [App\Http\Controllers\RaceController::class, 'raceSearch'])->name('raceSearch');
Route::get('gallery', [App\Http\Controllers\RaceController::class, 'gallery'])->name('gallery');

Auth::routes();


//Insurers
Route::resource('insurers', InsurerController::class)->middleware('auth');
Auth::routes();


//Sponsors
Route::resource('sponsors',SponsorController::class)->middleware('auth');
Auth::routes();


//Paypal
Route::controller(PaypalController::class)->group(function(){
    Route::get('/checkout', 'Index')->name('paymentindex');
    Route::post('/request-payment', 'RequestPayment')->name('requestpayment');
    Route::get('/payment-success', 'PaymentSuccess')->name('paymentsuccess');
    Route::get('/payment-cancel', 'PaymentCancel')->name('paymentCancel');
});

//Image/File
Route::get('dropzone', [DropzoneController::class, 'dropzone']);
Route::post('dropzone/store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');


//Runners
Route::get('runnerForm/{id}', [App\Http\Controllers\RacetrackRecordController::class, 'runnerForm'])->name('runnerForm');
Route::post('runnerForm/registro/dni/check', [App\Http\Controllers\RacetrackRecordController::class, 'checkRunnerForm'])->name('runnerCheckDni');
Route::get('runnerForm/registro/dni/store', [App\Http\Controllers\RacetrackRecordController::class, 'storeRunnerForm'])->name('runnerStoreDni');
Route::post('runnerForm/registro/register/check', [App\Http\Controllers\RacetrackRecordController::class, 'checkRunnerRegister'])->name('runnerCheckRegister');
Route::get('runnerForm/registro/register/store', [App\Http\Controllers\RacetrackRecordController::class, 'storeRunnerRegister'])->name('runnerStoreRegister');
Route::post('runnerForm/registro/total', [App\Http\Controllers\RacetrackRecordController::class, 'storeRunnerRegister']);
//Route::get('racetrackRecord/{id}/{dni}', [App\Http\Controllers\RacetrackRecordController::class, 'racetrackRecord'])->name('racetrackRecord');

//Racetrack-record
Route::get('racetrack-record/{id}/{dni}', [App\Http\Controllers\RacetrackRecordController::class, 'racetrackRecord'])->name('racetrackRecord');


//pdf
Route::get('generatePDF/{response}', [PDFController::class, 'generatePDF'])->name('generatePDF');
Route::get('generatePDF2/{response}', [PDFController::class, 'generatePDF2'])->name('generatePDF2');
Route::get('generatePDF3/{response}', [PDFController::class, 'generatePDF3'])->name('generatePDF3');


//Placement
Route::get('ranking', [App\Http\Controllers\PlacementController::class, 'ranking'])->name('ranking');
