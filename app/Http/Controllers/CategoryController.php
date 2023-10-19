<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $categoriesData = [
            'điện thoại',
            'Laptop',
            'tablet',
            'Phụ kiện',
            'SmartWatch',
            'Đồng hồ',
            'Máy cũ giá rẻ',
            'Pc, máy in',
            'sim, thẻ cào',
            'Dịch vụ tiện ích',
            'Xem giá tồn kho',
            'tài khoản & đơn hàng',
            'giỏ hàng',
            '24h cong nghệ',
            'Hỏi đáp',
            'Game App',
        ];

        foreach ($categoriesData as $categoryName) {
            // Sử dụng firstOrCreate để thêm danh mục và kiểm tra trùng lặp
            Category::firstOrCreate(['name' => $categoryName]);
        }

        return "Các danh mục đã được thêm vào cơ sở dữ liệu.";
    }

    public function deleteCategory($id)
    {
        // Tìm bản ghi có id là $id
        $category = Category::find($id);

        if (!$category) {
            return "Không tìm thấy danh mục có id $id.";
        }

        // Xóa bản ghi
        $category->delete();

        return "Danh mục có id $id đã bị xóa.";
    }
    public function showCategory()
    {
        $selectedCategoryNames = ['điện thoại', 'Laptop', 'tablet', 'Phụ kiện', 'SmartWatch', 'Đồng hồ', 'Máy cũ giá rẻ', 'Pc, máy in', 'sim, thẻ cào', 'Dịch vụ tiện ích'];
        $selectedCategories = Category::whereIn('name', $selectedCategoryNames)->get();
        return view('includes.header', ['categories' => $selectedCategories]);
    }
    public function adminCategory()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
}
