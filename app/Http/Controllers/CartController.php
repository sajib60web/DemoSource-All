<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
class CartController extends Controller
{
    public function form()
    {
    	return view('cart.form');
    }

    public function add(Request $request)
    {
    	$data = Cart::add([
    		'id' => $request->id,
	        'name' => $request->name,
	        'price' => $request->price,
	        'quantity' => $request->quantity
    	]);


    	if ($data) {
    		echo "Done";
    	}
    	return redirect('cart.cart');
    }

    public function cart()
    {
    	return view('cart.cart');
    }

    public function cartUpdate(Request $request)
    {	
    	$id = $request->id;
    	$quantity = $request->quantity;
		Cart::update($id, array(
		  	'id' => $id,
		  	'quantity' => -$quantity
		));
        return redirect('cart.cart');
    }
    
}
