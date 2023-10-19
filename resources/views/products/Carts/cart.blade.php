<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Cart</title>
</head>

<body>
    {{-- @extends('layout') --}}

    {{-- @section('content') --}}
    @php
        $cart = session()->get('cart', []);
    @endphp


    @section('content')
        <div class="container">
            <h1>Giỏ Hàng Của Bạn</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            {{-- @dd($cart) --}}
            @if ($cart !== null && count($cart) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID sản phẩm</th>
                            <th>Sản Phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Tổng Tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $stt = 1; @endphp
                        @foreach ($cart as $productId => $item)
                            <tr>

                                <td>{{ $stt }}</td>
                                <td>{{ $productId }}</td>
                                <td>{{ isset($item['title']) ? $item['title'] : '' }}</td>
                                <td>
                                    @if (isset($item['thumbnail']))
                                        <img src="{{ $item['thumbnail'] }}" alt="{{ $item['title'] }}"
                                            style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>{{ isset($item['price']) ? number_format($item['price']) . ' VNĐ' : '' }}</td>
                                <td>{{ isset($item['quantity']) ? $item['quantity'] : '' }}</td>

                                <td>{{ isset($item['quantity']) ? number_format($item['quantity'] * $item['price']) . ' VNĐ' : '' }}
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove', ['productId' => $productId]) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('bạn muốn xóa mặt hàng này khỏi giỏ hàng của bạn?')">Remove</button>
                                    </form>

                                </td>
                            </tr>
                            @php $stt++; @endphp
                        @endforeach
                    </tbody>
                </table>
                <a href= "{{ route('checkout.show') }}" class="btn btn-primary">Tiến Hành Đặt Hàng</a>
            @else
                <p>Giỏ hàng của bạn trống. Hãy thêm sản phẩm vào giỏ hàng.</p>
            @endif
        </div>

        {{-- @endsection --}}

    </body>

    </html>
