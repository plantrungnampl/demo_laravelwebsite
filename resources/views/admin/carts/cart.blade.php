<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>

<body>
    @extends('layout')

    @section('content')



    @section('content')
        <div class="container">
            <h1>Giỏ Hàng Của Bạn</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            @if ($cart !== null && count($cart) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th> Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Tổng Tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $stt = 1; @endphp

                        @foreach ($cart as $item)
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ number_format($item->price) . ' VNĐ' }}</td>
                                <td>{{ $item->num }}</td>
                                <td>
                                    {{ number_format($item->num * $item->price) . ' VNĐ' }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.carts.delete', $item->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('u r really delete this user ?')">Delete</button>
                                    </form>

                                </td>
                                <a href="{{ route('admin.cart.clear') }}" class="btn btn-danger">Xóa tất cả sản phẩm</a>

                            </tr>
                            @php $stt++; @endphp
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Giỏ hàng của bạn trống. Hãy thêm sản phẩm vào giỏ hàng.</p>
            @endif
        </div>

    @endsection

</body>

</html>
