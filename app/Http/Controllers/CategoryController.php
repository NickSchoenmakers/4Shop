<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order_rule;
use Illuminate\Http\Request;

class CategoryControllerController extends Controller
{
    public function index()
    {
        $type = Type::where('active', true)->get();
        return view('products.index')
                ->with(compact('products'));
    }

}
