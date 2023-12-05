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

// Route::get('/', function () {
//     return view('welcome');
// });

//Common Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact');
Route::get('contact#scroll', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact#scroll');
Route::post('add-contact', [App\Http\Controllers\ContactUsController::class, 'storeContacts'])->name('add-contact');
Route::get('cms/{slug}', [App\Http\Controllers\CmsController::class, 'getPage'])->name('cms');
Route::get('product/{id}', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('product');
Route::get('all-product', [App\Http\Controllers\ProductController::class, 'all_products'])->name('all-product');
Route::get('/terms_and_conditions' , [App\Http\Controllers\HomeController::class, 'termsAndCondition'])->name('terms_and_conditions');
Route::get('/privacy_policy' , [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy_policy');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [\App\Http\Controllers\admin\IndexController::class, 'index'])->name('dashboard');
    
    Route::get('about-us', [\App\Http\Controllers\admin\CMSController::class, 'aboutEdit'])->name('about-us');
    
    Route::get('settings', [\App\Http\Controllers\admin\SettingsController::class, 'settingsEdit'])->name('settings');
    Route::patch('settings-update', [App\Http\Controllers\admin\SettingsController::class, 'settingsUpdate'])->name('settings-update');
    
    //admin profile
    Route::get('admin-profile/{id}', [App\Http\Controllers\admin\ProfileController::class, 'admin_profile'])->name('admin-profile');
    Route::patch('admin-profile-update', [App\Http\Controllers\admin\ProfileController::class, 'admin_profile_update'])->name('admin-profile-update');
    
    //password reset
    Route::get('reset-password', [\App\Http\Controllers\admin\ProfileController::class, 'reset_password'])->name('reset-password');
    Route::patch('password-update', [\App\Http\Controllers\admin\ProfileController::class, 'password_update'])->name('password-update');
    
    //Contact Details
    Route::get('delete-contact-details/{id}', [App\Http\Controllers\admin\ContactController::class, 'delete'])->name('delete-contact-details');
    Route::get('edit-contact-details/{id}', [App\Http\Controllers\admin\ContactController::class, 'edit_contact_details'])->name('edit-contact-details');
    Route::get('contact-list', [\App\Http\Controllers\admin\ContactController::class, 'contact_details_list'])->name('contact-list');
    Route::patch('update-contact-details', [App\Http\Controllers\admin\ContactController::class, 'update_contact_details'])->name('update-contact-details');
    
    //Enquiries
    Route::get('/enquiry-list', [App\Http\Controllers\admin\ContactController::class, 'enquiry_list'])->name('enquiry-list');
    Route::get('/enquiry-modal/{id}', [App\Http\Controllers\admin\ContactController::class, 'enquiry_modal'])->name('enquiry-modal');
    Route::get('/modal-data', [App\Http\Controllers\admin\ContactController::class, 'modal_data'])->name('modal-data');
    
    //Bannners
    Route::get('/banner-list', [App\Http\Controllers\admin\BannerController::class, 'banner_list'])->name('banner-list');
    Route::get('/add-banner', [App\Http\Controllers\admin\BannerController::class, 'addBanner'])->name('add-banner');
    Route::POST('/store-banner', [App\Http\Controllers\admin\BannerController::class, 'storeBanner'])->name('store-banner');
    Route::get('banner-edit/{id}', [App\Http\Controllers\admin\BannerController::class, 'banner_edit'])->name('banner-edit');
    Route::patch('banner-update', [App\Http\Controllers\admin\BannerController::class, 'banner_update'])->name('banner-update');
    Route::get('banner-delete/{id}', [App\Http\Controllers\admin\BannerController::class, 'delete'])->name('banner-delete');
     
    //Product
    Route::get('/product-list', [App\Http\Controllers\admin\ProductController::class, 'productList'])->name('product-list');
    Route::post('/product-status', [App\Http\Controllers\admin\ProductController::class, 'updateProductStatus'])->name('product-status');
    Route::get('/add-product', [App\Http\Controllers\admin\ProductController::class, 'addProduct'])->name('add-product');
    Route::POST('/store-product', [App\Http\Controllers\admin\ProductController::class, 'store_product'])->name('store-product');
    Route::get('/edit-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'edit_product'])->name('edit-product');
    Route::patch('update-product', [App\Http\Controllers\admin\ProductController::class, 'update_product'])->name('update-product');
    Route::get('product-delete/{id}', [App\Http\Controllers\admin\ProductController::class, 'delete'])->name('product-delete');
    
    //Colour
    Route::get('/colour-list', [App\Http\Controllers\admin\ColourController::class, 'list'])->name('colour-list');
    Route::get('/add-colour', [App\Http\Controllers\admin\ColourController::class, 'add'])->name('add-colour');
    Route::POST('/store-colour', [App\Http\Controllers\admin\ColourController::class, 'store'])->name('store-colour');
    Route::get('/edit-colour/{id}', [App\Http\Controllers\admin\ColourController::class, 'edit'])->name('edit-colour');
    Route::patch('update-colour', [App\Http\Controllers\admin\ColourController::class, 'update'])->name('update-colour');
    Route::get('colour-delete/{id}', [App\Http\Controllers\admin\ColourController::class, 'delete'])->name('colour-delete');
    
     //Features
    Route::get('/feature-list', [App\Http\Controllers\admin\FeatureController::class, 'list'])->name('feature-list');
    Route::get('/add-feature', [App\Http\Controllers\admin\FeatureController::class, 'add'])->name('add-feature');
    Route::POST('/store-feature', [App\Http\Controllers\admin\FeatureController::class, 'store'])->name('store-feature');
    Route::get('/edit-feature/{id}', [App\Http\Controllers\admin\FeatureController::class, 'edit'])->name('edit-feature');
    Route::patch('update-feature', [App\Http\Controllers\admin\FeatureController::class, 'update'])->name('update-feature');
    Route::get('feature-delete/{id}', [App\Http\Controllers\admin\FeatureController::class, 'delete'])->name('feature-delete');
    
    //About Us
    Route::get('/about-us-edit', [App\Http\Controllers\admin\AboutController::class, 'about_edit'])->name('about-us-edit');
    Route::post('/about-update', [App\Http\Controllers\admin\AboutController::class, 'about_update'])->name('about-update');
    Route::get('/section_one_edit', [App\Http\Controllers\admin\AboutController::class, 'section_one_edit'])->name('section_one_edit');
    Route::post('/section_one_update', [App\Http\Controllers\admin\AboutController::class, 'section_one_update'])->name('section_one_update');
    Route::get('/section_two_edit', [App\Http\Controllers\admin\AboutController::class, 'section_two_edit'])->name('section_two_edit');
    Route::post('/section_two_update', [App\Http\Controllers\admin\AboutController::class, 'section_two_update'])->name('section_two_update');
    Route::get('/section_three_edit', [App\Http\Controllers\admin\AboutController::class, 'section_three_edit'])->name('section_three_edit');
    Route::post('/section_three_update', [App\Http\Controllers\admin\AboutController::class, 'section_three_update'])->name('section_three_update');


    //cms
    Route::get('/terms', [App\Http\Controllers\admin\CMSController::class, 'terms'])->name('terms');
    Route::post('/terms-update', [App\Http\Controllers\admin\CMSController::class, 'terms_update'])->name('terms-update');
    Route::get('/privacy', [App\Http\Controllers\admin\CMSController::class, 'privacy'])->name('privacy');
    Route::post('/privacy-update', [App\Http\Controllers\admin\CMSController::class, 'privacy_update'])->name('privacy-update');
    
});



require __DIR__.'/auth.php';
