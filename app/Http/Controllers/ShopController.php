<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class ShopController extends Controller
{
	public function index()
	{
		$products = CrudHelper::index(new \App\Product)->paginate(12);

		return view('shop.shop')->with([
			'products' => $products
		]);
	}

	public function show($id)
	{
		$product = CrudHelper::show(new \App\Product, 'id', $id, ['categories', 'images'])->first()->toArray();

		$categories = $product['categories'];
		$images = $product['images'];

		foreach ($images as $isMain) {
			if ($isMain['is_main'] === 1) {
				$mainImage[] = $isMain;
			}
		}

		$mainImage = $mainImage[0];

		foreach ($categories as $category) {
			$productCategories[] = $category['category'];
		}

		$productCategories = implode(', ', $productCategories);

		return view('shop.shopSingle')->with([
			'product' => $product,
			'productCategories' => $productCategories,
			'images' => $images,
			'mainImage' => $mainImage
		]);
	}

	public function addToCart(Request $request)
	{
		$products = [(integer) $request->product];

		if ($request->session()->get('orderDetails')['products'] !== null) {
			$currentProducts = $request->session()->get('orderDetails')['products'];

			foreach ($currentProducts as $productKey => $productValue) {
				$products[] = $productValue['id'];
			}
		}

		$orderDetails = $this->buildOrder($products);

		$request->session()->put('orderDetails', $orderDetails);

		return redirect()->back()->with('success_message', 'Item has been added to your cart');
	}

	public function buildOrder($products)
	{
		$orderAmount = 0;

		foreach ($products as $productKey => $productValue) {
			$getProduct[] = \CrudHelper::show(new \App\Product, 'id', $productValue, ['images'])->first()->toArray();

			unset($getProduct[$productKey]['created_at']);
			unset($getProduct[$productKey]['updated_at']);
			unset($getProduct[$productKey]['description']);

			$orderAmount = $orderAmount + $getProduct[$productKey]['price'];
		}

		$orderDetails = [
			'products' => $getProduct,
			'orderAmount' => $orderAmount
		];

		return $orderDetails;
	}
}
