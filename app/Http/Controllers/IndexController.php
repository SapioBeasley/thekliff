<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class IndexController extends Controller
{
	public function showHome()
	{
		$products = CrudHelper::index(new \App\Product)->take(8);

		return view('pages.index')->with([
			'products' => $products
		]);
	}
}
