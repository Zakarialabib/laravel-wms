<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Deliveries;
use App\Models\Stocks;
use App\Models\Products;
use App\Models\Customers;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sales_data = Sales::with("sales")->count();
        $deliveries_data = Deliveries::with("deliveries")->count();
        $stock_data = Stocks::with("stock")->count();
        $products_data = Products::with("products")->count();
        $customers_data = Customers::with("customers")->count();


        return view("dashboard", compact("sales_data", "deliveries_data", "stock_data", "products_data", "customers_data"));
    }
}
