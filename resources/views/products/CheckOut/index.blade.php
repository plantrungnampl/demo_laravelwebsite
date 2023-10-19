<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Document</title>
    <style>
        #payment-options {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #payment-options button {
            margin: 5px;
        }
    </style>
</head>
@php
    $cartProducts = session()->get('cart', []);

@endphp

<body>
    {{-- @extends('layout')

    @section('content') --}}
    <div class="container">
        <h1>Checkout</h1>
        <div style="color: green" class="success">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        {{-- <form action="/checkout" method="POST"> --}}
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            @method('POST')
            <ul>
                @foreach ($cartProducts as $product)
                    <li>

                        Tên sản phẩm: {{ $product['title'] }}
                        <br>
                        Số lượng: {{ $product['quantity'] }}
                    </li>
                @endforeach

            </ul>

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>

            <div class="form-group">
                <label for="note">Note</label>
                <textarea name="note" id="note" class="form-control"></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="showPaymentOptions()">Hình thức thanh toán</button>
            <div id="payment-options" style="display: none;">
                <button type="button" class="btn btn-danger" onclick="selectPaymentMethod('Momo')">Thanh toán
                    Momo</button>
                <button type="button" class="btn btn-success" onclick="selectPaymentMethod('VnPay')">Thanh toán
                    VnPay</button>
                <!-- Thêm các nút và phương thức thanh toán khác tại đây -->
            </div>

            <input type="hidden" name="selected_payment_method" id="selected_payment_method" value="">
            <!-- Thêm input ẩn để lưu phương thức thanh toán được chọn -->

            <button type="submit" class="btn btn-primary">Thanh toán</button>



            {{-- 
            <button type="submit" class="btn btn-primary">Hình thức thanh toán </button>
            <button type="submit" class="btn btn-danger">Thanh toán momo</button>
            <button type="submit" class="btn btn-success">Thanh toán VnPay</button> --}}
            {{-- <button type="button" class="btn btn-primary" onclick="showPaymentOptions()">Các phương thức thanh
                    toán</button>
                <div id="payment-options" style="display: none;">
                    <a class="btn btn-danger" href="">Thanh toán Momo</a>
                    <a class="btn btn-success" href="{{ url('vnpay_payment') }}">
                        Thanh toán VnPay
                    </a>
                </div> --}}





        </form>
    </div>
</body>

</html>

<script>
    // function showPaymentOptions() {
    //     var paymentOptions = document.getElementById("payment-options");
    //     paymentOptions.style.display = "block";
    // }

    function showPaymentOptions() {
        var paymentOptions = document.getElementById("payment-options");
        paymentOptions.style.display = "block";
    }

    function selectPaymentMethod(method) {
        // Đặt giá trị của input ẩn thành phương thức thanh toán được chọn
        var selectedMethodInput = document.getElementById("selected_payment_method");
        selectedMethodInput.value = method;
        // Hiển thị thông báo hoặc thực hiện các tác vụ khác nếu cần
        alert("Bạn đã chọn thanh toán bằng " + method);
    }
</script>
