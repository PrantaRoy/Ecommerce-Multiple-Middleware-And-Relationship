<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $total_pending_products = Product::where('is_check',false)->count();
        $total_products = Product::count();
        $all_supplier = User::where('role_id',2)->count();

        return view('admin.dashboard',compact('total_pending_products','total_products','all_supplier'));


    }



}
