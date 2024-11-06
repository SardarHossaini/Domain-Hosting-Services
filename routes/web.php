<?php
use App\Http\Controllers\adminController;
use App\Http\Controllers\hostingController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/', function () {
    return view('home');
});

Route::get("/about", function () {
    return view('about');
});
Route::get("/contact", function () {
    return view('contact');
});
Route::get("/searchdomain", [DomainController::class, 'searchDomain'])->name('domain.search');

Route::get(
    "/hosting",
    [hostingController::class, 'showHosting']
);

Route::get("/service", function () {
    return view('service');
});
Route::get("/signin", function () {
    return view('auth.login');
});
Route::get("/signup", function () {
    return view('auth.register');
});

Route::get("/salse", function () {
    return view('salse');
});
Route::get("/message", function () {
    return view('messaged');
});

// Auth

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('login', [AuthenticatedSessionController::class, 'create'])
//     ->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post("/ordering", [orderController::class, 'store'])->name('order.store');
    Route::get("/ordering", [orderController::class, 'index']);
    Route::get("/hosts", [hostingController::class, 'show'])->name('host.show');
    Route::get('/AddHost', [hostingController::class, 'create'])->name('host.create');
    Route::get('/host/update/{id}', [hostingController::class, 'update'])->name('host.update');
    Route::get('/host/edit/{id}', [hostingController::class, 'edit'])->name('host.edit');
    Route::get('/host/delete/{id}', [hostingController::class, 'destroy'])->name('host.delete');
    Route::post('/storeHost', [hostingController::class, 'store'])->name('host.store');
    // Route::get('/addDomain', [DomainController::class, 'create'])->name('domain.create');
    Route::get('/Orders', [orderController::class, 'show'])->name('order.show');
    Route::get('/adminDashboard', [adminController::class, 'adminDashboard']);
    Route::get('/userOrders', [OrderController::class, 'index'])->name('orders.recent');
    Route::resource('domains', DomainController::class);
    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {
            return view('layouts.adminLayout');
        });
    });


    Route::get("/user", function () {
        return view('user');
    });
});

Route::post('/check-domain', [DomainController::class, 'checkDomain'])->name('check.domain');
require __DIR__ . '/auth.php';
