<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trang chu</title>
</head>


<body>

    @extends('layout')

    @section('title', 'Trang Sản Phẩm')

    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div> @include('includes.header')

    <div class="option-promo-wrapper">
        <div class="container">
            <div class="option-promo">
                <div class="list">
                    {{-- <img src="{{ route('images/Group-427319497-200x200.webp') }}" alt="" /> --}}
                    <span>Hot Sale OPPO A98 5G</span>
                </div>

                <div class="list">
                    <img src="{{ asset('images/icon-xakho-120x120-3.webp') }}" alt="" />
                    <span>Mua Sớm Rẻ Hơn</span>
                </div>

                <div class="list">
                    <img src="{{ asset('images/100x100-100x100-41.webp') }}" alt="" />
                    <span>Giảm đến 50%++</span>
                </div>

                <div class="list">
                    <img src="{{ asset('images/120x120-245x248.webp') }}" alt="" />
                    <span>Cuối Tuần Giảm Sốc</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotdear-wrapper">
        <div class="container">
            <div class="hotdear">
                <div class="dear-banner">
                    <img src="{{ asset('images/Deal-ngon-1200x120-2.webp') }}" alt="" />
                </div>

                <div class="list-owl">

                    @foreach ($products as $product)
                        @php
                            $formattedProductPrice = number_format($product->price, 0, ',', '.');
                        @endphp
                        @if ($product->id === 66)
                            <div class="owl">
                                <div class="items-label">
                                    <span>trả góp 0%</span>
                                </div>
                                <div class="owl-img">
                                    {{-- <img src="{{ asset('images/oppo-a98-5g-xanh-thumb-1-600x600.webp" alt="" /> --}}
                                    <img src="{{ $product->thumnail }}" alt="">
                                </div>
                                <div class="reusult-label">
                                    <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                    <span>Giá rẻ quá</span>
                                </div>
                                <h3 class="color-333">{{ $product->title }}</h3>

                                <div class="price-product">
                                    <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                        VNĐ</strong>

                                    <span class="price-sale">{{ $product->discount }}</span>
                                </div>

                                <div class="rate-owl">
                                    <div class="rate">
                                        <span>4.2</span>
                                        <i class="bx bxs-star icon-style"></i>
                                    </div>
                                    <div class="value-owl">
                                        <span>(156)</span>
                                    </div>
                                </div>

                                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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

                @foreach ($products as $product)
                    @php
                        $formattedProductPrice = number_format($product->price, 0, ',', '.');
                    @endphp
                    @if ($product->id === 67)
                        <div class="owl">


                            <div class="items-label">
                                <span>trả góp 0%</span>
                            </div>
                            <div class="owl-img">
                                <img src="{{ $product->thumnail }}" alt="">

                            </div>
                            <div class="reusult-label">
                                <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                <span>Giá rẻ quá</span>
                            </div>
                            <h3 class="color-333">{{ $product->title }}</h3>

                            <div class="price-product">
                                <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                    VNĐ</strong>

                                <span class="price-sale">-{{ $product->discount }}%</span>
                            </div>

                            <div class="rate-owl">
                                <div class="rate">
                                    <span>4.2</span>
                                    <i class="bx bxs-star icon-style"></i>
                                </div>
                                <div class="value-owl">
                                    <span>(156)</span>
                                </div>
                            </div>
                            <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
            @foreach ($products as $product)
                @php
                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                @endphp
                @if ($product->id === 68)
                    <div class="owl">
                        <div class="items-label">
                            <span>trả góp 0%</span>
                        </div>
                        <div class="owl-img">
                            <img src="{{ $product->thumnail }}" alt="">

                        </div>
                        <div class="reusult-label">
                            <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                            <span>Giá rẻ quá</span>
                        </div>
                        <h3 class="color-333">{{ $product->title }}</h3>

                        <div class="price-product">
                            <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                VNĐ</strong>

                            <span class="price-sale">-{{ $product->discount }}%</span>
                        </div>

                        <div class="rate-owl">
                            <div class="rate">
                                <span>4.0</span>
                                <i class="bx bxs-star icon-style"></i>
                            </div>
                            <div class="value-owl">
                                <span>(71)</span>
                            </div>
                        </div>
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
        @foreach ($products as $product)
            @php
                $formattedProductPrice = number_format($product->price, 0, ',', '.');
            @endphp
            @if ($product->id === 69)
                <div class="owl">
                    <div class="items-label">
                        <span>trả góp 0%</span>
                    </div>
                    <div class="owl-img">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <div class="reusult-label">
                        <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                        <span>Giá rẻ quá</span>
                    </div>
                    <h3 class="color-333">{{ $product->title }}</h3>

                    <div class="price-product">
                        <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                            VNĐ</strong>

                        <span class="price-sale">-{{ $product->discount }}%</span>
                    </div>

                    <div class="rate-owl">
                        <div class="rate">
                            <span>4.4</span>
                            <i class="bx bxs-star icon-style"></i>
                        </div>
                        <div class="value-owl">
                            <span>(76)</span>
                        </div>
                    </div>
                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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

    <button class="btn-nav-owl">
        <span>Xem tất cả</span>
    </button>
    </div>
    </div>
    </div>

    <div class="laptop-producr-wrapper">
        <div class="container">
            <div class="laptop-produce">
                <div class="dear-banner">
                    <img src="{{ asset('images/Group-232967-1200x120.webp') }}" alt="" />
                </div>

                <div class="list-owl">
                    @foreach ($products as $product)
                        @php
                            $formattedProductPrice = number_format($product->price, 0, ',', '.');
                        @endphp
                        @if ($product->id === 70)
                            <div class="owl">
                                <div class="items-label">
                                    <span>trả góp 0%</span>
                                </div>
                                <div class="owl-img">
                                    <img src="{{ $product->thumnail }}" alt="">

                                </div>
                                <div class="reusult-label">
                                    <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                    <span>Giá rẻ quá</span>
                                </div>
                                <h3 class="color-333">{{ $product->title }}</h3>

                                <div class="price-product">
                                    <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                        VNĐ</strong>

                                    <span class="price-sale">-{{ $product->discount }}%</span>
                                </div>
                                <div class="rate-owl">
                                    <div class="rate">
                                        <span>4.2</span>
                                        <i class="bx bxs-star icon-style"></i>
                                    </div>
                                    <div class="value-owl">
                                        <span>(156)</span>
                                    </div>
                                </div>
                                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
                <div class="owl pad-bottom-64px">
                    @foreach ($products as $product)
                        @php
                            $formattedProductPrice = number_format($product->price, 0, ',', '.');
                        @endphp
                        @if ($product->id === 71)
                            <div class="items-label">
                                <span>trả góp 0%</span>
                            </div>
                            <div class="owl-img">
                                <img src="{{ $product->thumnail }}" alt="">

                            </div>
                            <div class="reusult-label">
                                <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                <span>Giá rẻ quá</span>
                            </div>
                            <h3 class="color-333">{{ $product->title }}</h3>

                            <div class="price-product">
                                <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                    VNĐ</strong>

                                <span class="price-sale">-{{ $product->discount }}%</span>
                            </div>
                            <div class="rate-owl">
                                <div class="rate">
                                    <span>4.2</span>
                                    <i class="bx bxs-star icon-style"></i>
                                </div>
                                <div class="value-owl">
                                    <span>(282)</span>
                                </div>
                            </div>
                            <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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

                @foreach ($products as $product)
                    @php
                        $formattedProductPrice = number_format($product->price, 0, ',', '.');
                    @endphp
                    @if ($product->id === 72)
                        <div class="owl">
                            <div class="items-label">
                                <span>trả góp 0%</span>
                            </div>
                            <div class="owl-img">
                                <img src="{{ $product->thumnail }}" alt="">

                            </div>
                            <div class="reusult-label">
                                <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                <span>Giá rẻ quá</span>
                            </div>
                            <h3 class="color-333">{{ $product->title }}</h3>

                            <div class="price-product">
                                <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                    VNĐ</strong>

                                <span class="price-sale">-{{ $product->discount }}%</span>
                            </div>
                            <div class="rate-owl">
                                <div class="rate">
                                    <span>4.5</span>
                                    <i class="bx bxs-star icon-style"></i>
                                </div>
                                <div class="value-owl">
                                    <span>(179)</span>
                                </div>
                            </div>
                            <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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

            @foreach ($products as $product)
                @php
                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                @endphp
                @if ($product->id === 73)
                    <div class="owl">
                        <div class="items-label">
                            <span>trả góp 0%</span>
                        </div>
                        <div class="owl-img">
                            <img src="{{ $product->thumnail }}" alt="">

                        </div>
                        <div class="reusult-label">
                            <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                            <span>Giá rẻ quá</span>
                        </div>
                        <h3 class="color-333">{{ $product->title }}</h3>

                        <div class="price-product">
                            <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                VNĐ</strong>

                            <span class="price-sale">-{{ $product->discount }}%</span>
                        </div>
                        <div class="rate-owl">
                            <div class="rate">
                                <span>4.4</span>
                                <i class="bx bxs-star icon-style"></i>
                            </div>
                            <div class="value-owl">
                                <span>(145)</span>
                            </div>
                        </div>
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
    <button class="btn-nav-owl">
        <span>Xem tất cả</span>
    </button>
    </div>
    </div>
    </div>

    <div class="smartwatch-produce-wrapper">
        <div class="container">
            <div class="smarwatch-product">
                <p class="smw-title">smartwatch giá rẻ quá</p>

                <div class="sm-banner-sl">
                    <div class="banner-sm">
                        <div class="img-banner">
                            <img src="{{ asset('images/760-x-4000.5x-380x200.webp') }}" alt="" />
                        </div>
                    </div>

                    <div class="banner-sm">
                        <div class="img-banner">
                            <img src="{{ asset('images/Desk-30.5x-380x200.webp') }}" alt="" />
                        </div>
                    </div>

                    <div class="banner-sm">
                        <div class="img-banner">
                            <img src="{{ asset('images/760-x-4000.5x-380x200.webp') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="list-owl">
                    @foreach ($products as $product)
                        @php
                            $formattedProductPrice = number_format($product->price, 0, ',', '.');
                        @endphp
                        @if ($product->id === 74)
                            <div class="owl">
                                <div class="items-label">
                                    <span>trả góp 0%</span>
                                </div>
                                <div class="owl-img">
                                    <img src="{{ $product->thumnail }}" alt="">

                                </div>
                                <div class="reusult-label">
                                    <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                    <span>Giá rẻ quá</span>
                                </div>
                                <h3 class="color-333">{{ $product->title }}</h3>

                                <div class="price-product">
                                    <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                        VNĐ</strong>

                                    <span class="price-sale">-{{ $product->discount }}%</span>
                                </div>

                                <div class="rate-owl">
                                    <div class="rate">
                                        <span>4.2</span>
                                        <i class="bx bxs-star icon-style"></i>
                                    </div>
                                    <div class="value-owl">
                                        <span>(156)</span>
                                    </div>
                                </div>
                                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
                @foreach ($products as $product)
                    @php
                        $formattedProductPrice = number_format($product->price, 0, ',', '.');
                    @endphp
                    @if ($product->id === 75)
                        <div class="owl">
                            <div class="items-label">
                                <span>trả góp 0%</span>
                            </div>
                            <div class="owl-img">
                                <img src="{{ $product->thumnail }}" alt="">

                            </div>
                            <div class="reusult-label">
                                <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                                <span>Giá rẻ quá</span>
                            </div>
                            <h3 class="color-333">{{ $product->title }}</h3>

                            <div class="price-product">
                                <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                    VNĐ</strong>

                                <span class="price-sale">-{{ $product->discount }}%</span>
                            </div>

                            <div class="rate-owl">
                                <div class="rate">
                                    <span>4.2</span>
                                    <i class="bx bxs-star icon-style"></i>
                                </div>
                                <div class="value-owl">
                                    <span>(156)</span>
                                </div>
                            </div>
                            <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
            @foreach ($products as $product)
                @php
                    $formattedProductPrice = number_format($product->price, 0, ',', '.');
                @endphp
                @if ($product->id === 76)
                    <div class="owl">
                        <div class="items-label">
                            <span>trả góp 0%</span>
                        </div>
                        <div class="owl-img">
                            <img src="{{ $product->thumnail }}" alt="">

                        </div>
                        <div class="reusult-label">
                            <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                            <span>Giá rẻ quá</span>
                        </div>
                        <h3 class="color-333">{{ $product->title }}</h3>

                        <div class="price-product">
                            <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                                VNĐ</strong>

                            <span class="price-sale">-{{ $product->discount }}%</span>
                        </div>

                        <div class="rate-owl">
                            <div class="rate">
                                <span>4.2</span>
                                <i class="bx bxs-star icon-style"></i>
                            </div>
                            <div class="value-owl">
                                <span>(156)</span>
                            </div>
                        </div>
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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
        @foreach ($products as $product)
            @php
                $formattedProductPrice = number_format($product->price, 0, ',', '.');
            @endphp
            @if ($product->id === 76)
                <div class="owl">
                    <div class="items-label">
                        <span>trả góp 0%</span>
                    </div>
                    <div class="owl-img">
                        <img src="{{ $product->thumnail }}" alt="">

                    </div>
                    <div class="reusult-label">
                        <img src="{{ asset('images/icon-50x50-12.webp') }}" alt="" />
                        <span>Giá rẻ quá</span>
                    </div>
                    <h3 class="color-333">{{ $product->title }}</h3>

                    <div class="price-product">
                        <strong>Giá: <span class="primary-price">{{ $formattedProductPrice }}</span>
                            VNĐ</strong>

                        <span class="price-sale">-{{ $product->discount }}%</span>
                    </div>

                    <div class="rate-owl">
                        <div class="rate">
                            <span>4.2</span>
                            <i class="bx bxs-star icon-style"></i>
                        </div>
                        <div class="value-owl">
                            <span>(156)</span>
                        </div>
                    </div>
                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="GET">
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

    <button class="btn-nav-owl">
        <span>Xem tất cả</span>
    </button>
    </div>
    </div>
    </div>

    <div class="trend-mark-wrapper">
        <div class="container">
            <div class="mark-trend">
                <strong class="name-box">Xu hương mua sắm</strong>

                <ul>
                    <li>
                        <img src="{{ asset('images/Des-280x235.webp') }}" alt="" />
                        <span>Galaxy S22 Ultra GIÁ SỐC</span>
                        <strong>Giá chỉ 17.990.000đ</strong>
                    </li>
                    <li>
                        <img src="{{ asset('images/xh-acer-gaming-desk-280x235-1.webp') }}" alt="" />
                        <span>Galaxy S22 Ultra GIÁ SỐC</span>
                        <strong>Giá chỉ 17.990.000đ</strong>
                    </li>
                    <li>
                        <img src="{{ asset('images/Camera-Desk-280x235.webp') }}" alt="" />
                        <span>Galaxy S22 Ultra GIÁ SỐC</span>
                        <strong>Giá chỉ 690.000đ</strong>
                    </li>
                    <li>
                        <img src="{{ asset('images/Frame-47573-280x235.webp') }}" alt="" />
                        <span>Galaxy S22 Ultra GIÁ SỐC</span>
                        <strong>Giá chỉ 890.000đ</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="footer-wrapper">
        <div class="container">
            <div class="footer">
                <div class="footer-col">
                    <ul class="flist-menu">
                        <li>
                            <a href="">tích điểm quà tặng vip</a>
                        </li>
                        <li>
                            <a href="">lịch sử mua hàng</a>
                        </li>
                        <li>
                            <a href=""> tìm hiểu về mua trả góp</a>
                        </li>
                        <li>
                            <a href="">chính sách bảo hành</a>
                        </li>
                        <li>
                            <a class="arrow">xem thêm</a>
                        </li>
                        <!--  -->
                        <li class="hidden">
                            <a href="">giao hàng và thanh toán</a>
                        </li>
                        <li class="hidden">
                            <a href="">hướng dẫn mua online</a>
                        </li>
                        <li class="hidden">
                            <a href=""> bán hàng doanh nghiệp </a>
                        </li>
                        <li class="hidden">
                            <a href=""> phiếu mua hàng </a>
                        </li>
                        <li class="hidden">
                            <a href=""> in hóa đơn điện tử</a>
                        </li>
                        <li class="hidden">
                            <a href=""> quy chế hoạt động</a>
                        </li>
                        <li class="hidden">
                            <a href=""> nội quy cửa hàng</a>
                        </li>
                        <li class="hidden">
                            <a href=""> chất lượng phục vụ</a>
                        </li>
                        <li class="hidden">
                            <a href=""> cảnh báo giả mạo</a>
                        </li>
                        <li class="hidden">
                            <a href=""> chính sách khui hộp sản phẩm apple</a>
                        </li>
                        <li class="hidden visible">
                            <a href=""></a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="footer-col"></div>
                                                                                                                                                                                                                                                                                            <div class="footer-col"></div>
                                                                                                                                                                                                                                                                                            <div class="footer-col"></div> -->
                <div class="footer-col">
                    <ul class="flist-menu">
                        <li><a href="">Giới thiệu công ty (MWG.vn)</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Gửi góp ý, khiếu nại</a></li>
                        <li><a href="">Tìm siêu thị (3.372 shop)</a></li>
                        <li><a href="">Xem bản mobile</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <div class="f-listtel">
                        <p class="f-listtel-title">
                            <strong>Tổng đài hỗ trợ</strong>

                            (Miễn phí gọi)
                        </p>
                        <p class="f-listtel-content">
                            <span>Gọi mua:</span>
                            <a href="">1800.1060</a>

                            (7:30 - 22:00)
                        </p>
                        <p class="f-listtel-content">
                            <span>Khiếu nại:</span>
                            <a href="">1800.1062</a>

                            (8:00 - 21:30)
                        </p>

                        <p class="f-listtel-content">
                            <span>Bảo hành:</span>
                            <a href="">1800.1064</a>

                            (8:00 - 21:00)
                        </p>
                    </div>
                </div>
                <div class="footer-col">
                    <div class="f-social">
                        <a href="" class="link-fb">
                            <i class="bx bxl-facebook-circle"></i>

                            3909.5k Fan
                        </a>

                        <a href="" class="link-yt">
                            <i class="bx bxl-youtube"></i>

                            858k Đăng ký
                        </a>
                        <a href="" class="link-zalo">
                            <i class="bx bx-message-minus"></i>

                            Zalo TGDĐ
                        </a>
                    </div>

                    <div class="f-website">
                        <div class="footer-logo">
                            <p class="footer__logo-hd">Website cùng tập đoàn</p>
                            <ul class="footer__logo-list">
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('images/topzone.png') }}" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <section>
            <p>
                © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH
                & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin
                và Truyền Thông cấp ngày 04/06/2020.
                <br />

                Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ
                liên hệ và gửi chứng từ: Lô T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ
                Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email:
                cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt.
                Email: Tot.huynhvan@thegioididong.com.
                <a href="#">Xem chính sách sử dụng</a>
            </p>
        </section>
    </div>
    <script>
        // Lấy phần tử nút "xem thêm" và danh sách các phần tử ẩn
        var viewMoreButton = document.querySelector(".arrow");
        var hiddenItems = document.querySelectorAll(".hidden");

        // Xử lý sự kiện khi nhấp vào nút "xem thêm"
        viewMoreButton.addEventListener("click", function() {
            // Xóa lớp "hidden" và thêm lớp "visible" cho danh sách các phần tử ẩn
            hiddenItems.forEach(function(item) {
                item.classList.remove("hidden");
                item.classList.add("visible");
            });

            // Ẩn nút "xem thêm"
            viewMoreButton.style.display = "none";
        });
    </script>


</body>

</html>
