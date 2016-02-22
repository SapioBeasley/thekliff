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
        $orders = $this->getOrders();

        $products = $this->getProducts();

        $totalRevenue = $this->calculateRevenue($orders);

        $productCount = count($products);

        return view('admin.dashboard')->with([
            'orders' => $orders,
            'productCount' => $productCount,
            'totalRevenue' => $totalRevenue
        ]);
    }

    /**
    * Show the application orders.
    *
    * @return Response
    */
    public function showOrders()
    {
        $orders = $this->getOrders();

        return view('admin.orders.orders')->with([
            'orders' => $orders
        ]);
    }

    public function getOrders()
    {
        $orders = CrudHelper::index(new \App\Order, ['products']);

        return $orders->orderBy('created_at', 'DESC')->get();
    }

    public function getProducts()
    {
        $products = CrudHelper::index(new \App\Product);

        return $products->get();
    }

    public function calculateRevenue($orders)
    {
        foreach ($orders as $order) {
            $amounts[] = $order['amount'];
        }

        return array_sum($amounts);
    }

    /**
    * Show the application products.
    *
    * @return Response
    */
    public function showProducts()
    {
        $products = CrudHelper::index(new \App\Product, ['images'])->get();

        foreach ($products as $productKey => $productValue) {
            if (! isset($products[$productKey]['images'][0])) {
                unset($products[$productKey]);
            }
        }

        return view('admin.products.products')->with([
            'products' => $products
        ]);
    }

    public function createProducts(Request $request)
    {
        $categories =$this->categoriesSelect();

        return view('admin.products.create')->with([
            'categories' => $categories
        ]);
    }

    public function categoriesSelect()
    {
        $categories = CrudHelper::index(new \App\Category)->get()->toArray();

        foreach ($categories as $category) {
            $categoriesSelect[$category['id']] = $category['category'];
        }

        $categoriesSelect[0] = 'Select Category';

        return $categoriesSelect;
    }

    public function editProducts($id)
    {
        $categories =$this->categoriesSelect();

        $product = CrudHelper::show(new \App\Product, 'id', $id)->first();

        return view('admin.products.edit')->with([
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function showSingleOrder($orderNumber)
    {
        $order = CrudHelper::show(new \App\Order, 'order_number', $orderNumber, ['products'])->first();
        dd($order);
    }

    public function updateProducts(Request $request, $id)
    {
        dd($request);
    }

    public function storeProducts(Request $request, $id)
    {
        dd($request);
    }
}
