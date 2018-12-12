<?php

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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/faq','HomeController@faq')->name('faq');
Route::get('/add', 'ProductController@create')->name('add');
Route::post('/add', 'ProductController@store')->name('add2');
Route::get('/productsLista', 'ProductController@lista');


// Route::get('/add', 'AddProductsController@view')->name('AddProducts');
// Route::post('/add', 'AddProducts')

// public function store(Request $request)
//     {
//         $product = new Product;
//         $product->brand = $request->input('name');
//         $product->brand = $request->input('category');
//         $product->brand = $request->input('price');
//         $product->brand = $request->input('combo');
//         $product->save();
//         return redirect('admin.AddCar');
//     }
// }
 // Schema::create('add_products', function (Blueprint $table) {
 //            $table->increments('id');
 //            $table->string('name')->unique();
 //            $table->string('category');
 //            $table->string('price');
 //            $table->integer('combo');
 //            $table->timestamps();
 //        });
 //    }