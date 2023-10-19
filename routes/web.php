<?php

use App\Http\Controllers\Auth\FrontendLoginController;
// use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;
use Doctrine\DBAL\Schema\Index;
// use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/Laptop', [LaptopController::class, 'index'])->name('products.Laptop.index');
Route::get('/Phone', [LaptopController::class, 'phone'])->name('phone');

Route::get('/search', [SearchController::class, 'search'])->name('search.Page');

Route::get('/page', [LaptopController::class, 'HomePage'])->name('products.HomePage.index');
Route::get('/vnpay_payment', [CheckoutController::class, 'vnpay_payment']);


// LOGIN

// END



// Route::get('/login-Page', [UserAuthController::class, 'loginForm'])->name('login.page');
// Route::get('/login-Post', [UserAuthController::class, 'login'])->name('login.post.user');


// Route::middleware('auth')->group(function () {
// Route::get('/login-Page', [UserAuthController::class, 'loginForm'])->name('login.page');
// Route::post('/login-Post', [UserAuthController::class, 'loginPost'])->name('login.post.user');
// Route::get('/Laptop', [LaptopController::class, 'index'])->name('products.Laptop.index');
// Route::get('/Phone', [LaptopController::class, 'phone'])->name('phone');

// Route::get('/search', [SearchController::class, 'search'])->name('search.Page');

// Route::get('/page', [LaptopController::class, 'HomePage'])->name('products.HomePage.index');
// Route::get('/vnpay_payment', [CheckoutController::class, 'vnpay_payment']);
// });

Route::get('/login-page-product', [AuthController::class, 'index'])->name('login.page');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('/registration', [AuthController::class, 'registration'])->name('register');
Route::post('/post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
// Route::get('/logout-test', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout-test', [FrontendLoginController::class, 'logoutFrontend'])->name('logoutFrontend');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/product', [ProductController::class, 'adminProduct'])->name('admin.product.index');
    Route::get('/categories', [CategoryController::class, 'adminCategory'])->name('admin.categories.index');
    Route::get('/Testproducts', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.user');
    Route::get('/users/edit{id}.', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::delete('/users/delete{id}.', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::delete('/users/role{id}.', [UserController::class, 'role'])->name('admin.users.role');
    Route::put('/users/update{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::get('/carts/cart', [CartController::class, 'showAdmin'])->name('admin.carts.cart');
    Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('admin.cart.clear');
    Route::delete('/carts/cart/{id}', [CartController::class, 'delete'])->name('admin.carts.delete');
    // checkshow
    Route::get('/carts/checkshow', [CheckoutController::class, 'showAdmin'])->name('admin.checkout.index');
    Route::get('/carts/checkshow/clear', [CheckoutController::class, 'clear'])->name('admin.checkout.clear');
    // end

    // Route::get('/products/search', [ProductController::class, 'search'])->name('search');
    Route::get('/products/search', [ProductController::class, 'search'])->name('search');
    Route::get('/products/live-search', [ProductController::class, 'liveSearch'])->name('liveSearch');
    //   product edit
    Route::get('/products/edit{id}', [ProductController::class, 'editProduct'])->name('admin.editproduct.show');
    Route::get('/products/update{id}', [ProductController::class, 'updateProduct'])->name('admin.updateProduct');

    // end
    Route::delete('/products/delete{id}', [ProductController::class, 'destroy'])->name('admin.Product.delete');
    Route::post('/products/add', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/addproduct', [ProductController::class, 'formAddProduct'])->name('product.add');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/page2', [App\Http\Controllers\HomeController::class, 'index2'])->name('page');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
// Route::get('homepage', [HomeController::class, 'test'])->name('products.Homepages.homepage');
Route::get('/Addcategory', [CategoryController::class, 'addCategory']);
Route::get('/Addproduct', [ProductController::class, 'Addproduct']);
// Route::get('/categories', [CategoryController::class, 'showCategory']);
Route::get('/Addproduct/delete/{id}', [ProductController::class, 'deleteProduct']);
Route::get('/categories/delete/{id}', [CategoryController::class, 'deleteCategory']);
Route::post('/cart/updateQuantity/{productId}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/checkout', [CheckoutController::class, 'index'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.store');

// gio hang
Route::get('/cart/add{productId}', [CartController::class, 'store'])->name('cart.add');
Route::get('/show', [CartController::class, 'showCart'])->name('cart.show');

// search
// end

Route::get('/show', [CartController::class, 'index'])->name('cart');
// frontend
Route::get('/login-user', [FrontendLoginController::class, 'loginFrontend'])->name('frontend.login');
Route::post('/login-user', [FrontendLoginController::class, 'authenticate'])->name('frontend.login.submit');
Route::post('/register-user', [FrontendLoginController::class, 'registerUser'])->name('frontend.register.submit');
Route::get('/register-form-user', [FrontendLoginController::class, 'showRegistrationForm'])->name('frontend.register');
Auth::routes();







// test Login User

// Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

// Route::get('loginUser', [CustomAuthController::class, 'index'])->name('loginUser');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registrationUSer', [CustomAuthController::class, 'registrationUSer'])->name('register.user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');



// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');