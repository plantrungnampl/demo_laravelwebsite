<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Button.css') }}">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    @extends('layout')

    @section('title', 'Trang Sản Phẩm')

    @section('content')

        @include('includes.header')

        <div class="search-results">
            <h1>Kết quả tìm kiếm cho "{{ $keyword }}"</h1>
            <ul class="product-list">
                @foreach ($results as $product)
                    <li class="product-item">
                        <h2>{{ $product->title }}</h2>
                        <img src="{{ asset($product->thumnail) }}" alt="{{ $product->title }}" width="200">
                        <p class="product-price">Giá: {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
                        <p class="product-discount">Giảm giá: {{ $product->discount }}%</p>
                        <p class="product-description">{{ $product->description }}</p>
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                            @csrf
                            @method('GET')
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <!-- Bạn có thể thay đổi số lượng ở đây -->
                            <button class="button-37" type="submit">Thêm vào giỏ hàng</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>

    </body>

    </html>
