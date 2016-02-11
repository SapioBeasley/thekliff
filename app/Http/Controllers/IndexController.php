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
		$products = CrudHelper::index(new \App\Product, ['images'])->take(8)->orderBy('id', 'DESC')->get();

		return view('pages.index')->with([
			'products' => $products
		]);
	}
}
