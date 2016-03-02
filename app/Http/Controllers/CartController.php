<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
	public function index(Request $request)
	{
		$products = $request->session()->get('orderDetails')['products'];
		$orderAmount = $request->session()->get('orderDetails')['orderAmount'];

		return view('shop.shoppingCart')->with([
			'products' => $products,
			'orderAmount' => $orderAmount
		]);
	}

	public function cancelOrder(Request $request)
	{
		$request->session()->flush();

		return redirect()->route('cart.index')->with('success_message', 'Order has been canceled');
	}
}
