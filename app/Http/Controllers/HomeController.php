<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('dashboard');
    }

    public function index2()
    {
        return view('products.HomePage.index');
    }
    // public function login()
    // {
    //     return view('products.Login.Login');
    // }

    // public function test()
    // {
    //     $selectedCategoryNames = ['điện thoại', 'Laptop', 'tablet', 'Phụ kiện', 'SmartWatch', 'Đồng hồ', 'Máy cũ giá rẻ', 'Pc, máy in', 'sim, thẻ cào', 'Dịch vụ tiện ích'];
    //     $selectedCategories = Category::whereIn('name', $selectedCategoryNames)->get();

    //     $products = Product::all();

    //     return view('products.HomePage.index', ['categories' => $selectedCategories, 'products' => $products]);
    // }
}
