<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class CategoryController extends Controller
{
	public function index()
	{

	}

	public function show(Request $request, $category)
	{
		$products = CrudHelper::relationshipQuery(new \App\Product, ['categories'], 'category', $category)->with('images');
		$products = $products->get()->toArray();

		return view('shop.shop')->with([
			'products' => $products,
			'category' => $category
		]);
	}

	public function getCategoryIds($categories)
	{
		foreach ($categories as $categoryKey => $categoryValue) {
			if (is_null($categoryValue)) {
				unset($categories[$categoryKey]);
			}
		}

		foreach ($categories as $key => $value) {
			$category = CrudHelper::show(new \App\Category, 'category', $value)->first();

			$categoryIds[] = $category->id;
		}

		return $categoryIds;
	}
}
