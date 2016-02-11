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
		$products = CrudHelper::relationshipQuery(new \App\Product, ['categories'], 'category', $category);

		if (isset($request->query()['subcategory'])) {
			// dd($request->query()['subcategory']);
		}

		$products = $products->get();

		return view('shop.shop')->with([
			'products' => $products,
			'category' => $category
		]);
	}
}
