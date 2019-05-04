<?php

namespace App\Http\Controllers\Supplier;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $total_pending_products = Product::where('is_check',true)->count();
        $total_products = Product::count();

        return view('supplier.dashboard',compact('total_products','total_pending_products'));


    }
}
