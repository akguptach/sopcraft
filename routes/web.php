<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\OrderController as Order;
use App\Http\Controllers\StudentController as Student;
use App\Http\Controllers\PageController as Pages;
use App\Http\Controllers\BlogController as Blog;
use App\Http\Controllers\AuthController as Auth;
use App\Http\Controllers\PaymentController as Payment;
use App\Http\Controllers\AdminController as Admin;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Orders;
use Livewire\Livewire;
use App\Http\Controllers\ServicesController as Services;
use App\Http\Controllers\ErrorController as Error;
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

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/faq', [Home::class, 'faq'])->name('faq');
Route::get('/why_us', [Home::class, 'why_us'])->name('why_us');
Route::get('/contact-us', [Home::class, 'contact_us'])->name('contact-us');
Route::get('/refer_friend', [Home::class, 'refer_friend'])->name('refer_friend');



Route::get('/Services', [Home::class, 'services'])->name('Services');
Route::get('/Dissertation_service', [Home::class, 'dissertation_writing_service'])->name('Dissertation_service');
Route::get('/Research_writing_service', [Home::class, 'research_writing_service'])->name('Research_writing_service');
Route::get('/Term_writing_service', [Home::class, 'term_writing_service'])->name('Term_writing_service');
Route::get('/Admission_writing_service', [Home::class, 'admission_writing_service'])->name('Admission_writing_service');

Route::get('/pages/{sku}', [Pages::class, 'index'])->name('pages.index');

Route::get('/dateformat', [Home::class, 'dateformat'])->name('dateformat');
Route::get('/term', [Pages::class, 'terms_condtion'])->name('term');
Route::get('/Privacy', [Pages::class, 'privacy'])->name('Privacy');
Route::get('/blog', [Blog::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [Blog::class, 'view'])->name('blog.view');
Route::post('/signup', [Student::class, 'create'])->name('signup');
Route::post('/login', [Auth::class, 'login'])->name('login');
Route::get('/order', [Order::class, 'index'])->name('order');
Route::post('/price', [Order::class, 'checkprice'])->name('price');

Route::get('/login', [Auth::class, 'loginPage'])->name('login.page');
Route::get('/signup', [Auth::class, 'signupPage'])->name('signup.page');
Route::get('/reset-password', [Auth::class, 'resetPasswordPage'])->name('reset.password.page');
Route::get('/404', [Error::class, 'notFound'])->name('not.found.page');


Route::middleware('auth')->group(function () {

    Route::get('/payment', [Payment::class, 'index']);
    Route::post('/pay', [Payment::class, 'pay'])->name('pay');
    Route::get('/payment-validation', [Payment::class, 'paymentValidation'])->name('payment-validation');
    Route::post('/paymentsave', [Payment::class, 'payment']);
    Route::get('/transactions', [Order::class, 'transactions'])->name('order.transactions');
    Route::get('/vieworder/{oid}', [Order::class, 'vieworder'])->name('order.vieworder');

    Route::get('/refer_friend_individual', [Order::class, 'refer_friend'])->name('order.refer_friend');
    Route::get('/statements', [Order::class, 'statements'])->name('order.statements');
    Route::post('/neworder', [Order::class, 'create'])->name('neworder');

    Route::get('/profile', [Student::class, 'profile'])->name('student.profile');
    Route::post('/update-profile', [Student::class, 'updateProfile'])->name('student.update.profile');
    Route::get('/changepass', [Student::class, 'changepass'])->name('student.changepass');
    Route::post('/update-password', [Student::class, 'updatePassword'])->name('student.update.password');


    Route::get('/logout', [Auth::class, 'logout'])->name('logout');
});

Route::get('/admin', Login::class)->name('admin')->middleware('sop.admin.notAuthorized');

Route::prefix('admin')->middleware('sop.admin.authorized')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/orders', Orders::class)->name('orders');
    Route::get('/sop-order-data', [Admin::class, 'sopOrderData'])->name('sop-order-data');
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/sop/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::any('/sop/livewire/update', $handle);
});

Route::get('/{slug}', [Services::class, 'servicesIndex'])->name('Services.Index');
