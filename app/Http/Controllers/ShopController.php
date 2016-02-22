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
		$products = CrudHelper::index(new \App\Product);

		return view('shop.shop')->with([
			'products' => $products
		]);
	}

	public function show($id)
	{
		$product = CrudHelper::show(new \App\Product, 'id', $id, ['categories', 'images'])->first()->toArray();

		$categories = $product['categories'];
		$images = $product['images'];

		foreach ($categories as $category) {
			$productCategories[] = $category['category'];
		}

		$productCategories = implode(', ', $productCategories);

		return view('shop.shopSingle')->with([
			'product' => $product,
			'productCategories' => $productCategories,
			'images' => $images
		]);
	}
}
