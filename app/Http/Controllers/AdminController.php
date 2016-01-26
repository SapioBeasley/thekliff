<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;

use App\Order;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function dashboard()
    {
        $orders = CrudHelper::index(new \App\Order);

        return view('admin.dashboard')->with([
            'orders' => $orders
        ]);
    }

    /**
     * Show the application orders.
     *
     * @return Response
     */
    public function showOrders()
    {
        $orders = CrudHelper::index(new \App\Order);

        return view('admin.orders.orders')->with([
            'orders' => $orders
        ]);
    }

    /**
     * Show the application products.
     *
     * @return Response
     */
    public function showProducts()
    {
        $products = CrudHelper::index(new \App\Product);

        return view('admin.products.products')->with([
            'products' => $products
        ]);
    }

    public function editProducts($id)
    {
        $product = CrudHelper::show(new \App\Product, 'id', $id);

        return view('admin.products.edit')->with([
            'product' => $product
        ]);
    }

    public function createProducts(Request $request)
    {
        dd($request);
    }

    public function updateProducts(Request $request, $id)
    {
        dd($request);
    }
}
