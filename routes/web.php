<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Vendor\VendorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get("/dashboard", [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get("/logout", [AdminController::class, 'logout'])->name('admin.logout');

        //Password change page
        Route::get("/password-change", [AdminController::class, 'passwordChangePage'])->name('admin.password.change');
        Route::post("/password-change", [AdminController::class, 'passwordUpdate'])->name('admin.password.change');
        Route::get("/check-admin-password", [AdminController::class, 'checkAdminPassword'])->name('admin.check.password');
        Route::get("/update-details-page", [AdminController::class, 'updateDetailsPage'])->name('admin.update.details.page');
        Route::post("/update-details", [AdminController::class, 'updateDetails'])->name('admin.update.details');
        //Vendor Business details backend
        Route::post("/update-vendor-business-details", [VendorController::class, 'updateVendorBusinessDetails'])->name('vendor.update.business.details');
        //vendor business details page
        Route::get("/vendor-business-details-page", [VendorController::class, 'vendorBusinessDetailsPage'])->name('vendor.business.details.page');
        //vendor bank details page
        Route::get("/vendor-bank-details-page", [VendorController::class, 'vendorBankDetailsPage'])->name('vendor.bank.details.page');
        Route::post("/update-bank-deatils", [VendorController::class, 'updateBankDetails'])->name('vendor.update.bank.details');

        //Vendors management
        Route::get("/vendors", [AdminController::class, 'vendors'])->name('admin.vendors');
        Route::get("/vendor-details/{id}", [AdminController::class, 'vendorDetails'])->name('admin.vendor.details');
        //Approve Vendor
        Route::post("/update-vendor-status", [AdminController::class, 'updateVendorStatus'])->name('admin.update.vendor.status');

        //Admins page
        Route::get("/admins-page", [AdminController::class, 'admins'])->name("admin.admins.page");
        Route::get("/admins-details/{id}", [AdminController::class, 'adminsDetails'])->name("admin.admins.details");

        // admin status update
        Route::post("/update-admin-status", [AdminController::class, 'updateAdminStatus'])->name('admin.update.admin.status');

    });
    Route::get("/login", [AdminController::class, 'loginPage'])->name('admin.login');
    Route::post("/login", [AdminController::class, 'login'])->name('admin.login');

});

require __DIR__ . '/auth.php';
