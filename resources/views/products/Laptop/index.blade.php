<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/laptop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/phone.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/Button.css') }}"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

    <script src="{{ asset('js/cart.js') }}"></script>

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


    @if (!empty($query))
        <h1>Kết quả tìm kiếm cho: "{{ $query }}"</h1>
    @endif
    <!-- List icon -->
    <!-- Sale product -->
    <div class="sale">
        <div class="container">
            <div class="sale-product">
                <div class="sale-product-title">
                    <h2 class="sale-item-title">
                        <a href="#" src="">
                            <img src="https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/bg_tet_desk.png"
                                alt="">
                            <span style="color: #ff0020;">Deal sốc</span>
                            <span style="color: #fff;">GIẢM TỚI 14.000.000₫</span>
                        </a>
                    </h2>
                    <!-- List sale product -->
                    <div class="list-product-sale" style="display: flex; padding: 10px; padding-right: 1px;">
                        <div class="sale-item" style="margin-right: 8px; width: 229.6px;">




                            @if ($products->isEmpty())
                                <p>Không tìm thấy kết quả.</p>
                            @else
                                <ul>
                                    @foreach ($products as $product)
                                        @php
                                            $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                        @endphp
                                        @if ($product->id === 3)
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
                                                <span>RAM 8 GB</span>
                                                <span>SSD 256 GB</span>
                                            </div>
                                            <strong class="sale-item-price">Giá:
                                                <span>{{ $formattedProductPrice }}</span> VNĐ</strong>

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

                                            <div class="sale-item-description">
                                                {{ $product->description }}
                                            </div>

                                            <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                                method="GET">
                                                @csrf
                                                @method('GET')
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <!-- Bạn có thể thay đổi số lượng ở đây -->
                                                <button type="submit">Thêm vào giỏ hàng</button>
                                            </form>
                                        @endif
                                    @endforeach
                                </ul>
                        </div>
                        <div class="sale-item" style="margin-right: 8px; width: 229.6px;">

                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 4)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                                        VNĐ</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>
                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach

                        </div>
                        <div class="sale-item" style="margin-right: 8px; width: 229.6px;">
                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 65)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    {{-- <strong class="sale-item-price">{{ $product->price }}</strong> --}}
                                    <strong class="sale-item-price">Giá: <span>{{ $formattedProductPrice }}</span>
                                        VNĐ</strong>

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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item" style="margin-right: 8px; width: 229.6px;">
                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 4)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">Giá:
                                        <span>{{ $formattedProductPrice }}</span> VNĐ</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach

                        </div>
                        <div class="sale-item" style="margin-right: 8px; width: 229.6px;">
                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 5)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">Giá:
                                        <span>{{ $formattedProductPrice }}</span> VNĐ</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <a href="#" class="see-more">
                        <span>Xem tất cả Deal sốc</span>
                    </a>
                    <!-- End List sale product -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale product -->
    <!-- Main -->

    <div class="main">
        <div class="container" id="lap-gaming">
            <div class="row">
                <div class="container-banner" style="background-color: #4B363C;display: block;">
                    <img src="{{ asset('images/banner-gaming-desk-1200x200.png') }}" alt="">
                </div>
                <ul class="container-option">
                    <li><a class="active" href="javascript:;">Nổi bật</a> </li>
                    <li><a href="javascript:;">15 - 20 triệu</a></li>
                    <li><a href="javascript:;">Asus</a></li>
                    <li><a href="javascript:;">Acer</a></li>
                    <li><a href="javascript:;">MSI</a></li>
                    <li><a href="javascript:;">Lenovo</a></li>
                    <li><a href="javascript:;">Card RTX 30 series</a></li>
                </ul>
                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">
                            @foreach ($products as $product)
                                {{-- @php
                                        $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                    @endphp --}}
                                @if ($product->id === 6)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 7)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 8)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @php
                                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                                @endphp
                                @if ($product->id === 9)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 10)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 11)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 12)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 13)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 14)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 15)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Laptop Gaming</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container-banner" style="display: block;">
                    <img src="{{ asset('images/sis-mua-som-desk-1200x200-1.png') }}" alt="">
                </div>
                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">

                            @foreach ($products as $product)
                                @if ($product->id === 16)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 17)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 18)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 19)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 20)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 21)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 22)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>


                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 23)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 24)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}"
                                        method="GET">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <!-- Bạn có thể thay đổi số lượng ở đây -->
                                        <button type="submit">Thêm vào giỏ hàng</button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 25)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Laptop Macbook</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container-banner" style="display: block;">
                    <img src="{{ asset('images/banner-hoc-tap-desk-1-1200x200.png') }}" alt="">
                </div>
                <ul class="container-option">
                    <li><a class="active" href="javascript:;">Nổi bật</a> </li>
                    <li><a href="javascript:;">Dưới 15 triệu</a></li>
                    <li><a href="javascript:;">HP</a></li>
                    <li><a href="javascript:;">Dell</a></li>
                    <li><a href="javascript:;">Acer</a></li>
                    <li><a href="javascript:;">Asus</a></li>
                    <li><a href="javascript:;">Lenovo</a></li>
                </ul>
                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 26)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 27)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 28)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 29)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 30)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 30)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 31)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 32)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>

                        <div class="sale-item-star">
                            @foreach ($products as $product)
                                @if ($product->id === 33)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 34)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Laptop học tập, văn phòng</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container-banner" style="display: block;">
                    <img src="{{ asset('images/banner-do-hoa-desk-1200x200-1.png') }}" alt="">
                </div>
                <ul class="container-option">
                    <li><a class="active" href="javascript:;">Nổi bật</a> </li>
                    <li><a href="javascript:;">15 - 20 triệu</a></li>
                    <li><a href="javascript:;">Card đồ họa rời</a></li>
                    <li><a href="javascript:;">Màn hình 2k</a></li>
                    <li><a href="javascript:;">Dell</a></li>
                    <li><a href="javascript:;">MacBook</a></li>
                    <li><a href="javascript:;">Asus</a></li>
                </ul>
                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 35)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 36)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 37)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 38)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 39)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 40)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 41)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 42)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 43)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 44)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Laptop đồ họa, kỹ thuật</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container-banner" style="display: block;">
                    <img src="{{ asset('images/banner-mong-nhe-desk-1200x200.png') }}" alt="">
                </div>

                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 45)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 46)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 47)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 48)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 49)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 50)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 51)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 52)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 53)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 54)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Laptop mỏng nhẹ</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container-banner" style="display: block;">
                    <img src="{{ asset('images/banner-cao-cao-desktop-1200x200.png') }}" alt="">
                </div>
                <ul class="container-option">
                    <li><a class="active" href="javascript:;">Nổi bật</a> </li>
                    <li><a href="javascript:;">Trên 30 triệu</a></li>
                    <li><a href="javascript:;">Asus</a></li>
                    <li><a href="javascript:;">HP</a></li>
                    <li><a href="javascript:;">MacBook</a></li>
                    <li><a href="javascript:;">LG</a></li>
                    <li><a href="javascript:;">Lenovo</a></li>
                </ul>
                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 55)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 56)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 57)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 58)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 59)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 60)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 61)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 62)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="sale-item">
                            @foreach ($products as $product)
                                @if ($product->id === 63)
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
                                        <span>RAM 8 GB</span>
                                        <span>SSD 256 GB</span>
                                    </div>
                                    <strong class="sale-item-price">{{ $product->price }}</strong>
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

                                    <div class="sale-item-description">
                                        {{ $product->description }}
                                    </div>

                                    <button onclick="addToCart({{ $product->id }})">Thêm vào giỏ hàng</button>
                                @endif
                            @endforeach
                            @endif
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">
                                    <span>Trả góp 0%</span>
                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/cs10.jpg') }}" alt="">
                                </div>
                                <p class="sale-price-demob">
                                    <img class="sale-icon-image" width="20" height="20"
                                        src="{{ asset('icons/icon2-50x50-50x50-1.png') }}" alt="">
                                    <span>Intel Gen 13</span>
                                </p>
                                <h3>
                                    LG gram Style 2023 i5 1340P (14Z90RS-G.AH54A5)
                                </h3>
                                <div class="sale-item-type">
                                    <span>RAM 16 GB</span>
                                    <span>SSD 512 GB</span>
                                </div>
                                <p>Chỉ bán online</p>
                                <strong class="sale-item-price">38.990.000₫</strong>
                                <p class="sale-item-gift">Quà <b>650.000₫</b></p>
                            </a>

                            <div class="sale-item-description">
                                <p>Màn hình: 14", 2K, 90Hz</p>
                                <p>CPU: i5, 1340P, 1.9GHz</p>
                                <p>Card: Intel Iris Xe</p>
                                <p>Pin: Li-ion, 72 Wh</p>
                                <p>Khối lượng: 0.999 kg</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Laptop cao cấp, sang trọng</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container-banner" style="display: block;">
                    <img src="{{ asset('images/banner-phan-mem-1200x200-1200x200.png') }}" alt="">
                </div>

                <div class="main-product-list-row">
                    <div class="list-product-sale list-product-sale-block">
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">

                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms1.png') }}" alt="">
                                </div>

                                <h3>
                                    Microsoft 365 Personal 32/64bit chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>12 tháng</span>
                                    <span>1 tài khoản</span>
                                </div>
                                <a href="" class="sale-text">1.490.000₫</a><span> -33%</span><br>
                                <strong class="sale-item-price">990.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                </p>
                                <p class="item-rating-total">54</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
                                <p>Dùng cho: MacOS, Android, Windows</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">

                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms2.png') }}" alt="">
                                </div>

                                <h3>
                                    Microsoft 365 Family 32/64bit chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>12 tháng</span>
                                    <span>6 tài khoản</span>
                                </div>
                                <a href="" class="sale-text">1.990.000₫</a><span> -25%</span>
                                <strong class="sale-item-price">1.490.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                </p>
                                <p class="item-rating-total">23</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngô ngữ: Nhiều ngôn ngữ</p>
                                <p>Dùng cho: MacOS, Android, Windows</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">

                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms3.png') }}" alt="">
                                </div>

                                <h3>
                                    Microsoft Office Home & Student 2021 chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>Vĩnh viễn</span>
                                    <span>1 thiết bị</span>
                                </div>
                                <a href="" class="sale-text">2.990.000₫</a><span> -26%</span>
                                <strong class="sale-item-price">2.190.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star-dark"></i>
                                </p>
                                <p class="item-rating-total">26</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
                                <p>Dùng cho: Windows 10, Windows 11, MacOS</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">
                                    <span>Trả góp 0%</span>
                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms4.jpg') }}" alt="">
                                </div>

                                <h3>
                                    Microsoft Windows 11 Home 64-bit chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>Vĩnh viễn</span>
                                    <span>1 thiết bị</span>
                                </div>
                                <strong class="sale-item-price">3.690.000₫</strong>
                            </a>

                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
                                <p>Dùng cho: Windows</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">

                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms5.jpg') }}" alt="">
                                </div>

                                <h3>
                                    Microsoft Windows 11 Pro 64-bit chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>Vĩnh viễn</span>
                                    <span>1 thiết bị</span>
                                </div>
                                <strong class="sale-item-price">5.490.000₫</strong>
                            </a>

                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
                                <p>Dùng cho: Windows</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">
                                    <span>Trả góp 0%</span>
                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms6.jpg') }}" alt="">
                                </div>

                                <h3>
                                    F-Secure Safe Internet Security chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>12 tháng</span>
                                    <span>1 thiết bị</span>
                                </div>
                                <strong class="sale-item-price">196.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                </p>
                                <p class="item-rating-total">7</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Tiếng Anh, Tiếng Việt</p>
                                <p>Dùng cho: MacOS, Android, Windows</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">
                                    <span>Trả góp 0%</span>
                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms7.jpeg') }}" alt="">
                                </div>

                                <h3>
                                    ESET NOD32 Antivirus chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>12 tháng</span>
                                    <span>1 thiết bị</span>
                                </div>
                                <strong class="sale-item-price">150.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star-dark"></i>
                                </p>
                                <p class="item-rating-total">12</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Tiếng Anh</p>
                                <p>Dùng cho: Windows 10</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">

                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms8.jpg') }}" alt="">
                                </div>

                                <h3>
                                    Kaspersky Internet Security chính hãng
                                </h3>
                                <div class="sale-item-type">
                                    <span>12 tháng</span>
                                    <span>1 thiết bị</span>
                                </div>
                                <strong class="sale-item-price">290.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                </p>
                                <p class="item-rating-total">11</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Tiếng Anh, Tiếng Việt</p>
                                <p>Dùng cho: MacOS, Windows</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">

                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/sale1.jpg') }}" alt="">
                                </div>

                                <h3>
                                    Gói VIP VieON 01 tháng
                                </h3>
                                <div class="sale-item-type">
                                    <span>1 tháng</span>
                                    <span>4 thiết bị</span>
                                </div>
                                <a href="" class="sale-text">79.000₫</a><span> -43%</span><br>
                                <strong class="sale-item-price">45.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                </p>
                                <p class="item-rating-total">513</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Tiếng Việt</p>
                                <p>Dùng cho: Smart TV, MacOS, Android</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                        <div class="sale-item">
                            <a href="#">
                                <div class="sale-item-label">
                                    <span>Trả góp 0%</span>
                                </div>
                                <div class="sale-item-image">
                                    <img src="{{ asset('products/ms10.jpg') }}" alt="">
                                </div>

                                <h3>
                                    Gói VIP VieON 03 tháng
                                </h3>
                                <div class="sale-item-type">
                                    <span>3 tháng</span>
                                    <span>Nhiều thiết bị</span>
                                </div>
                                <a href="" class="sale-text">165.000₫</a><span> -50%</span><br>
                                <strong class="sale-item-price">18.390.000₫</strong>
                            </a>
                            <div class="sale-item-star">
                                <p>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                    <i class="sale-item-icon-star"></i>
                                </p>
                                <p class="item-rating-total">21</p>
                            </div>
                            <div class="sale-item-description">
                                <p>Ngôn ngữ: Tiếng Việt</p>
                                <p>Dùng cho: Smart TV, MacOS, Android</p>
                            </div>
                            <a href="javascript:void(0)" class="sale-item-compare">
                                <i></i>
                                So sánh
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="see-more">
                    <span>Xem tất cả Phần Mềm</span>
                </a>
            </div>
        </div>


    </div>
    <!-- End Main -->
    <div class="list-address">
        <div class="center-address">
            <div class="store">
                <b>Có 18 trung tâm Laptop tại</b>
                <div>
                    <span>Hà Nội</span>
                </div>
            </div>
            <div class="shop">
                <p>
                    <a href="#">
                        <span class="shop-title">Trung tâm Laptop 93 Lạc Long Quân <span>Xem chỉ
                                đường</span></span>
                        <span>Số 93, đường Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt
                            Nam</span>
                    </a>
                </p>
                <p>
                    <a href="#">
                        <span class="shop-title">Trung tâm Laptop 93 Lạc Long Quân <span>Xem chỉ
                                đường</span></span>
                        <span>Số 93, đường Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt
                            Nam</span>
                    </a>
                </p>
                <p>
                    <a href="#">
                        <span class="shop-title">Trung tâm Laptop 93 Lạc Long Quân <span>Xem chỉ
                                đường</span></span>
                        <span>Số 93, đường Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt
                            Nam</span>
                    </a>
                </p>
                <p>
                    <a href="#">
                        <span class="shop-title">Trung tâm Laptop 93 Lạc Long Quân <span>Xem chỉ
                                đường</span></span>
                        <span>Số 93, đường Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt
                            Nam</span>
                    </a>
                </p>
                <p>
                    <a href="#">
                        <span class="shop-title">Trung tâm Laptop 93 Lạc Long Quân <span>Xem chỉ
                                đường</span></span>
                        <span>Số 93, đường Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt
                            Nam</span>
                    </a>
                </p>
                <p>
                    <a href="#">
                        <span class="shop-title">Trung tâm Laptop 93 Lạc Long Quân <span>Xem chỉ
                                đường</span></span>
                        <span>Số 93, đường Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Thành phố Hà Nội, Việt
                            Nam</span>
                    </a>
                </p>
            </div>
            <a href="javascript:;" class="view-more">Xem thêm trung tâm Laptop</a>
        </div>
    </div>
    <div class="special-page">
        <div>
            <div class="special-banner">
                <h4 class="special-title">
                    CHUYÊN TRANG THƯƠNG HIỆU
                </h4>
                <div class="special-slider" style="display: flex;">
                    <a href="#">
                        <img width="288" height="155"
                            src="{{ asset('images/banner-sis-it-576x310.png') }}">
                    </a>
                    <a href="#">
                        <img width="288" height="155" src="{{ asset('images/sis-gaming-576x310.png') }}">
                    </a>
                    <a href="#">
                        <img width="288" height="155" src="{{ asset('images/sis-hp-576x310.png') }}">
                    </a>
                    <a href="#">
                        <img width="288" height="155" src="{{ asset('images/sis-acer-576x310.png') }}">
                    </a>
                </div>
            </div>
            <div class="orther-page">
                <h3>CÁC SẢN PHẨM CÔNG NGHỆ KHÁC</h3>
                <div>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/man-hinh.png') }}" class="lazy">
                        <span>Màn hình</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/may-in.png') }}" class="lazy">
                        <span>Máy in</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/chuot.png') }}" class="lazy">
                        <span>Chuột</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/phan-mem.png') }}" class="lazy">
                        <span>Phần mềm</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/usb.png') }}" class="lazy">
                        <span>USB</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/ban-phim.png') }}" class="lazy">
                        <span>Bàn phím</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/sac-cap.png') }}" class="lazy">
                        <span>Sạc, cáp</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/o-cung.png') }}" class="lazy">
                        <span>Ổ cứng</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/loa.png') }}" class="lazy">
                        <span>Loa</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('iconlaptop/tai-nghe.png') }}" class="lazy">
                        <span>Tai nghe</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div style="padding: 15px 0 5px; display: flex;">
            <div class="col">
                <ul class="col-list-menu">
                    <li>Tích điểm Quà tặng VIP</li>
                    <li><a href="#">Lịch sử mua hàng</a></li>
                    <li><a href="#">Tìm hiểu về mua trả góp</a></li>
                    <li><a href="#">Chính sách bảo hành</a></li>
                    <li><a href="javascript:void(0)" class="has-arrow">Xem thêm</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="col-list-menu">
                    <li>Giới thiệu công ty (MWG.vn)</li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Gửi góp ý, khiếu nại</a></li>
                    <li><a href="#">Tìm siêu thị (3.378 shop)</a></li>
                    <li><a href="#">Xem bản mobile</a></li>
                </ul>
            </div>
            <div class="col">
                <div class="col-list-contact">
                    <p class="contact-title">
                        <strong>Tổng đài hỗ trợ</strong>
                        (Miễn phí gọi)

                    </p>
                    <p class="contact-content">
                        <span>Gọi mua:</span> <a>1800.1060</a>
                        (7:30 - 22:00)
                    </p>
                    <p class="contact-content">
                        <span>Khiếu nại:</span> <a>1800.1062</a>
                        (8:00 - 21:30)
                    </p>
                    <p class="contact-content">
                        <span>Bảo hành:</span> <a>1800.1064</a>
                        (8:00 - 21:00)
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="social">
                    <a href="#" class="link-fb">
                        <i class="sale-item-icon-facebook"></i>
                        3910.2k Fan
                    </a>
                    <a href="#" class="link-ytb">
                        <i class="sale-item-icon-youtube"></i>
                        857k Đăng ký
                    </a>

                    <a href="#" class="zalo">
                        <img class="lazy" alt="zalo" width="18" height="18" loading="lazy"
                            src="{{ asset('icons/icon_zalo.webp') }}">
                        Zalo
                    </a>
                </div>
                <div class="certify">
                    <a href="#">
                        <i class="sale-item-icon-trade"></i>
                    </a>
                    <a href="#">
                        <i class="sale-item-icon-complain"></i>
                    </a>
                    <a href="#">
                        <i class="sale-item-icon-protect"></i>
                    </a>
                    <a href="#">
                        <img class="lazy" src="{{ asset('icons/handle_cert.png') }}" width="150"
                            height="35" style="width: 80px;">
                    </a>
                </div>
                <div class="website">
                    <div class="footer-logo">
                        <p class="footer--logo-title">Website cùng tập đoàn</p>
                        <ul class="footer-website-list">
                            <li>
                                <a href="#">
                                    <i class="icont-logo-topzone"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icont-logo-dienmayxanh"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icont-logo-bachhoaxanh"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Chuỗi nhà thuốc chuẩn GPP">
                                    <i class="icont-logo-ankhang "></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Chuỗi cửa hàng mẹ và bé">
                                    <i class="icont-logo-kids "></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    title="Dịch vụ vệ sinh máy lạnh, sửa chữa điện nước, lắp đặt máy lạnh, máy giặt, tivi">
                                    <i class="icont-logo-tantam "></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Nông trại rau sạch">
                                    <i class="icont-logo-4kfarm "></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Trang tuyển dụng của tập đoàn Thế Giới Di Động">
                                    <i class="icont-logo-vieclam"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="copyright">
            <div>
                <p>
                    © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH &amp; ĐT TP.HCM cấp ngày
                    02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.<br>
                    Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ:
                    Lô
                    T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email:
                    cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Email:
                    Tot.huynhvan@thegioididong.com.
                    <a href="#">Xem chính sách sử dụng</a>

                </p>
            </div>
        </section>
    </footer>
    <!-- End footer -->

    {{-- @endsection --}}
</body>

</html>
