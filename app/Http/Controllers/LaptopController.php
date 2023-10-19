<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class LaptopController extends Controller
{
    public function index()
    {
        $selectedCategoryNames = ['điện thoại', 'Laptop', 'tablet', 'Phụ kiện', 'SmartWatch', 'Đồng hồ', 'Máy cũ giá rẻ', 'Pc, máy in', 'sim, thẻ cào', 'Dịch vụ tiện ích'];
        $selectedCategories = Category::whereIn('name', $selectedCategoryNames)->get();

        $products = Product::all();

        return view('products.laptop.index', ['categories' => $selectedCategories, 'products' => $products]);
    }

    public function HomePage()
    {
        $selectedCategoryNames = ['điện thoại', 'Laptop', 'tablet', 'Phụ kiện', 'SmartWatch', 'Đồng hồ', 'Máy cũ giá rẻ', 'Pc, máy in', 'sim, thẻ cào', 'Dịch vụ tiện ích'];
        $selectedCategories = Category::whereIn('name', $selectedCategoryNames)->get();

        $products = Product::all();
        return view('products.HomePage.index', ['products' => $products, 'categories' => $selectedCategories,]);
    }
    public function phone()
    {
        $selectedCategoryNames = ['điện thoại', 'Laptop', 'tablet', 'Phụ kiện', 'SmartWatch', 'Đồng hồ', 'Máy cũ giá rẻ', 'Pc, máy in', 'sim, thẻ cào', 'Dịch vụ tiện ích'];
        $selectedCategories = Category::whereIn('name', $selectedCategoryNames)->get();

        $products = Product::all();
        return view('products.Phone.index', ['products' => $products, 'categories' => $selectedCategories,]);
    }
}
