<?php

use App\Products;
use Illuminate\Http\Request;

/**
 * Вывести панель с задачами
 */
Route::get('/', function () {
    $products = Products::orderBy('id', 'asc')->get();
    return view('products', [
	'products' => $products,
	'title' => 'all products',
    ]);
});

/**
 * Добавить новую задачу
 */
Route::post('/products', function (Request $request) {
    $validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
		'description' => 'required|max:255',
		'price' => 'required|max:255',
    ]);

    if ($validator->fails()) {
	return redirect('/')
			->withInput()
			->withErrors($validator);
    }
    $products = new Products;
    $products->name = $request->name;
    $products->description = $request->description;
    $products->price = $request->price;
    $products->save();

    return redirect('/');
});

/**
 * Удалить задачу
 */
Route::delete('/products/{product}', function (Products $product) {
    $product->delete();

    return redirect('/');
});
