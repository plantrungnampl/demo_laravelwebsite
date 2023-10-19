<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('q');
        // Thực hiện tìm kiếm sản phẩm dựa trên $keyword ở đây
        $results = Product::where('title', 'like', "%$keyword%")

            ->get();
        return view('products.SearchResult.search_results', compact('keyword', 'results'));
    }
}
