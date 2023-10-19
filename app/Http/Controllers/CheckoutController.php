<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\order_details;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function vnpay_payment()
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/show";
        $vnp_TmnCode = " 7HTQ4PU4 "; //Mã website tại VNPAY 
        $vnp_HashSecret = "GNBLHPABCJHTPCTANYUEPRKNXUHBARBK "; //Chuỗi bí mật

        $vnp_TxnRef =  '123'; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $_POST['Thanh toán đơn hàng test'];
        $vnp_OrderType = $_POST['billpayment'];
        $vnp_Amount = $_POST['amount'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = $_POST['bank_code'];
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing
        $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
        $vnp_Bill_Email = $_POST['txt_billing_email'];
        $fullName = trim($_POST['txt_billing_fullname']);
        if (isset($fullName) && trim($fullName) != '') {
            $name = explode(' ', $fullName);
            $vnp_Bill_FirstName = array_shift($name);
            $vnp_Bill_LastName = array_pop($name);
        }
        $vnp_Bill_Address = $_POST['txt_inv_addr1'];
        $vnp_Bill_City = $_POST['txt_bill_city'];
        $vnp_Bill_Country = $_POST['txt_bill_country'];
        $vnp_Bill_State = $_POST['txt_bill_state'];
        // Invoice
        $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
        $vnp_Inv_Email = $_POST['txt_inv_email'];
        $vnp_Inv_Customer = $_POST['txt_inv_customer'];
        $vnp_Inv_Address = $_POST['txt_inv_addr1'];
        $vnp_Inv_Company = $_POST['txt_inv_company'];
        $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
        $vnp_Inv_Type = $_POST['cbo_inv_type'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate,
            "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
            "vnp_Bill_Email" => $vnp_Bill_Email,
            "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
            "vnp_Bill_LastName" => $vnp_Bill_LastName,
            "vnp_Bill_Address" => $vnp_Bill_Address,
            "vnp_Bill_City" => $vnp_Bill_City,
            "vnp_Bill_Country" => $vnp_Bill_Country,
            "vnp_Inv_Phone" => $vnp_Inv_Phone,
            "vnp_Inv_Email" => $vnp_Inv_Email,
            "vnp_Inv_Customer" => $vnp_Inv_Customer,
            "vnp_Inv_Address" => $vnp_Inv_Address,
            "vnp_Inv_Company" => $vnp_Inv_Company,
            "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
            "vnp_Inv_Type" => $vnp_Inv_Type
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }
    public function index()
    {
        $product = Product::all();

        return view('products.CheckOut.index', compact('product'));
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        // Tạo đơn hàng mới
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->fullname = $request->input('fullname');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone_number');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        $order->title = $request->title;
        $order->total_money = 0;
        $order->order_date = now();
        // Lưu đơn hàng vào cơ sở dữ liệu
        $cartProducts = [];
        $totalTitle = "";
        $totalNum = 0;
        foreach ($cart as $productId => $item) {
            $product = Product::find($productId);
            if ($product && isset($item['quantity']) && $item['quantity'] > 0) {
                // Cập nhật thông tin sản phẩm
                $totalTitle .= $product->title . ", ";
                $totalNum += $item['quantity'];
            }
        }
        $order->title = $totalTitle;
        $order->num = $totalNum;
        $order->save();

        // Tính tổng tiền cho đơn hàng và lưu vào bảng `order_details`
        foreach ($cart as $productId => $item) {
            $product = Product::find($productId);
            if ($product && isset($item['quantity']) && $item['quantity'] > 0) {
                $existingOrderDetail = order_details::where('order_id', $order->id)
                    ->where('product_id', $product->id)
                    ->first();
                if ($existingOrderDetail) {
                    // Sản phẩm đã tồn tại trong đơn hàng, cập nhật số lượng (num)
                    $existingOrderDetail->num += $item['quantity'];
                    $existingOrderDetail->total_money += $item['quantity'] * $product->price;
                    $existingOrderDetail->save();

                    $cartProducts[] = [
                        'title' => $product->title,
                        'quantity' => $item['quantity'],
                    ];
                } else {
                    // Sản phẩm chưa có trong đơn hàng, tạo bản ghi mới
                    $orderDetail = new order_details();
                    $orderDetail->order_id = $order->id;
                    $orderDetail->product_id = $product->id;
                    $orderDetail->price = $product->price;
                    $orderDetail->num = $item['quantity'];
                    $orderDetail->total_money = $item['quantity'] * $product->price;
                    $orderDetail->title = $product->title;
                    $orderDetail->save();
                    $cartProducts[] = [
                        'title' => $product->title,
                        'quantity' => $item['quantity'],
                    ];
                }
            }
        }
        // Cập nhật tổng tiền cho đơn hàng

        $order->total_money = $order->orderDetails->sum('total_money');
        $order->save();

        // Xóa giỏ hàng sau khi đã đặt hàng thành công
        session()->forget('cart');

        return redirect()->route('checkout.show')->with('success', 'Đã đặt hàng thành công');
    }

    public function showAdmin()
    {
        $products = Order::all();
        $orderDetails = order_details::all();
        return view('admin.checkout.index', compact('products', 'orderDetails'));
    }


    // Xóa từng sản phẩm trong giỏ hàng

    public function clear()
    {
        $order = Order::all();
        foreach ($order as $item) {
            $item->delete();
        }

        return redirect()->route('admin.checkout.index')->with('success', 'Tất cả sản phẩm trong giỏ hàng đã xóa.');
    }
    public function editOrder($id)
    {
        $checkout = Order::find($id);
        $products = Product::all();
        return view('admin.checkout.index', compact('checkout', 'products'));
    }
}
