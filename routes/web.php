<?php

use App\Models\Product;
use App\Models\Category;
use App\Models\ImagePath;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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

Route::get('products', [ProductController::class, 'allProducts']);

Route::get('categories/{category:slug}',[ProductController::class, 'productByCategory'] );

Route::get('products/{product:slug}',[ProductController::class, 'viewProductDetail'] );


Route::get('create-product', function (Category $category) {
    return view('admin.create_product', [
        'categories' => $category->all()
    ]);
});

//Landing page
Route::get('/', function () {
    return view('users.landing_page');
});

//Login page
Route::get('/login', function () {
    return view('users.login');
});


Route::get('product', function () {
    return view('users.product');
});

// //Product detail
// Route::get('product01', function () {
//     return view('users.product_detail');
// });

//Cart
Route::get('/cart', function () {
    return view('users.cart');
});

//Home page
Route::get('/home', function () {
    return view('home');
});

//Cart
Route::get('/cartAdmin  ', function () {
    return view('admins.admin.cart');
});
   
//View static
Route::get('/statistic', function () {
    return view('admins.statistic');
 });
    
 //Admin
Route::get('/showAdmin', function () {
    return view('admins.admin.showAdmin');
});

//Update of Admin
Route::get('/updateAdmin', function () {
    return view('admins.admin.updateAdmin');
});

Route::get('/createAdmin', function () {
    return view('admins.admin.createNewAdmin');
});



//Update product
Route::get('/updateProduct', function () {
    return view('admins.Fashion.updateProduct');
});

//Accessory
Route::get('/showCustomer', function () {
    return view('admins.Customer.showCustomer');
});

//Create information of customer
Route::get('/createCustomer', function () {
    return view('admins.Customer.createNewCustomer');
});

Route::post('create_product', [ProductController::class, 'createProduct']);

Route::get('admin-products', [ProductController::class, 'viewProduct']);
Route::post('filter-by-category', [ProductController::class, 'filterByCategory']);


//Fetch data
Route::get('fetch-products',[ProductController::class, 'fetchProduct']);

//Show all products
Route::get('/showProduct', [ProductController::class, 'viewProducts'])->name('admin_products');

//Create product
Route::get('/createNewProduct',[ProductController::class, 'creatingProduct']);
Route::post('create-product', [ProductController::class, 'createProduct']);

//Update product route
Route::get('update-product/{id}', [ProductController::class, 'editProduct']);
Route::put('update-product/{id}', [ProductController::class, 'updateProduct']);

//Delete product route
Route::delete('delete-product/{id}', [ProductController::class, 'destroyProduct']);

//REGISTER
Route::get('register', [RegisterController::class, 'create'])->middleware('guest'); //This will redirect to home page if the user have already sign in (Provider.RouteServiceProvider) 
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');