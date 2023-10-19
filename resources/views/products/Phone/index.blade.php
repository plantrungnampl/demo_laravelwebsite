<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/phone.css') }}">
    <title>Document</title>
    <style>
        .alert {
            display: none;
            position: fixed;
            bottom: 0px;
            right: 0px;

        }

        .fa {
            margin-right: .5em;
        }
    </style>
</head>

<body>

    @extends('layout')

    @section('title', 'Trang Sản Phẩm')
    {{-- @section('content') --}}
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>



    @include('includes.header')

    <div class="main">
        <div class="container" id="lap-gaming">
            <div class="row">
                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        {{-- dd($products); --}}
                        @foreach ($products as $product)
                            @php
                                $formattedProductPrice = number_format($product->price, 0, ',', '.');
                            @endphp
                            @if ($product->id === 77)
                                <div class="sale-item">
                                    <a href="#">
                                        <div class="sale-item-label">
                                            <span>Trả góp 0%</span>
                                        </div>
                                        <div class="sale-item-image">
                                            <img src="{{ $product->thumnail }}" alt="">

                                            {{-- <img src="{{ asset('images/iPhone 11.jpg)' . $product->thumbnail) }}" alt=""> --}}

                                        </div>
                                        <p class="sale-price-demo">
                                            <img class="sale-icon-image" width="20" height="20"
                                                src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                                            <span>Giá Rẻ Quá</span>
                                        </p>
                                        <h3>{{ $product->title }}</h3>

                                        <div class="sale-item-type">
                                            <span>6 GB</span>
                                            <span>8 GB</span>
                                        </div>
                                        <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                                            VNĐ</strong>

                                        <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                                    </a>
                                    <div class="sale-item-star">
                                        <p>
                                            <i class="sale-item-icon-star"></i>
                                            <i class="sale-item-icon-star"></i>
                                            <i class="sale-item-icon-star"></i>
                                            <i class="sale-item-icon-star"></i>
                                            <i class="sale-item-icon-star-half"></i>
                                        </p>
                                        <p class="item-rating-total">156</p>
                                    </div>

                                    <a href="javascript:void(0)" class="sale-item-compare">
                                        <i></i>
                                        So sánh
                                    </a>
                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ
                                            hàng</button>
                                    </form>
                            @endif
                        @endforeach
                    </div>
                    @foreach ($products as $product)
                        @php
                            $formattedProductPrice = number_format($product->price, 0, ',', '.');
                        @endphp
                        @if ($product->id === 78)
                            <div class="sale-item">
                                <a href="#">
                                    <div class="sale-item-label">
                                        <span>Trả góp 0%</span>
                                    </div>
                                    <div class="sale-item-image">
                                        <img src="{{ $product->thumnail }}" alt="">

                                    </div>
                                    <p class="sale-price-demo">
                                        <img class="sale-icon-image" width="20" height="20"
                                            src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                                        <span>Giá Rẻ Quá</span>
                                    </p>
                                    <h3>{{ $product->title }}</h3>

                                    <div class="sale-item-type">
                                        <span>6 GB</span>
                                        <span>8 GB</span>
                                    </div>
                                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                                        VNĐ</strong>

                                    <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                                </a>
                                <div class="sale-item-star">
                                    <p>
                                        <i class="sale-item-icon-star"></i>
                                        <i class="sale-item-icon-star"></i>
                                        <i class="sale-item-icon-star"></i>
                                        <i class="sale-item-icon-star"></i>
                                        <i class="sale-item-icon-star-half"></i>
                                    </p>
                                    <p class="item-rating-total">156</p>
                                </div>

                                <a href="javascript:void(0)" class="sale-item-compare">
                                    <i></i>
                                    So sánh
                                </a>
                                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                                    @csrf
                                    @method('GET')
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <!-- Bạn có thể thay đổi số lượng ở đây -->
                                    <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                                </form>
                        @endif
                    @endforeach
                </div>
                @foreach ($products as $product)
                    @php
                        $formattedProductPrice = number_format($product->price, 0, ',', '.');
                    @endphp
                    @if ($product->id === 79)
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">
                                    <span>Trả góp 0%</span>
                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ $product->thumnail }}" alt="">

                                </div>
                                <p class="sale-price-demo">
                                    <img class="sale-icon-image" width="20" height="20"
                                        src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                                    <span>Giá Rẻ Quá</span>
                                </p>
                                <h3>{{ $product->title }}</h3>

                                <div class="sale-item-type">
                                    <span>6 GB</span>
                                    <span>8 GB</span>
                                </div>
                                <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                                    VNĐ</strong>

                                <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star-half"></i>
                                </p>
                                <p class="item-rating-total">156</p>
                            </div>

                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                            <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                                @csrf
                                @method('GET')
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <!-- Bạn có thể thay đổi số lượng ở đây -->
                                <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                            </form>
                    @endif
                @endforeach
            </div>
            @foreach ($products as $product)
                @php
                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                @endphp
                @if ($product->id === 80)
                    <div class="sale-item">
                        <a href="#">
                            <div class="sale-item-label">
                                <span>Trả góp 0%</span>
                            </div>
                            <div class="sale-item-image">
                                <img src="{{ $product->thumnail }}" alt="">

                            </div>
                            <p class="sale-price-demo">
                                <img class="sale-icon-image" width="20" height="20"
                                    src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                                <span>Giá Rẻ Quá</span>
                            </p>
                            <h3>{{ $product->title }}</h3>

                            <div class="sale-item-type">
                                <span>6 GB</span>
                                <span>8 GB</span>
                            </div>
                            <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                                VNĐ</strong>

                            <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                        </a>
                        <div class="sale-item-star">
                            <p>
                                <i class="sale-item-icon-star"></i>
                                <i class="sale-item-icon-star"></i>
                                <i class="sale-item-icon-star"></i>
                                <i class="sale-item-icon-star"></i>
                                <i class="sale-item-icon-star-half"></i>
                            </p>
                            <p class="item-rating-total">156</p>
                        </div>

                        <a href="javascript:void(0)" class="sale-item-compare">
                            <i></i>
                            So sánh
                        </a>
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                            @csrf
                            @method('GET')
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <!-- Bạn có thể thay đổi số lượng ở đây -->
                            <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                        </form>
                @endif
            @endforeach
        </div>
        @foreach ($products as $product)
            @php
                $formattedProductPrice = number_format($product->price, 0, ',', '.');
            @endphp
            @if ($product->id === 81)
                <div class="sale-item">
                    <a href="#">
                        <div class="sale-item-label">
                            <span>Trả góp 0%</span>
                        </div>
                        <div class="sale-item-image">
                            <img src="{{ $product->thumnail }}" alt="">

                        </div>
                        <p class="sale-price-demo">
                            <img class="sale-icon-image" width="20" height="20"
                                src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                            <span>Giá Rẻ Quá</span>
                        </p>
                        <h3>{{ $product->title }}</h3>

                        <div class="sale-item-type">
                            <span>6 GB</span>
                            <span>8 GB</span>
                        </div>
                        <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                            VNĐ</strong>

                        <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                    </a>
                    <div class="sale-item-star">
                        <p>
                            <i class="sale-item-icon-star"></i>
                            <i class="sale-item-icon-star"></i>
                            <i class="sale-item-icon-star"></i>
                            <i class="sale-item-icon-star"></i>
                            <i class="sale-item-icon-star-half"></i>
                        </p>
                        <p class="item-rating-total">156</p>
                    </div>

                    <a href="javascript:void(0)" class="sale-item-compare">
                        <i></i>
                        So sánh
                    </a>
                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                        <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                    </form>
            @endif
        @endforeach
    </div>
    @foreach ($products as $product)
        @php
            $formattedProductPrice = number_format($product->price, 0, ',', '.');
        @endphp
        @if ($product->id === 82)
            <div class="sale-item">
                <a href="#">
                    <div class="sale-item-label">
                        <span>Trả góp 0%</span>
                    </div>
                    <div class="sale-item-image">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <p class="sale-price-demo">
                        <img class="sale-icon-image" width="20" height="20"
                            src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                        <span>Giá Rẻ Quá</span>
                    </p>
                    <h3>{{ $product->title }}</h3>

                    <div class="sale-item-type">
                        <span>6 GB</span>
                        <span>8 GB</span>
                    </div>
                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                        VNĐ</strong>

                    <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                </a>
                <div class="sale-item-star">
                    <p>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star-half"></i>
                    </p>
                    <p class="item-rating-total">156</p>
                </div>

                <a href="javascript:void(0)" class="sale-item-compare">
                    <i></i>
                    So sánh
                </a>
                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                    @csrf
                    @method('GET')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <!-- Bạn có thể thay đổi số lượng ở đây -->
                    <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                </form>
        @endif
    @endforeach
    </div>
    @foreach ($products as $product)
        @php
            $formattedProductPrice = number_format($product->price, 0, ',', '.');
        @endphp
        @if ($product->id === 83)
            <div class="sale-item">
                <a href="#">
                    <div class="sale-item-label">
                        <span>Trả góp 0%</span>
                    </div>
                    <div class="sale-item-image">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <p class="sale-price-demo">
                        <img class="sale-icon-image" width="20" height="20"
                            src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                        <span>Giá Rẻ Quá</span>
                    </p>
                    <h3>{{ $product->title }}</h3>

                    <div class="sale-item-type">
                        <span>6 GB</span>
                        <span>8 GB</span>
                    </div>
                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                        VNĐ</strong>

                    <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                </a>
                <div class="sale-item-star">
                    <p>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star-half"></i>
                    </p>
                    <p class="item-rating-total">156</p>
                </div>

                <a href="javascript:void(0)" class="sale-item-compare">
                    <i></i>
                    So sánh
                </a>
                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                    @csrf
                    @method('GET')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <!-- Bạn có thể thay đổi số lượng ở đây -->
                    <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                </form>
        @endif
    @endforeach
    </div>
    @foreach ($products as $product)
        @php
            $formattedProductPrice = number_format($product->price, 0, ',', '.');
        @endphp
        @if ($product->id === 84)
            <div class="sale-item">
                <a href="#">
                    <div class="sale-item-label">
                        <span>Trả góp 0%</span>
                    </div>
                    <div class="sale-item-image">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <p class="sale-price-demo">
                        <img class="sale-icon-image" width="20" height="20"
                            src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                        <span>Giá Rẻ Quá</span>
                    </p>
                    <h3>{{ $product->title }}</h3>

                    <div class="sale-item-type">
                        <span>6 GB</span>
                        <span>8 GB</span>
                    </div>
                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                        VNĐ</strong>

                    <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                </a>
                <div class="sale-item-star">
                    <p>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star-half"></i>
                    </p>
                    <p class="item-rating-total">156</p>
                </div>

                <a href="javascript:void(0)" class="sale-item-compare">
                    <i></i>
                    So sánh
                </a>
                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                    @csrf
                    @method('GET')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <!-- Bạn có thể thay đổi số lượng ở đây -->
                    <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                </form>
        @endif
    @endforeach
    </div>
    @foreach ($products as $product)
        @php
            $formattedProductPrice = number_format($product->price, 0, ',', '.');
        @endphp
        @if ($product->id === 85)
            <div class="sale-item">
                <a href="#">
                    <div class="sale-item-label">
                        <span>Trả góp 0%</span>
                    </div>
                    <div class="sale-item-image">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <p class="sale-price-demo">
                        <img class="sale-icon-image" width="20" height="20"
                            src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">
                        <span>Giá Rẻ Quá</span>
                    </p>
                    <h3>{{ $product->title }}</h3>

                    <div class="sale-item-type">
                        <span>6 GB</span>
                        <span>8 GB</span>
                    </div>
                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                        VNĐ</strong>

                    <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                </a>
                <div class="sale-item-star">
                    <p>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star-half"></i>
                    </p>
                    <p class="item-rating-total">156</p>
                </div>

                <a href="javascript:void(0)" class="sale-item-compare">
                    <i></i>
                    So sánh
                </a>
                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                    @csrf
                    @method('GET')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <!-- Bạn có thể thay đổi số lượng ở đây -->
                    <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                </form>
        @endif
    @endforeach
    </div>
    @foreach ($products as $product)
        @php
            $formattedProductPrice = number_format($product->price, 0, ',', '.');
        @endphp
        @if ($product->id === 86)
            <div class="sale-item">
                <a href="#">
                    <div class="sale-item-label">
                        <span>Trả góp 0%</span>
                    </div>
                    <div class="sale-item-image">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <p class="sale-price-demo">
                        <img class="sale-icon-image" width="20" height="20"
                            src="{{ asset('icons/icon-50x50-3.webp') }}" alt="">" alt="">
                        <span>Giá Rẻ Quá</span>
                    </p>
                    <h3>{{ $product->title }}</h3>

                    <div class="sale-item-type">
                        <span>6 GB</span>
                        <span>8 GB</span>
                    </div>
                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                        VNĐ</strong>

                    <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                </a>
                <div class="sale-item-star">
                    <p>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star"></i>
                        <i class="sale-item-icon-star-half"></i>
                    </p>
                    <p class="item-rating-total">156</p>
                </div>

                <a href="javascript:void(0)" class="sale-item-compare">
                    <i></i>
                    So sánh
                </a>
                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
                    @csrf
                    @method('GET')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <!-- Bạn có thể thay đổi số lượng ở đây -->
                    <button class="btn btn-success sendButton" type="submit">Thêm vào giỏ hàng</button>
                </form>
        @endif
    @endforeach
    </div>

</body>

</html>
