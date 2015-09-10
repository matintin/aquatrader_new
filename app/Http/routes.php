<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');

});
Route::get('about', function () {

    return view('about');

});

Route::get('contact', function () {

    return view('contact');

});
Route::get('types/{id}', function ($id) {

	$type = \App\Models\Type::find($id);

    return view('types',['type'=>$type]);
    

});

Route::get('products/create', function () {

    return view('createProduct');

});

Route::post('products', function (\App\Http\Requests\CreateProductRequest $request) {

    $product = \App\Models\Product::create($request->all());

    return redirect('types/'.$product->type->id);

});

Route::get('products/{id}/edit', function ($id) {

	$product = \App\Models\Product::find($id);

    return view('editProduct',['product'=>$product]);

});

Route::put('products/{id}', function ($id) {

	$product = \App\Models\Product::find($id);

    

});