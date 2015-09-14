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

    //move file for tempt location to productphotos
    $fileName = \Carbon\Carbon::now()->timestamp."_product.jpg";

    $request->file('photo')->move('productphotos', $fileName);

    $product->photo = $fileName;
    $product->save();

    return redirect('types/'.$product->type->id);

});

Route::get('products/{id}/edit', function ($id) {

	$product = \App\Models\Product::find($id);

    return view('editProduct',['product'=>$product]);

});

Route::put('products/{id}', function ($id,\App\Http\Requests\UpdateProductRequest $request) {

	$product = \App\Models\Product::find($id);

    $product->fill($request->all());

    $product->save();

    return redirect("types/".$product->type->id);

    

});

Route::get('users/create', function () {

    return view('createUser');

});

Route::get('users/{id}', function ($id) {

    $user = \App\Models\User::find($id);

    return view('users',['user'=>$user]);
    

});

Route::post('users', function (\App\Http\Requests\CreateUserRequest $request) {

    $user = \App\Models\User::create($request->all());

    //encrypt password
    $user->password = bcrypt($user->password);
    $user->save();

    return redirect('users/'.$user->id);

});

Route::get('users/{id}/edit', function ($id) {

    $user = \App\Models\User::find($id);

    return view('editUser',['user'=>$user]);

});

Route::put('users/{id}', function ($id,\App\Http\Requests\UpdateUserRequest $request) {

    $user = \App\Models\User::find($id);

    $user->fill($request->all());

    $user->save();

    return redirect("users/".$user->id);

    

});