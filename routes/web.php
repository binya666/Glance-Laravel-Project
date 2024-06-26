<?php
// frontend
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\faqsController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\SignupController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ShopsingleController;
use App\Http\Controllers\frontend\ShopcategoryController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\TermsandconditionsController;


// Admin
use App\Http\Controllers\backend\AdminFaqsController;
use App\Http\Controllers\backend\AddproductController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminTeammemberController;
use App\Http\Controllers\backend\AdminCustomerlistController;
use App\Http\Controllers\backend\AdminPersonaController;






// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/blog-single', [BlogController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
// Route::get('/about', [AboutController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/terms-and-conditions', [TermsandconditionsController::class, 'index']);
Route::get('/faqs', [FaqsController::class, 'index']);
Route::get('/shop-category', [ShopcategoryController::class, 'index']);
Route::get('/shop-single', [ShopsingleController::class, 'index']);
Route::get('/shop-single/{id}', [ShopsingleController::class, 'show'])->name('shop-single');
Route::get('/account', [AccountController::class, 'index']);




// ADMIN
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/customer-list', [AdminCustomerlistController::class, 'index']);

//Login Page
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/login', function(){
    if(session()->has('email')){
        return redirect('/admin');
    } else{
        return view('backend.login');
    }
});
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);



// TEAM Management
Route::get('/teammember', [AdminTeammemberController::class, 'index']);
Route::post('/teammember', [AdminTeammemberController::class, 'store']);
Route::get('/admin/team-edit/{id}', [AdminTeammemberController::class, 'editTeam'])->name('team.edit');
Route::put('/admin/team-edit/{id}', [AdminTeammemberController::class, 'updateTeam'])->name('team.update');
Route::delete('/admin/team-delete/{id}', [AdminTeammemberController::class, 'deleteTeam'])->name('team.delete');

// PRODUCT Management
Route::get('/addproduct', [AddproductController::class, 'index']);
Route::get('/product/category/shoes', [AddProductController::class, 'shoes']);
Route::get('/product/category/clothes', [AddProductController::class, 'clothes']);
Route::get('/product/category/accessories', [AddProductController::class, 'accessories']);
Route::post('/addproduct', [AddProductController::class, 'store'])->name('addproduct');
Route::get('/editproduct/{id}', [AddproductController::class, 'editProduct'])->name('product.edit');
Route::put('/editproduct/{id}', [AddproductController::class, 'updateProduct'])->name('product.update');
Route::delete('/deleteproduct/{id}', [AddproductController::class, 'deleteProduct'])->name('product.delete');

// FAQs Management
Route::get('/add-faqs', [AdminFaqsController::class, 'index']);
Route::post('/add-faqs', [AdminFaqsController::class, 'store']);
Route::get('/admin/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('faq.edit');
Route::put('/admin/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('faq.update');
Route::delete('/admin/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('faq.delete');

// PERSONA Managment
Route::get('/persona', [AdminPersonaController::class, 'index'])->name('persona.index');
    Route::post('/persona', [AdminPersonaController::class, 'store'])->name('persona.store');
    Route::get('/persona/edit/{id}', [AdminPersonaController::class, 'editPersona'])->name('persona.edit');
    Route::put('/admin/persona/{id}', [AdminPersonaController::class, 'updatePersona'])->name('persona.update');
    Route::delete('/persona/delete/{id}', [AdminPersonaController::class, 'deletePersona'])->name('persona.delete');


Route::get('admin/logout', function(){
    if(session()->has('email')){
        session()->pull('id', null);
        session()->pull('first_name', null);
        session()->pull('last_name', null);
        session()->pull('email', null);
    }
        return redirect('/admin/login');
});
