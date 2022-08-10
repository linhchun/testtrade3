<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DepostitController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WidthdrawFundController;
use App\Http\Controllers\TwoFactorsController;
use App\Http\Controllers\ReferralsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\ManagePortfolioController;
use App\Http\Controllers\HelpCenterController;
use App\Http\Controllers\CProfileController;

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
    return view('home');
});


Auth::routes();
  
/* Ruta para los usuarios */
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/userdashboard', [HomeController::class, 'index'])->name('home');
    
});
  
/* Ruta para los Administradores */
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    // Route::resource('admin', HomeController::class);
    Route::resource('users', UsersController::class);
    

});
  
/* Ruta para los Moderadores */
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::get('userdashboard', function () {
    return view('userdashboard');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/deposit', [DepostitController::class, 'index'])->name('deposit');
    Route::post('/deposit', [DepostitController::class, 'ajax'])->name('ajax');
    Route::get('/update-transaction-id', [DepostitController::class, 'update_transaction_id'])->name('update_transaction_id');
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    Route::get('/account-setting', [ProfileController::class, 'index'])->name('profile');
    Route::post('/account-setting', [ProfileController::class, 'update'])->name('profile_update');
    Route::get('/withdraw', [WidthdrawFundController::class, 'index'])->name('withdraw');
    Route::get('/portfolio', [ManagePortfolioController::class, 'index'])->name('portfolio');
    Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions');
    Route::get('/referals', [ReferralsController::class, 'index'])->name('referals');
    Route::get('/twofactor', [TwoFactorsController::class, 'index'])->name('twofactor');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
  
   
   

 });

 Route::get('/cprofile', [CProfileController::class, 'index'])->name('cprofile');
 Route::get('/helpcenter', [HelpCenterController::class, 'index'])->name('helpcenter');