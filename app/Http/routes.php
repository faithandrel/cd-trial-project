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

use Illuminate\Http\Request;
use App\Item;

Route::get('/', function () {
    $items = Item::getItems();
    return view('items');
});

Route::get('get-items', function () {
   $items = Item::getItems();
   return response()->json($items);
});

Route::post('save-item', function (Request $request) {
    $new = new Item;
    
    $new->product = $request->product;
    $new->quantity = $request->quantity;
    $new->price = $request->price;
    
    $new->saveItem();
    
    return response()->json($new);
});