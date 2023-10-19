<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\order_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function showCart(Request $request)
    {


        $cart = session()->get('cart', []);
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += isset($item['total_money']) ? $item['total_money'] : 0;
        }
        $products = Product::whereIn('id', array_keys($cart))->get();
        // $cart = session()->get('OrderDetail', []);
        return view('products.Carts.cart', compact('cart'));
    }

    // public function store(Request $request, Product $product, $productId)
    // {
    //     $product = Product::find($productId);
    //     if (!$product) {
    //         abort(404); // Sản phẩm không tồn tại
    //     }
    //     // Lấy giỏ hàng từ Session hoặc tạo giỏ hàng mới
    //     $cart = session()->get('cart', []);
    //     // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    //     if (array_key_exists($productId, $cart)) {
    //         // Nếu có, tăng số lượng lên 1
    //         $cart[$productId]['quantity']++;
    //     } else {
    //         // Nếu không, thêm sản phẩm vào giỏ hàng
    //         $cart[$productId] = [
    //             'product_id' => $product->product_id,
    //             'title' => $product->title,
    //             'thumbnail' => asset($product->thumnail),
    //             'price' => $product->price,
    //             'quantity' => 1,
    //         ];
    //     }
    //     // Lưu giỏ hàng vào Session
    //     session()->put('cart', $cart);
    //     // Chuyển hướng về trang hiện tại với thông báo thành công
    //     return back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
    // }

    public function store(Request $request, Product $product, $productId)
    {

        $product = Product::find($productId);


        if (!$product) {
            abort(404); // Sản phẩm không tồn tại
        }
        // Lấy giỏ hàng từ Session hoặc tạo giỏ hàng mới
        $cart = session()->get('cart', []);

        if (array_key_exists($productId, $cart)) {
            // Kiểm tra xem key 'quantity' đã tồn tại trong mảng $cart chưa
            if (array_key_exists('quantity', $cart[$productId])) {
                // Nếu key 'quantity' đã tồn tại, thì tăng giá trị của nó
                $cart[$productId]['quantity'] += intval($request->input('quantity', 1));
            } else {
                // Nếu key 'quantity' chưa tồn tại, thì tạo nó và gán giá trị mặc định
                $cart[$productId]['quantity'] = intval($request->input('quantity', 1));
            }
        } else {
            // Sản phẩm chưa có trong giỏ hàng, thêm sản phẩm vào giỏ hàng
            $quantity = intval($request->input('quantity', 1));

            $cart[$productId] = [
                'product_id' => $product->id,
                'title' => $product->title,
                'thumbnail' => asset($product->thumnail),
                'price' => $product->price,
                'quantity' => $quantity, // Sửa 'num' thành 'quantity'
            ];
            // dd($product);
        }

        // Lưu giỏ hàng vào Session
        session()->put('cart', $cart);

        // Chuyển hướng về trang hiện tại với thông báo thành công
        return back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
    }







    public function remove($productId)
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Check if the product to be removed exists in the cart
        if (array_key_exists($productId, $cart)) {
            // Remove the product from the cart
            unset($cart[$productId]);

            // Update the cart in the session
            session()->put('cart', $cart);

            // Update the cart count
            // session()->put('cartCount', count($cart));
            // Redirect back with a success message
            return back()->with('success', 'Product removed from the cart.');
        }

        // If the product doesn't exist in the cart, you can handle this scenario as needed, e.g., show an error message.

        // Redirect back to the cart page
        return back();
    }


    public function index()
    {


        return view('products.Carts.cart');
    }

    public function showAdmin()
    {
        $cart = order_details::all();
        return view('admin.carts.cart', compact('cart'));
    }
    public function delete($id)
    {
        $product = order_details::find($id);
        $product->delete();
        return redirect()->route('admin.carts.cart')->with('success', 'sản phẩm được xóa thành công');
    }
    public function clearCart()
    {
        // Lấy danh sách các sản phẩm trong giỏ hàng (thay thế "cart" bằng tên giỏ hàng của bạn)
        $cartItems = order_details::all();

        foreach ($cartItems as $item) {
            $item->delete(); // Xóa từng sản phẩm trong giỏ hàng
        }

        return redirect()->route('admin.carts.cart')->with('success', 'Tất cả sản phẩm trong giỏ hàng đã được xóa.');
    }
}
