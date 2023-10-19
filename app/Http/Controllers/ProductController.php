<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;

class ProductController extends Controller
{
    public function Addproduct()
    {

        $products = [

            [
                'category_id' => 1,
                'title' => 'Iphone 11',
                'price' => 11390000,
                'discount' => 0,
                'thumnail' => 'images/iPhone 11.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],

            [
                'category_id' => 1,
                'title' => 'Iphone 14 plus',
                'price' => 15390000,
                'discount' => 0,
                'thumnail' => 'images/iPhone 14 Plus.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],
            [
                'category_id' => 1,
                'title' => 'OPPO Find N2 Flip 5G',
                'price' => 18390000,
                'discount' => 0,
                'thumnail' => 'images/OPPO Find N2 Flip 5G.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],
            [
                'category_id' => 1,
                'title' => 'OPPO Renno 8 T 5G',
                'price' => 16390000,
                'discount' => 0,
                'thumnail' => 'images/OPPO Reno8 T 5G.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],

            [
                'category_id' => 1,
                'title' => 'Realme C30s',
                'price' => 7390000,
                'discount' => 0,
                'thumnail' => 'images/realme C30s.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],

            [
                'category_id' => 1,
                'title' => 'Realme C55',
                'price' => 9390000,
                'discount' => 0,
                'thumnail' => 'images/realme C55.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],


            [
                'category_id' => 1,
                'title' => 'vivo V27e',
                'price' => 13390000,
                'discount' => 0,
                'thumnail' => 'images/Vivo V27e.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],

            [
                'category_id' => 1,
                'title' => 'Samsung Galaxy A14 4G',
                'price' => 14390000,
                'discount' => 0,
                'thumnail' => 'images/Samsung Galaxy A14 4G.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],

            [
                'category_id' => 1,
                'title' => 'Samsung Galaxy S23 Ultra 5G',
                'price' => 14390000,
                'discount' => 0,
                'thumnail' => 'images/Samsung Galaxy S23 Ultra 5G.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],


            [
                'category_id' => 1,
                'title' => 'Samsung Galaxy S23+ 5G',
                'price' => 25390000,
                'discount' => 0,
                'thumnail' => 'images/Samsung Galaxy S23+ 5G.jpg',
                'description' => 'Màn hình: Super AMOLED6.5"Full HD+   
                Hệ điều hành: Android 13 
                Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP
                Camera trước: 13 MP 
                Chip: MediaTek Helio G99
                RAM:8 GB
                Dung lượng lưu trữ:128 GB
                SIM:2 Nano SIMHỗ trợ 4G
                Pin, Sạc:5000 mAh25 W'
            ],

        ];


        foreach ($products as $productData) {
            Product::firstOrCreate([
                'category_id' => $productData['category_id'],
                'title' => $productData['title'],
                'price' => $productData['price'],
                'discount' => $productData['discount'],
                'thumnail' => $productData['thumnail'],
                'description' => $productData['description'],

            ], $productData);
        }

        return "Các sản phẩm đã được thêm vào cơ sở dữ liệu.";
    }
    public function deleteProduct($id)
    {
        // Tìm sản paharm có id là $id
        $product = Product::find($id);

        if (!$product) {
            return "Không tìm thấy danh mục có id $id.";
        }

        // Xóa bản ghi
        $product->delete();

        return "Danh mục có id $id đã bị xóa.";
    }




    public function index()
    {
        $products = [];
        $formattedProductPrices = [];

        for ($i = 1; $i <= 76; $i++) {
            $product = Product::find($i);

            if ($product) {
                $products[] = $product;
                $formattedProductPrices[$i] = number_format($product->price, 0, ',', '.');
            }
        }

        return view('products.Laptop.index', [
            'products' => $products,
            'formattedProductPrices' => $formattedProductPrices,
        ])
            ->with('homepageView', view('products.HomePage.index', [
                'products' => $products,
                'formattedProductPrices' => $formattedProductPrices,


            ]))
            ->with('PhoneView', view('products.Phone.index', [
                'product' => $product,
                'formattedProductPrices' => $formattedProductPrices,


            ]));
    }


    public function search(Request $request)
    {
        $search = $request->input('search');

        // Query products based on the search term
        $products = Product::where('title', 'like', '%' . $search . '%')
            // ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            // ->orderBy('id', 'DESC')
            ->get();


        return response()->json(['products' => $products]);
    }
    public function liveSearch(Request $request)
    {
        $search = $request->input('search');

        // Query products based on the search term
        $products = Product::where('title', 'like', '%' . $search . '%')
            // ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orderBy('id', 'DESC')
            // ->get(); // Note: Using get() instead of paginate() for live search
            ->get();
        return response()->json([
            'products' => $products,

        ]);
    }


    public function adminProduct()
    {

        $products = product::all();
        return view('admin.product.index', compact('products'));
    }


    public function editProduct($id)
    {
        $product = Product::find($id);

        return view('admin.product.editproduct', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('admin.product.index', $product);
    }

    public function destroy($id)
    {
        // Xóa người dùng
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('admin.product.index')->with('success', 'sản phẩm được xóa thành công');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'discount' => 'numeric',
            'thumnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra ảnh
            'description' => 'nullable',
        ]);

        // Xử lý tải lên ảnh sản phẩm (nếu có)
        if ($request->hasFile('thumnail')) {
            $imagePath = $request->file('thumnail')->store('product_images', 'public');
            $validatedData['thumnail'] = $imagePath;
        }

        // Lưu sản phẩm vào cơ sở dữ liệu
        Product::create($validatedData);

        // Chuyển hướng sau khi thêm sản phẩm thành công
        return redirect()->route('admin.product.index')->with('success', 'Sản phẩm đã được thêm thành công.');
    }
    public function formAddProduct()
    {
        $categories = Category::all();
        return view("admin.product.addproduct", compact('categories'));
    }
}
