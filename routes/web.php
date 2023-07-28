<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HaircutController;
use App\Http\Controllers\HairstylistController;

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('user-home');
});

Route::get('/mangkas-faq', function () {
    return view('user-faq');
})->name('mangkas-faq');

Route::get('/mangkas-contact', function () {
    return view('user-contact');
})->name('mangkas-contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['admin', 'staff'])->group(function() {

Route::get('/create-shop', [ShopController::class, 'getCreateShopPage'])->name('getCreateShopPage');
Route::post('/create-shop', [ShopController::class, 'createShop'])->name('createShop');
Route::get('/create-shop', [ShopController::class, 'getShops'])->name('getShops');
Route::delete('/delete-shop/{id}', [ShopController::class, 'deleteShop'])->name('deleteShop');

Route::get('/create-service', [ServiceController::class, 'getCreateServicePage'])->name('getCreateServicePage');
Route::post('/create-service', [ServiceController::class, 'createService'])->name('createService');
Route::get('/create-service', [ServiceController::class, 'getServices'])->name('getServices');
Route::delete('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('deleteService');

Route::get('/create-facility', [FacilityController::class, 'getCreateFacilityPage'])->name('getCreateFacilityPage');
Route::post('/create-facility', [FacilityController::class, 'createFacility'])->name('createFacility');
Route::get('/create-facility', [FacilityController::class, 'getFacilities'])->name('getFacilities');
Route::delete('/delete-facility/{id}', [FacilityController::class, 'deleteFacility'])->name('deleteFacility');

Route::get('/create-haircut', [HaircutController::class, 'getCreateHaircutPage'])->name('getCreateHaircutPage');
Route::post('/create-haircut', [HaircutController::class, 'createHaircut'])->name('createHaircut');
Route::get('/create-haircut', [HaircutController::class, 'getHaircuts'])->name('getHaircuts');
Route::delete('/delete-haircut/{id}', [HaircutController::class, 'deleteHaircut'])->name('deleteHaircut');

Route::get('/create-hairstylist', [HairstylistController::class, 'getCreateHairstylistPage'])->name('getCreateHairstylistPage');
Route::post('/create-hairstylist', [HairstylistController::class, 'createHairstylist'])->name('createHairstylist');
Route::get('/create-hairstylist', [HairstylistController::class, 'getHairstylists'])->name('getHairstylists');
Route::delete('/delete-hairstylist/{id}', [HairstylistController::class, 'deleteHairstylist'])->name('deleteHairstylist');

Route::get('/create-agenda', [AgendaController::class, 'getCreateAgendaPage'])->name('getCreateAgendaPage');
Route::post('/create-agenda', [AgendaController::class, 'createAgenda'])->name('createAgenda');
Route::get('/create-agenda', [AgendaController::class, 'getAgendas'])->name('getAgendas');
Route::delete('/delete-agenda/{id}', [AgendaController::class, 'deleteAgenda'])->name('deleteAgenda');

});

Route::middleware('admin')->group(function () {
    Route::get('/create-product', [ProductController::class, 'getCreateProductPage'])->name('getCreateProductPage');
    Route::post('/create-product', [ProductController::class, 'createProduct'])->name('createProduct');
    Route::get('/create-product', [ProductController::class, 'getProducts'])->name('getProducts');
    Route::delete('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

    Route::get('/create-faq', [FaqController::class, 'getCreateFaqPage'])->name('getCreateFaqPage');
    Route::post('/create-faq', [FaqController::class, 'createFaq'])->name('createFaq');
    Route::get('/create-faq', [FaqController::class, 'getFaqs'])->name('getFaqs');
    Route::delete('/delete-faq/{id}', [FaqController::class, 'deleteFaq'])->name('deleteFaq');

});

Route::middleware('auth')->group(function(){
    Route::get('/create-membership', [MembershipController::class, 'getMemberships'])->name('getMemberships');
    Route::delete('/delete-membership/{id}', [MembershipController::class, 'deleteMembership'])->name('deleteMembership');

    Route::get('/mangkas-booking/{id}', [BookingController::class, 'getBookingById'])->name('getBookingById');

    Route::get('/create-booking', [BookingController::class, 'getCreateBookingPage'])->name('getCreateBookingPage');
    Route::post('/create-booking', [BookingController::class, 'createBooking'])->name('createBooking');
    Route::get('/mangkas-booking-detail', [BookingController::class, 'getBookings'])->name('getBookings');
    Route::delete('/delete-booking/{id}', [BookingController::class, 'deleteBooking'])->name('deleteBooking');

    // Route::get('/agendas', [AgendaController::class, 'index'])->name('agendas.index');
    // Route::get('/s', [AgendaController::class, 'searchAgenda'])->name('search1');

    Route::get('/filter', [BookingController::class, 'filter'])->name('filter');
    Route::get('/mangkas-shop-detail/{id}', [ShopController::class, 'getShopById'])->name('getShopById');

});

Route::get('/mangkas-home', [MembershipController::class, 'getCreateMembershipPage'])->name('getCreateMembershipPage');
Route::post('/mangkas-home', [MembershipController::class, 'createMembership'])->name('createMembership');

Route::get('/mangkas-shop', [ShopController::class, 'getCreateShop'])->name('getCreateShop');

Route::get('/mangkas-product', [ProductController::class, 'getProductsMangkas'])->name('getProductsMangkas');

require __DIR__.'/auth.php';


use App\Http\Controllers\ChattingController;

Route::get('/mangkas-chatting', [ChattingController::class, 'getCreateChattingPage'])->name('getCreateChattingPage');
Route::post('/mangkas-chatting', [ChattingController::class, 'createChatting'])->name('createChatting');
Route::get('/mangkas-chatting', [ChattingController::class, 'getChattings'])->name('getChattings');
 