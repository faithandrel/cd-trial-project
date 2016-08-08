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
use App\Number;

Route::get('item-page', function () {
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

Route::get('/', function () {
    return view('lottery');
});

Route::get('get-rand-number', function () {
    $random = [];
    
    for($i=0; $i<3; $i++) {
        $random[] = rand(1,9);
    }
    
    return response()->json($random);
});

Route::post('save-number', function (Request $request) {
    
    $number = Number::where('number', '=', $request->number)->first();
    
    if ($number === NULL) {
        $new = new Number;
    
        $new->number = $request->number;
        
        $new->save();
        
        $result = ['last'=>false, 'number'=>$new];
    }
    else {
        $result = ['last'=>$number->updated_at, 'number'=>$number];
        $number->touch();

    }
    
    return response()->json($result);
});
